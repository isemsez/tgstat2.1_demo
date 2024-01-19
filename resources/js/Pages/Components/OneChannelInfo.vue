<script type="application/javascript">
export default {
    name: "OneChannelInfo",
    props: {
        channel: Object,
    },
}
</script>

<template>


    <a :href="'/channel/'+channel['alias']" target="_blank">
        <div class="row my-0 py-1 bg-dragula-hover rounded">

            <div class="mx-1 mr-2">
                <img :src="channel['img']" class="img-thumbnail rounded" style="width:50px; height:50px;">     </div>
            <div class="col d-flex flex-column justify-content-around pl-0">
                <div class="text-truncate font-16 text-dark" style="max-width: 250px;">
                    {{ channel['name'] }}                                                 </div>
                <div class="text-truncate font-12 text-muted mt-n1">
                    {{ channel['subscribers'] }} подписчиков                              </div>
            </div>

        </div>
    </a>


</template>

<style scoped>

</style>
