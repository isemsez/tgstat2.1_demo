<?php

namespace App\Services;


use App\Models\Peer;
use Exception;
use Illuminate\Database\Eloquent\Collection as CollectionEloquent;
use Illuminate\Support\Collection as CollectionSupport;

class ChannelCard
{
    /**
     * @var string[]
     */
    private static array $time_arr_keys = ['y' =>'г.', 'm' =>'мес.', 'd' =>'дн.', 'h' =>'ч.', 'i' =>'мин.', 's' =>'с.'];


    /**
     * @param string $alias
     * @return string
     */
    public static function ava_url_path(string $alias): string
    {
        $local_public_dir = 'c:/OSPanel/domains/tginfo/public';
        $extensions = ['.jpg', '.svg', '.png'];
        $ava_path = '/images/avatars/exploitex.jpg';
        foreach ($extensions as $ext) {
            $url_path = '/images/avatars/' . ltrim($alias, '@') . $ext;
            if ( file_exists($local_public_dir . $url_path) ) {
                $ava_path = $url_path;
                break;
            }
        }
        return $ava_path;
    }

    /**
     * Process raw db data for popular channels card container.
     *
     * @param CollectionEloquent|array $channels
     * @param int $to_split
     * @return CollectionSupport
     */
    public static function prepare_for_card(CollectionEloquent|array $channels, int $to_split = 0): CollectionSupport
    {
        foreach ($channels as $channel) {
            $output_channels[] = static::prepare_channel($channel);
        }
        $output_channels = collect($output_channels);

        return static::to_split($output_channels, $to_split);
    }

    /**
     * Process raw db data for each category card container.
     *
     * @param array $categories
     * @param int $to_split
     * @return array
     */
    public static function prepare_by_category(array $categories, int $to_split=0): array
    {
        foreach ($categories as &$category) {
            foreach ($category as &$channel) {
                $channel = ChannelCard::prepare_channel($channel);
            }
            $category = static::to_split(collect($category), $to_split);
        }
        return $categories;
    }

    /**
     * Split channels to columns in container cards.
     *
     * @param CollectionSupport $channels
     * @param int $to_split
     * @return CollectionSupport
     */
    private static function to_split(CollectionSupport $channels, int $to_split): CollectionSupport
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
     */
    public static function prepare_channel(Peer|array &$channel): array
    {
        if ( is_a($channel, Peer::class) ) {
            $channel = $channel->toArray();
        }
        $channel['subscribers'] = number_format($channel['subscribers'], thousands_separator: ' ');
        $channel['img'] = ChannelCard::ava_url_path($channel['alias'] );

        if ( !empty( $channel['last_post_date'] )) {
            $channel['last_post_date'] = self::post_since_str($channel['last_post_date']);
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

    /**
     *How much time ago the last post was published.
     *
     * @param $last_post_date
     * @return string
     */
    public static function post_since_str($last_post_date): string
    {
        $time_since_post = date_diff(
            date_create(), # ->sub(new \DateInterval('P60DT16H30M')),
            date_create($last_post_date)
        );
        $non_empty_count = 0;
        foreach (static::$time_arr_keys as $time_arr_key => $time_description) {
            $time_field_value = $time_since_post->$time_arr_key;

            if ($time_field_value == 0) {
                if ($non_empty_count == 1) {
                    break;     # if second empty after first non-empty
                } else {
                    continue;  # skip leading zeros (empty)
                }
            }
            $ago_str = self::prettify_ago_str($time_field_value . ' ' . $time_description);

            $non_empty_count++;
            if ($non_empty_count == 2 or $time_field_value > 1) {
                break;   # stop before excessive information
            }
        }
        return $ago_str;
    }

    /**
     *Make simpler when pair of data.
     *
     * @param string $ago_str
     * @return string
     */
    private static function prettify_ago_str(string $ago_str): string
    {
        if (substr_count($ago_str, '.') == 2) {
            $tmp = explode(
                '.',
                str_replace(' ', '', $ago_str),
                2
            );
            $tmp[1] = str_replace(['мес', 'дн', 'мин', 'сек'], ['м', 'д', 'м', 'с'], $tmp[1]);
            $ago_str = implode('. ', $tmp);
        }
        return $ago_str;
    }

}
