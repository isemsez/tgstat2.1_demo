<script type="application/javascript">
import OneChannelInfo from './OneChannelInfo.vue'

export default {
    name: "ChannelsCard",
    components: {OneChannelInfo},
    props: {
        popular: Object,
    },
}
</script>

<template>

    <div class=my-3>
        <div class="d-flex justify-content-between align-items-center">

            <div class="h4 ">
                <a :href="'/'+popular['title']" class="text-body no-underline">
                    {{ popular['friendly_title'] }}                        </a></div>
        </div>

        <div class="card border m-0 px-3 py-1" style="flex-direction: row">

            <div v-for="column in popular['grouped_channels']">
                <div class="col-12 col-sm-4 col-md-3" style="max-width:100%; width:100%; display:inline-block">
                    <div v-for="channel in column" class="p-1">

                        <OneChannelInfo :channel="channel" />

                        <!--                        @foreach($channels_column as $channel)

                        @include('components.one_channel_info', [ 'channel' => $channel])

                        @endforeach-->

                    </div>
                </div>
            </div>

        </div>
    </div>

</template>

<style scoped>

</style>
