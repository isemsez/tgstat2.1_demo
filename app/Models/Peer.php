<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use MongoDB\Laravel\Eloquent\Model;

class Peer extends Model
{
    protected $guarded = ['*'];


    public function __construct(array $attributes = [])
    {
        $this->connection = config('database.connections.mongodb.driver');

        parent::__construct($attributes);
    }

    /**
     * @param int $how_many
     * @return Collection
     */
    public function popular_channels(int $how_many): Collection
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
     * @return Collection
     */
    public function popular_categories(int $how_many): Collection
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
    public function top_by_categories(array $categories_arr, int $how_many): array
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
     * @return Collection
     */
    public function top_in_category(string $category, int $how_many): Collection
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
     * Return the specified channel data.
     *
     * @param string $channel_id
     * @return Peer[]
     */
    public function one_channel_data(string $channel_id)
    {
        return $this->whereIn('alias', ['@'.$channel_id, $channel_id])
            ->get(['alias','category','description','name','region','subscribers']);
    }

    /**
     * Returns data for page to choose a region.
     *
     * @return Collection
     */
    public function regions(): Collection
    {
        return $this->raw( function ($collection) {
            return $collection->aggregate([
                ['$match' => ['region' => ['$regex'=>'[a-z]']]],
                ['$group' => [
                    '_id'   => '$region',
                    'total' => ['$sum' => 1]]
                ],
            ]);
        });
    }

    /**
     * Returns data for page to choose a region.
     *
     * @param string $region
     * @return Collection
     */
    public function region_channels(string $region): Collection
    {
        return $this->query()
            ->where('region', $region)
            ->latest('subscribers')->take(102)
            ->get(['alias','category','name','description','last_post_date','subscribers']);
    }

    /**
     * Search for channel by given string.
     *
     * @param array $validated
     * @param int $how_many
     * @return Collection
     */
    public function search(array $validated, int $how_many): Collection
    {
        $query = function ($collection) use ($validated, $how_many) {
            $search_str = ['$regex'   => $validated['q'],
                           '$options' => 'i'];

            $str_search_arr = [['alias' => $search_str], ['name' => $search_str]];
            if ( !empty($validated['inAbout'])) {
                ($str_search_arr[] = ['description' => $search_str]);
            }

            $match_and_arr = [['$or' => $str_search_arr]];
            if ( !empty( $validated['categories'])) {
                ($match_and_arr[] = ['category' => ['$in' => $validated['categories']]]);
            }

            return $collection->aggregate([
                ['$match' => ['$and' => $match_and_arr]],
                ['$sort' => ['subscribers' => -1]],
                ['$limit' => $how_many],
            ]);
        };

        return $this->raw($query);
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
