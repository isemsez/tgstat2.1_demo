<script>
export default {
    name: "ChooseCategoryCard",
    props: {
        friendly_title: String,
        categories: Array,
    }
}
</script>

<template>

    <div class="d-flex justify-content-between align-items-center">
        <div class="h4 text-dark">
            {{ friendly_title }}
        </div>
        <div>
            &nbsp;
        </div>
    </div>


    <div class="card border m-0">
        <div class="slick-list draggable">
            <div v-for="category_column in categories" class="col-12 col-sm-6 col-md-4 col-lg-3 slick-slider-item"
                 style="width: 100%; display: inline-block;">
                <div class="p-2 py-3">
                    <div class="row align-items-center">

                        <template v-for="category in category_column">

                            <div class="col col-9 text-truncate">
                                <a class="text-dark" :href="'/categ/'+category['_id']">
                                    {{ category['friendly_name'] }} </a>
                            </div>
                            <div class="col col-3 text-right font-12 text-muted text-truncate">
                                {{ category['count'] }}
                            </div>

                            <div class="my-2"></div>

                        </template>

                    </div></div></div></div></div>



</template>

<style scoped>

</style>
