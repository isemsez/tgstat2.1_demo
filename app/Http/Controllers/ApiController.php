<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Models\Peer;
use App\Services\Data;
use App\Services\PrepareData;
use Exception;
use Illuminate\Http\JsonResponse;

class ApiController extends Controller
{

    /**
     * Data for region page.
     *
     * @param string $region
     * @param Peer $model
     * @return JsonResponse
     * @throws Exception
     */
    public function one_region_page(string $region, Peer $model): JsonResponse
    {
        if ( 'dropdownInitial' == request()->post('sourceElement') ) {
            $db_categories = $model->categories_dropdown($region);
            $categories = PrepareData::dropdown_categories($db_categories);

            return response()->json(['status'=>'ok','data'=>['categories'=>$categories] ]);
        }

        # whether to show button (initially) and amount in "Choose category [count]"
        if ( 'btnMoreInitial' == request()->post('sourceElement') ) {
            $channels_count = $model->region_peer_count($region);
            return response()->json(['status'=>'ok','data'=>['channels_total'=>$channels_count] ]);
        }

        # fill region container with channels
        $db_channels = $model->region_channels($region);
        $channels = PrepareData::region_channels($db_channels);

        return response()->json(['status' => 'ok', 'data' => ['channels' => $channels,]]);
    }

    /**
     * @throws Exception
     */
    public function search_page(Peer $model): JsonResponse
    {
        if ('dropdownInitial' == request()->post('sourceElement')) {
            $db_dropdown = $model->categories_dropdown(null);
            $dropdown_data = PrepareData::dropdown_categories($db_dropdown);
            PrepareData::sort_by_column($dropdown_data, 'text');

            return response()->json(['status'=>'ok','data'=>$dropdown_data ]);
        }

        if ( 'searchQuery' == request()->post('sourceElement') ) {
            $request = resolve(SearchRequest::class);
            [$db_channels, $total_count] = $model->search($request->validated(), how_many: Data::AMOUNT_ON_SEARCH_PAGE);
            $channels = PrepareData::channels_container($db_channels);

            return response()->json(['status' => 'ok', 'data' => [
                'channels' => $channels, 'total_count' => $total_count
            ]]);
        }

/*


        foreach ($channels as $channel) {
            $channel['img'] = ChannelCard::ava_url_path($channel['alias']);
            $channel['subscribers'] = number_format($channel['subscribers'], thousands_separator: ' ');
            $channel['last_post_date'] = ChannelCard::post_since_str($channel['last_post_date']);
        }
*/
//        return view('pages.search', ['channels' => $channels]);
    }

}
