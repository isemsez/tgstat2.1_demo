@php use App\Services\Data; @endphp


{{--<div class="" data-slick-index="0" aria-hidden="false" style="width: 31.5%;">--}}
{{--    <div>--}}
<div class="col-12 col-sm-6 col-md-4" style="width: 100%; display: inline-block;">

    <div class="d-flex justify-content-between align-items-center">
        <div class="h4 text-dark">
            <a href="/{{ $title }}" class="text-dark no-underline" tabindex="0">
                {{ Data::friendly_name($title) }}                        </a></div>
        <div class="d-block d-sm-none">
            <a href="/politics" class="text-dark" tabindex="0">Еще<i class="uil-arrow-right"></i></a></div>
    </div>

    <div class="card card-body m-0 card-shadow-12px border py-2 px-3">

        @foreach($channels_column as $channel)

            @include('components.one_channel_info', [ 'channel' => $channel])

        @endforeach

    </div>
</div>
{{--    </div>--}}
{{--</div>--}}
