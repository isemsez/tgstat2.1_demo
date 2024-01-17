@php use App\Services\Data; @endphp
@extends('layouts.mainframe')
@section('content')

    <h1 class="mt-4 text-center text-body">{{ Data::friendly_name($main_header) }}</h1>

    <div class="text-center mb-2">
        @include('components.flags_btn')
    </div>

    <div class="mb-3 position-relative">

        <div class="row justify-content-center lm-list-container">

            @foreach($channels as $channel)

                @include('components.one_channel_card', ['channel'=>$channel])

            @endforeach

        </div>


    </div>

@stop
