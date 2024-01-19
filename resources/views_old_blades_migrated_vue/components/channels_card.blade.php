@php use App\Services\Data; @endphp
<div class=my-3>
    <div class="d-flex justify-content-between align-items-center">

        <div class="h4 ">
            <a href="/{{ $title }}" class="text-body no-underline">
                {{ Data::friendly_name($title) }}                        </a></div>
    </div>

    <div class="card border m-0 px-3 py-1" style="flex-direction: row">

        @foreach($grouped_channels as $channels_column)
            <div>
                {{--                <div aria-hidden=false style="/*width:319px;*/">--}}
                <div class="col-12 col-sm-4 col-md-3" style="max-width:100%; width:100%; display:inline-block">
                    <div class="p-1">

                        @foreach($channels_column as $channel)

                            @include('components.one_channel_info', [ 'channel' => $channel])

                        @endforeach

                    </div>
                </div>
                {{--                </div>--}}
            </div>
        @endforeach

    </div>
</div>
