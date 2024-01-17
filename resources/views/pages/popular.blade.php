@extends('layouts.mainframe')
@section('content')
    <div class="text-center mb-2">
        @include('components.flags_btn')
    </div>

    <div class="mb-3 position-relative">

        @include('components.channels_card', ['grouped_channels' => $channels, 'title' => 'popular'])

        @include('components.choose_category_card', ['categories' => $categories])

        @include('components.channels_card', ['grouped_channels' => $specific_categories['blogs'], 'title' => 'blogs'])

        @include('components.channels_card', ['grouped_channels' => $specific_categories['news'], 'title' => 'news'])

        <div class="row">
            <div class="col-12 px-0 d-flex justify-content-between">

                @include('components.one_third_card', ['channels_column' => $specific_categories['politics'][0], 'title' => 'politics'])

                @include('components.one_third_card', ['channels_column' => $specific_categories['economics'][0], 'title' => 'economics'])

                @include('components.one_third_card', ['channels_column' => $specific_categories['education'][0], 'title' => 'education'])

            </div>
        </div>

        @include('components.channels_card', ['grouped_channels' => $specific_categories['travels'], 'title' => 'travels'])

    </div>

@stop
