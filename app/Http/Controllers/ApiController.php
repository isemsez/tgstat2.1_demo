<?php

namespace App\Http\Controllers;

use App\Exceptions\DropdownSourceElementException;
use App\Http\Requests\AddChannelRequest;
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
        $page_source_element = request()->post('sourceElement');

        if ('dropdownInitial' == $page_source_element) {
            $db_dropdown = $model->categories_dropdown(null);
            $dropdown_data = PrepareData::dropdown_categories($db_dropdown);
            PrepareData::sort_by_column($dropdown_data, 'text');

            return response()->json(['status'=>'ok','data'=>$dropdown_data ]);
        }

        if ( 'searchQuery' == $page_source_element ) {
            $request = resolve(SearchRequest::class);
            [$db_channels, $total_count] = $model->search($request->validated(), how_many: Data::AMOUNT_ON_SEARCH_PAGE);
            $channels = PrepareData::channels_container($db_channels);

            return response()->json(['status' => 'ok', 'data' => [
                'channels' => $channels, 'total_count' => $total_count
            ]]);
        }

        throw new DropdownSourceElementException("Wrong page_source_element: '$page_source_element'.");
    }


    /**
     * Adds new channel..
     *
     * @throws Exception
     */
    public function add_channel(Peer $model, AddChannelRequest $request)
    {
        $main_header = 'Добавить канал';

        try {
            $model->add_channel($request->prepared_data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        return response()->json(['status'=>'ok', 'data'=>compact('main_header')]);
    }

}
