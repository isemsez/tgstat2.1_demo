<script>
import OneChannelInfo from "@/Pages/Components/OneChannelInfo.vue";

export default {
    name: "OneThirdCard",
    components: {OneChannelInfo},
    props: {
        'title': String,
        'friendly_title': String,
        'channels_column': Object,
    }
}
</script>

<template>

        <div class="col-12 col-sm-6 col-md-4" style="width: 100%; display: inline-block;">

            <div class="d-flex justify-content-between align-items-center">
                <div class="h4 text-dark">
                    <a :href="'/'+ title " class="text-dark no-underline">
                        {{ friendly_title }}                        </a></div>
                <div class="d-block d-sm-none">
                    <a href="/politics" class="text-dark">Еще<i class="uil-arrow-right"></i></a></div>
            </div>

            <div class="card card-body border card-shadow-12px m-0 py-2 px-3">

                <div v-for="channel in channels_column">

                    <OneChannelInfo :channel="channel" />

                </div>

            </div>
        </div>

</template>

<style scoped>

</style>
