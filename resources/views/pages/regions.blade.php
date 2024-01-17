@extends('layouts.mainframe')
@section('content')

    <h1 class="text-dark text-center mt-4">

        Подборки Telegram-каналов
        <div class="d-none d-sm-block float-right">
            <a class="btn font-16 btn-info btn-rounded px-2 popup_ajax mb-2" href="/tags/add" data-src="/tags/add" title="" data-toggle="tooltip" data-placement="top" data-original-title="Создать подборку">
                <i class="uil-plus"></i>
            </a>
        </div>
    </h1>

    <div class="row justify-content-center mt-4">
        <div class="col col-12 text-center">
            <a class="btn font-18 btn-light btn-rounded active px-3 mx-1 mb-2" href="/regions">
                Региональные        </a>
            <a class="btn font-18 btn-light btn-rounded px-3 mx-1 mb-2" href="/tags/theme">
                Тематические        </a>
        </div>
    </div>



    <div class="my-3 position-relative">

    </div>

    <h4 class="text-dark mt-5">
        Все регионы    </h4>
    <div class="row mt-3" id="tagsList">

        @foreach($regions as $region)

            <div class="col-12 col-sm-6 col-md-4">

                <div class="card card-body border border-info-hover py-2 my-2">

                    <a href="/regions/{{ $region['_id'] }}" class="text-body-secondary text-truncate" style="font-size: 20px">
                        {{ $region['translated'] }}                    </a>

                    <div class="mt-2">
                        <a href="/regions/{{ $region['_id'] }}" class="text-body-tertiary">
                            <b>{{ $region['total'] }}</b> каналов и чатов                        </a>
                    </div>
                </div>

            </div>
        @endforeach

    </div>


@stop
