<?php

namespace App\Console\Commands;

use App\Models\Coin;
use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Orhanerday\OpenAi\OpenAi;
use Illuminate\Console\Command;

class Coinmarketcap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cmc';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Parse coinmarketcap.com for new coins.';

    /**
     * Execute the console command.
     * @return string
     * @throws Exception
     */
    public function handle()
    {

        $this->download_and_set_coins_field();
        $this->warn($this->save_as_json_strings());
        exit();

        $new_coins = $this->check_new_and_prev_data();

        return $this->loop_new_coins($new_coins);
    }

    public array $coins_arr = [];


    /** We have new coins. Get data on each of them. (Avatar, about and translations).
     * @param array $new_coins
     * @return string
     * @throws Exception
     */
    public function loop_new_coins(array $new_coins): string
    {
        $failed_coins = [];
        $out_coins = [];
        $ix = 0;
        foreach ($new_coins as $new_coin) {
            $crypto_slug = $new_coin['slug'];
            $img_link = $this->get_avatar($crypto_slug);
            if ($img_link == 'page_not_found' or $img_link == 'not_found_in_page') {
                $this->info(++$ix . ' ' . $img_link . ' - img - ' . $crypto_slug);
                continue;
            }

            $about = $this->get_cmc_description($crypto_slug);
            if ($about == 'page_not_found' or $about == 'not_found_in_page') {
                $this->info($about . ' - about - ' . $crypto_slug);
                continue;
            }

//            $modified_en = $this->modify_with_gpt($about);
//            $about_ru = $this->gpt_translate_ru($modified_en);
//            $about_de = $this->gpt_translate_de($modified_en);
            $out_json_str = json_encode([
                'name'    => $new_coin['name'],
                'symbol'  => $new_coin['symbol'],
                'slug'    => $new_coin['slug'],
                'ava_url' => $img_link,
                'about'   => '',
//                'about' => [
//                    'en' => $modified_en,
//                    'ru' => $about_ru,
//                    'de' => $about_de,
//                ],
            ], JSON_UNESCAPED_UNICODE);
            $this->info($out_json_str);
            $out_coins[] = $out_json_str;
            Log::debug($out_json_str);
        }
        return implode("\n", $failed_coins) . "\n\n" . implode("\n", $out_coins);
    }

    /** We have previous data and we download current api data (from coinmarketcap.com) then we compare, revealing new coins.
     * @return string|array
     */
    private function check_new_and_prev_data(): string|array
    {
        $downloaded_coins = [];
        foreach ($this->coins_arr as $coin) {
            $downloaded_coins[] = implode('*', [$coin['name'], $coin['symbol'], $coin['slug']]);
        }
        Log::debug('$downloaded coins ' . count($downloaded_coins));

        $raw_content = file_get_contents(
            storage_path('repository/json_coins_coinmarketcap.txt'));
        $json_lines = explode("\n", trim($raw_content));
        $coins_prev = [];
        foreach ($json_lines as $json_line) {
            $coin = json_decode($json_line);
            $coins_prev[] = implode('*', [$coin->name, $coin->symbol, $coin->slug]);
        }
        Log::debug('$coins_prev ' . count($coins_prev));

        $extra_coins = array_diff($downloaded_coins, $coins_prev);
        Log::debug(print_r($extra_coins, true));
        if ( empty($extra_coins) ) {
            exit("No new coins.\n");
        }
        $this->info("Had " . count($coins_prev) . " coins, now got " . count($downloaded_coins) . ', $extra_coins ' . count($extra_coins));

        foreach ($extra_coins as &$coin) {
            $tmp = explode('*', $coin);
            $coin = ['name' => $tmp[0], 'symbol' => $tmp[1], 'slug' => $tmp[2]];
        }
        return $extra_coins;
    }


    /** Get the url and convert to simple_html_dom object.
     * @param string $url
     * @return object
     */
    public static function html_obj(string $url): object
    {
        include_once(base_path('vendor/simplehtmldom/simplehtmldom/simple_html_dom.php'));

        return str_get_html(Http::get($url)->body());
    }


    /** Initial saving of coins list from coinmarketcap.com. Returns result message.
     * @return string
     */
    protected function save_as_json_strings(): string
    {
        foreach ($this->coins_arr as $coin) {
            $json_strings_arr[] = json_encode($coin, JSON_UNESCAPED_UNICODE);
        }

        $date = date('Y-m-d');
        $marketcap_file_path = storage_path("repository/coins_marketcap_json_$date.txt");
        $is_success = (bool)file_put_contents(
            $marketcap_file_path,
            implode("\n", $json_strings_arr),
        );
        return $is_success ? $marketcap_file_path : 'not saved';
    }


    /** Download all api data.
     *
     * @return null|string
     */
    public function download_and_set_coins_field(): ?string
    {
        $this->info('Getting api data from coinmarketcap.com.');
        $data = $this->get_api_data($this->make_url_string() );
        $this->info('Got. $data->totalCount is ' . $data->totalCount );

        $this->coins_arr = $this->coins_arr_purify($data->cryptoCurrencyList);

        return null;
    }

    /** Get api data about all coins.
     *
     * @param string $url
     * @return object
     */
    protected function get_api_data(string $url): object
    {
        $response = Http::get($url)->body();
        return json_decode($response)->data;
    }

    /** Compile url from parameters.
     *
     * @return string
     */
    protected function make_url_string(): string
    {
        $params = [
            'sortBy' => 'rank',
            'start' => 1,
            'limit' => 9000,
            'sortType' => 'desc',
            'cryptoType' => 'all',
            'tagType' => 'all',
            'audited' => 'false',
        ];
        foreach ($params as $key => $value) {
            $query_arr[] = $key . '=' . $value;
        }
        return 'https://api.coinmarketcap.com/data-api/v3/cryptocurrency/listing?' . implode('&', $query_arr);
    }

    /** Filter only needed data. Convert to json string and save to array.
     *
     * @param array $incoming_coins
     * @return array
     */
    protected function coins_arr_purify(array $incoming_coins): array
    {
        foreach ($incoming_coins as $coin) {
            $coins_field[] = [
                'name' => $coin->name,
                'symbol' => $coin->symbol,
                'slug' => $coin->slug,
            ];
        }
        return $coins_field;
    }

    /** For given cryptocurrency get its description from coinmarketcap.com.
     * @param string $crypto_slug
     * @return string
     */
    private function get_cmc_description(string $crypto_slug): string
    {
        $url = "https://coinmarketcap.com/currencies/$crypto_slug/";
        $html_obj = self::html_obj($url);

        if (str_starts_with($html_obj->find('p', 0)->plaintext, 'Opps')) {
            return 'page_not_found';
        }

        $img_tag = $html_obj->find('div[id=section-coin-about]', 0);
        if (!empty($img_tag)) {
            $img_tag = $img_tag->find('div', 1);
            if (!empty($img_tag)) {
                $tmp = $img_tag->find('p', 0);
                $img_tag = !empty($tmp) ? $tmp : $img_tag->find('span', 0);
            }
        }
        if (!empty($img_tag)) {
            $img_tag = $img_tag->parent();
            $ix = 0;
            $start_batch_decompose = false;
            foreach ($img_tag->children as $element) {
                $ix++;
                if (($ix == 1 && str_starts_with($element->plaintext, 'What') && str_ends_with(rtrim($element->plaintext), '?') || $start_batch_decompose)) {
                    $element = null;
                    continue;
                }
                if ($element->tag == 'h' && str_ends_with(rtrim($element->plaintext), '?') || rtrim($element->plaintext) != '?') {
                    $element = null;
                    $start_batch_decompose = true;
                }
            }
            if (strlen($img_tag->plaintext) > 0) {
                return $img_tag->plaintext;
            }
        }
        return 'not_found_in_page';
    }

    /** Paraphrase the description with GPT.
     * @param string $about
     * @return string
     * @throws Exception
     */
    private function modify_with_gpt(string $about): string
    {
        $question = "I have a text which is a description of a cryptocurrency. Can you paraphrase this description? The description is below:\n" . $about;

        $open_ai = new OpenAi(config('gpt.openai_api_key'));
        $chat = $open_ai->chat([
            'model' => 'gpt-3.5-turbo',
            'messages' => [["role" => "user", "content" => $question]],
        ]);

        return json_decode($chat)->choices[0]->message->content;
    }

    /** Translate the GPT modified description to Russian with GPT.
     * @param string $modified_en
     * @return string
     * @throws Exception
     */
    private function gpt_translate_ru(string $modified_en): string
    {
        $question = "I have a text which is a description of a cryptocurrency. Can you translate it to Russian? The description is below:\n" . $modified_en;

        $open_ai = new OpenAi(config('gpt.openai_api_key'));
        $chat = $open_ai->chat([
            'model' => 'gpt-3.5-turbo',
            'messages' => [["role" => "user", "content" => $question]],
        ]);

        return json_decode($chat)->choices[0]->message->content;
    }

    /** Translate the GPT modified description to German with GPT.
     * @param string $modified_en
     * @return string
     * @throws Exception
     */
    private function gpt_translate_de(string $modified_en): string
    {
        $question = "I have a text which is a description of a cryptocurrency. Can you translate it to German? The description is below:\n" . $modified_en;

        $open_ai = new OpenAi(config('gpt.openai_api_key'));
        $chat = $open_ai->chat([
            'model' => 'gpt-3.5-turbo',
            'messages' => [["role" => "user", "content" => $question]],
        ]);

        return json_decode($chat)->choices[0]->message->content;
    }

    private function get_avatar(mixed $crypto_slug)
    {
        $url = "https://cryptorank.io/price/$crypto_slug";
        $html_obj = self::html_obj($url);

        if (str_starts_with($html_obj->find('h1', 0)->plaintext, 'The requested page was not found')) {
            return 'page_not_found';
        }

        $img_tag = $html_obj->find('img.jHIdLe', 0);
        if (empty($img_tag)) {
            Log::debug('$img_tag not_found_in_page');
            foreach ($html_obj->find('img') as $item) {
                Log::debug($item);
            }
        }

        if (!empty($img_tag)) {
            $img_link = $img_tag->src;
            if (!empty($img_link)) {
                return $img_link;
            }
        }

        return 'not_found_in_page';
    }

    /**This function was temporarily used.
     * @return bool|string
     */
    protected function save_description_to_db()
    {
        $crypto_lines = file(storage_path('final_en_ru_de.txt'));
        $crypto_lines = array_filter(
            $crypto_lines,
            function ($line) {
                return strlen(trim($line)) > 0;
            }
        );
        if (count($crypto_lines) == 0) {
            return 'Input file is empty.';
        }

        $cryptos_obj = [];
        foreach ($crypto_lines as $json_line) {
            $tmp = json_decode($json_line);
            $name = $tmp->crypto;
            $about_en = $tmp->about->en;
            $about_ru = $tmp->about->ru;
            $about_de = $tmp->about->de;
            $crypto_names_arr[] = $name;
            $cryptos_obj[$name]['en'] = $about_en;
            $cryptos_obj[$name]['ru'] = $about_ru;
            $cryptos_obj[$name]['de'] = $about_de;
        }

        $crypto_models = Coin::query()->whereIn('title_coins', $crypto_names_arr)->get();
        foreach ($crypto_models as $model) {
            $name = $model->title_coins;
            $model->update([
                'description' => [
                    'en' => $cryptos_obj[$name]['en'],
                    'ru' => $cryptos_obj[$name]['ru'],
                    'de' => $cryptos_obj[$name]['de'],
                ],
            ]);
        }

        return print_r(count($crypto_models), true);
    }

    /** To blacklist invalid slugs. (e.g. coin migrated)
     * @param array $questionable_slugs
     * @return void
     */
    private function check_and_blacklist_slugs(array $questionable_slugs): void
    {
        $blacklist = [];
        foreach ($questionable_slugs as $slug) {

            $url = "https://coinmarketcap.com/currencies/$slug/";
            $html_obj = self::html_obj($url);


            $div1 = $html_obj->find('div.djRsLj', 0);
            if (!empty($div1)) {
                $div2 = $html_obj->find('div.kAOboQ', 0);
                if (!empty($div2)) {
                    file_put_contents(
                        storage_path('repository/coinmarketcap_slugs_blacklist.txt'),
                        "\n$slug",
                        FILE_APPEND
                    );
                }
            }
        }
    }

}


