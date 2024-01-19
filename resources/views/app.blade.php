<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/x-icon" href="/images/favicon.png">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <link href="/css/app.css" rel="stylesheet" type="text/css" />

        <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>

        <!-- Icons -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead

    </head>
    <body class="font-sans antialiased right-bar-enabled" data-layout="topnav" data-layout-config='{"layoutBoxed":false,"darkMode":false,"showRightSidebarOnStart": true}'>

    <div class=wrapper>
        <div class="content-page d-flex flex-column p-0">
            <div class="content p-0 col">
                <div class=fixed-top>

                    <div class="navbar-custom topnav-navbar topnav-navbar-dark">
                        <div class="container-fluid px-0 px-lg-3">
                            <div class="row no-gutters justify-content-between">
                                <div class=col>
                                    <div class="row no-gutters align-items-center">
                                        <a class="d-flex d-lg-none nav-user justify-content-center align-items-center arrow-none px-1 px-sm-2 sf-hidden" data-toggle=collapse data-target=#topnav-menu-content>

                                        </a>

                                        <a href="/" class="topnav-logo float-none px-0 px-2 d-flex align-items-center">
                                        <div class=topnav-logo-lg>
                                            <div class=float-left>
                                                <img src="/images/favicon.png" alt height=30 style="margin-top:-4px;margin-right:9px;">
                                            </div>
                                            <div class=float-left>
                                                <span class="text-info font-22 d-flex" style=color:#bbe4f0!important>TTG</span>
                                            </div>
                                        </div>
                                        <div class="topnav-logo-sm sf-hidden">


                                        </div>
                                        <div class="topnav-logo-xs sf-hidden">

                                        </div>
                                        </a>

                                        <div class="app-search col dropdown d-flex align-items-center max-width-320px">
                                            <div class="position-relative w-100">
                                                <input name=query type=text class="app-search-input form-control font-16 font-sm-15" placeholder="Быстрый поиск..." autocomplete=off value>
                                                <span class="uil uil-search search-icon"></span>
                                                <i class="uil uil-times app-search-show-toggle app-search-icon-cross cursor-pointer d-block d-sm-none sf-hidden"></i>
                                            </div>
                                            <div class="app-search-dropdown-menu dropdown-menu dropdown-menu-animated width-320px overflow-auto sf-hidden">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <ul class="row no-gutters list-unstyled topbar-right-menu mb-0">
                                        <li class="notification-list d-block d-sm-none sf-hidden">

                                        </li>
                                        <li class=notification-list>
                                            <a class="nav-link theme-switcher mx-1 mx-sm-2" href=javascript:void(0)>
                                                <i class="uil uil-moon noti-icon"></i>
                                            </a>
                                        </li>



                                        <li class="dropdown notification-list topbar-dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none mx-1 mx-sm-2" data-toggle=dropdown id=langDrop href=# role=button aria-haspopup=true aria-expanded=false>
                                                <img src="/images/flags/russia.jpg" alt=flag class=mr-1 style="height: 12px">
                                                <span class="align-middle d-none d-md-inline">Russian</span>
                                                <i class="uil uil-angle-down d-none d-sm-inline"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu sf-hidden" aria-labelledby=langDrop>





                                            </div>
                                        </li>

                                        <li class="col notification-list">
                                            <a class="popup_ajax nav-link nav-user d-flex justify-content-center align-items-center arrow-none px-1 px-sm-3 mx-0" href=# role=button data-src=/login>
                                                <i class="uil uil-signin font-22"></i><span class="d-none d-sm-inline-block">Вход на сайт</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="topnav shadow-sm">
                        <div class=container-fluid>
                            <nav class="navbar navbar-light navbar-expand-lg topnav-menu ml-n3 ml-sm-0">
                                <div class="collapse navbar-collapse" id=topnav-menu-content>
                                    <ul class=navbar-nav>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="https://ttg/" id=topnav-catalog role=button data-toggle=dropdown aria-haspopup=true aria-expanded=true>
                                                <i class="uil-apps mr-1"></i>Каталог <div class=arrow-down></div>
                                            </a>
                                            <div class="dropdown-menu sf-hidden" aria-labelledby="topnav-catalog">
                                                <a class="dropdown-item pr-4" href="/">
                                                    <i class="uil-megaphone mr-1"></i>Каталог каналов и чатов                            </a>
                                                <a class="dropdown-item pr-4" href="/regions">
                                                    <i class="uil-globe mr-1"></i>Региональные подборки                                </a>
                                                <a class="dropdown-item pr-4" href="/tags/theme">
                                                    <i class="uil-swatchbook mr-1"></i>Тематические подборки                                </a>
                                                <a class="dropdown-item pr-4" href="/search">
                                                    <i class="uil-search mr-1"></i>Поиск каналов                            </a>

                                                <div class="dropdown-divider"></div>

                                                <a class="dropdown-item pr-4" href="/add/channel">
                                                    <i class="uil-plus-circle mr-1"></i>Добавить канал/чат                            </a>
                                            </div>






                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href=# id=topnav-ratings role=button data-toggle=dropdown aria-haspopup=true aria-expanded=true>
                                                <i class="uil-chart mr-1"></i>Рейтинги <div class=arrow-down></div>
                                            </a>
                                            <div class="dropdown-menu sf-hidden" aria-labelledby=topnav-ratings>





                                            </div>
                                        </li>
                                        <li class=nav-item>
                                            <a class=nav-link href=https://ttg/analytics>
                                                <i class="uil-chart-line mr-1"></i>Аналитика </a>
                                        </li>


                                        <li class=nav-item>
                                            <a class=nav-link href=https://ttg/posts-search>
                                                <i class="uil-search-alt mr-1"></i>Поиск по публикациям </a>
                                        </li>
                                        <li class=nav-item>
                                            <a class=nav-link href=https://ttg/alerts>
                                                <i class="uil-focus-target mr-1"></i>Мониторинг Telegram </a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href=# id=topnav-promote role=button data-toggle=dropdown aria-haspopup=true aria-expanded=true>
                                                <i class="uil-rocket mr-1"></i>Продвижение <div class=arrow-down></div>
                                            </a>
                                            <div class="dropdown-menu sf-hidden" aria-labelledby=topnav-promote>


                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div> </div>
                <div class="container-fluid px-2 px-md-3">


                    <!-- id="vue-app"-->
                    <!--                    -->
                    @inertia

                </div>
            </div>
            <div class=dark>
                <footer class="footer position-relative shadow">
                    <div class=container-fluid>
                        <div class="row navbar-light">
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="h4 mt-3">Каталог</div>
                                <div class=navbar-nav>
                                    <a href=https://ttg/ class="nav-link pt-0 pb-1">
                                    Каталог каналов и чатов </a>
                                    <a href=https://ttg/tags class="nav-link pt-0 pb-1">
                                        Подборки каналов </a>
                                    <a href=https://ttg/search class="nav-link pt-0 pb-1">
                                        Поиск каналов </a>
                                    <a href=https://ttg/add/channel class="nav-link pt-0 pb-1">
                                        Добавить канал/чат </a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="h4 mt-3">Рейтинги</div>
                                <div class=navbar-nav>
                                    <a href=https://tgstat.ru/ratings/channels class="nav-link pt-0 pb-1">
                                        Рейтинг каналов Telegram </a>
                                    <a href=https://tgstat.ru/ratings/chats class="nav-link pt-0 pb-1">
                                        Рейтинг чатов Telegram </a>
                                    <a href=https://tgstat.ru/ratings/posts class="nav-link pt-0 pb-1">
                                        Рейтинг публикаций </a>
                                    <a href=https://tgstat.ru/ratings class="nav-link pt-0 pb-1">
                                        Рейтинги брендов и персон </a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="h4 mt-3">API</div>
                                <div class=navbar-nav>
                                    <a href=https://tgstat.ru/api/stat target=_blank class="nav-link pt-0 pb-1">
                                        API статистики </a>
                                    <a href=https://tgstat.ru/api/search target=_blank class="nav-link pt-0 pb-1">
                                        API поиска публикаций </a>
                                    <a href=https://tgstat.ru/api/callback target=_blank class="nav-link pt-0 pb-1">
                                        API Callback
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="h4 mt-3">Наши каналы</div>
                                <div class=navbar-nav>
                                    <a href=https://t.me/TGStat target=_blank class="nav-link pt-0 pb-1">@TGStat</a>
                                    <a href=https://t.me/TGStat_Chat target=_blank class="nav-link pt-0 pb-1">@TGStat_Chat</a>
                                    <a href=https://t.me/telepulse target=_blank class="nav-link pt-0 pb-1">@telepulse</a>
                                    <a href=https://t.me/TGStatAPI target=_blank class="nav-link pt-0 pb-1">@TGStatAPI</a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="h4 mt-3">Почитать</div>
                                <div class=navbar-nav>
                                    <a href=https://tgstat.ru/blog class="nav-link d-inline pt-0 pb-1">
                                        Наш блог </a>
                                    <a href=https://tgstat.ru/research-2019 target=_blank class="nav-link pt-0 pb-1">Исследование Telegram 2019</a>
                                    <a href=https://tgstat.ru/research-2021 target=_blank class="nav-link pt-0 pb-1">Исследование Telegram 2021</a>
                                    <a href=https://tgstat.ru/research-2023 target=_blank class="nav-link pt-0 pb-1">Исследование Telegram 2023</a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="h4 mt-3">Контакты</div>
                                <div class=navbar-nav>
                                    <a href=https://t.me/TGStatSupportBot target=_blank class="nav-link pt-0 pb-1">Поддержка</a>
                                    <a href=mailto:support@tgstat.ru target=_blank class="nav-link pt-0 pb-1">Почта</a>
                                    <a href=https://tgstat.ru/tgstat-job class="nav-link pt-0 pb-1">
                                        Вакансии </a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="h4 mt-3">Всякая всячина</div>
                                <div class=navbar-nav>
                                    <a href=https://tgstat.ru/agreement class="nav-link pt-0 pb-1">
                                        Пользовательское соглашение </a>
                                    <a href=https://tgstat.ru/privacy-policy class="nav-link pt-0 pb-1">
                                        Политика конфиденциальности </a>
                                    <a href=https://tgstat.ru/oferta class="nav-link pt-0 pb-1">
                                        Публичная оферта </a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3 d-none">
                                <div class="h4 mt-3">Наши боты</div>
                                <div class=navbar-nav>
                                    <a href=https://t.me/TGStat_Bot target=_blank class="nav-link pt-0 pb-1">@TGStat_Bot</a>
                                    <a href=https://t.me/SearcheeBot target=_blank class="nav-link pt-0 pb-1">@SearcheeBot</a>
                                    <a href=https://t.me/TGAlertsBot target=_blank class="nav-link pt-0 pb-1">@TGAlertsBot</a>
                                    <a href=https://t.me/tg_analytics_bot target=_blank class="nav-link pt-0 pb-1">@tg_analytics_bot</a>
                                    <a href=https://t.me/TGStatChatBot target=_blank class="nav-link pt-0 pb-1">@TGStatChatBot</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <script src="/js/app.js"></script>

    </body>
</html>
