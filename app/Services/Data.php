<?php

namespace App\Services;

use App\Http\Middleware\TrustHosts;
use Error;
use ErrorException;
use Exception;

class Data
{
    /**
     * @var string[]
     */
    private static array $time_arr_keys = ['y' =>'г.', 'm' =>'мес.', 'd' =>'дн.', 'h' =>'ч.', 'i' =>'мин.', 's' =>'с.'];


    public const SLUGS = [
        'categories' => ['blogs', "Блоги", 'news', "Новости и СМИ", 'entertainment', "Юмор и развлечения", 'tech', "Технологии", 'economics', "Экономика", 'business', "Бизнес и стартапы", 'crypto', "Криптовалюты", 'travels', "Путешествия", 'marketing', "Маркетинг, PR, реклама", 'psychology', "Психология", 'design', "Дизайн", 'politics', "Политика", 'art', "Искусство", 'law', "Право", 'education', "Образование", 'books', "Книги", 'language', "Лингвистика", 'career', "Карьера", 'edutainment', "Познавательное", 'courses', "Курсы и гайды", 'sport', "Спорт", 'beauty', "Мода и красота", 'medicine', "Медицина", 'health', "Здоровье и Фитнес", 'pics', "Картинки и фото", 'apps', "Софт и приложения", 'video', "Видео и фильмы", 'music', "Музыка", 'games', "Игры", 'food', "Еда и кулинария", 'quotes', "Цитаты", 'handmade', "Рукоделие", 'babies', "Семья и дети", 'nature', "Природа", 'construction', "Интерьер и строительство", 'telegram', "Телеграм", 'instagram', "Инстаграм", 'sales', "Продажи", 'transport', "Транспорт", 'religion', "Религия", 'esoterics', "Эзотерика", 'darknet', "Даркнет", 'gambling', "Букмекерство", 'shock', "Шок-контент", 'erotica', "Эротика", 'adult', "Для взрослых", 'other', "Другое"],

        'regions' => ['altai-region', 'Алтайский край', 'amur-region', 'Амурская область', 'arkhangelsk-region', 'Архангельская область', 'astrakhan-region', 'Астраханская область', 'belgorod-region', 'Белгородская область', 'bryansk-region', 'Брянская область', 'vladimir-region', 'Владимирская область', 'volgograd-region', 'Волгоградская область', 'vologda-region', 'Вологодская область', 'voronezh-region', 'Воронежская область', 'eao-region', 'Еврейская автономная область', 'zabaikal-region', 'Забайкальский край', 'ivanovo-region', 'Ивановская область', 'irkutsk-region', 'Иркутская область', 'kbr-region', 'Кабардино-Балкарская Республика', 'kaliningrad-region', 'Калининградская область', 'kaluga-region', 'Калужская область', 'kamchatka-region', 'Камчатский край', 'kchr-region', 'Карачаево-Черкесская республика', 'kemerovo-region', 'Кемеровская область', 'kirov-region', 'Кировская область', 'kostroma-region', 'Костромская область', 'krasnodar-region', 'Краснодарский край', 'krasnoyarsk-region', 'Красноярский край', 'kurgan-region', 'Курганская область', 'kursk-region', 'Курская область', 'lipetsk-region', 'Липецкая область', 'magadan-region', 'Магаданская область', 'moscow', 'Москва', 'moscow-region', 'Московская область', 'murmansk-region', 'Мурманская область', 'nao-region', 'Ненецкий автономный округ', 'nn-region', 'Нижегородская область', 'novgorod-region', 'Новгородская область', 'novosibirsk-region', 'Новосибирская область', 'omsk-region', 'Омская область', 'orenburg-region', 'Оренбургская область', 'orlov-region', 'Орловская область', 'penza-region', 'Пензенская область', 'perm-region', 'Пермский край', 'primorsk-region', 'Приморский край', 'pskov-region', 'Псковская область', 'adigea-region', 'Республика Адыгея', 'altai', 'Республика Алтай', 'bashkiria-region', 'Республика Башкортостан', 'buratia-region', 'Республика Бурятия', 'dagestan-region', 'Республика Дагестан', 'ingushetia-region', 'Республика Ингушетия', 'kalmikia-region', 'Республика Калмыкия', 'karelia-region', 'Республика Карелия', 'komi-region', 'Республика Коми', 'crimea', 'Республика Крым', 'maryel-region', 'Республика Марий Эл', 'mordovia-region', 'Республика Мордовия', 'yakutia-region', 'Республика Саха (Якутия)', 'alania-region', 'Республика Северная Осетия - Алания', 'tatarstan-region', 'Республика Татарстан', 'tiva-region', 'Республика Тыва', 'hakasia-region', 'Республика Хакасия', 'rostov-region', 'Ростовская область', 'ryazan-region', 'Рязанская область', 'samara-region', 'Самарская область', 'spb', 'Санкт-Петербург', 'saratov-region', 'Саратовская область', 'sakhalin-region', 'Сахалинская область', 'ekb-region', 'Свердловская область', 'smolensk-region', 'Смоленская область', 'stavropol-region', 'Ставропольский край', 'tambov-region', 'Тамбовская область', 'tver-region', 'Тверская область', 'tomsk-region', 'Томская область', 'tula-region', 'Тульская область', 'tyumen-region', 'Тюменская область', 'udmurtia-region', 'Удмуртская Республика', 'ulyanovsk-region', 'Ульяновская область', 'khabarovsk-region', 'Хабаровский край', 'hmao-region', 'Ханты-Мансийский автономный округ - Югра', 'chel-region', 'Челябинская область', 'chechnya-region', 'Чеченская Республика', 'chuvashia-region', 'Чувашская Республика', 'chukotka-region', 'Чукотский автономный округ', 'yamal-region', 'Ямало-Ненецкий автономный округ', 'yaroslavl-region', 'Ярославская область'],

        'countries' => ["global", 'Без территориальной принадлежности', "ru", 'Россия', "ua", 'Украина', "uz", 'Узбекистан', "by", 'Беларусь', "kz", 'Казахстан', "kg", 'Киргизия', "ir", 'Иран', "in", 'Индия', "cn", 'Китай', "et", 'Эфиопия', "at", 'Австрия', "az", 'Азербайджан', "al", 'Албания', "ar", 'Аргентина', "am", 'Армения', "bd", 'Бангладеш', "bg", 'Болгария', "br", 'Бразилия', "gb", 'Великобритания', "ve", 'Венесуэла', "vn", 'Вьетнам', "de", 'Германия', "gr", 'Греция', "ge", 'Грузия', "dk", 'Дания', "eg", 'Египет', "il", 'Израиль', "id", 'Индонезия', "iq", 'Ирак', "ie", 'Ирландия', "es", 'Испания', "it", 'Италия', "ye", 'Йемен', "kh", 'Камбоджа', "ca", 'Канада', "kr", 'Корея', "cu", 'Куба', "lv", 'Латвия', "lt", 'Литва', "my", 'Малайзия', "mx", 'Мексика', "md", 'Молдавия', "mm", 'Мьянма', "nl", 'Нидерланды', "no", 'Норвегия', "ae", 'ОАЭ', "pk", 'Пакистан', "pl", 'Польша', "pt", 'Португалия', "ro", 'Румыния', "sa", 'Саудовская Аравия', "rs", 'Сербия', "sg", 'Сингапур', "sy", 'Сирия', "sk", 'Словакия', "si", 'Словения', "so", 'Сомали', "us", 'США', "tj", 'Таджикистан', "th", 'Тайланд', "tz", 'Танзания', "tr", 'Турция', "ph", 'Филиппины', "fi", 'Финляндия', "fr", 'Франция', "me", 'Черногория', "cz", 'Чехия', "ch", 'Швейцария', "se", 'Швеция', "lk", 'Шри-Ланка', "ee", 'Эстония', "jp", 'Япония'],

        'languages' => ["russian", 'Русский', "english", 'Английский', "uzbek", 'Узбекский', "ukrainian", 'Украинский', "kazakh", 'Казахский', "belarus", 'Белорусский', "farsi", 'Фарси', "hindi", 'Хинди', "chinese", 'Китайский', "tamil", 'Тамильский', "amhar", 'Амхарский', "abkhaz", 'Абхазский', "avar", 'Аварский', "azeri", 'Азербайджанский', "albanian", 'Албанский', "arabic", 'Арабский', "armenian", 'Армянский', "bashkir", 'Башкирский', "bengali", 'Бенгальский', "birman", 'Бирманский', "bulgarian", 'Болгарский', "hungarian", 'Венгерский', "vietnamese", 'Вьетнамский', "hawaiian", 'Гавайский', "georgian", 'Грузинский', "gujarati", 'Гуджарати', "danish", 'Датский', "hebrew", 'Иврит', "indonesian", 'Индонезийский', "icelandic", 'Исландский', "spanish", 'Испанский', "italian", 'Итальянский', "kannada", 'Каннада', "catalan", 'Каталанский', "kyrgyz", 'Киргизский', "korean", 'Корейский', "khmer", 'Кхмерский', "latin", 'Латинский', "latvian", 'Латышский', "lithuanian", 'Литовский', "macedonian", 'Македонский', "malay", 'Малайский', "malayalam", 'Малаялам', "marathi", 'Маратхи', "mongolian", 'Монгольский', "german", 'Немецкий', "netherlands", 'Нидерландский', "norwegian", 'Норвежский', "oria", 'Ория', "panjabi", 'Панджаби', "pidgin", 'Пиджин', "polish", 'Польский', "portuguese", 'Португальский', "pashto", 'Пушту', "romanian", 'Румынский', "cebuano", 'Себуано', "serbian", 'Сербский', "sinhala", 'Сингальский', "slovak", 'Словацкий', "slovene", 'Словенский', "somali", 'Сомалийский', "swahili", 'Суахили', "tagalog", 'Тагалог', "tajik", 'Таджикский', "thai", 'Тайский', "tatar", 'Татарский', "telugu", 'Телугу', "turkish", 'Турецкий', "turkmen", 'Туркменский', "urdu", 'Урду', "welsh", 'Уэльский', "filipino", 'Филиппинский', "finnish", 'Финский', "french", 'Французский', "hausa", 'Хауса', "croatian", 'Хорватский', "chechnya", 'Чеченский', "czech", 'Чешский', "swedish", 'Шведский', "esperanto", 'Эсперанто', "estonian", 'Эстонский', "yakut", 'Якутский', "japanese", 'Японский'],

        'other' => ['popular', 'Популярные каналы'],
    ];


