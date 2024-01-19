<script>
import {Head} from "@inertiajs/vue3";
import OneChannelCard from "@/Pages/Components/OneChannelCard.vue";
import axios from "axios";

export default {
    name: "RegionPage",
    components: {OneChannelCard, Head},
    props: {
        region: Object,
    },
    data() {return {
        region_channels: [],
        dropdown: [],
        channels_in_category: 0,
    }},
    created() {
        this.region_channels = this.region['channels']
        axios.post("/api/regions/" + this.region['slug'], {sourceElement: 'btnMoreInitial'})
            .then( (res)=>{
                let total = res.data.data.channels_total;
                this.channels_in_category = total
                document.querySelector("option[value='0']").innerHTML = 'Все категории [' + total +']'
                this.button_visibility()
            })
        axios.post("/api/regions/" + this.region['slug'], {sourceElement: 'dropdownInitial'})
            .then( (res)=>{
                this.dropdown = res.data.data.categories
            })
    },
    updated() {
        this.button_visibility()
    },
    methods: {
        button_visibility() {
            let on_page_count = document.querySelectorAll(".peer-item-box").length
            if ( this.channels_in_category > on_page_count ) {
                document.querySelector(".lm-button-container").classList.remove("d-none")
            } else {
                document.querySelector(".lm-button-container").classList.add("d-none")
            }
        },
        category_filter() {
            this.channels_in_category = this.extract_count(this.dropdown_selected())

            let params = {
                categoryId: this.dropdown_selected().value,
                sourceElement: 'dropdown'
            };
            axios.post("/api/regions/" + this.region['slug'], params)
                .then( (res) => {
                    this.region_channels = res.data.data.channels
                })
                .catch( (err) => {
                    console.log(err)
                })
        },
        extract_count(selected_option) {
            return selected_option.innerText.split('[')[1].split(']')[0]
        },
        load_more() {
            let params = {
                page: document.querySelector("[name='page']").value,
                categoryId: this.dropdown_selected().value,
                sourceElement: 'more',
            }

            axios.post("/api/regions/" + this.region['slug'], params)
                .then( (res) => {
                    this.region_channels.push(...res.data.data.channels)
                })
                .catch( (err) => {
                    console.log(err)
                })
        },
        dropdown_selected() {
            let options = document.querySelector("[name='categoryId']").options
            let selected_index = options['selectedIndex']
            return options[selected_index]
        },
    },
}
</script>

