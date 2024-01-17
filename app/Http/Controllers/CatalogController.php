<?php

namespace App\Http\Controllers;

use App\Models\Peer;
use App\Services\ChannelCard;
use App\Services\Data;
use Exception;
use Illuminate\Contracts\View\View;
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
        $many = 3*4; # number of channels in card

        $popular_channels = ChannelCard::prepare_for_card(
            $model->popular_channels($many),
            to_split: 4
        );
        $popular_title = 'popular';

/*     # categories
        $db_data_categ = $model->popular_categories( how_many: 8*4);
        foreach ($db_data_categ as $category_str) {
            $category_str['count'] = Data::kilo_style($category_str['count']);
            $category_str['friendly_name'] = Data::friendly_name($category_str['_id']);
        }
        $all_categories = collect($db_data_categ)->split(4);

     # popular channels in each given category
        $data_by_categ = $model->top_by_categories(
            ['blogs', 'news', 'travels', 'politics', 'economics', 'education'], $many
        );*/

        return inertia('MainPage', [
                'popular' => ['title'            => $popular_title,
                              'friendly_title'   => Data::friendly_name($popular_title),
                              'grouped_channels' => $popular_channels],
//                'categories'          => $all_categories,
//                'specific_categories' => ChannelCard::prepare_by_category($data_by_categ, to_split: 4),
            ]
        );
    }

    /**
     * Return a page for certain category.
     *
     * @param Peer $model
     * @param string $category_str
     * @return View
     */
    public function category_page(Peer $model, string $category_str): View
    {
        $db_channels = $model->top_in_category($category_str, how_many: 102);

        foreach ($db_channels as $channel) {
            $channels[] = ChannelCard::prepare_channel($channel);
        }

        return view('pages.category', [
            'main_header' => $category_str,
            'channels'    => $channels,
        ]);
    }

    /**
     * Returns page to choose a region.
     *
     * @param Peer $model
     * @return View
     * @throws Exception
     */
    public function regions_page(Peer $model): View
    {
        $regions = $model->regions();

        foreach ($regions as $region) {
            $friendly_title = Data::friendly_name($region['_id']);
            $temp_arr[] = str_replace('Республика ', '', $friendly_title);
            $region['translated'] = $friendly_title;
            $new_regions[] = $region->toArray();
        }
        array_multisort($temp_arr, SORT_ASC, SORT_STRING, $new_regions);

        return view('pages.regions', [
            'regions' => $new_regions,
        ]);
    }

    /**
     * Returns page with channels of the region.
     *
     * @param string $region
     * @param Peer $model
     * @return View
     * @throws Exception
     */
    public function one_region_page(string $region, Peer $model): View
    {
        $main_header = Data::friendly_name($region);
        $db_channels = $model->region_channels($region);

        foreach ($db_channels as $channel) {
            $channels[] = ChannelCard::prepare_channel($channel);
        }

        $by_category = Data::prepare_for_dropdown($channels);

        return view('pages.region',
            compact('main_header', 'channels', 'by_category')
        );
    }

    /**
     * Return ratings page.
     *
     * @param string|null $category
     * @param Peer $model
     * @return View
     */
    public function ratings_page(Peer $model, string|null $category=null)
    {
        if ( empty($category) ) {
            $channels = $model->popular_channels(self::RATINGS_COUNT);

        } else {
            $channels = $model->top_by_categories([$category], self::RATINGS_COUNT)[$category];
            foreach ($channels as &$channel) {
                $channel['category'] = $category;
            }
        }

        $channels = ChannelCard::prepare_for_card($channels);

        return view('pages.ratings', [
                'main_header' => 'Рейтинг Telegram-каналов',
                'channels'   => $channels,
            ]
        );
    }

}