    public const AMOUNT_ON_REGION_PAGE = 102;

    public const AMOUNT_ON_SEARCH_PAGE = 30;


    /**
     * Make associative array from pairs array.
     *
     * @param array|string $slugs
     * @return string[]
     */
    public static function associative(array|string $slugs): array
    {
        if ( 'string' == gettype($slugs) ) {
            $slugs = self::SLUGS[$slugs];
        }

        for ($i = 0; $i < count($slugs); $i=$i+2) {
            $result_arr[$slugs[$i]] = $slugs[$i+1];
        }
        return $result_arr;
    }

    /**
     * Return associative array of slug=>friendly_name s.
     *
     * @return string[]
     */
    public static function associative_categories(): array
    {
        return static::associative(self::SLUGS['categories']);
    }

    /**
     * Make human readable title for slug name
     *
     * @param string|empty $str_in
     * @return string
     * @throws Exception
     */
    public static function friendly_name(string $str_in): string
    {
        if ( !$str_in )     { throw new ErrorException("На входе пустой параметр – \$str_in: $str_in."); }

        $slugs = [];
        foreach (self::SLUGS as $arr) {
            $slugs = array_merge($slugs, self::associative($arr) );
        }

        try {
            return $slugs[$str_in];
        } catch (ErrorException $e) {

            try {
                return $slugs[ $str_in . '-region' ];
            } catch (ErrorException $e) {
                throw new Error($e->getMessage());
            }
        }
    }


    /**
     * @param int $num
     * @return int|string
     */
    public static function kilo_style(int $num): int|string
    {
        if ($num>1000) {
            $x = round($num);
            $x_number_format = number_format($x);
            $x_array = explode(',', $x_number_format);
            $x_parts = array('k', 'm', 'b', 't');
            $x_count_parts = count($x_array) - 1;
            $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
            $x_display .= $x_parts[$x_count_parts - 1];

            return $x_display;
        }
        return $num;
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
        foreach (self::$time_arr_keys as $time_arr_key => $time_description) {
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
