<script>
import SearchResultsContainer from "@/Pages/Components/SearchResultsContainer.vue";
import {Head} from "@inertiajs/vue3";
import axios from "axios";
import Select2 from "@/Pages/Components/Select2.vue";

$(document).ready(function() {
    $('.select2-multiple').select2({});
});

export default {
    name: "SearchPageInitial",
    components: {Select2, SearchResultsContainer, Head},
    created() {
        this.fill_dropdown()
    },
    data() {return {
        dropdown_data: [],
        form: {
            sourceElement: 'searchQuery',
            q: '',
            inAbout: false,
            categories: [],
        },
        channels: [],
        total_count: 0,
        initial_container: true,
    }},
    // updated() {
    //     this.button_visibility()
    // },
    methods: {
        fill_dropdown() {
            axios.post('/api/search', {sourceElement: 'dropdownInitial'})
                .then( res => {
                    this.dropdown_data = res.data.data
                })
        },
        submit_form() {
            axios.post("/api/search" , this.form)
                .then( (res) => {
                    this.initial_container = false
                    this.channels = res.data.data.channels
                    this.total_count = res.data.data.total_count
                })
                .catch( (err) => {
                    console.log(err)
                })
        },
        // button_visibility() {
        //     let on_page_count = document.querySelectorAll(".peer-item-box").length
        //     if ( this.channels_in_category > on_page_count ) {
        //         document.querySelector(".lm-button-container").classList.remove("d-none")
        //     } else {
        //         document.querySelector(".lm-button-container").classList.add("d-none")
        //     }
        // },

    },
}
</script>

<template>
    <!-- id="vue-app"-->

    <!--                    -->
    <!--                    -->

    <Head title="Поиск" />

    <h2 class="text-dark mt-3">
        Поиск каналов</h2>

    <div id="search-channels-container">


        <form @submit.prevent="submit_form" id="search-channels-form" class="lm-form" autocomplete="off">
            <div class="row mt-3">
                <div class="col-12 col-md-8 col-xl-9 order-last order-md-first">
                    <div id="sticky-center-column" class="sticky-center-column">
                        <div class="channels-list lm-list-container">

<!-- ### CONTAINER ### -->
                            <div v-if="initial_container" class="card border min-height-155px">
                                <div class="card-body d-flex align-items-center justify-content-center">
                                    <p class="lead">
                                        Укажите необходимые фильтры для поиска каналов        </p>
                                </div>
                            </div>

                            <template v-else>
                                <SearchResultsContainer :channels="channels" />
                            </template>

                            "Load More" button not implemented yet.
                        </div>

                        <div class="lm-controls-container text-center text-dark mt-2 mb-0 d-none">
                            <div class="lm-button-container mt-2 height-36px">
                                <button class="btn btn-light border lm-button py-1 min-width-220px" type="button">
                                    Показать больше                        </button>

                                <span class="lm-loader d-none spinner-border spinner-border-sm mr-1 mt-2" role="status" aria-hidden="true"></span>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-xl-3 mb-3 order-first order-md-last">
                    <div id="sticky-right-column" class="sticky-right-column">
                        <div id="sticky-right-column__inner" class="sticky-right-column__inner">


                            <div class="card card-body border px-2">

                                <div class="row">

                                    <div class="col-12 col-sm-6 col-md-12">
                                        <div class="form-group field-q">
                                            <label class="control-label" for="q">
                                                По ключевому слову</label>
                                            <input type="text" id="q"
                                                   class="form-control font-16 font-sm-14" name="q" v-model="form.q"
                                                   placeholder="Введите текст">

                                            <p class="help-block help-block-error"></p>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-12">
                                        <div class="form-group mt-n1 mt-sm-1 mt-md-n1">
                                            <div class="form-group field-inabout">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="hidden" name="inAbout" value="0">
                                                    <input type="checkbox" id="inabout" class="custom-control-input"
                                                           name="inAbout" value="1" v-model="form.inAbout" data-default="0">
                                                    <label class="custom-control-label" for="inabout">
                                                        также искать в описании</label>
                                                    <p class="help-block help-block-error"></p></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-12">
                                        <div class="form-group field-categories">

                                            <label class="control-label" for="categories">Тематика канала</label>
                                            <input id="categories" type="hidden" name="categories" value="some">



                                            <Select2 multiple :options="dropdown_data" v-model="form.categories" />




                                            <p class="help-block help-block-error"></p>
                                        </div>
                                    </div>


                                    <div class="col-12">

                                        <button type="submit" id="search-form-submit-btn" class="btn btn-primary w-100 mt-2">
                                            Искать</button>

                                        <div class="text-center mt-1">
                                            <a href="#" class="u-dashed js-clear-form font-12 text-info">
                                                Очистить форму </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" class="lm-page" name="page" value="1">
            <input type="hidden" class="lm-offset" name="offset" value="0">
        </form></div>


</template>

<style scoped>

</style>
