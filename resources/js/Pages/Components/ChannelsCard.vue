<script type="application/javascript">
import OneChannelInfo from './OneChannelInfo.vue'
import {debug} from "yaml/util";

export default {
    name: "ChannelsCard",
    methods: {debug},
    components: {OneChannelInfo},
    props: {
        title: String,
        friendly_title: String,
        grouped_channels: Object,
    },
}
</script>

<template>

    <div class="my-3 position-relative">

        <div id="slider-category-25">

            <div class="d-flex justify-content-between align-items-center">
                <div v-if="title" class="h4 text-dark">
                    <a :href="'/'+ title " class="text-dark">
                        {{ friendly_title }} </a>
                </div>
                <div v-else class="h4 text-dark">
                    {{ friendly_title }}
                </div>
                <div v-if="title">
                    <a :href="'/categ/'+title" class="text-dark">
                        Еще каналы<i class="uil-arrow-right"></i></a></div>
            </div>
        </div>





        <div class="card border m-0">

            <div class="slick-list draggable">

                <div v-for="column in grouped_channels" class="col-12 col-sm-6 col-md-3 slick-slider-item"
                     style="width: 100%; display: inline-block;">

                    <div class="p-2">

                        <template v-for="channel in column">

                            <OneChannelInfo :channel="channel"/>

                        </template>

                    </div>
                </div>
            </div>

        </div>


    </div>


</template>

<style scoped>

</style>
