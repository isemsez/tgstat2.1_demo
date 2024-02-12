<?php

namespace App\Services;

use Exception;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection as SupportCollection;
use MongoDB\Model\BSONArray;
use MongoDB\Model\BSONDocument;

class PrepareData
{
    /**
     * Prepare data for categories card in main_page and category_page.
     *
     * @param EloquentCollection $db_data_categ
     * @return SupportCollection
     * @throws Exception
     */
    public static function categories_card(EloquentCollection $db_data_categ): SupportCollection
    {
        foreach ($db_data_categ as $category) {
            $category['count'] = Data::kilo_style($category['count']);
            $category['friendly_name'] = Data::friendly_name($category['_id']);
        }
        return collect($db_data_categ)->split(4);
    }

    /**
     * Prepare data for channels card on main page.
     *
     * @param EloquentCollection|array $channels
     * @param int $to_split
     * @return SupportCollection
     * @throws Exception
     */
    public static function channels_container(EloquentCollection|array $channels, int $to_split = 0): SupportCollection
    {
        foreach ($channels as $channel) {
            $output_channels[] = ChannelCard::prepare_channel($channel);
        }
        $output_channels = collect($output_channels);

        return ChannelCard::to_split($output_channels, $to_split);
    }

    /**
     * @throws Exception
     */
    public static function region_channels(EloquentCollection $db_channels): array
    {
        $channels = [];
        foreach ($db_channels as $channel) {
            $channels[] = ChannelCard::prepare_channel($channel);
        }
        return $channels;
    }

    /**
     * To hydrate dropdown menu on region_page or search_page.
     *
     * @param EloquentCollection $filtered_categories
     * @return array
     * @throws Exception
     */
    public static function dropdown_categories(EloquentCollection $filtered_categories): array
    {
        $output_dropdown_data = [];
        foreach ($filtered_categories as $category) {
            # whether for region or search pages
            if (!empty($category['count'])) { # for region page
                $tmp_str = ' [' . $category['count'] . ']';
                $slug = 'slug';
                $friendly = 'friendly';
            } else { # for search page
                $tmp_str = '';
                $slug = 'id';
                $friendly = 'text';
            }
            $output_dropdown_data[] = [
                $slug     => $category['_id'],
                $friendly => Data::friendly_name($category['_id']) . $tmp_str,
            ];
        }
        return $output_dropdown_data;
    }

    /**
     * @param array $array
     * @param string $column_name
     * @return void
     */
    public static function sort_by_column(array &$array, string $column_name): void
    {
        foreach ($array as $elem) {
            $sorting_arr[] = $elem[$column_name];
        }
        array_multisort($sorting_arr, SORT_ASC, SORT_STRING, $array);
    }

    /**
     * Convert BSONDocument and BSONArray to normal array.
     *
     * @param $result
     * @return array|string
     */
    public static function mongoResultToArray($result): array|string
    {
        if (is_object($result)) {
            if ($result instanceof BSONDocument) {
                $result = $result->getArrayCopy();
            } elseif ($result instanceof BSONArray) {
                $result = iterator_to_array($result);
            }

            if (is_array($result)) {
                foreach ($result as $key => $value) {
                    $result[$key] = self::mongoResultToArray($value);
                }
            }
        }

        return $result;
    }
}
