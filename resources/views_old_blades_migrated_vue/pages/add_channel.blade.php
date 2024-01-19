@extends('layouts.mainframe')
@section('content')

    <div class="row d-flex justify-content-center">
        <div class="col-12 col-sm-8 col-md-9 col-lg-6">
            <h1 class="text-center mt-4 text-dark">{{ $main_header }}</h1>

            @if( empty($categories) )
                <div class="card card-body mt-4">

                    <div class="d-flex justify-content-center">
                        <p class="lead my-3 text-success text-center">
                            Заявка отправлена.
                            Канал появится в течение 10 минут.
                        </p>
                    </div>

                    <div class="d-flex justify-content-center">
                        <a class="btn btn-dark btn-block w-50 font-18" href="/add/channel">
                            Добавить еще                </a>
                    </div>

                </div>

            @else

                <div class="d-flex justify-content-center mt-3">
                    <div class="btn-group" role="group">
                        <a class="btn btn-sm btn-outline-dark active" href="/add/channel">
                            <i class="uil-megaphone mr-1"></i>канал                </a>
                        <a class="btn btn-sm btn-outline-dark" href="/add/chat">
                            <i class="uil-comments mr-1"></i>чат/группу                </a>
                        <!--<a class="btn btn-sm btn-outline-dark" href="#">
                            <i class="uil-robot mr-1"></i>бота
                        </a>-->
                    </div>
                </div>

                <p class="lead my-3 text-center">
                    Если вы не обнаружили свой канал на сайте — воспользуйтесь формой, чтобы его добавить        </p>

                <div class="card card-body ajax-form-container">

                    <form id="add-form" class="popup-ajax-form" name="ajx-form" action="/add/channel" method="post" autocomplete="off">
                        {!! csrf_field() !!}
                        <div class="form-group field-username">
                            <label class="control-label" for="username">Ссылка на канал или @username</label>
                            <input type="text" id="username" class="form-control" name="username" autofocus="" placeholder="@username, t.me/joinchat/AAAAAgHfyJsuf...">

                            <p class="help-block help-block-error"></p>
                        </div>
                        <div class="form-group field-country">
                            <label class="control-label" for="country">Страна</label>
                            <select id="country" class="custom-select" name="country">
                                <option value="">Выберите страну ...</option>

                                @include('components.options_list', ['items' => $countries])

                            </select>

                            <p class="help-block help-block-error"></p>
                        </div>

                        <div class="form-group field-language">
                            <label class="control-label" for="language">Язык контента канала</label>
                            <select id="language" class="custom-select" name="language">
                                <option value="">Выберите язык ...</option>

                                @include('components.options_list', ['items' => $languages])

                            </select>

                            <p class="help-block help-block-error"></p>
                        </div>
                        <div class="form-group field-category_id">
                            <label class="control-label" for="category_id">Категория канала</label>
                            <select id="category_id" class="custom-select" name="category_id">
                                <option value="">Выберите категорию ...</option>

                                @include('components.options_list', ['items' => $categories])

                            </select>

                            <p class="help-block help-block-error"></p>
                        </div>
                        <div class="submit-result-block collapse mt-3">
                            <div class="alert alert-danger mb-0" role="alert"></div>
                        </div>

                        <div class="form-group mt-4 text-center">
                            <button type="submit" class="btn btn-primary w-50" name="submit-button" data-title-state-original="Отправить" data-title-state-ready="Отправлено">Отправить</button>            </div>

                    </form>        </div>
            @endif

        </div>
    </div>

@stop
