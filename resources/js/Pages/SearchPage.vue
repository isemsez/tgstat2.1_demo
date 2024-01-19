<script>
import SearchResultsContainer from "@/Pages/Components/SearchResultsContainer.vue";
import {Head} from "@inertiajs/vue3";
import axios from "axios";
import Select2 from "@/Pages/Components/Select2.vue";

$(document).ready(function() {
    $('.select2-multiple').select2();
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
                                            <input type="hidden" name="categories" value="">



                                            <Select2 multiple :options="dropdown_data" v-model="form.categories" />




                                            <p class="help-block help-block-error"></p>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-12 d-none">
                                        <div class="form-group field-countries">
                                            <label class="control-label" for="countries">
                                                Страна канала</label>
                                            <input type="hidden" name="countries" value="">
                                            <select id="countries"
                                                    class="select2 form-control select2-multiple"
                                                    name="countries[]" multiple size="1" data-toggle="select2"
                                                    data-placeholder="Страна канала" data-default='[1]'>
                                            <option value="1" selected>Россия</option>
                                            <option value="2">Украина</option>
                                            <option value="4">Узбекистан</option>
                                            <option value="3">Беларусь</option>
                                            <option value="5">Казахстан</option>
                                            <option value="7">Киргизия</option>
                                            <option value="6">Иран</option>
                                            <option value="8">Индия</option>
                                            <option value="10">Китай</option>
                                            <option value="11">Эфиопия</option>
                                            <option value="57">Австрия</option>
                                            <option value="25">Азербайджан</option>
                                            <option value="58">Албания</option>
                                            <option value="59">Аргентина</option>
                                            <option value="27">Армения</option>
                                            <option value="52">Бангладеш</option>
                                            <option value="36">Болгария</option>
                                            <option value="15">Бразилия</option>
                                            <option value="29">Великобритания</option>
                                            <option value="60">Венесуэла</option>
                                            <option value="19">Вьетнам</option>
                                            <option value="16">Германия</option>
                                            <option value="72">Греция</option>
                                            <option value="41">Грузия</option>
                                            <option value="61">Дания</option>
                                            <option value="62">Египет</option>
                                            <option value="22">Израиль</option>
                                            <option value="17">Индонезия</option>
                                            <option value="34">Ирак</option>
                                            <option value="63">Ирландия</option>
                                            <option value="12">Испания</option>
                                            <option value="13">Италия</option>
                                            <option value="64">Йемен</option>
                                            <option value="42">Камбоджа</option>
                                            <option value="54">Канада</option>
                                            <option value="21">Корея</option>
                                            <option value="65">Куба</option>
                                            <option value="49">Латвия</option>
                                            <option value="43">Литва</option>
                                            <option value="18">Малайзия</option>
                                            <option value="66">Мексика</option>
                                            <option value="47">Молдавия</option>
                                            <option value="45">Мьянма</option>
                                            <option value="39">Нидерланды</option>
                                            <option value="37">Норвегия</option>
                                            <option value="48">ОАЭ</option>
                                            <option value="67">Пакистан</option>
                                            <option value="32">Польша</option>
                                            <option value="14">Португалия</option>
                                            <option value="30">Румыния</option>
                                            <option value="68">Саудовская Аравия</option>
                                            <option value="35">Сербия</option>
                                            <option value="28">Сингапур</option>
                                            <option value="69">Сирия</option>
                                            <option value="56">Словакия</option>
                                            <option value="70">Словения</option>
                                            <option value="31">Сомали</option>
                                            <option value="9">США</option>
                                            <option value="26">Таджикистан</option>
                                            <option value="20">Тайланд</option>
                                            <option value="44">Танзания</option>
                                            <option value="23">Турция</option>
                                            <option value="40">Филиппины</option>
                                            <option value="50">Финляндия</option>
                                            <option value="24">Франция</option>
                                            <option value="55">Черногория</option>
                                            <option value="53">Чехия</option>
                                            <option value="71">Швейцария</option>
                                            <option value="46">Швеция</option>
                                            <option value="51">Шри-Ланка</option>
                                            <option value="38">Эстония</option>
                                            <option value="33">Япония</option>
                                        </select>

                                            <p class="help-block help-block-error"></p>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-12 d-none">
                                        <div class="form-group field-languages">
                                            <label class="control-label" for="languages">Язык канала</label>
                                            <input type="hidden" name="languages" value=""><select
                                            id="languages" class="select2 form-control select2-multiple"
                                            name="languages[]" multiple size="1" data-toggle="select2"
                                            data-placeholder="Язык канала">
                                            <option value="3">Русский</option>
                                            <option value="12">Английский</option>
                                            <option value="13">Узбекский</option>
                                            <option value="42">Украинский</option>
                                            <option value="51">Казахский</option>
                                            <option value="54">Белорусский</option>
                                            <option value="2">Фарси</option>
                                            <option value="52">Хинди</option>
                                            <option value="55">Китайский</option>
                                            <option value="56">Тамильский</option>
                                            <option value="57">Амхарский</option>
                                            <option value="90">Абхазский</option>
                                            <option value="85">Аварский</option>
                                            <option value="40">Азербайджанский</option>
                                            <option value="19">Албанский</option>
                                            <option value="9">Арабский</option>
                                            <option value="62">Армянский</option>
                                            <option value="91">Башкирский</option>
                                            <option value="50">Бенгальский</option>
                                            <option value="77">Бирманский</option>
                                            <option value="21">Болгарский</option>
                                            <option value="48">Венгерский</option>
                                            <option value="41">Вьетнамский</option>
                                            <option value="36">Гавайский</option>
                                            <option value="74">Грузинский</option>
                                            <option value="69">Гуджарати</option>
                                            <option value="25">Датский</option>
                                            <option value="64">Иврит</option>
                                            <option value="7">Индонезийский</option>
                                            <option value="45">Исландский</option>
                                            <option value="18">Испанский</option>
                                            <option value="8">Итальянский</option>
                                            <option value="80">Каннада</option>
                                            <option value="72">Каталанский</option>
                                            <option value="46">Киргизский</option>
                                            <option value="66">Корейский</option>
                                            <option value="75">Кхмерский</option>
                                            <option value="15">Латинский</option>
                                            <option value="43">Латышский</option>
                                            <option value="34">Литовский</option>
                                            <option value="44">Македонский</option>
                                            <option value="67">Малайский</option>
                                            <option value="84">Малаялам</option>
                                            <option value="81">Маратхи</option>
                                            <option value="49">Монгольский</option>
                                            <option value="31">Немецкий</option>
                                            <option value="71">Нидерландский</option>
                                            <option value="32">Норвежский</option>
                                            <option value="82">Ория</option>
                                            <option value="83">Панджаби</option>
                                            <option value="5">Пиджин</option>
                                            <option value="11">Польский</option>
                                            <option value="14">Португальский</option>
                                            <option value="6">Пушту</option>
                                            <option value="17">Румынский</option>
                                            <option value="29">Себуано</option>
                                            <option value="30">Сербский</option>
                                            <option value="78">Сингальский</option>
                                            <option value="39">Словацкий</option>
                                            <option value="26">Словенский</option>
                                            <option value="28">Сомалийский</option>
                                            <option value="76">Суахили</option>
                                            <option value="35">Суахили</option>
                                            <option value="24">Тагалог</option>
                                            <option value="68">Таджикский</option>
                                            <option value="65">Тайский</option>
                                            <option value="70">Татарский</option>
                                            <option value="79">Телугу</option>
                                            <option value="16">Турецкий</option>
                                            <option value="88">Туркменский</option>
                                            <option value="4">Урду</option>
                                            <option value="27">Уэльский</option>
                                            <option value="73">Филиппинский</option>
                                            <option value="33">Финский</option>
                                            <option value="23">Французский</option>
                                            <option value="10">Хауса</option>
                                            <option value="38">Хорватский</option>
                                            <option value="87">Чеченский</option>
                                            <option value="47">Чешский</option>
                                            <option value="37">Шведский</option>
                                            <option value="86">Эсперанто</option>
                                            <option value="20">Эстонский</option>
                                            <option value="89">Якутский</option>
                                            <option value="53">Японский</option>
                                        </select>

                                            <p class="help-block help-block-error"></p>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-12 d-none">
                                        <div class="form-group field-channeltype">
                                            <label class="control-label" for="channeltype">Тип
                                                канала</label>
                                            <select id="channeltype"
                                                    class="form-control custom-select height39"
                                                    name="channelType" data-default="">
                                                <option value="" selected>любой</option>
                                                <option value="public">публичный</option>
                                                <option value="private">приватный</option>
                                            </select>

                                            <p class="help-block help-block-error"></p>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-12 d-none">
                                        <div class="form-group field-age">
                                            <label class="control-label" for="age">Возраст канала от
                                                (мес.)</label>
                                            <input type="text" id="age" class="form-control" name="age"
                                                   data-plugin="range-slider" data-min="0" data-max="36"
                                                   data-postfix="+" data-input_values_separator="-">

                                            <p class="help-block help-block-error"></p>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-12 d-none">
                                        <div class="form-group field-err">
                                            <label class="control-label" for="err">Уровень вовлеченности
                                                (ERR)</label>
                                            <input type="text" id="err" class="form-control" name="err"
                                                   data-plugin="range-slider" data-min="0" data-max="100"
                                                   data-prefix="&gt; " data-postfix="%" data-max_postfix="+"
                                                   data-step="5">

                                            <p class="help-block help-block-error"></p>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-12 d-none">
                                        <div class="form-group field-er">
                                            <label class="control-label" for="er">Уровень вовлеченности
                                                (ER)</label>
                                            <input type="text" id="er" class="form-control" name="er"
                                                   data-plugin="range-slider" data-min="0" data-max="10"
                                                   data-prefix="&gt; " data-postfix="%" data-max_postfix="+"
                                                   data-step="0.5">

                                            <p class="help-block help-block-error"></p>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-12 d-none">
                                        <div class="form-group field-male">
                                            <label class="control-label" for="male">Мужская
                                                аудитория</label>
                                            <input type="text" id="male" class="form-control" name="male"
                                                   data-plugin="range-slider" data-min="0" data-max="90"
                                                   data-prefix="&gt; " data-postfix="%" data-step="5">

                                            <p class="help-block help-block-error"></p>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-12 d-none">
                                        <div class="form-group field-female">
                                            <label class="control-label" for="female">Женская
                                                аудитория</label>
                                            <input type="text" id="female" class="form-control"
                                                   name="female" data-plugin="range-slider" data-min="0"
                                                   data-max="90" data-prefix="&gt; " data-postfix="%"
                                                   data-step="5">

                                            <p class="help-block help-block-error"></p>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-12 d-none">


                                        <div class="form-group">
                                            <label class="control-label"
                                                   for="participants">Подписчиков</label>
                                            <div class="input-group input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text px-1">от</span>
                                                </div>
                                                <input type="text" id="participantscountfrom"
                                                       class="form-control font-16 font-sm-14 px-15"
                                                       name="participantsCountFrom" placeholder="от">
                                                <div class="input-group-append input-group-prepend">
                                                    <span class="input-group-text px-1">до</span>
                                                </div>
                                                <input type="text" id="participantscountto"
                                                       class="form-control font-16 font-sm-14 px-15"
                                                       name="participantsCountTo" placeholder="до"></div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-12 d-none">


                                        <div class="form-group">
                                            <label class="control-label" for="participants">Средний охват
                                                поста</label>
                                            <div class="input-group input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text px-1">от</span>
                                                </div>
                                                <input type="text" id="avgreachfrom"
                                                       class="form-control font-16 font-sm-14 px-15"
                                                       name="avgReachFrom" placeholder="от">
                                                <div class="input-group-append input-group-prepend">
                                                    <span class="input-group-text px-1">до</span>
                                                </div>
                                                <input type="text" id="avgreachto"
                                                       class="form-control font-16 font-sm-14 px-15"
                                                       name="avgReachTo" placeholder="до"></div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-12 d-none">


                                        <div class="form-group">
                                            <label class="control-label" for="participants">Средний охват
                                                поста (24 часа)</label>
                                            <div class="input-group input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text px-1">от</span>
                                                </div>
                                                <input type="text" id="avgreach24from"
                                                       class="form-control font-16 font-sm-14 px-15"
                                                       name="avgReach24From" placeholder="от">
                                                <div class="input-group-append input-group-prepend">
                                                    <span class="input-group-text px-1">до</span>
                                                </div>
                                                <input type="text" id="avgreach24to"
                                                       class="form-control font-16 font-sm-14 px-15"
                                                       name="avgReach24To" placeholder="до"></div>
                                        </div>
                                    </div>


                                    <div class="col-12 col-sm-6 col-md-12 d-none">


                                        <div class="form-group">
                                            <label class="control-label" for="participants">Индекс
                                                цитирования (ИЦ)</label>
                                            <div class="input-group input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text px-1">от</span>
                                                </div>
                                                <input type="text" id="cifrom"
                                                       class="form-control font-16 font-sm-14 px-15"
                                                       name="ciFrom" placeholder="от">
                                                <div class="input-group-append input-group-prepend">
                                                    <span class="input-group-text px-1">до</span>
                                                </div>
                                                <input type="text" id="cito"
                                                       class="form-control font-16 font-sm-14 px-15"
                                                       name="ciTo" placeholder="до"></div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <hr>
                                    </div>

                                    <div class="col-12 d-none">
                                        <div class="mb-n2">
                                            <div class="form-group field-isverified">
                                                <div class="custom-control custom-checkbox"><input
                                                    type="hidden" name="isVerified" value="0"><input
                                                    type="checkbox" id="isverified"
                                                    class="custom-control-input" name="isVerified"
                                                    value="1" data-default="0"><label
                                                    class="custom-control-label" for="isverified">Верифицированный
                                                    <i class="tg-verified-icon"></i></label>
                                                    <p class="help-block help-block-error"></p></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <hr>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-12 d-none">
                                        <div class="mb-n2">
                                            <div class="form-group field-noredlabel">
                                                <div class="custom-control custom-checkbox"><input
                                                    type="hidden" name="noRedLabel" value="0"><input
                                                    type="checkbox" id="noredlabel"
                                                    class="custom-control-input" name="noRedLabel"
                                                    value="1" checked data-default="1"><label
                                                    class="custom-control-label" for="noredlabel">Без
                                                    красной метки</label>
                                                    <p class="help-block help-block-error"></p></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-12 d-none">
                                        <div class="mb-n2">
                                            <div class="form-group field-noscam">
                                                <div class="custom-control custom-checkbox"><input
                                                    type="hidden" name="noScam" value="0"><input
                                                    type="checkbox" id="noscam"
                                                    class="custom-control-input" name="noScam" value="1"
                                                    checked data-default="1"><label
                                                    class="custom-control-label" for="noscam">Без метки
                                                    SCAM/FAKE</label>
                                                    <p class="help-block help-block-error"></p></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-12 d-none">
                                        <div class="mb-n2">
                                            <div class="form-group field-nodead">
                                                <div class="custom-control custom-checkbox"><input
                                                    type="hidden" name="noDead" value="0"><input
                                                    type="checkbox" id="nodead"
                                                    class="custom-control-input" name="noDead" value="1"
                                                    checked data-default="1"><label
                                                    class="custom-control-label" for="nodead">Скрывать
                                                    &quot;мертвые&quot;</label>
                                                    <p class="help-block help-block-error"></p></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <hr>

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
