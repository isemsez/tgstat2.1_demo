<?php

namespace App\Models;

use App\Services\Data;
use App\Services\PrepareData;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use MongoDB\Laravel\Eloquent\Model;

class Peer extends Model
{
    protected $collection = 'peers';

    protected $guarded = ['*'];


    public function __construct(array $attributes = [])
    {
        $this->connection = config('database.connections.mongodb.driver');

        parent::__construct($attributes);
    }

    /**
     * @param int $how_many
     * @return EloquentCollection
     */
    public function popular_channels(int $how_many): EloquentCollection
    {
        return $this->query()
            ->where('alias', 'like', '@%')
            ->latest('subscribers')
            ->take($how_many)->get(['alias', 'name', 'subscribers', 'category']);
    }

    /**
     * Combined query for given category's top channels.
     *
     * @param int $how_many
     * @return EloquentCollection
     */
    public function popular_categories(int $how_many): EloquentCollection
    {
        return $this->raw(function ($collection) use ($how_many) {
            return $collection->aggregate([
                ['$group' => ['_id' => '$category', 'count' => ['$sum' => 1]] ],
                ['$sort' => ['count' => -1]],
                ['$limit' => $how_many],
            ]);
        });
    }

    /**
     * Return top channels in each defined category.
     *
     * @param string[] $categories_arr
     * @param int $how_many
     * @return array
     */
    public function top_by_categories(int $how_many, array $categories_arr): array
    {
        $categories_bson = $this->raw( function ($collection) use ($categories_arr, $how_many) {
            return $collection->aggregate([
                ['$match' => ['category' => ['$in' => $categories_arr] ]],
                ['$group' => [
                    '_id'         => '$category',
                    'topChannels' => ['$topN' => [
                        'output' => ['$alias', '$name', '$subscribers'],
                        'sortBy' => ['subscribers' => -1],
                        'n' => $how_many
                ]]   ]],
            ]);
        });
        # transform bsonArray  to simple array
        foreach ($categories_bson as $category_bson) {
            $category = $category_bson->_id;
            $channels_bson = $category_bson->topChannels;
            $channels = [];
            foreach ($channels_bson as $channel_bson) {
                $channel = [];
                $channel['alias'] = $channel_bson[0];
                $channel['name'] = $channel_bson[1];
                $channel['subscribers'] = $channel_bson[2];
                $channels[] = $channel;
            }
            $categories[$category] = $channels;
        }

        return $categories;
    }

    /**
     * Return top channels in the category.
     *
     * @param string $category
     * @param int $how_many
     * @return EloquentCollection
     */
    public function top_in_category(string $category, int $how_many): EloquentCollection
    {
        return $this->raw( function ($collection) use ($category, $how_many) {
            return $collection->aggregate([
                ['$match' => ['category' => ['$eq' => $category]]],
                ['$sort' => ['subscribers' => -1]],
                ['$limit' => $how_many],
                ['$project' => ['_id'=>0, 'chat_id'=>0, 'region'=>0, 'status'=>0]],
            ]);
        });
    }

    /**
     * Return the channel data.
     *
     * @param string $channel_id
     * @return Peer[]
     */
    public function one_channel_data(string $channel_id): array
    {
        return $this->whereIn('alias', ['@'.$channel_id, $channel_id])
            ->get(['alias','category','description','name','region','subscribers'])
            ->toArray();
    }

    /**
     * Returns data for page to choose a region.
     *
     * @return EloquentCollection
     */
    public function regions(): EloquentCollection
    {
        return $this->raw( function ($collection) {
            return $collection->aggregate([
                ['$match' => ['$and' => [
                    ['region' => ['$exists' => true] ],
                    ['region' => ['$nin'    => [null, ''] ]]
                ]]],
                ['$group' => [
                    '_id'   => '$region',
                    'total' => ['$sum' => 1]
                ]],
            ]);
        });
    }

    /**
     * Returns data for the page to choose a region.
     *
     * @param string $region
     * @return EloquentCollection
     */
    public function region_channels(string $region): EloquentCollection
    {
        $category = request()->post('categoryId');
        $page_offset = request()->post('page');
        $sort_by = request()->post('sort', 'subscribers');

        $query = $this->query()->where('region', $region );

        $query = $category     ? $query->where('category', $category)    : $query;
        $query = $page_offset  ? $query->skip($page_offset * Data::AMOUNT_ON_REGION_PAGE)  : $query;

        return $query->latest($sort_by)->oldest('alias')->take(Data::AMOUNT_ON_REGION_PAGE)
            ->get(['alias','category','name','description','last_post_date','subscribers']);
    }

    /**
     * Return data for dropdown menu to choose category.
     *
     * @param string|null $region
     * @return mixed
     */
    public function categories_dropdown(?string $region): EloquentCollection
    {
        $pipeline = [
            ['$match' => ['_id' => ['$exists'=>true]]],
            ['$group' => ['_id' => '$category']],
            ['$sort'  => ['count' => -1]]
        ];
        if ( $region ) {
            $pipeline[0]['$match'] = ['region' => $region];
            $pipeline[1]['$group']['count'] = ['$sum' => 1];
        }

        return $this->raw(function ($collection) use ($pipeline) {
            return $collection->aggregate($pipeline);
        });
    }

    /**
     * Return amount of peers for the region.
     *
     * @param string $region
     * @return mixed
     */
    public function region_peer_count(string $region): int
    {
        return $this->query()->where('region', $region)->count();
    }

    /**
     * Search for channels by given string.
     *
     * @param array $validated
     * @param int $how_many
     * @return array
     */
    public function search(array $validated, int $how_many): array
    {
        $query = function ($collection) use ($validated, $how_many) {
            $search_str = ['$regex' => $validated['q'], '$options' => 'i'];  # case insensitive

            $match_arr =
                ['$and' => [
                    ['$or' => [
                        ['alias' => $search_str],
                        ['name' => $search_str],
                        ['description' => $search_str]]],
                    ['category' => ['$in' => $validated['categories'] ?? null]],
                ]];
            if ( empty($validated['inAbout']) )     unset( $match_arr['$and'][0]['$or'][2] );
            if ( empty($validated['categories']))   unset( $match_arr['$and'][1] );

            return $collection->aggregate([
                ['$match' => $match_arr],
                ['$sort' => ['subscribers' => -1]],
                ['$project' => ['_id'=>0, 'chat_id'=>0, 'region'=>0, 'status'=>0]],
                ['$facet'=>[
                    'docs'=>[
//                        ['$skip'=>$pages],
                        ['$limit'=>$how_many],
                    ],
                    'total'=>[['$count'=>'count']]
                ]],
                ['$limit' => $how_many],
            ]);
        };
        $db_data = $this->raw($query)[0];
        $total_channels_found = $db_data['total'][0]['count'];

        return [
            PrepareData::mongoResultToArray($db_data['docs']),
            $total_channels_found
        ];
    }

    /**
     * Add a new channel to DB.
     *
     * @param array $data
     * @return bool
     */
    public function add_channel(array $data): bool
    {
        $exists = !!$this->query()
            ->where('alias', $data['alias'])
            ->count();

        foreach ($data as $key=>$value) {
            $this->$key = $value;
        }

        return $this->save();
    }

}
