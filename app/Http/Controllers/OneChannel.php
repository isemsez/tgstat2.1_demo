<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddChannelRequest;
use App\Http\Requests\SearchRequest;
use App\Models\Peer;
use App\Services\ChannelCard;
use App\Services\Data;
use Exception;
use Illuminate\Contracts\View\View;
use Inertia\Response;

class OneChannel extends Controller
{

    /**
     * Return the specified channel page (local link).
     *
     * @param Peer $model
     * @param string $channel_id
     * @return Response
     * @throws Exception
     */
    public function channel_page(Peer $model, string $channel_id): Response
    {
        $channel = ChannelCard::prepare_channel(
            $model->one_channel_data($channel_id)[0]
        );

        $is_public = str_starts_with($channel['alias'], '@');
        $channel['btn_text'] = $is_public ? $channel['alias'] : 'приватный канал';
        $channel['btn_hyperlink'] = ChannelCard::channel_url($channel['alias'], 'hyper');
        $channel['region'] = !empty($channel['region']) ? $channel['region'] : null;
        $channel['language'] = !empty($channel['language']) ? $channel['language'] : null;

        return inertia('ChannelPage', ['channel' => $channel]);
    }

    /**
     * Returns page with add new channel form.
     *
     * @throws Exception
     */
    public function add_channel_page()
    {
        $main_header = 'Добавить канал';
        $countries = Data::associative('countries');
        $languages = Data::associative('languages');
        $categories = Data::associative('categories');

        return inertia('AddChannel', compact(
            'main_header','countries', 'languages', 'categories'
        ));
    }

}


