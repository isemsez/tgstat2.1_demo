@php use App\Services\Data @endphp
@extends('layouts.mainframe')
@section('content')

    <h2 class="text-dark mt-3">
        Поиск каналов</h2>

    <div id="search-channels-container">


        <form id="search-channels-form" class="lm-form" action="/search" method="POST" autocomplete="off">
            {{ csrf_field() }}
            <div class="row mt-3">
                <div class="col-12 col-md-8 col-xl-9 order-last order-md-first">
                    <div id="sticky-center-column" class="sticky-center-column">

                        @if( !isset($channels))
                            @include('components.search_page_empty')
                        @else
                            @include('components.search_page_results')
                        @endif

                    </div>
                </div>
                <div class="col-12 col-md-4 col-xl-3 mb-3 order-first order-md-last">
                    <div id="sticky-right-column" class="sticky-right-column">
                        <div id="sticky-right-column__inner" class="sticky-right-column__inner"
                             style="position: relative;">


                            <div class="card card-body border px-2">

                                <div class="row">

                                    <div class="col-12 col-sm-6 col-md-12">
                                        <div class="form-group field-q">
                                            <label class="control-label" for="q">По ключевому слову</label>
                                            <input type="text" id="q" class="form-control font-16 font-sm-14" name="q"
                                                   value="" placeholder="Введите текст">

                                            <p class="help-block help-block-error"></p>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-12">
                                        <div class="form-group mt-n1 mt-sm-1 mt-md-n1">
                                            <div class="form-group field-inabout">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="inabout" class="custom-control-input"
                                                           name="inAbout" value="1" data-default="0" checked>
                                                    <label class="custom-control-label" for="inabout">также искать в
                                                        описании</label>
                                                    <p class="help-block help-block-error"></p></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-12">

                                        <div class="form-group custom-autocomplete-field">
                                            <label class="control-label" for="categories">Тематика канала</label>
                                            <select id="categories" class="choices-multiple-remove-button"
                                                    name="categories[]" placeholder="Выбрать..." multiple>

                                                @foreach(Data::associative_categories() as $slug=>$friendly_name)
                                                    <option value="{!! $slug !!}">{!! $friendly_name !!}</option>
                                                @endforeach

                                            </select>

                                            <p class="help-block help-block-error"></p>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <hr>

                                        <button type="submit" id="search-form-submit-btn"
                                                class="btn btn-primary w-100 mt-2">Искать
                                        </button>
                                        <div class="text-center mt-1">
                                            <a href="#" class="u-dashed js-clear-form font-12 text-info">
                                                Очистить форму </a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <input type="hidden" class="lm-page" name="page" value="1">
            <input type="hidden" class="lm-offset" name="offset" value="0">
        </form>


    </div>


    <script type="application/javascript">
        const choices = new Choices('.choices-multiple-remove-button', {
            removeItemButton: true,
            itemSelectText: '',
        });
    </script>
@stop
