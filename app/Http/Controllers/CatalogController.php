<?php

namespace App\Http\Controllers;

use App\Models\Peer;
use App\Services\ChannelCard;
use App\Services\Data;
use App\Services\PrepareData;
use Exception;
use Inertia\Response;

class CatalogController extends Controller
{
    private const RATINGS_COUNT = 100;

    /**Return main page of the site.
     *
     * @param Peer $model
     * @return Response
     * @throws Exception
     */
    public function main_page(Peer $model): Response
    {
        $many = 3*4; # number of channels in channels card

        ### popular channels
        $db_channels = $model->popular_channels($many);
        $popular_channels = PrepareData::channels_container($db_channels, to_split: 4);

     ### categories
        $db_categories = $model->popular_categories( 12*4 );
        $all_categories = PrepareData::categories_card($db_categories);

     ### popular channels in each given category
        $db_by_categ = $model->top_by_categories($many,
            ['blogs', 'news', 'travels', 'politics', 'economics', 'education']);
        $top_by_category = ChannelCard::prepare_by_category($db_by_categ, to_split: 4);


        return inertia('MainPage', [
                'popular_channels'    => $popular_channels,
                'categories'          => $all_categories,
                'top_by_category' => $top_by_category,
            ]
        );
    }

    /**
     * Return top channels page for certain category.
     *
     * @param Peer $model
     * @param string $category_str
     * @return Response
     * @throws Exception
     */
    public function category_page(Peer $model, string $category_str): Response
    {
        $db_channels = $model->top_in_category($category_str, how_many: 102);

        foreach ($db_channels as $channel) {
            $channels[] = ChannelCard::prepare_channel($channel);
        }

        ### categories
        $db_categories = $model->popular_categories( 12*4 );
        $all_categories = PrepareData::categories_card($db_categories);

        return inertia('CategoryPage', ['data' => [
            'slug'          => $category_str,
            'friendly_title' => Data::friendly_name($category_str),
            'channels'       => $channels,
            'categories'     => $all_categories,
        ]]);
    }

    /**
     * Returns page to choose a region.
     *
     * @param Peer $model
     * @return Response
     * @throws Exception
     */
    public function regions_page(Peer $model): Response
    {
        $db_regions = $model->regions();

        foreach ($db_regions as $region) {
            $friendly_name = Data::friendly_name($region['_id']);
            $sorting_arr[] = str_replace('Республика ', '', $friendly_name);
            $region['friendly_title'] = $friendly_name;
            $regions[] = $region->toArray();
        }
        array_multisort($sorting_arr, SORT_ASC, SORT_STRING, $regions);

        return inertia('RegionsPage', [
            'regions' => $regions,
        ]);
    }

    /**
     * Returns page with channels of the region (also filtered by category).
     *
     * @param string $region
     * @param Peer $model
     * @return Response
     * @throws Exception
     */
    public function one_region_page(string $region, Peer $model): Response
    {
        $db_channels = $model->region_channels($region );
        $channels = PrepareData::region_channels($db_channels);

        return inertia('RegionPage', [
            'region'              => ['slug'           => $region,
                                      'friendly_title' => Data::friendly_name($region),
                                      'channels'       => $channels,],
        ]);
    }

    /**
     * Returns page to search a channel.
     *
     * @return Response
     */
    public function search_page(): Response
    {
        return inertia('SearchPage', ['status'=>'ok']);
    }

    /**
     * Return ratings page.
     *
     * @param Peer $model
     * @param string|null $category
     * @return Response
     * @throws Exception
     */
    public function ratings_page(Peer $model, string|null $category=null): Response
    {
        if ( empty($category) ) {
            $channels = $model->popular_channels(self::RATINGS_COUNT);

        } else {
            $channels = $model->top_by_categories(self::RATINGS_COUNT, [$category] )[$category];
            foreach ($channels as &$channel) {
                $channel['category'] = $category;
            }
        }

        $channels = ChannelCard::prepare_for_card($channels);

        return inertia('pages.ratings', [
                'main_header' => 'Рейтинг Telegram-каналов',
                'channels'   => $channels,
            ]
        );
    }

}