<template>

    <Head :title=" region['friendly_title'] "/>

    <div class="row mt-3">
        <div class="col-12 col-md-9">
            <h1 class="text-dark text-center text-md-left">
                {{ region['friendly_title'] }} </h1>
            <p class="lead text-center text-md-left" style="display: none">
                Telegram-каналы Республики Тыва </p>
        </div>
        <div class="col-12 col-md-3 text-center text-md-right">
            <div class="mt-2">


                <a class="btn btn-outline-info rounded-pill px-15 popup_ajax mb-05 disabled"
                   :href="'/regions/'+ region['slug'] +'/info'" :data-src="'/regions/'+ region['slug'] +'/info'"
                   title="" data-toggle="tooltip" data-placement="top" data-original-title="Инфо о подборке">
                    <i class="uil-notes"></i>
                </a>

                <div class="dropdown d-inline-block" title="" data-toggle="tooltip" data-placement="top"
                     data-original-title="Мои подборки">
                    <button class="btn btn-outline-info rounded-pill px-15 dropdown-toggle no-arrow mb-05" type="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" disabled>
                        <i class="uil-user"></i>
                    </button>

                    <div class="dropdown-menu mt-2 max-height-320px max-width-280px overflow-y-scroll">

                        <div class="dropdown-header mt-n1 mb-n2 px-2 font-12 disabled">
                            У вас пока что нет подборок.
                        </div>

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item pl-2 popup_ajax" href="/tags/add" data-src="/tags/add">
                            <i class="uil-plus"></i> Создать подборку </a>
                    </div>
                </div>

                <!--<a class="btn btn-outline-info rounded-pill px-15 mb-05" href="#" >
                    <i class="uil-chart-line"></i>
                </a>-->

                <a class="btn btn-info rounded-pill px-15 popup_ajax mb-05 disabled"
                   :href="'/regions/'+ region['slug'] +'/add-channel'"
                   :data-src="'/regions/'+ region['slug'] +'/add-channel'" data-toggle="tooltip" data-placement="top"
                   data-original-title="Добавить канал/чат в подборку">
                    <i class="uil-plus"></i>
                </a></div>
        </div>
    </div>


    <div class="mb-3">


        <div class="mt-4" id="tag-items-list-container">


            <form id="tag-list-form" class="lm-form" autocomplete="off">

                <div class="row mb-1 mb-md-1">
                    <div class="col-12 col-sm-12 col-md-auto text-center text-sm-left text-md-left">
                        <div class="form-group mb-2">


                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-outline-dark text-truncate form-filter-js active">
                                    <input id="peerType-channel" type="radio" name="peerType" value="channel" checked=""
                                           autocomplete="off">
                                    каналы </label>
                                <label class="btn btn-outline-dark text-truncate form-filter-js">
                                    <input id="peerType-chat" type="radio" name="peerType" value="chat"
                                           autocomplete="off">
                                    чаты </label></div>
                        </div>
                    </div>


                    <div class="col-12 col-sm-6 col-md text-center text-sm-left text-md-left">

                        <div class="form-group mb-2 d-block" id="channels-sorts">


                            <div class="btn-group btn-group-toggle " data-toggle="buttons">
                                <label class="btn btn-outline-dark text-truncate form-filter-js active">
                                    <input id="sortChannel-members" type="radio" name="sortChannel" value="members"
                                           checked="" autocomplete="off">
                                    по подписчикам </label>
                                <label class="btn btn-outline-dark text-truncate form-filter-js">
                                    <input id="sortChannel-ci" type="radio" name="sortChannel" value="ci"
                                           autocomplete="off">
                                    по цитируемости </label></div>
                        </div>


                        <div class="form-group mb-2 d-none" id="chats-sorts">


                            <div class="btn-group btn-group-toggle " data-toggle="buttons">
                                <label class="btn btn-outline-dark text-truncate form-filter-js active">
                                    <input id="sortChat-members" type="radio" name="sortChat" value="members" checked=""
                                           autocomplete="off">
                                    по участникам </label>
                                <label class="btn btn-outline-dark text-truncate form-filter-js">
                                    <input id="sortChat-mau" type="radio" name="sortChat" value="mau"
                                           autocomplete="off">
                                    по активности </label></div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md text-center text-sm-right text-md-right">
                        <div class="form-group field-categoryid">





                            <select @change="category_filter($event)" id="categoryid"
                                    class="form-control custom-select max-width-320px" name="categoryId" >
                                <option value="0" >Все категории</option>

                                <option v-for="category in dropdown" :value="category['slug']">{{ category['friendly'] }}</option>

                            </select>


                            <p class="help-block help-block-error"></p>                        </div></div></div>





                <div class="row justify-content-center lm-list-container">

                    <div v-for="channel in region_channels" class="col-12 col-sm-6 col-lg-4">

                        <OneChannelCard :channel="channel" />                        </div></div>





                <div class="d-flex justify-content-center">
                    <div class="lm-button-container mt-2 d-none">
                        <button @click="load_more($event)"
                                class="btn btn-light border lm-button py-1 min-width-220px" type="button" >
                            Показать больше
                        </button>

                        <span class="lm-loader d-none spinner-border spinner-border-sm mr-1" role="status"
                              aria-hidden="true"></span></div>
                </div>

                <input type="hidden" class="lm-page" name="page" value="1">
                <input type="hidden" class="lm-offset" name="offset" value="0">

            </form>
        </div>


    </div>

</template>

<style scoped>

</style>
