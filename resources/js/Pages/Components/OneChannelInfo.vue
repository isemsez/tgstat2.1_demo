<script type="application/javascript">
export default {
    name: "OneChannelInfo",
    props: {
        channel: Object,
    },
}
</script>

<template>

    <a class="no-underline" :href="'/channel/'+channel['alias']" target="_blank">
        <div class="row my-0 py-1 bg-dragula-hover rounded" style="flex-wrap: nowrap">

            <div class="mx-1 mr-2 px-0" style="width:60px!important;">
                <img :src="channel['img']" class="img-thumbnail rounded"
                     style="width:50px;height:50px;background-blend-mode:normal!important;background-clip:content-box!important;background-position:50% 50%!important;background-color:rgb(255,255,255)!important;background-size:100% 100%!important;background-origin:content-box!important;background-repeat:no-repeat!important"
                     alt="pic"></div>

            <div class="col-auto d-flex flex-column justify-content-around pl-0">
                <div class="d-inline-block text-truncate text-dark-emphasis" style="max-width: 200px;">
                    {{ channel['name'] }}          </div>
                <div class="text-truncate text-muted mt-n1" style="font-size: small">
                    {{ channel['subscribers'] }} подписчиков
                </div>
            </div>
        </div>
    </a>


</template>

<style scoped>

</style>
