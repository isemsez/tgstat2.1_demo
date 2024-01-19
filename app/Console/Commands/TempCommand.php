<?php

namespace App\Console\Commands;

use App\Service\HtmlSoup;
use Http;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use simple_html_dom;
use Str;

class TempCommand extends Command
{
    protected $signature = 'temp';

    protected $description = 'A command for the task currently in develop.';

    public function handle(): void
    {
        $html_files = Storage::files('coinmarketcap');
        $ix=0;
        $tg_links = [];
        $total = count($html_files);
        foreach ($html_files as $html_file_path) {
            $tmp = Str::replaceFirst('coinmarketcap/','', $html_file_path);
            $slug = Str::replaceLast('.html','', $tmp);

            $tg_links[$slug] = $this->handle_coin($html_file_path);
            $this->info(round(++$ix/$total*100, 2));
        }
        file_put_contents(storage_path('repository/tg_links.json'), json_encode($tg_links), JSON_UNESCAPED_UNICODE);
    }


    public function handle_coin($html_file)
    {
        $marketcap_html = HtmlSoup::html_obj(storage_path('app/'.$html_file));
        $div_coin_links = $marketcap_html->find('div.coin-info-links', 0);

//        $twitter_link = $this->find_twitter_link($div_coin_links);
        $tg_link = $this->find_tg_link($div_coin_links);
        return $tg_link;

        $twitter_image_link = $this->find_twitter_image($twitter_link);

        $this->info(print_r($twitter_image_link, true));
    }


    public function find_twitter_link($div_coin_links)
    {
        foreach ($div_coin_links->find('span') as $span) {
            if ($span->innertext == 'Socials') {
                $div_socials = $span->parent->parent;

                foreach ($div_socials->find('a') as $link_social) {
                    $href = $link_social->href;
                    if (str_starts_with($href, 'https://twitter.com/')) {
                        return $href;
                    }   }   }   }
        return null;
    }


    public function find_tg_link($div_coin_links)
    {
        foreach ($div_coin_links->find('span') as $span) {
            if ($span->innertext == 'Socials') {
                $div_socials = $span->parent->parent;

                foreach ($div_socials->find('a') as $link_social) {
                    $href = $link_social->href;
                    if (str_starts_with($href, 'https://t.me/')) {
                        return $href;
                    }   }   }   }
        return null;
    }


    public function find_twitter_image($twitter_link)
    {
//        $twitter_link .= '/photo';
        $this->info($twitter_link);
        $twitter_html = str_get_html(Http::
        withUserAgent('Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:121.0) Gecko/20100101 Firefox/121.0')
            ->withHeaders(['Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8',
                           'Accept-Encoding' => 'gzip, deflate, br',
                           'Accept-Language' => 'ru-RU,ru;q=0.8,en-US;q=0.5,en;q=0.3',
                           'Cache-Control' => 'no-cache',
                           'Connection' => 'keep-alive',
                           'Host' => 'twitter.com',
                           'Pragma' => 'no-cache',
                           'Sec-Fetch-Dest' => 'document',
                           'Sec-Fetch-Mode' => 'navigate',
                           'Sec-Fetch-Site' => 'none',
                           'Sec-Fetch-User' => '?1',
                           'Upgrade-Insecure-Requests' => '1'])
            ->get($twitter_link)->body());
        file_put_contents(storage_path('app/twitter.html'), $twitter_html->outertext);
        return $twitter_html->find('img', 0)->src;
    }

}

