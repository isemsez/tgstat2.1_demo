<script>
export default {
    name: "SearchResultsContainer",
    props: {
        channels: Array,
    },
}
</script>

<template>


    <div class="row mb-3">
        <div class="col-12 d-flex justify-content-between">

            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-sm btn-outline-dark py-1 text-truncate active">
                    <input type="radio" name="view" value="card" checked="" autocomplete="off">                        <i class="uil-apps"></i>                    </label>
                <label class="btn btn-sm btn-outline-dark py-1 text-truncate ">
                    <input type="radio" name="view" value="list" autocomplete="off">                        <i class="uil-list-ul"></i>                    </label>
            </div>

            <div class="ml-3">
                <select id="sort" class="form-control custom-select max-width-280px" name="sort" data-default="participants">
                    <option value="participants" selected="">по подписчикам</option>
                    <option value="avg_reach">по охвату</option>
                    <option value="ci_index">по ИЦ</option>
                    <option value="members_t">по приросту (за сегодня)</option>
                    <option value="members_y">по приросту (за вчера)</option>
                    <option value="members_7d">по приросту (за неделю)</option>
                    <option value="members_30d">по приросту (за месяц)</option>
                </select>            </div>
        </div>
    </div>



    <div class="row mx-n1 d-flex justify-content-center">

        <div v-for="channel in channels" class="col-12 col-sm-6 col-md-6 col-xl-4 px-1">
            <div class="card card-body peer-item-box py-2 mb-2 mb-sm-2 border border-info-hover position-relative">



                <a class="js-btn-favorite favorite-btn favorite-btn-top popup_ajax " href="#" :data-src="'/my/favorites/'+ channel['alias'] +'/create'" data-id="12003221"><i class="fav-icon" title="" data-toggle="tooltip" data-placement="top" data-original-title="Добавить в Избранное" data-original-title-inactive="Добавить в Избранное" data-original-title-active="В Избранном"></i></a>
                <a :href="'/channel/' + channel['alias']" class="text-body">
                    <div class="row">

                        <div class="col">
                            <div>
                                <div class="font-16 text-dark text-truncate">{{ channel['name'] }}</div>
                                <div class="font-14 text-muted line-clamp-2 mt-1" style="min-height: 42px;">
                                    {{ channel['description'] }}                </div>
                            </div>
                            <div class="mt-2">
                                <div class="font-12 text-truncate">
                                    <b>{{ channel['subscribers'] }}</b> подписчиков                                    </div>
                            </div>
                        </div>
                        <div class="col-auto mr-n2 d-flex justify-content-end">
                            <div class="d-flex align-items-start flex-column">
                                <div class="mb-auto">
                                    <img :src="channel['img']" class="img-thumbnail rounded-circle inline-block" style="width:70px; height:70px;">                </div>
                                <div class="w-100">



                                    <div class="text-center text-muted font-12" title="" data-toggle="tooltip" data-html="true" data-placement="top" :data-original-title="'Последняя публикация в канале: <br>'+ channel['last_post_date']" data-trigger="click">
                                        {{ channel['last_post_date'] }}                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>                </div>
        </div>

    </div>



</template>

<style scoped>

</style>
