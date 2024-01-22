<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Информация в телеграм</title>
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link type="text/css" href="/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .row > * {width: revert}
    </style>
    <link type="text/css" href="/css/app.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">



    @if(Request::is('search'))

    <!-- Include Choices CSS -->
    <link rel="stylesheet" href="/css/choices.min.css" />
    <!-- Include Choices JavaScript -->
    <script src="/js/choices.min.js"></script>
    <style>
        .choices__item[data-deletable] {background-color: #44badc;}
    </style>

    @endif


</head>
<body class="bg-body-tertiary">

<div class="container mb-3">
    <header class="border-bottom lh-1 py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">

            <div class="col-8 offset-2 text-center">
                <a class="blog-header-logo text-body text-decoration-none {!! empty($main_header) ? '' : 'fs-3' !!}" href="/">Каталог Telegram-каналов и чатов</a>
            </div>

        </div>
    </header>


    <nav class="navbar navbar-expand navbar-dark bg-dark" aria-label="Third navbar example">
        <div class="container-fluid">

            <div class="justify-content-evenly collapse navbar-collapse" id="navbarsExample03">
                <ul class="navbar-nav mb-2 mb-sm-0">
                    <li class="nav-item dropdown px-lg-3">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Каталог</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/">Каталог каналов и чатов</a></li>
                            <li><a class="dropdown-item" href="/regions">Региональные подборки</a></li>
                            <li><a class="dropdown-item" href="/tags/topic">Тематические подборки</a></li>
                            <li><a class="dropdown-item" href="/search">Поиск каналов</a></li>
                            <hr/>
                            <li><a class="dropdown-item" href="/add/channel">Добавить канал/чат</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown px-lg-3">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Рейтинги</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/ratings/channels">Рейтинг каналов</a></li>
                            <li><a class="dropdown-item" href="#">Рейтинг чатов</a></li>
                            <li><a class="dropdown-item" href="#">Рейтинг публикаций</a></li>
                            <hr/>
                            <li><a class="dropdown-item" href="#">Рейтинги брендов и персон</a></li>
                        </ul>
                    </li>
                    <li class="nav-item px-lg-3">
                        <a class="nav-link" href="#">Аналитика</a>
                    </li>
                    <li class="nav-item px-lg-3">
                        <a class="nav-link" href="#">Поиск по публикациям</a>
                    </li>
                    <li class="nav-item px-lg-3">
                        <a class="nav-link" href="#">Мониторинг Telegram</a>
                    </li>
                </ul>
                <div class="col-1"></div>
                <form role="search">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                </form>
                <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
            </div>
        </div>
    </nav>
</div>


<div class="container">
    @yield('content')
</div>


<footer class="mt-4 py-5 text-center text-body-secondary bg-body-secondary">
    <p class="mb-0">
        <a href="#">Back to top</a>
    </p>
</footer>

<script type="application/javascript" src="/js/bootstrap.bundle.min.js"></script>

<script src="/js/app.js"></script>

<script>jQuery(function ($) {
        new TopSearch({
            requestUrl: '/channels/global-search'
        });
    });</script>

</body>
</html>
