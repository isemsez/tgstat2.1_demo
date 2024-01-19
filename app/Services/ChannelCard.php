<?php

namespace App\Services;


use App\Models\Peer;
use Exception;
use Illuminate\Database\Eloquent\Collection as CollectionEloquent;
use Illuminate\Support\Collection as CollectionSupport;

class ChannelCard
{
    /**
     * @param string $alias
     * @return string
     */
    public static function ava_url_path(string $alias): string
    {
        $site_name = config('app.name');
        $locally_public_dir = "c:/OSPanel/domains/$site_name/public";
        $extensions = ['.jpg', '.svg'];

        foreach ($extensions as $ext) {
            $url_path = '/images/avatars/' . ltrim($alias, '@') . $ext;

            $locally_ava_path = $locally_public_dir . $url_path;
            if ( file_exists($locally_ava_path) ) {
                return $url_path;
            }
            # circumventing avatars dir problem (too many files, ViteJS hangs, moving necessary files from external dir)
            $external_dir_img = "c:/OSPanel/domains/localhost/avatars/" . ltrim($alias, '@') . $ext;
            if ( file_exists($external_dir_img) ) {
                rename($external_dir_img, $locally_ava_path);
                return $url_path;
            }
        }
        return '/images/avatars/exploitex.jpg'; # replacer avatar
    }

    /**
     * Process incoming raw db data for popular channels card container.
     *
     * @param CollectionEloquent|array $channels
     * @param int $to_split
     * @return CollectionSupport
     * @throws Exception
     */
    public static function prepare_for_card(CollectionEloquent|array $channels, int $to_split = 0): CollectionSupport
    {
        foreach ($channels as $channel) {
            $output_channels[] = self::prepare_channel($channel);
        }
        $output_channels = collect($output_channels);

        return static::to_split($output_channels, $to_split);
    }

    /**
     * Process raw db data for each category to fill channels card container.
     *
     * @param array $categories
     * @param int $to_split
     * @return array
     * @throws Exception
     */
    public static function prepare_by_category(array $categories, int $to_split=0): array
    {
        foreach ($categories as $key => $categ_channels) {
            $categ_channels_out = [];
            foreach ($categ_channels as $channel) {
                $categ_channels_out[] = self::prepare_channel($channel);
            }
            $categories_out[$key] = [
                'title'            => $key,
                'friendly_title'   => Data::friendly_name($key),
                'grouped_channels' => static::to_split(collect($categ_channels_out), $to_split),
            ];
        }
        return $categories_out;
    }

    /**
     * Split channels to columns in container cards.
     *
     * @param CollectionSupport $channels
     * @param int $to_split
     * @return CollectionSupport
     */
    public static function to_split(CollectionSupport $channels, int $to_split): CollectionSupport
    {
        if ( $to_split ) {
            return $channels->split($to_split);
        }
        return $channels;
    }

    /**
     * Prepare data for one channel card.
     *
     * @param Peer|array $channel
     * @return array|string[]
     * @throws Exception
     */
    public static function prepare_channel(Peer|array &$channel): array
    {
        // TODO cast to array Peer models
        if ( is_a($channel, Peer::class) ) {
            $channel = $channel->toArray();
        }
        unset($channel['_id']);

        $channel['subscribers'] = number_format($channel['subscribers'], thousands_separator: ' ');
        $channel['img'] = self::ava_url_path($channel['alias'] );
        $channel['url'] = self::channel_url($channel['alias'] );

        if ( !empty( $channel['last_post_date'] )) {
            $channel['last_post_date'] = Data::post_since_str($channel['last_post_date']);
        }
        if ( !empty( $channel['category'] )) {
            $channel['friendly_category'] = Data::friendly_name($channel['category']);
        }

        return $channel;
    }

    /**
     * Tg-channel page local-link or hyperlink.
     *
     * @param string $alias
     * @param string $local_or_hyper
     * @return CollectionSupport
     * @throws Exception
     */
    public static function channel_url(string $alias, string $local_or_hyper='local'): string
    {
        $pure_alias = ltrim($alias, '@');

        if ( 'hyper' == $local_or_hyper ) {
            $beginning = "https://t.me/";
            $middle = str_starts_with($alias, '@') ? 's/' : '+' ;
            return $beginning . $middle . $pure_alias;

        } else if ( 'local' == $local_or_hyper ) {
            return "/channel/" . $pure_alias;

        } else {
            throw new Exception('Параметр функции д.б. один из двух - "local" или "hyper".');
        }
    }
}
