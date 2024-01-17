<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddChannelRequest;
use App\Http\Requests\SearchRequest;
use App\Models\Peer;
use App\Services\ChannelCard;
use App\Services\Data;
use Exception;
use Illuminate\Contracts\View\View;

class OneChannel extends Controller
{

    /**
     * Return the specified channel page (local).
     *
     * @param Peer $model
     * @param string $channel_id
     * @return View
     * @throws Exception
     */
    public function channel_page(Peer $model, string $channel_id): View
    {
        $channel = $model->one_channel_data($channel_id)[0];

        $is_public = str_starts_with($channel['alias'], '@');
        $channel['btn_text'] = $is_public ? $channel['alias'] : 'приватный канал';
        $channel['btn_hyperlink'] = ChannelCard::channel_url($channel['alias'], 'hyper');
        $channel['subscribers'] = number_format($channel['subscribers'], thousands_separator: ' ');
        $channel['avatar'] = ChannelCard::ava_url_path($channel['alias']);

        return view('pages.channel', ['channel' => $channel]);
    }

    /**
     * Returns page to search a channel. Or responds to search query.
     *
     * @return View
     */
    public function search_page(): View
    {
        if ( 'GET' == request()->method() ) {
            return view('pages.search');  # just initial page
        }

        # if 'POST' – search query
        $request = resolve(SearchRequest::class);
        $model = resolve(Peer::class);

        $channels = $model->search($request->validated(), how_many: 30);

        foreach ($channels as $channel) {
            $channel['img'] = ChannelCard::ava_url_path($channel['alias']);
            $channel['subscribers'] = number_format($channel['subscribers'], thousands_separator: ' ');
            $channel['last_post_date'] = ChannelCard::post_since_str($channel['last_post_date']);
        }

        return view('pages.search', ['channels' => $channels]);
    }

    /**
     * Returns page with add new channel form.
     *
     * @throws Exception
     */
    public function add_channel()
    {
        $main_header = 'Добавить канал';

        if ( 'GET' == request()->method() ) {  # just initial page
            $countries = Data::associative('countries');
            $languages = Data::associative('languages');
            $categories = Data::associative('categories');

            return view('pages.add_channel', compact(
                'main_header','countries', 'languages', 'categories'
            ));
        }
        # if 'POST' – add channel query
        $model = resolve(Peer::class);
        $prepared_data = resolve(AddChannelRequest::class)->prepared_data;

        try {
            $model->add_channel($prepared_data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        return view('pages.add_channel', compact(
            'main_header',
        ));
    }

}


