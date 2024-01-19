<script>
import OneChannelCard from "@/Pages/Components/OneChannelCard.vue";
import Flags from "@/Pages/Components/Flags.vue";
import ChooseCategoryCard from "@/Pages/Components/ChooseCategoryCard.vue";
import {Head} from "@inertiajs/vue3";

export default {
    name: "CategoryPage",
    components: {Head, ChooseCategoryCard, OneChannelCard, Flags},
    props: {
        data: Array,
    },
    computed: {
        current_page() { return route().current() },
    },
}
</script>

<template>

    <Head :title="data['friendly_title']" />

    <h3 class="text-dark mt-4 text-center" style="display: none">
        Каталог Telegram-каналов и чатов</h3>

    <h1 class="text-dark mt-2 text-center">
        {{ data['friendly_title'] }}</h1>


    <Flags />



    <div class="my-3 position-relative" style="display: none">
        <div class="mx-n2 mx-md-n2 mx-lg-n2 slider-editors-choice slick-initialized slick-slider" data-slick="{&quot;autoplay&quot;:true,&quot;autoplaySpeed&quot;:4000,&quot;dots&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:500,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;dots&quot;:false,&quot;centerMode&quot;:true}},{&quot;breakpoint&quot;:576,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;dots&quot;:false,&quot;centerMode&quot;:true}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;arrows&quot;:false,&quot;dots&quot;:false,&quot;centerMode&quot;:false}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;arrows&quot;:true,&quot;dots&quot;:false,&quot;centerMode&quot;:false}},{&quot;breakpoint&quot;:1100,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;arrows&quot;:true,&quot;dots&quot;:false}}]}"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 6612px; transform: translate3d(-2436px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-6 col-lg-4 slick-slider-item" style="width: 100%; display: inline-block;">



            <div class="card card-body py-2 m-0 card-shadow-12px border height-193px overflow-y-hidden">
                <a href="https://tgstat.ru/channel/@psyxotest" class="text-body h-100" data-cid="7547311" tabindex="-1">
                    <div class="row h-100">
                        <div class="col-12 height-38px">
                            <div class="h4 text-truncate text-dark">🇰🇿Акедиль - поможет тебе!</div>
                        </div>
                        <div class="col-7 height-120px d-flex flex-column justify-content-between">
                            <div>
                                <div class="font-14 height-42px overflow-y-hidden">Практические решения конфликтных ситуаций в семье</div>
                            </div>
                            <div class="mt-3">
                                <div class="font-12 text-dark">
                                    Психология&nbsp;
                                </div>
                                <div class="font-14 text-truncate">
                                    <b>103 116</b> подписчиков
                                </div>
                            </div>
                        </div>
                        <div class="col-5 height-120px text-right">
                            <img src="//static1.tgstat.ru/channels/_0/f5/f5ead0ea6515a30210de19a35f3b80d0.jpg" class="img-thumbnail rounded-circle d-inline-block max-height-110px mt-n1">            </div>
                    </div>
                </a>
            </div>


        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-6 col-lg-4 slick-slider-item" style="width: 100%; display: inline-block;">



            <div class="card card-body py-2 m-0 card-shadow-12px border height-193px overflow-y-hidden">
                <a href="https://tgstat.ru/channel/@psycanal" class="text-body h-100" data-cid="187909" tabindex="-1">
                    <div class="row h-100">
                        <div class="col-12 height-38px">
                            <div class="h4 text-truncate text-dark">ПСИХО</div>
                        </div>
                        <div class="col-7 height-120px d-flex flex-column justify-content-between">
                            <div>
                                <div class="font-14 height-42px overflow-y-hidden">Авторский блог врача-психотерапевта Войтович Н.В.</div>
                            </div>
                            <div class="mt-3">
                                <div class="font-12 text-dark">
                                    Психология&nbsp;
                                </div>
                                <div class="font-14 text-truncate">
                                    <b>23 165</b> подписчиков
                                </div>
                            </div>
                        </div>
                        <div class="col-5 height-120px text-right">
                            <img src="//static5.tgstat.ru/channels/_0/33/33d25d16b0bc9fa6370dc10409aa1d60.jpg" class="img-thumbnail rounded-circle d-inline-block max-height-110px mt-n1">            </div>
                    </div>
                </a>
            </div>


        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-6 col-lg-4 slick-slider-item" style="width: 100%; display: inline-block;">



            <div class="card card-body py-2 m-0 card-shadow-12px border height-193px overflow-y-hidden">
                <a href="https://tgstat.ru/channel/@evo_lutio" class="text-body h-100" data-cid="116098" tabindex="-1">
                    <div class="row h-100">
                        <div class="col-12 height-38px">
                            <div class="h4 text-truncate text-dark">Эволюция</div>
                        </div>
                        <div class="col-7 height-120px d-flex flex-column justify-content-between">
                            <div>
                                <div class="font-14 height-42px overflow-y-hidden">Саморазвитие и прокачка ресурсов</div>
                            </div>
                            <div class="mt-3">
                                <div class="font-12 text-dark">
                                    Психология&nbsp;
                                </div>
                                <div class="font-14 text-truncate">
                                    <b>46 454</b> подписчиков
                                </div>
                            </div>
                        </div>
                        <div class="col-5 height-120px text-right">
                            <img src="//static10.tgstat.ru/channels/_0/58/58b2fb7c6c464b5091c7edadeca5e4ab.jpg" class="img-thumbnail rounded-circle d-inline-block max-height-110px mt-n1">            </div>
                    </div>
                </a>
            </div>


        </div></div></div><div class="slick-slide" data-slick-index="0" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-6 col-lg-4 slick-slider-item sp-block" style="width: 100%; display: inline-block;">


            <div class="card card-body py-2 m-0 card-shadow-12px border height-193px overflow-y-hidden">
                <a href="https://taplink.cc/nemilin_bot?erid=5jtCeReNwy8YvojzDaKLkgW" class="text-body h-100" data-src="https://taplink.cc/nemilin_bot?erid=5jtCeReNwy8YvojzDaKLkgW" data-cid="106377" tabindex="-1">
                    <div class="row h-100">
                        <div class="col-12 height-38px">
                            <h4 class="text-dark text-truncate ">
                                Создай свой платный канал                </h4>
                        </div>
                        <div class="col-7 height-120px d-flex flex-column justify-content-between">
                            <div class="font-14 line-clamp-3 ">
                                Сделай вход на свой telegram канал платным                </div>
                            <div class="mt-2">
                                <button class="btn btn-light text-truncate " tabindex="-1">
                                    Подробнее                    </button>
                                <div class="position-absolute p0x"><img width="1" height="1" src="/hit.php?t=h&amp;a=106377&amp;r=0.5385108483228684"></div>
                            </div>
                        </div>
                        <div class="col-5 height-120px text-right">
                            <img alt="img" src="//static10.tgstat.ru/cr/_200/95/95d650a605052243fb6bca623aad625a.jpg" class="rounded-circle d-inline-block img-thumbnail max-height-110px mt-n1 ">
                        </div>
                    </div>
                </a>
                <div class="position-absolute text-dark font-12" style="bottom:5px; right:10px">
                    <a data-src="/ads/106377/info" href="#" class="text-muted popup_ajax" tabindex="-1">
                        <i class="uil-info-circle"></i>реклама        </a>
                </div>
            </div>
        </div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-6 col-lg-4 slick-slider-item sp-block" style="width: 100%; display: inline-block;">


            <div class="card card-body py-2 m-0 card-shadow-12px border height-193px overflow-y-hidden">
                <a href="https://t.me/budni_media/48?erid=5jtCeReNwy8YvojzDgoucG1" class="text-body h-100" data-src="https://t.me/budni_media/48?erid=5jtCeReNwy8YvojzDgoucG1" data-cid="114372" tabindex="-1">
                    <div class="row h-100">
                        <div class="col-12 height-38px">
                            <h4 class="text-dark text-truncate ">
                                Маркировка рекламы в ТГ                </h4>
                        </div>
                        <div class="col-7 height-120px d-flex flex-column justify-content-between">
                            <div class="font-14 line-clamp-3 ">
                                Разбор первого штрафа на 1,8 млн рублей                </div>
                            <div class="mt-2">
                                <button class="btn btn-light text-truncate " tabindex="-1">
                                    Читать                    </button>
                                <div class="position-absolute p0x"><img width="1" height="1" src="/hit.php?t=h&amp;a=114372&amp;r=0.8371218397885121"></div>
                            </div>
                        </div>
                        <div class="col-5 height-120px text-right">
                            <img alt="img" src="//static10.tgstat.ru/cr/_200/f5/f50d0cc3643c77dd36dd0fa7aa4eec4e.jpg" class="rounded-circle d-inline-block img-thumbnail max-height-110px mt-n1 ">
                        </div>
                    </div>
                </a>
                <div class="position-absolute text-dark font-12" style="bottom:5px; right:10px">
                    <a data-src="/ads/114372/info" href="#" class="text-muted popup_ajax" tabindex="-1">
                        <i class="uil-info-circle"></i>реклама        </a>
                </div>
            </div>
        </div></div></div><div class="slick-slide" data-slick-index="2" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-6 col-lg-4 slick-slider-item sp-block" style="width: 100%; display: inline-block;">


            <div class="card card-body py-2 m-0 card-shadow-12px border height-193px overflow-y-hidden">
                <a href="https://t.me/poetmatershchinnick" class="text-body h-100" data-src="https://t.me/poetmatershchinnick" data-cid="114035" tabindex="-1">
                    <div class="row h-100">
                        <div class="col-12 height-38px">
                            <h4 class="text-dark text-truncate ">
                                Приключения Элли и её друзей                </h4>
                        </div>
                        <div class="col-7 height-120px d-flex flex-column justify-content-between">
                            <div class="font-14 line-clamp-3 ">
                                Новое прочтение известной сказки                </div>
                            <div class="mt-2">
                                <button class="btn btn-light text-truncate " tabindex="-1">
                                    Хочу посмотреть                    </button>
                                <div class="position-absolute p0x"><img width="1" height="1" src="/hit.php?t=h&amp;a=114035&amp;r=0.8260496796642681"></div>
                            </div>
                        </div>
                        <div class="col-5 height-120px text-right">
                            <img alt="img" src="//static10.tgstat.ru/cr/_200/23/2310bc6741424276526396077c90ad0b.jpg" class="rounded-circle d-inline-block img-thumbnail max-height-110px mt-n1 ">
                        </div>
                    </div>
                </a>
                <div class="position-absolute text-dark font-12" style="bottom:5px; right:10px">
                    <a data-src="/ads/114035/info" href="#" class="text-muted popup_ajax" tabindex="-1">
                        <i class="uil-info-circle"></i>реклама        </a>
                </div>
            </div>
        </div></div></div><div class="slick-slide" data-slick-index="3" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-6 col-lg-4 slick-slider-item" style="width: 100%; display: inline-block;">



            <div class="card card-body py-2 m-0 card-shadow-12px border height-193px overflow-y-hidden">
                <a href="https://tgstat.ru/channel/@dianalysis" class="text-body h-100" data-cid="381" tabindex="-1">
                    <div class="row h-100">
                        <div class="col-12 height-38px">
                            <div class="h4 text-truncate text-dark">Дневник психотерапевта</div>
                        </div>
                        <div class="col-7 height-120px d-flex flex-column justify-content-between">
                            <div>
                                <div class="font-14 height-42px overflow-y-hidden">Канал психотерапевта Алексея Карачинского</div>
                            </div>
                            <div class="mt-3">
                                <div class="font-12 text-dark">
                                    Психология&nbsp;
                                </div>
                                <div class="font-14 text-truncate">
                                    <b>41 196</b> подписчиков
                                </div>
                            </div>
                        </div>
                        <div class="col-5 height-120px text-right">
                            <img src="//static6.tgstat.ru/channels/_0/00/00ec53c4682d36f5c4359f4ae7bd7ba1.jpg" class="img-thumbnail rounded-circle d-inline-block max-height-110px mt-n1">            </div>
                    </div>
                </a>
            </div>


        </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="4" aria-hidden="false" style="width: 348px;"><div><div class="col-12 col-sm-6 col-md-6 col-lg-4 slick-slider-item" style="width: 100%; display: inline-block;">



            <div class="card card-body py-2 m-0 card-shadow-12px border height-193px overflow-y-hidden">
                <a href="https://tgstat.ru/channel/@PsyEducation" class="text-body h-100" data-cid="557" tabindex="0">
                    <div class="row h-100">
                        <div class="col-12 height-38px">
                            <div class="h4 text-truncate text-dark">Психология</div>
                        </div>
                        <div class="col-7 height-120px d-flex flex-column justify-content-between">
                            <div>
                                <div class="font-14 height-42px overflow-y-hidden">Канал о психологии мышления и поведения</div>
                            </div>
                            <div class="mt-3">
                                <div class="font-12 text-dark">
                                    Психология&nbsp;
                                </div>
                                <div class="font-14 text-truncate">
                                    <b>83 847</b> подписчиков
                                </div>
                            </div>
                        </div>
                        <div class="col-5 height-120px text-right">
                            <img src="//static2.tgstat.ru/channels/_0/6e/6e2713a6efee97bacb63e52c54f0ada0.jpg" class="img-thumbnail rounded-circle d-inline-block max-height-110px mt-n1">            </div>
                    </div>
                </a>
            </div>


        </div></div></div><div class="slick-slide slick-active" data-slick-index="5" aria-hidden="false" style="width: 348px;"><div><div class="col-12 col-sm-6 col-md-6 col-lg-4 slick-slider-item" style="width: 100%; display: inline-block;">



            <div class="card card-body py-2 m-0 card-shadow-12px border height-193px overflow-y-hidden">
                <a href="https://tgstat.ru/channel/@psyxotest" class="text-body h-100" data-cid="7547311" tabindex="0">
                    <div class="row h-100">
                        <div class="col-12 height-38px">
                            <div class="h4 text-truncate text-dark">🇰🇿Акедиль - поможет тебе!</div>
                        </div>
                        <div class="col-7 height-120px d-flex flex-column justify-content-between">
                            <div>
                                <div class="font-14 height-42px overflow-y-hidden">Практические решения конфликтных ситуаций в семье</div>
                            </div>
                            <div class="mt-3">
                                <div class="font-12 text-dark">
                                    Психология&nbsp;
                                </div>
                                <div class="font-14 text-truncate">
                                    <b>103 116</b> подписчиков
                                </div>
                            </div>
                        </div>
                        <div class="col-5 height-120px text-right">
                            <img src="//static1.tgstat.ru/channels/_0/f5/f5ead0ea6515a30210de19a35f3b80d0.jpg" class="img-thumbnail rounded-circle d-inline-block max-height-110px mt-n1">            </div>
                    </div>
                </a>
            </div>


        </div></div></div><div class="slick-slide slick-active" data-slick-index="6" aria-hidden="false" style="width: 348px;"><div><div class="col-12 col-sm-6 col-md-6 col-lg-4 slick-slider-item" style="width: 100%; display: inline-block;">



            <div class="card card-body py-2 m-0 card-shadow-12px border height-193px overflow-y-hidden">
                <a href="https://tgstat.ru/channel/@psycanal" class="text-body h-100" data-cid="187909" tabindex="0">
                    <div class="row h-100">
                        <div class="col-12 height-38px">
                            <div class="h4 text-truncate text-dark">ПСИХО</div>
                        </div>
                        <div class="col-7 height-120px d-flex flex-column justify-content-between">
                            <div>
                                <div class="font-14 height-42px overflow-y-hidden">Авторский блог врача-психотерапевта Войтович Н.В.</div>
                            </div>
                            <div class="mt-3">
                                <div class="font-12 text-dark">
                                    Психология&nbsp;
                                </div>
                                <div class="font-14 text-truncate">
                                    <b>23 165</b> подписчиков
                                </div>
                            </div>
                        </div>
                        <div class="col-5 height-120px text-right">
                            <img src="//static5.tgstat.ru/channels/_0/33/33d25d16b0bc9fa6370dc10409aa1d60.jpg" class="img-thumbnail rounded-circle d-inline-block max-height-110px mt-n1">            </div>
                    </div>
                </a>
            </div>


        </div></div></div><div class="slick-slide" data-slick-index="7" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-6 col-lg-4 slick-slider-item" style="width: 100%; display: inline-block;">



            <div class="card card-body py-2 m-0 card-shadow-12px border height-193px overflow-y-hidden">
                <a href="https://tgstat.ru/channel/@evo_lutio" class="text-body h-100" data-cid="116098" tabindex="-1">
                    <div class="row h-100">
                        <div class="col-12 height-38px">
                            <div class="h4 text-truncate text-dark">Эволюция</div>
                        </div>
                        <div class="col-7 height-120px d-flex flex-column justify-content-between">
                            <div>
                                <div class="font-14 height-42px overflow-y-hidden">Саморазвитие и прокачка ресурсов</div>
                            </div>
                            <div class="mt-3">
                                <div class="font-12 text-dark">
                                    Психология&nbsp;
                                </div>
                                <div class="font-14 text-truncate">
                                    <b>46 454</b> подписчиков
                                </div>
                            </div>
                        </div>
                        <div class="col-5 height-120px text-right">
                            <img src="//static10.tgstat.ru/channels/_0/58/58b2fb7c6c464b5091c7edadeca5e4ab.jpg" class="img-thumbnail rounded-circle d-inline-block max-height-110px mt-n1">            </div>
                    </div>
                </a>
            </div>


        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="8" id="" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-6 col-lg-4 slick-slider-item sp-block" style="width: 100%; display: inline-block;">


            <div class="card card-body py-2 m-0 card-shadow-12px border height-193px overflow-y-hidden">
                <a href="https://taplink.cc/nemilin_bot?erid=5jtCeReNwy8YvojzDaKLkgW" class="text-body h-100" data-src="https://taplink.cc/nemilin_bot?erid=5jtCeReNwy8YvojzDaKLkgW" data-cid="106377" tabindex="-1">
                    <div class="row h-100">
                        <div class="col-12 height-38px">
                            <h4 class="text-dark text-truncate ">
                                Создай свой платный канал                </h4>
                        </div>
                        <div class="col-7 height-120px d-flex flex-column justify-content-between">
                            <div class="font-14 line-clamp-3 ">
                                Сделай вход на свой telegram канал платным                </div>
                            <div class="mt-2">
                                <button class="btn btn-light text-truncate " tabindex="-1">
                                    Подробнее                    </button>
                                <div class="position-absolute p0x"></div>
                            </div>
                        </div>
                        <div class="col-5 height-120px text-right">
                            <img alt="img" src="//static10.tgstat.ru/cr/_200/95/95d650a605052243fb6bca623aad625a.jpg" class="rounded-circle d-inline-block img-thumbnail max-height-110px mt-n1 ">
                        </div>
                    </div>
                </a>
                <div class="position-absolute text-dark font-12" style="bottom:5px; right:10px">
                    <a data-src="/ads/106377/info" href="#" class="text-muted popup_ajax" tabindex="-1">
                        <i class="uil-info-circle"></i>реклама        </a>
                </div>
            </div>
        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-6 col-lg-4 slick-slider-item sp-block" style="width: 100%; display: inline-block;">


            <div class="card card-body py-2 m-0 card-shadow-12px border height-193px overflow-y-hidden">
                <a href="https://t.me/budni_media/48?erid=5jtCeReNwy8YvojzDgoucG1" class="text-body h-100" data-src="https://t.me/budni_media/48?erid=5jtCeReNwy8YvojzDgoucG1" data-cid="114372" tabindex="-1">
                    <div class="row h-100">
                        <div class="col-12 height-38px">
                            <h4 class="text-dark text-truncate ">
                                Маркировка рекламы в ТГ                </h4>
                        </div>
                        <div class="col-7 height-120px d-flex flex-column justify-content-between">
                            <div class="font-14 line-clamp-3 ">
                                Разбор первого штрафа на 1,8 млн рублей                </div>
                            <div class="mt-2">
                                <button class="btn btn-light text-truncate " tabindex="-1">
                                    Читать                    </button>
                                <div class="position-absolute p0x"></div>
                            </div>
                        </div>
                        <div class="col-5 height-120px text-right">
                            <img alt="img" src="//static10.tgstat.ru/cr/_200/f5/f50d0cc3643c77dd36dd0fa7aa4eec4e.jpg" class="rounded-circle d-inline-block img-thumbnail max-height-110px mt-n1 ">
                        </div>
                    </div>
                </a>
                <div class="position-absolute text-dark font-12" style="bottom:5px; right:10px">
                    <a data-src="/ads/114372/info" href="#" class="text-muted popup_ajax" tabindex="-1">
                        <i class="uil-info-circle"></i>реклама        </a>
                </div>
            </div>
        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="10" id="" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-6 col-lg-4 slick-slider-item sp-block" style="width: 100%; display: inline-block;">


            <div class="card card-body py-2 m-0 card-shadow-12px border height-193px overflow-y-hidden">
                <a href="https://t.me/poetmatershchinnick" class="text-body h-100" data-src="https://t.me/poetmatershchinnick" data-cid="114035" tabindex="-1">
                    <div class="row h-100">
                        <div class="col-12 height-38px">
                            <h4 class="text-dark text-truncate ">
                                Приключения Элли и её друзей                </h4>
                        </div>
                        <div class="col-7 height-120px d-flex flex-column justify-content-between">
                            <div class="font-14 line-clamp-3 ">
                                Новое прочтение известной сказки                </div>
                            <div class="mt-2">
                                <button class="btn btn-light text-truncate " tabindex="-1">
                                    Хочу посмотреть                    </button>
                                <div class="position-absolute p0x"></div>
                            </div>
                        </div>
                        <div class="col-5 height-120px text-right">
                            <img alt="img" src="//static10.tgstat.ru/cr/_200/23/2310bc6741424276526396077c90ad0b.jpg" class="rounded-circle d-inline-block img-thumbnail max-height-110px mt-n1 ">
                        </div>
                    </div>
                </a>
                <div class="position-absolute text-dark font-12" style="bottom:5px; right:10px">
                    <a data-src="/ads/114035/info" href="#" class="text-muted popup_ajax" tabindex="-1">
                        <i class="uil-info-circle"></i>реклама        </a>
                </div>
            </div>
        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="11" id="" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-6 col-lg-4 slick-slider-item" style="width: 100%; display: inline-block;">



            <div class="card card-body py-2 m-0 card-shadow-12px border height-193px overflow-y-hidden">
                <a href="https://tgstat.ru/channel/@dianalysis" class="text-body h-100" data-cid="381" tabindex="-1">
                    <div class="row h-100">
                        <div class="col-12 height-38px">
                            <div class="h4 text-truncate text-dark">Дневник психотерапевта</div>
                        </div>
                        <div class="col-7 height-120px d-flex flex-column justify-content-between">
                            <div>
                                <div class="font-14 height-42px overflow-y-hidden">Канал психотерапевта Алексея Карачинского</div>
                            </div>
                            <div class="mt-3">
                                <div class="font-12 text-dark">
                                    Психология&nbsp;
                                </div>
                                <div class="font-14 text-truncate">
                                    <b>41 196</b> подписчиков
                                </div>
                            </div>
                        </div>
                        <div class="col-5 height-120px text-right">
                            <img src="//static6.tgstat.ru/channels/_0/00/00ec53c4682d36f5c4359f4ae7bd7ba1.jpg" class="img-thumbnail rounded-circle d-inline-block max-height-110px mt-n1">            </div>
                    </div>
                </a>
            </div>


        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="12" id="" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-6 col-lg-4 slick-slider-item" style="width: 100%; display: inline-block;">



            <div class="card card-body py-2 m-0 card-shadow-12px border height-193px overflow-y-hidden">
                <a href="https://tgstat.ru/channel/@PsyEducation" class="text-body h-100" data-cid="557" tabindex="-1">
                    <div class="row h-100">
                        <div class="col-12 height-38px">
                            <div class="h4 text-truncate text-dark">Психология</div>
                        </div>
                        <div class="col-7 height-120px d-flex flex-column justify-content-between">
                            <div>
                                <div class="font-14 height-42px overflow-y-hidden">Канал о психологии мышления и поведения</div>
                            </div>
                            <div class="mt-3">
                                <div class="font-12 text-dark">
                                    Психология&nbsp;
                                </div>
                                <div class="font-14 text-truncate">
                                    <b>83 847</b> подписчиков
                                </div>
                            </div>
                        </div>
                        <div class="col-5 height-120px text-right">
                            <img src="//static2.tgstat.ru/channels/_0/6e/6e2713a6efee97bacb63e52c54f0ada0.jpg" class="img-thumbnail rounded-circle d-inline-block max-height-110px mt-n1">            </div>
                    </div>
                </a>
            </div>


        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="13" id="" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-6 col-lg-4 slick-slider-item" style="width: 100%; display: inline-block;">



            <div class="card card-body py-2 m-0 card-shadow-12px border height-193px overflow-y-hidden">
                <a href="https://tgstat.ru/channel/@psyxotest" class="text-body h-100" data-cid="7547311" tabindex="-1">
                    <div class="row h-100">
                        <div class="col-12 height-38px">
                            <div class="h4 text-truncate text-dark">🇰🇿Акедиль - поможет тебе!</div>
                        </div>
                        <div class="col-7 height-120px d-flex flex-column justify-content-between">
                            <div>
                                <div class="font-14 height-42px overflow-y-hidden">Практические решения конфликтных ситуаций в семье</div>
                            </div>
                            <div class="mt-3">
                                <div class="font-12 text-dark">
                                    Психология&nbsp;
                                </div>
                                <div class="font-14 text-truncate">
                                    <b>103 116</b> подписчиков
                                </div>
                            </div>
                        </div>
                        <div class="col-5 height-120px text-right">
                            <img src="//static1.tgstat.ru/channels/_0/f5/f5ead0ea6515a30210de19a35f3b80d0.jpg" class="img-thumbnail rounded-circle d-inline-block max-height-110px mt-n1">            </div>
                    </div>
                </a>
            </div>


        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="14" id="" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-6 col-lg-4 slick-slider-item" style="width: 100%; display: inline-block;">



            <div class="card card-body py-2 m-0 card-shadow-12px border height-193px overflow-y-hidden">
                <a href="https://tgstat.ru/channel/@psycanal" class="text-body h-100" data-cid="187909" tabindex="-1">
                    <div class="row h-100">
                        <div class="col-12 height-38px">
                            <div class="h4 text-truncate text-dark">ПСИХО</div>
                        </div>
                        <div class="col-7 height-120px d-flex flex-column justify-content-between">
                            <div>
                                <div class="font-14 height-42px overflow-y-hidden">Авторский блог врача-психотерапевта Войтович Н.В.</div>
                            </div>
                            <div class="mt-3">
                                <div class="font-12 text-dark">
                                    Психология&nbsp;
                                </div>
                                <div class="font-14 text-truncate">
                                    <b>23 165</b> подписчиков
                                </div>
                            </div>
                        </div>
                        <div class="col-5 height-120px text-right">
                            <img src="//static5.tgstat.ru/channels/_0/33/33d25d16b0bc9fa6370dc10409aa1d60.jpg" class="img-thumbnail rounded-circle d-inline-block max-height-110px mt-n1">            </div>
                    </div>
                </a>
            </div>


        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="15" id="" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-6 col-lg-4 slick-slider-item" style="width: 100%; display: inline-block;">



            <div class="card card-body py-2 m-0 card-shadow-12px border height-193px overflow-y-hidden">
                <a href="https://tgstat.ru/channel/@evo_lutio" class="text-body h-100" data-cid="116098" tabindex="-1">
                    <div class="row h-100">
                        <div class="col-12 height-38px">
                            <div class="h4 text-truncate text-dark">Эволюция</div>
                        </div>
                        <div class="col-7 height-120px d-flex flex-column justify-content-between">
                            <div>
                                <div class="font-14 height-42px overflow-y-hidden">Саморазвитие и прокачка ресурсов</div>
                            </div>
                            <div class="mt-3">
                                <div class="font-12 text-dark">
                                    Психология&nbsp;
                                </div>
                                <div class="font-14 text-truncate">
                                    <b>46 454</b> подписчиков
                                </div>
                            </div>
                        </div>
                        <div class="col-5 height-120px text-right">
                            <img src="//static10.tgstat.ru/channels/_0/58/58b2fb7c6c464b5091c7edadeca5e4ab.jpg" class="img-thumbnail rounded-circle d-inline-block max-height-110px mt-n1">            </div>
                    </div>
                </a>
            </div>


        </div></div></div></div></div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button></div>
    </div>


    <div class="my-3 position-relative" style="display: none">
        <div class="my-3">
            <div class="d-flex justify-content-between align-items-center">
                <div class="h4 text-dark">
                    <a href="/ratings/chats/psychology?sort=mau" class="text-dark">
                        Активные чаты по теме            </a>
                </div>
                <div>
                    <a href="/ratings/chats/psychology?sort=mau" class="text-dark">
                        Все чаты<i class="uil-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="mx-n2 mx-md-n2 mx-lg-n2 slick-initialized slick-slider" data-slick="{&quot;dots&quot;:false,&quot;appendDots&quot;:&quot;#slider-new_channels .dots-container&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:320,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;dots&quot;:false,&quot;centerMode&quot;:false}},{&quot;breakpoint&quot;:520,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;dots&quot;:false,&quot;centerMode&quot;:true}},{&quot;breakpoint&quot;:620,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;dots&quot;:false,&quot;centerMode&quot;:true}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;dots&quot;:false,&quot;centerMode&quot;:false}},{&quot;breakpoint&quot;:920,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;dots&quot;:false,&quot;centerMode&quot;:false}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:6,&quot;arrows&quot;:true,&quot;dots&quot;:false}}]}"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 6264px; transform: translate3d(-1044px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-6" id="" aria-hidden="true" style="width: 174px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@psixologia2" target="_blank" tabindex="-1">
                        <div class="d-flex justify-content-center">
                            <img src="//static1.tgstat.ru/channels/_100/d5/d545f5cd577c4383f138c8fa41eedbcb.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            Бесплатная психологическая помощь                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            4 032 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-5" id="" aria-hidden="true" style="width: 174px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@psychat666" target="_blank" tabindex="-1">
                        <div class="d-flex justify-content-center">
                            <img src="//static1.tgstat.ru/channels/_100/db/db002653506aa3231269c720b3a6ca64.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            психочат и точка 18+                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            918 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-4" id="" aria-hidden="true" style="width: 174px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@vdavesna_2021" target="_blank" tabindex="-1">
                        <div class="d-flex justify-content-center">
                            <img src="//static3.tgstat.ru/channels/_100/c2/c2523b10c5156a4a1f86f4e4ab923a0b.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            ВДА "Весна"                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            2 470 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true" style="width: 174px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@shizofrenia_chat" target="_blank" tabindex="-1">
                        <div class="d-flex justify-content-center">
                            <img src="//static5.tgstat.ru/channels/_100/b4/b4bacff8c4ebb6e50a1bbb05d9602d60.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            Шизофрения | Депрессия | ОКР                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            988 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" style="width: 174px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@empathychat" target="_blank" tabindex="-1">
                        <div class="d-flex justify-content-center">
                            <img src="//static8.tgstat.ru/channels/_100/ee/eed95b0029c8abbde4eca63b3e56f78a.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            Эмпатия - доказательная психиатрия и психология | чат                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            4 413 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 174px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@AVdzen" target="_blank" tabindex="-1">
                        <div class="d-flex justify-content-center">
                            <img src="//static6.tgstat.ru/channels/_100/cd/cd3de5236c54b2043ccf4bd19486a9e0.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            Просветление и котики                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            2 829 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 174px;"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@PsihologWeHelp" target="_blank" tabindex="0">
                        <div class="d-flex justify-content-center">
                            <img src="//static10.tgstat.ru/channels/_100/51/51754815c3e4dbfc1cf548831b25e773.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            Бесплатная психологическая помощь. We Help /Chat                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            16 796 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 174px;"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@fabulaa" target="_blank" tabindex="0">
                        <div class="d-flex justify-content-center">
                            <img src="//static1.tgstat.ru/channels/_100/10/10e8e46d9c1232a641dea25423c23f4f.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            🙏Фабулы Исаева 🎧 Аудио Медицина                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            30 652 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 174px;"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@psymetod1" target="_blank" tabindex="0">
                        <div class="d-flex justify-content-center">
                            <img src="//static6.tgstat.ru/channels/_100/6c/6c5074490fd57e0a31d347c0e5e9d334.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            Психосоматика TANDI                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            4 510 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 174px;"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@zhukova_soza" target="_blank" tabindex="0">
                        <div class="d-flex justify-content-center">
                            <img src="//static5.tgstat.ru/channels/_100/34/3408e67dd84248bbb611998705114342.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            Наташа Жукова. Рядом 🫂 | Чат                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            1 523 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide slick-active" data-slick-index="4" aria-hidden="false" style="width: 174px;"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@nyastrebova" target="_blank" tabindex="0">
                        <div class="d-flex justify-content-center">
                            <img src="//static9.tgstat.ru/channels/_100/81/81ef2ddb969a936aea341dd2007be439.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            Ястребиный чат🚀                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            566 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide slick-active" data-slick-index="5" aria-hidden="false" style="width: 174px;"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@psynapsus" target="_blank" tabindex="0">
                        <div class="d-flex justify-content-center">
                            <img src="//static2.tgstat.ru/channels/_100/76/76ea473135ba320a2da18685ffd4dea7.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            THE SYNAPSUS | PSY                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            2 484 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide" data-slick-index="6" aria-hidden="true" style="width: 174px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@freepsyon" target="_blank" tabindex="-1">
                        <div class="d-flex justify-content-center">
                            <img src="//static8.tgstat.ru/channels/_100/c6/c63d6367ff9da6e213c0c9a44fd51678.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            Психологи онлайн бесплатно                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            18 016 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide" data-slick-index="7" aria-hidden="true" style="width: 174px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@Mmenaaynakrilo" target="_blank" tabindex="-1">
                        <div class="d-flex justify-content-center">
                            <img src="//static7.tgstat.ru/channels/_100/04/04b638eed8b6d13c9be0e54cbb54ac74.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            🇷🇺 всд-невроз -кпт 💭 чат                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            11 583 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide" data-slick-index="8" aria-hidden="true" style="width: 174px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@mirlru" target="_blank" tabindex="-1">
                        <div class="d-flex justify-content-center">
                            <img src="//static3.tgstat.ru/channels/_100/55/5511d7db81399ef8e6a6d008e9997aa7.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            МИР: Л 💖 Чат Саморазвитие | Психология | Активность в соцсетях                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            17 203 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide" data-slick-index="9" aria-hidden="true" style="width: 174px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@psixologia2" target="_blank" tabindex="-1">
                        <div class="d-flex justify-content-center">
                            <img src="//static1.tgstat.ru/channels/_100/d5/d545f5cd577c4383f138c8fa41eedbcb.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            Бесплатная психологическая помощь                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            4 032 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide" data-slick-index="10" aria-hidden="true" style="width: 174px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@psychat666" target="_blank" tabindex="-1">
                        <div class="d-flex justify-content-center">
                            <img src="//static1.tgstat.ru/channels/_100/db/db002653506aa3231269c720b3a6ca64.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            психочат и точка 18+                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            918 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide" data-slick-index="11" aria-hidden="true" style="width: 174px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@vdavesna_2021" target="_blank" tabindex="-1">
                        <div class="d-flex justify-content-center">
                            <img src="//static3.tgstat.ru/channels/_100/c2/c2523b10c5156a4a1f86f4e4ab923a0b.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            ВДА "Весна"                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            2 470 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide" data-slick-index="12" aria-hidden="true" style="width: 174px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@shizofrenia_chat" target="_blank" tabindex="-1">
                        <div class="d-flex justify-content-center">
                            <img src="//static5.tgstat.ru/channels/_100/b4/b4bacff8c4ebb6e50a1bbb05d9602d60.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            Шизофрения | Депрессия | ОКР                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            988 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide" data-slick-index="13" aria-hidden="true" style="width: 174px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@empathychat" target="_blank" tabindex="-1">
                        <div class="d-flex justify-content-center">
                            <img src="//static8.tgstat.ru/channels/_100/ee/eed95b0029c8abbde4eca63b3e56f78a.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            Эмпатия - доказательная психиатрия и психология | чат                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            4 413 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide" data-slick-index="14" aria-hidden="true" style="width: 174px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@AVdzen" target="_blank" tabindex="-1">
                        <div class="d-flex justify-content-center">
                            <img src="//static6.tgstat.ru/channels/_100/cd/cd3de5236c54b2043ccf4bd19486a9e0.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            Просветление и котики                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            2 829 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="15" id="" aria-hidden="true" style="width: 174px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@PsihologWeHelp" target="_blank" tabindex="-1">
                        <div class="d-flex justify-content-center">
                            <img src="//static10.tgstat.ru/channels/_100/51/51754815c3e4dbfc1cf548831b25e773.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            Бесплатная психологическая помощь. We Help /Chat                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            16 796 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="16" id="" aria-hidden="true" style="width: 174px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@fabulaa" target="_blank" tabindex="-1">
                        <div class="d-flex justify-content-center">
                            <img src="//static1.tgstat.ru/channels/_100/10/10e8e46d9c1232a641dea25423c23f4f.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            🙏Фабулы Исаева 🎧 Аудио Медицина                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            30 652 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="17" id="" aria-hidden="true" style="width: 174px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@psymetod1" target="_blank" tabindex="-1">
                        <div class="d-flex justify-content-center">
                            <img src="//static6.tgstat.ru/channels/_100/6c/6c5074490fd57e0a31d347c0e5e9d334.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            Психосоматика TANDI                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            4 510 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="18" id="" aria-hidden="true" style="width: 174px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@zhukova_soza" target="_blank" tabindex="-1">
                        <div class="d-flex justify-content-center">
                            <img src="//static5.tgstat.ru/channels/_100/34/3408e67dd84248bbb611998705114342.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            Наташа Жукова. Рядом 🫂 | Чат                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            1 523 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="19" id="" aria-hidden="true" style="width: 174px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@nyastrebova" target="_blank" tabindex="-1">
                        <div class="d-flex justify-content-center">
                            <img src="//static9.tgstat.ru/channels/_100/81/81ef2ddb969a936aea341dd2007be439.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            Ястребиный чат🚀                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            566 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="20" id="" aria-hidden="true" style="width: 174px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@psynapsus" target="_blank" tabindex="-1">
                        <div class="d-flex justify-content-center">
                            <img src="//static2.tgstat.ru/channels/_100/76/76ea473135ba320a2da18685ffd4dea7.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            THE SYNAPSUS | PSY                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            2 484 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="21" id="" aria-hidden="true" style="width: 174px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@freepsyon" target="_blank" tabindex="-1">
                        <div class="d-flex justify-content-center">
                            <img src="//static8.tgstat.ru/channels/_100/c6/c63d6367ff9da6e213c0c9a44fd51678.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            Психологи онлайн бесплатно                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            18 016 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="22" id="" aria-hidden="true" style="width: 174px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@Mmenaaynakrilo" target="_blank" tabindex="-1">
                        <div class="d-flex justify-content-center">
                            <img src="//static7.tgstat.ru/channels/_100/04/04b638eed8b6d13c9be0e54cbb54ac74.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            🇷🇺 всд-невроз -кпт 💭 чат                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            11 583 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="23" id="" aria-hidden="true" style="width: 174px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@mirlru" target="_blank" tabindex="-1">
                        <div class="d-flex justify-content-center">
                            <img src="//static3.tgstat.ru/channels/_100/55/5511d7db81399ef8e6a6d008e9997aa7.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            МИР: Л 💖 Чат Саморазвитие | Психология | Активность в соцсетях                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            17 203 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="24" id="" aria-hidden="true" style="width: 174px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@psixologia2" target="_blank" tabindex="-1">
                        <div class="d-flex justify-content-center">
                            <img src="//static1.tgstat.ru/channels/_100/d5/d545f5cd577c4383f138c8fa41eedbcb.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            Бесплатная психологическая помощь                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            4 032 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="25" id="" aria-hidden="true" style="width: 174px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@psychat666" target="_blank" tabindex="-1">
                        <div class="d-flex justify-content-center">
                            <img src="//static1.tgstat.ru/channels/_100/db/db002653506aa3231269c720b3a6ca64.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            психочат и точка 18+                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            918 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="26" id="" aria-hidden="true" style="width: 174px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@vdavesna_2021" target="_blank" tabindex="-1">
                        <div class="d-flex justify-content-center">
                            <img src="//static3.tgstat.ru/channels/_100/c2/c2523b10c5156a4a1f86f4e4ab923a0b.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            ВДА "Весна"                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            2 470 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="27" id="" aria-hidden="true" style="width: 174px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@shizofrenia_chat" target="_blank" tabindex="-1">
                        <div class="d-flex justify-content-center">
                            <img src="//static5.tgstat.ru/channels/_100/b4/b4bacff8c4ebb6e50a1bbb05d9602d60.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            Шизофрения | Депрессия | ОКР                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            988 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="28" id="" aria-hidden="true" style="width: 174px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@empathychat" target="_blank" tabindex="-1">
                        <div class="d-flex justify-content-center">
                            <img src="//static8.tgstat.ru/channels/_100/ee/eed95b0029c8abbde4eca63b3e56f78a.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            Эмпатия - доказательная психиатрия и психология | чат                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            4 413 участников                        </div>
                    </a>
                </div>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="29" id="" aria-hidden="true" style="width: 174px;" tabindex="-1"><div><div class="col-12 col-sm-6 col-md-3 col-lg-2 slick-slider-item" style="width: 100%; display: inline-block;">
                <div class="card card-body m-0 card-shadow-12px border py-2 px-2">
                    <a href="https://tgstat.ru/chat/@AVdzen" target="_blank" tabindex="-1">
                        <div class="d-flex justify-content-center">
                            <img src="//static6.tgstat.ru/channels/_100/cd/cd3de5236c54b2043ccf4bd19486a9e0.jpg" class="img-thumbnail rounded-circle" style="width:80px; height:80px;">                        </div>
                        <div class="d-flex justify-content-center font-16 text-dark text-center mt-2 height-48px overflow-y-hidden">
                            Просветление и котики                        </div>

                        <div class="btn btn-sm py-05 btn-block btn-light mt-3 font-12 text-truncate" role="button">
                            2 829 участников                        </div>
                    </a>
                </div>
            </div></div></div></div></div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button></div>
        </div>
    </div>

    <div class="my-3 position-relative" style="display: none">
        <div class="my-3">
            <div class="d-flex justify-content-between align-items-center">
                <div class="h4 text-dark">
                    Популярные посты        </div>
                <div>
                    <a href="/ratings/posts/psychology/pt?sort=forwards" class="text-dark">Еще<i class="uil-arrow-right"></i></a>
                </div>
            </div>

            <div class="mx-n2 mx-md-n3 mx-lg-n2 slick-initialized slick-slider" data-slick="{&quot;dots&quot;:false}"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 10092px; transform: translate3d(-1044px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-4 slick-slider-item" style="width: 100%; display: inline-block;">
                <a class="popup_ajax text-dark" data-src="/channel/@dateideasspp/4593" href="/channel/@dateideasspp/4593" target="_blank" tabindex="-1">
                    <div class="card card-body card-shadow-12px border m-0 p-0 d-flex flex-column" style="height:140px;">

                        <div class="font-16 text-dark rounded px-2 py-1 mt-1 mb-auto">

                            <div class="row">
                                <div class="col">
                                    <div style="height:74px;" class="overflow-y-hidden">
                                        Нужна помощь зала                                        </div>
                                </div>
                                <div class="col-auto text-center">
                                    <div class="max-width-175px overflow-x-hidden">
                                        <img src="https://static26.tgcnt.ru/posts/_180/54/545d911199814fcf36022520dd58f2c3.jpg" height="80" class="rounded">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-2 mb-1 d-flex flex-row justify-content-between align-items-center mt-2">

                            <div class="text-truncate">
                                <div class="float-left mr-1">
                                    <img src="//static10.tgstat.ru/channels/_50/3f/3f4482ad621aa87f2218f3288653c49b.jpg" class="rounded-circle" style="width:20px; height:20px;">                                </div>

                                date ideas|психология отношений                            </div>

                            <div class="font-12 text-muted">
                                1 Nov,
                                19:14                            </div>
                        </div>

                    </div>
                </a>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-4 slick-slider-item" style="width: 100%; display: inline-block;">
                <a class="popup_ajax text-dark" data-src="/channel/@transerfing_realnosti_tyt/2780" href="/channel/@transerfing_realnosti_tyt/2780" target="_blank" tabindex="-1">
                    <div class="card card-body card-shadow-12px border m-0 p-0 d-flex flex-column" style="height:140px;">

                        <div class="font-16 text-dark rounded px-2 py-1 mt-1 mb-auto">

                            <div style="height:74px;" class="overflow-y-hidden">
                                Если вы сосредоточитесь на цели, как будто она уже достигнута, ваши двери откроются, и средства найдутся сами собой. Это и есть свобода, от которой буквально кружится голова. Если вы не принимаете ...                                </div>
                        </div>

                        <div class="px-2 mb-1 d-flex flex-row justify-content-between align-items-center mt-2">

                            <div class="text-truncate">
                                <div class="float-left mr-1">
                                    <img src="//static7.tgstat.ru/channels/_50/19/1920a94788ff2b44e13bec36873ac161.jpg" class="rounded-circle" style="width:20px; height:20px;">                                </div>

                                Трансерфинг реальности                            </div>

                            <div class="font-12 text-muted">
                                1 Nov,
                                19:17                            </div>
                        </div>

                    </div>
                </a>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-4 slick-slider-item" style="width: 100%; display: inline-block;">
                <a class="popup_ajax text-dark" data-src="/channel/OrQ2lxEXYN0yZTUy/7186" href="/channel/OrQ2lxEXYN0yZTUy/7186" target="_blank" tabindex="-1">
                    <div class="card card-body card-shadow-12px border m-0 p-0 d-flex flex-column" style="height:140px;">

                        <div class="font-16 text-dark rounded px-2 py-1 mt-1 mb-auto">

                            <div class="row">
                                <div class="col">
                                    <div style="height:74px;" class="overflow-y-hidden">
                                        «Мы притягиваем тех, кто помогает нам усвоить урок и пойти дальше по ступени эволюции»  Если в твоей Жизни есть человек, который причинил боль, то знай - он проявил тебе твою же травму.  Тот, кто б...                                        </div>
                                </div>
                                <div class="col-auto text-center">
                                    <div class="max-width-175px overflow-x-hidden">
                                        <img src="https://static26.tgcnt.ru/posts/_960/24/24be3ccdeac7dfdaf392704ad54c62d8.jpg" height="80" class="rounded">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-2 mb-1 d-flex flex-row justify-content-between align-items-center mt-2">

                            <div class="text-truncate">
                                <div class="float-left mr-1">
                                    <img src="//static7.tgstat.ru/channels/_50/25/253a456ec4478f15fdb3259a0ce97baf.jpg" class="rounded-circle" style="width:20px; height:20px;">                                </div>

                                Мария Самарина про Путь                            </div>

                            <div class="font-12 text-muted">
                                1 Nov,
                                15:05                            </div>
                        </div>

                    </div>
                </a>
            </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 348px;"><div><div class="col-4 slick-slider-item" style="width: 100%; display: inline-block;">
                <a class="popup_ajax text-dark" data-src="/channel/@wifes_swo/575" href="/channel/@wifes_swo/575" target="_blank" tabindex="0">
                    <div class="card card-body card-shadow-12px border m-0 p-0 d-flex flex-column" style="height:140px;">

                        <div class="font-16 text-dark rounded px-2 py-1 mt-1 mb-auto">

                            <div class="row">
                                <div class="col">
                                    <div style="height:74px;" class="overflow-y-hidden">
                                    </div>
                                </div>
                                <div class="col-auto text-center">
                                    <div class="max-width-175px overflow-x-hidden">
                                        <img src="https://static24.tgcnt.ru/posts/_320/52/52f12e11eddd5a967d928d5956827bfe.jpg" height="80" class="rounded">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-2 mb-1 d-flex flex-row justify-content-between align-items-center mt-2">

                            <div class="text-truncate">
                                <div class="float-left mr-1">
                                    <img src="//static7.tgstat.ru/channels/_50/40/404cee0002aec98710647b1b6fba5939.jpg" class="rounded-circle" style="width:20px; height:20px;">                                </div>

                                Жены и СВО                            </div>

                            <div class="font-12 text-muted">
                                1 Nov,
                                17:17                            </div>
                        </div>

                    </div>
                </a>
            </div></div></div><div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 348px;"><div><div class="col-4 slick-slider-item" style="width: 100%; display: inline-block;">
                <a class="popup_ajax text-dark" data-src="/channel/@girls_sayy/745" href="/channel/@girls_sayy/745" target="_blank" tabindex="0">
                    <div class="card card-body card-shadow-12px border m-0 p-0 d-flex flex-column" style="height:140px;">

                        <div class="font-16 text-dark rounded px-2 py-1 mt-1 mb-auto">

                            <div class="row">
                                <div class="col">
                                    <div style="height:74px;" class="overflow-y-hidden">
                                    </div>
                                </div>
                                <div class="col-auto text-center">
                                    <div class="max-width-175px overflow-x-hidden">
                                        <img src="https://static26.tgcnt.ru/posts/_894/25/25d30a06f7121cc41849e7930a2b532c.jpg" height="80" class="rounded">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-2 mb-1 d-flex flex-row justify-content-between align-items-center mt-2">

                            <div class="text-truncate">
                                <div class="float-left mr-1">
                                    <img src="//static1.tgstat.ru/channels/_50/e3/e307a37cf32f5d9b5bcc1eb7dd6eafc4.jpg" class="rounded-circle" style="width:20px; height:20px;">                                </div>

                                девочки, трындим                            </div>

                            <div class="font-12 text-muted">
                                1 Nov,
                                09:09                            </div>
                        </div>

                    </div>
                </a>
            </div></div></div><div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 348px;"><div><div class="col-4 slick-slider-item" style="width: 100%; display: inline-block;">
                <a class="popup_ajax text-dark" data-src="/channel/@promirru/7714" href="/channel/@promirru/7714" target="_blank" tabindex="0">
                    <div class="card card-body card-shadow-12px border m-0 p-0 d-flex flex-column" style="height:140px;">

                        <div class="font-16 text-dark rounded px-2 py-1 mt-1 mb-auto">

                            <div class="row">
                                <div class="col">
                                    <div style="height:74px;" class="overflow-y-hidden">
                                    </div>
                                </div>
                                <div class="col-auto text-center">
                                    <div class="max-width-175px overflow-x-hidden">
                                        <img src="https://static25.tgcnt.ru/posts/_320/a9/a9ac586bca46d4ecdf9c8397d0b5e58e.jpg" height="80" class="rounded">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-2 mb-1 d-flex flex-row justify-content-between align-items-center mt-2">

                            <div class="text-truncate">
                                <div class="float-left mr-1">
                                    <img src="//static5.tgstat.ru/channels/_50/42/42811e93f0033621eeefa7856302894a.jpg" class="rounded-circle" style="width:20px; height:20px;">                                </div>

                                Пробуждающий Мир - официальный канал                            </div>

                            <div class="font-12 text-muted">
                                1 Nov,
                                09:55                            </div>
                        </div>

                    </div>
                </a>
            </div></div></div><div class="slick-slide" data-slick-index="3" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-4 slick-slider-item" style="width: 100%; display: inline-block;">
                <a class="popup_ajax text-dark" data-src="/channel/@keks_life/983" href="/channel/@keks_life/983" target="_blank" tabindex="-1">
                    <div class="card card-body card-shadow-12px border m-0 p-0 d-flex flex-column" style="height:140px;">

                        <div class="font-16 text-dark rounded px-2 py-1 mt-1 mb-auto">

                            <div class="row">
                                <div class="col">
                                    <div style="height:74px;" class="overflow-y-hidden">
                                        ​​ Откуда берутся всплески сексуального желания?  У всех взрослых людей бывают такие периоды – в среднем они длятся 2-3 дня у девушек и 4-6 дней у парней – когда тебе хочется постоянных оргазмов. К...                                        </div>
                                </div>
                                <div class="col-auto text-center">
                                    <div class="max-width-175px overflow-x-hidden">
                                        <img src="https://static24.tgcnt.ru/posts/_1200/ff/ffb61797a27127b8b279c47040048afb.jpg" height="80" class="rounded">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-2 mb-1 d-flex flex-row justify-content-between align-items-center mt-2">

                            <div class="text-truncate">
                                <div class="float-left mr-1">
                                    <img src="//static4.tgstat.ru/channels/_50/1a/1acdf75c6773b554415c463698eeab06.jpg" class="rounded-circle" style="width:20px; height:20px;">                                </div>

                                SEX/LIFE                            </div>

                            <div class="font-12 text-muted">
                                1 Nov,
                                17:17                            </div>
                        </div>

                    </div>
                </a>
            </div></div></div><div class="slick-slide" data-slick-index="4" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-4 slick-slider-item" style="width: 100%; display: inline-block;">
                <a class="popup_ajax text-dark" data-src="/channel/cAC4GjMK4NkxMDYy/1021" href="/channel/cAC4GjMK4NkxMDYy/1021" target="_blank" tabindex="-1">
                    <div class="card card-body card-shadow-12px border m-0 p-0 d-flex flex-column" style="height:140px;">

                        <div class="font-16 text-dark rounded px-2 py-1 mt-1 mb-auto">

                            <div class="row">
                                <div class="col">
                                    <div style="height:74px;" class="overflow-y-hidden">
                                        Во время секса вырабатывается иммунитет, который на 90% защитит тебя от гриппа.   Сексуальное Воспитание                                        </div>
                                </div>
                                <div class="col-auto text-center">
                                    <div class="max-width-175px overflow-x-hidden">
                                        <img src="https://static26.tgcnt.ru/posts/_905/c0/c07a38e2f315fb5e34d7dd33b2defc79.jpg" height="80" class="rounded">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-2 mb-1 d-flex flex-row justify-content-between align-items-center mt-2">

                            <div class="text-truncate">
                                <div class="float-left mr-1">
                                    <img src="//static7.tgstat.ru/channels/_50/6d/6d7052037b35f809756f7aaa87b703dc.jpg" class="rounded-circle" style="width:20px; height:20px;">                                </div>

                                Сексуальное Воспитание                            </div>

                            <div class="font-12 text-muted">
                                1 Nov,
                                13:00                            </div>
                        </div>

                    </div>
                </a>
            </div></div></div><div class="slick-slide" data-slick-index="5" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-4 slick-slider-item" style="width: 100%; display: inline-block;">
                <a class="popup_ajax text-dark" data-src="/channel/@psyhologiya_mysly/3719" href="/channel/@psyhologiya_mysly/3719" target="_blank" tabindex="-1">
                    <div class="card card-body card-shadow-12px border m-0 p-0 d-flex flex-column" style="height:140px;">

                        <div class="font-16 text-dark rounded px-2 py-1 mt-1 mb-auto">

                            <div class="row">
                                <div class="col">
                                    <div style="height:74px;" class="overflow-y-hidden">
                                        ​Для принятия важных  решений — квадрат Декарта  Это простая техника принятия решений. Ее суть заключается в том, что нужно рассмотреть проблему/ситуацию, ответив на такие 4 вопроса:  1. Что будет,...                                        </div>
                                </div>
                                <div class="col-auto text-center">
                                    <div class="max-width-175px overflow-x-hidden">
                                        <img src="https://static27.tgcnt.ru/posts/_1080/d3/d376d9129af9fe9a0e62c1f29edd31b3.jpg" height="80" class="rounded">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-2 mb-1 d-flex flex-row justify-content-between align-items-center mt-2">

                            <div class="text-truncate">
                                <div class="float-left mr-1">
                                    <img src="//static2.tgstat.ru/channels/_50/cc/cc60ae073a0df302d2a543e5ad33be05.jpg" class="rounded-circle" style="width:20px; height:20px;">                                </div>

                                ꧁༺ Психология ༻꧂                            </div>

                            <div class="font-12 text-muted">
                                1 Nov,
                                19:07                            </div>
                        </div>

                    </div>
                </a>
            </div></div></div><div class="slick-slide" data-slick-index="6" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-4 slick-slider-item" style="width: 100%; display: inline-block;">
                <a class="popup_ajax text-dark" data-src="/channel/AnW1LVO-CQthMWIy/1903" href="/channel/AnW1LVO-CQthMWIy/1903" target="_blank" tabindex="-1">
                    <div class="card card-body card-shadow-12px border m-0 p-0 d-flex flex-column" style="height:140px;">

                        <div class="font-16 text-dark rounded px-2 py-1 mt-1 mb-auto">

                            <div class="row">
                                <div class="col">
                                    <div style="height:74px;" class="overflow-y-hidden">
                                        — SX / #EDUCATION                                        </div>
                                </div>
                                <div class="col-auto text-center">
                                    <div class="max-width-175px overflow-x-hidden">
                                        <img src="https://static27.tgcnt.ru/posts/_720/9f/9ff7f1ba8c70fcad6d69be1ed6ec1dbf.jpg" height="80" class="rounded">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-2 mb-1 d-flex flex-row justify-content-between align-items-center mt-2">

                            <div class="text-truncate">
                                <div class="float-left mr-1">
                                    <img src="//static3.tgstat.ru/channels/_50/8f/8f47184c2f4023a2c94e7b2ac97d1ee6.jpg" class="rounded-circle" style="width:20px; height:20px;">                                </div>

                                SX                            </div>

                            <div class="font-12 text-muted">
                                1 Nov,
                                09:09                            </div>
                        </div>

                    </div>
                </a>
            </div></div></div><div class="slick-slide" data-slick-index="7" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-4 slick-slider-item" style="width: 100%; display: inline-block;">
                <a class="popup_ajax text-dark" data-src="/channel/@psyinlaw/8571" href="/channel/@psyinlaw/8571" target="_blank" tabindex="-1">
                    <div class="card card-body card-shadow-12px border m-0 p-0 d-flex flex-column" style="height:140px;">

                        <div class="font-16 text-dark rounded px-2 py-1 mt-1 mb-auto">

                            <div class="row">
                                <div class="col">
                                    <div style="height:74px;" class="overflow-y-hidden">
                                        Священник Храма святого праведного Иоанна Кронштадтского в Нижнекамске жестоко убил и расчленил свою жену.  Иерей Михаил Зубарев сначала зарезал супругу, а после расчленил. Голову женщины спрятал в...                                        </div>
                                </div>
                                <div class="col-auto text-center">
                                    <div class="max-width-175px overflow-x-hidden">
                                        <img src="https://static26.tgcnt.ru/posts/_1080/83/83c81a8ef551e1846c653c9a1589ac9d.jpg" height="80" class="rounded">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-2 mb-1 d-flex flex-row justify-content-between align-items-center mt-2">

                            <div class="text-truncate">
                                <div class="float-left mr-1">
                                    <img src="//static4.tgstat.ru/channels/_50/60/60788ea72cd79cd41eb0629ecd44d34b.jpg" class="rounded-circle" style="width:20px; height:20px;">                                </div>

                                Психолог в законе                            </div>

                            <div class="font-12 text-muted">
                                1 Nov,
                                12:53                            </div>
                        </div>

                    </div>
                </a>
            </div></div></div><div class="slick-slide" data-slick-index="8" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-4 slick-slider-item" style="width: 100%; display: inline-block;">
                <a class="popup_ajax text-dark" data-src="/channel/@yasno_live/1192" href="/channel/@yasno_live/1192" target="_blank" tabindex="-1">
                    <div class="card card-body card-shadow-12px border m-0 p-0 d-flex flex-column" style="height:140px;">

                        <div class="font-16 text-dark rounded px-2 py-1 mt-1 mb-auto">

                            <div style="height:74px;" class="overflow-y-hidden">
                                Друзья обижают и ранят меня своими шутками. Но я боюсь прекратить общение: вдруг останусь одна и больше никого не найду. Как быть?   ️ Отвечает Елена Воробьёва, гештальт-терапевт, психолог сервиса ...                                </div>
                        </div>

                        <div class="px-2 mb-1 d-flex flex-row justify-content-between align-items-center mt-2">

                            <div class="text-truncate">
                                <div class="float-left mr-1">
                                    <img src="//static1.tgstat.ru/channels/_50/2a/2a2d89992e37f55217b164c45b0146e8.jpg" class="rounded-circle" style="width:20px; height:20px;">                                </div>

                                Ок, ясно                            </div>

                            <div class="font-12 text-muted">
                                1 Nov,
                                12:02                            </div>
                        </div>

                    </div>
                </a>
            </div></div></div><div class="slick-slide" data-slick-index="9" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-4 slick-slider-item" style="width: 100%; display: inline-block;">
                <a class="popup_ajax text-dark" data-src="/channel/nDbtcwe0Sh41ODgy/811" href="/channel/nDbtcwe0Sh41ODgy/811" target="_blank" tabindex="-1">
                    <div class="card card-body card-shadow-12px border m-0 p-0 d-flex flex-column" style="height:140px;">

                        <div class="font-16 text-dark rounded px-2 py-1 mt-1 mb-auto">

                            <div style="height:74px;" class="overflow-y-hidden">
                                Гормоны счастья и как их хакнуть:   Серотонин (настроение)  🟤Медитация  🟤Баланс в питании  🟤Практика благодарностей    Окситоцин (любовь)  🟤Добрые поступки  🟤Прикосновения   🟤Приятное общение    Эн...                                </div>
                        </div>

                        <div class="px-2 mb-1 d-flex flex-row justify-content-between align-items-center mt-2">

                            <div class="text-truncate">
                                <div class="float-left mr-1">
                                    <img src="//static5.tgstat.ru/channels/_50/69/6939f1f392766a16787b0c0a5fe9b34a.jpg" class="rounded-circle" style="width:20px; height:20px;">                                </div>

                                women's community                            </div>

                            <div class="font-12 text-muted">
                                1 Nov,
                                14:04                            </div>
                        </div>

                    </div>
                </a>
            </div></div></div><div class="slick-slide" data-slick-index="10" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-4 slick-slider-item" style="width: 100%; display: inline-block;">
                <a class="popup_ajax text-dark" data-src="/channel/@dateideasspp/4593" href="/channel/@dateideasspp/4593" target="_blank" tabindex="-1">
                    <div class="card card-body card-shadow-12px border m-0 p-0 d-flex flex-column" style="height:140px;">

                        <div class="font-16 text-dark rounded px-2 py-1 mt-1 mb-auto">

                            <div class="row">
                                <div class="col">
                                    <div style="height:74px;" class="overflow-y-hidden">
                                        Нужна помощь зала                                        </div>
                                </div>
                                <div class="col-auto text-center">
                                    <div class="max-width-175px overflow-x-hidden">
                                        <img src="https://static26.tgcnt.ru/posts/_180/54/545d911199814fcf36022520dd58f2c3.jpg" height="80" class="rounded">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-2 mb-1 d-flex flex-row justify-content-between align-items-center mt-2">

                            <div class="text-truncate">
                                <div class="float-left mr-1">
                                    <img src="//static10.tgstat.ru/channels/_50/3f/3f4482ad621aa87f2218f3288653c49b.jpg" class="rounded-circle" style="width:20px; height:20px;">                                </div>

                                date ideas|психология отношений                            </div>

                            <div class="font-12 text-muted">
                                1 Nov,
                                19:14                            </div>
                        </div>

                    </div>
                </a>
            </div></div></div><div class="slick-slide" data-slick-index="11" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-4 slick-slider-item" style="width: 100%; display: inline-block;">
                <a class="popup_ajax text-dark" data-src="/channel/@transerfing_realnosti_tyt/2780" href="/channel/@transerfing_realnosti_tyt/2780" target="_blank" tabindex="-1">
                    <div class="card card-body card-shadow-12px border m-0 p-0 d-flex flex-column" style="height:140px;">

                        <div class="font-16 text-dark rounded px-2 py-1 mt-1 mb-auto">

                            <div style="height:74px;" class="overflow-y-hidden">
                                Если вы сосредоточитесь на цели, как будто она уже достигнута, ваши двери откроются, и средства найдутся сами собой. Это и есть свобода, от которой буквально кружится голова. Если вы не принимаете ...                                </div>
                        </div>

                        <div class="px-2 mb-1 d-flex flex-row justify-content-between align-items-center mt-2">

                            <div class="text-truncate">
                                <div class="float-left mr-1">
                                    <img src="//static7.tgstat.ru/channels/_50/19/1920a94788ff2b44e13bec36873ac161.jpg" class="rounded-circle" style="width:20px; height:20px;">                                </div>

                                Трансерфинг реальности                            </div>

                            <div class="font-12 text-muted">
                                1 Nov,
                                19:17                            </div>
                        </div>

                    </div>
                </a>
            </div></div></div><div class="slick-slide" data-slick-index="12" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-4 slick-slider-item" style="width: 100%; display: inline-block;">
                <a class="popup_ajax text-dark" data-src="/channel/OrQ2lxEXYN0yZTUy/7186" href="/channel/OrQ2lxEXYN0yZTUy/7186" target="_blank" tabindex="-1">
                    <div class="card card-body card-shadow-12px border m-0 p-0 d-flex flex-column" style="height:140px;">

                        <div class="font-16 text-dark rounded px-2 py-1 mt-1 mb-auto">

                            <div class="row">
                                <div class="col">
                                    <div style="height:74px;" class="overflow-y-hidden">
                                        «Мы притягиваем тех, кто помогает нам усвоить урок и пойти дальше по ступени эволюции»  Если в твоей Жизни есть человек, который причинил боль, то знай - он проявил тебе твою же травму.  Тот, кто б...                                        </div>
                                </div>
                                <div class="col-auto text-center">
                                    <div class="max-width-175px overflow-x-hidden">
                                        <img src="https://static26.tgcnt.ru/posts/_960/24/24be3ccdeac7dfdaf392704ad54c62d8.jpg" height="80" class="rounded">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-2 mb-1 d-flex flex-row justify-content-between align-items-center mt-2">

                            <div class="text-truncate">
                                <div class="float-left mr-1">
                                    <img src="//static7.tgstat.ru/channels/_50/25/253a456ec4478f15fdb3259a0ce97baf.jpg" class="rounded-circle" style="width:20px; height:20px;">                                </div>

                                Мария Самарина про Путь                            </div>

                            <div class="font-12 text-muted">
                                1 Nov,
                                15:05                            </div>
                        </div>

                    </div>
                </a>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="13" id="" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-4 slick-slider-item" style="width: 100%; display: inline-block;">
                <a class="popup_ajax text-dark" data-src="/channel/@wifes_swo/575" href="/channel/@wifes_swo/575" target="_blank" tabindex="-1">
                    <div class="card card-body card-shadow-12px border m-0 p-0 d-flex flex-column" style="height:140px;">

                        <div class="font-16 text-dark rounded px-2 py-1 mt-1 mb-auto">

                            <div class="row">
                                <div class="col">
                                    <div style="height:74px;" class="overflow-y-hidden">
                                    </div>
                                </div>
                                <div class="col-auto text-center">
                                    <div class="max-width-175px overflow-x-hidden">
                                        <img src="https://static24.tgcnt.ru/posts/_320/52/52f12e11eddd5a967d928d5956827bfe.jpg" height="80" class="rounded">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-2 mb-1 d-flex flex-row justify-content-between align-items-center mt-2">

                            <div class="text-truncate">
                                <div class="float-left mr-1">
                                    <img src="//static7.tgstat.ru/channels/_50/40/404cee0002aec98710647b1b6fba5939.jpg" class="rounded-circle" style="width:20px; height:20px;">                                </div>

                                Жены и СВО                            </div>

                            <div class="font-12 text-muted">
                                1 Nov,
                                17:17                            </div>
                        </div>

                    </div>
                </a>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="14" id="" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-4 slick-slider-item" style="width: 100%; display: inline-block;">
                <a class="popup_ajax text-dark" data-src="/channel/@girls_sayy/745" href="/channel/@girls_sayy/745" target="_blank" tabindex="-1">
                    <div class="card card-body card-shadow-12px border m-0 p-0 d-flex flex-column" style="height:140px;">

                        <div class="font-16 text-dark rounded px-2 py-1 mt-1 mb-auto">

                            <div class="row">
                                <div class="col">
                                    <div style="height:74px;" class="overflow-y-hidden">
                                    </div>
                                </div>
                                <div class="col-auto text-center">
                                    <div class="max-width-175px overflow-x-hidden">
                                        <img src="https://static26.tgcnt.ru/posts/_894/25/25d30a06f7121cc41849e7930a2b532c.jpg" height="80" class="rounded">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-2 mb-1 d-flex flex-row justify-content-between align-items-center mt-2">

                            <div class="text-truncate">
                                <div class="float-left mr-1">
                                    <img src="//static1.tgstat.ru/channels/_50/e3/e307a37cf32f5d9b5bcc1eb7dd6eafc4.jpg" class="rounded-circle" style="width:20px; height:20px;">                                </div>

                                девочки, трындим                            </div>

                            <div class="font-12 text-muted">
                                1 Nov,
                                09:09                            </div>
                        </div>

                    </div>
                </a>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="15" id="" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-4 slick-slider-item" style="width: 100%; display: inline-block;">
                <a class="popup_ajax text-dark" data-src="/channel/@promirru/7714" href="/channel/@promirru/7714" target="_blank" tabindex="-1">
                    <div class="card card-body card-shadow-12px border m-0 p-0 d-flex flex-column" style="height:140px;">

                        <div class="font-16 text-dark rounded px-2 py-1 mt-1 mb-auto">

                            <div class="row">
                                <div class="col">
                                    <div style="height:74px;" class="overflow-y-hidden">
                                    </div>
                                </div>
                                <div class="col-auto text-center">
                                    <div class="max-width-175px overflow-x-hidden">
                                        <img src="https://static25.tgcnt.ru/posts/_320/a9/a9ac586bca46d4ecdf9c8397d0b5e58e.jpg" height="80" class="rounded">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-2 mb-1 d-flex flex-row justify-content-between align-items-center mt-2">

                            <div class="text-truncate">
                                <div class="float-left mr-1">
                                    <img src="//static5.tgstat.ru/channels/_50/42/42811e93f0033621eeefa7856302894a.jpg" class="rounded-circle" style="width:20px; height:20px;">                                </div>

                                Пробуждающий Мир - официальный канал                            </div>

                            <div class="font-12 text-muted">
                                1 Nov,
                                09:55                            </div>
                        </div>

                    </div>
                </a>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="16" id="" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-4 slick-slider-item" style="width: 100%; display: inline-block;">
                <a class="popup_ajax text-dark" data-src="/channel/@keks_life/983" href="/channel/@keks_life/983" target="_blank" tabindex="-1">
                    <div class="card card-body card-shadow-12px border m-0 p-0 d-flex flex-column" style="height:140px;">

                        <div class="font-16 text-dark rounded px-2 py-1 mt-1 mb-auto">

                            <div class="row">
                                <div class="col">
                                    <div style="height:74px;" class="overflow-y-hidden">
                                        ​​ Откуда берутся всплески сексуального желания?  У всех взрослых людей бывают такие периоды – в среднем они длятся 2-3 дня у девушек и 4-6 дней у парней – когда тебе хочется постоянных оргазмов. К...                                        </div>
                                </div>
                                <div class="col-auto text-center">
                                    <div class="max-width-175px overflow-x-hidden">
                                        <img src="https://static24.tgcnt.ru/posts/_1200/ff/ffb61797a27127b8b279c47040048afb.jpg" height="80" class="rounded">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-2 mb-1 d-flex flex-row justify-content-between align-items-center mt-2">

                            <div class="text-truncate">
                                <div class="float-left mr-1">
                                    <img src="//static4.tgstat.ru/channels/_50/1a/1acdf75c6773b554415c463698eeab06.jpg" class="rounded-circle" style="width:20px; height:20px;">                                </div>

                                SEX/LIFE                            </div>

                            <div class="font-12 text-muted">
                                1 Nov,
                                17:17                            </div>
                        </div>

                    </div>
                </a>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="17" id="" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-4 slick-slider-item" style="width: 100%; display: inline-block;">
                <a class="popup_ajax text-dark" data-src="/channel/cAC4GjMK4NkxMDYy/1021" href="/channel/cAC4GjMK4NkxMDYy/1021" target="_blank" tabindex="-1">
                    <div class="card card-body card-shadow-12px border m-0 p-0 d-flex flex-column" style="height:140px;">

                        <div class="font-16 text-dark rounded px-2 py-1 mt-1 mb-auto">

                            <div class="row">
                                <div class="col">
                                    <div style="height:74px;" class="overflow-y-hidden">
                                        Во время секса вырабатывается иммунитет, который на 90% защитит тебя от гриппа.   Сексуальное Воспитание                                        </div>
                                </div>
                                <div class="col-auto text-center">
                                    <div class="max-width-175px overflow-x-hidden">
                                        <img src="https://static26.tgcnt.ru/posts/_905/c0/c07a38e2f315fb5e34d7dd33b2defc79.jpg" height="80" class="rounded">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-2 mb-1 d-flex flex-row justify-content-between align-items-center mt-2">

                            <div class="text-truncate">
                                <div class="float-left mr-1">
                                    <img src="//static7.tgstat.ru/channels/_50/6d/6d7052037b35f809756f7aaa87b703dc.jpg" class="rounded-circle" style="width:20px; height:20px;">                                </div>

                                Сексуальное Воспитание                            </div>

                            <div class="font-12 text-muted">
                                1 Nov,
                                13:00                            </div>
                        </div>

                    </div>
                </a>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="18" id="" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-4 slick-slider-item" style="width: 100%; display: inline-block;">
                <a class="popup_ajax text-dark" data-src="/channel/@psyhologiya_mysly/3719" href="/channel/@psyhologiya_mysly/3719" target="_blank" tabindex="-1">
                    <div class="card card-body card-shadow-12px border m-0 p-0 d-flex flex-column" style="height:140px;">

                        <div class="font-16 text-dark rounded px-2 py-1 mt-1 mb-auto">

                            <div class="row">
                                <div class="col">
                                    <div style="height:74px;" class="overflow-y-hidden">
                                        ​Для принятия важных  решений — квадрат Декарта  Это простая техника принятия решений. Ее суть заключается в том, что нужно рассмотреть проблему/ситуацию, ответив на такие 4 вопроса:  1. Что будет,...                                        </div>
                                </div>
                                <div class="col-auto text-center">
                                    <div class="max-width-175px overflow-x-hidden">
                                        <img src="https://static27.tgcnt.ru/posts/_1080/d3/d376d9129af9fe9a0e62c1f29edd31b3.jpg" height="80" class="rounded">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-2 mb-1 d-flex flex-row justify-content-between align-items-center mt-2">

                            <div class="text-truncate">
                                <div class="float-left mr-1">
                                    <img src="//static2.tgstat.ru/channels/_50/cc/cc60ae073a0df302d2a543e5ad33be05.jpg" class="rounded-circle" style="width:20px; height:20px;">                                </div>

                                ꧁༺ Психология ༻꧂                            </div>

                            <div class="font-12 text-muted">
                                1 Nov,
                                19:07                            </div>
                        </div>

                    </div>
                </a>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="19" id="" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-4 slick-slider-item" style="width: 100%; display: inline-block;">
                <a class="popup_ajax text-dark" data-src="/channel/AnW1LVO-CQthMWIy/1903" href="/channel/AnW1LVO-CQthMWIy/1903" target="_blank" tabindex="-1">
                    <div class="card card-body card-shadow-12px border m-0 p-0 d-flex flex-column" style="height:140px;">

                        <div class="font-16 text-dark rounded px-2 py-1 mt-1 mb-auto">

                            <div class="row">
                                <div class="col">
                                    <div style="height:74px;" class="overflow-y-hidden">
                                        — SX / #EDUCATION                                        </div>
                                </div>
                                <div class="col-auto text-center">
                                    <div class="max-width-175px overflow-x-hidden">
                                        <img src="https://static27.tgcnt.ru/posts/_720/9f/9ff7f1ba8c70fcad6d69be1ed6ec1dbf.jpg" height="80" class="rounded">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-2 mb-1 d-flex flex-row justify-content-between align-items-center mt-2">

                            <div class="text-truncate">
                                <div class="float-left mr-1">
                                    <img src="//static3.tgstat.ru/channels/_50/8f/8f47184c2f4023a2c94e7b2ac97d1ee6.jpg" class="rounded-circle" style="width:20px; height:20px;">                                </div>

                                SX                            </div>

                            <div class="font-12 text-muted">
                                1 Nov,
                                09:09                            </div>
                        </div>

                    </div>
                </a>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="20" id="" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-4 slick-slider-item" style="width: 100%; display: inline-block;">
                <a class="popup_ajax text-dark" data-src="/channel/@psyinlaw/8571" href="/channel/@psyinlaw/8571" target="_blank" tabindex="-1">
                    <div class="card card-body card-shadow-12px border m-0 p-0 d-flex flex-column" style="height:140px;">

                        <div class="font-16 text-dark rounded px-2 py-1 mt-1 mb-auto">

                            <div class="row">
                                <div class="col">
                                    <div style="height:74px;" class="overflow-y-hidden">
                                        Священник Храма святого праведного Иоанна Кронштадтского в Нижнекамске жестоко убил и расчленил свою жену.  Иерей Михаил Зубарев сначала зарезал супругу, а после расчленил. Голову женщины спрятал в...                                        </div>
                                </div>
                                <div class="col-auto text-center">
                                    <div class="max-width-175px overflow-x-hidden">
                                        <img src="https://static26.tgcnt.ru/posts/_1080/83/83c81a8ef551e1846c653c9a1589ac9d.jpg" height="80" class="rounded">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-2 mb-1 d-flex flex-row justify-content-between align-items-center mt-2">

                            <div class="text-truncate">
                                <div class="float-left mr-1">
                                    <img src="//static4.tgstat.ru/channels/_50/60/60788ea72cd79cd41eb0629ecd44d34b.jpg" class="rounded-circle" style="width:20px; height:20px;">                                </div>

                                Психолог в законе                            </div>

                            <div class="font-12 text-muted">
                                1 Nov,
                                12:53                            </div>
                        </div>

                    </div>
                </a>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="21" id="" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-4 slick-slider-item" style="width: 100%; display: inline-block;">
                <a class="popup_ajax text-dark" data-src="/channel/@yasno_live/1192" href="/channel/@yasno_live/1192" target="_blank" tabindex="-1">
                    <div class="card card-body card-shadow-12px border m-0 p-0 d-flex flex-column" style="height:140px;">

                        <div class="font-16 text-dark rounded px-2 py-1 mt-1 mb-auto">

                            <div style="height:74px;" class="overflow-y-hidden">
                                Друзья обижают и ранят меня своими шутками. Но я боюсь прекратить общение: вдруг останусь одна и больше никого не найду. Как быть?   ️ Отвечает Елена Воробьёва, гештальт-терапевт, психолог сервиса ...                                </div>
                        </div>

                        <div class="px-2 mb-1 d-flex flex-row justify-content-between align-items-center mt-2">

                            <div class="text-truncate">
                                <div class="float-left mr-1">
                                    <img src="//static1.tgstat.ru/channels/_50/2a/2a2d89992e37f55217b164c45b0146e8.jpg" class="rounded-circle" style="width:20px; height:20px;">                                </div>

                                Ок, ясно                            </div>

                            <div class="font-12 text-muted">
                                1 Nov,
                                12:02                            </div>
                        </div>

                    </div>
                </a>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="22" id="" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-4 slick-slider-item" style="width: 100%; display: inline-block;">
                <a class="popup_ajax text-dark" data-src="/channel/nDbtcwe0Sh41ODgy/811" href="/channel/nDbtcwe0Sh41ODgy/811" target="_blank" tabindex="-1">
                    <div class="card card-body card-shadow-12px border m-0 p-0 d-flex flex-column" style="height:140px;">

                        <div class="font-16 text-dark rounded px-2 py-1 mt-1 mb-auto">

                            <div style="height:74px;" class="overflow-y-hidden">
                                Гормоны счастья и как их хакнуть:   Серотонин (настроение)  🟤Медитация  🟤Баланс в питании  🟤Практика благодарностей    Окситоцин (любовь)  🟤Добрые поступки  🟤Прикосновения   🟤Приятное общение    Эн...                                </div>
                        </div>

                        <div class="px-2 mb-1 d-flex flex-row justify-content-between align-items-center mt-2">

                            <div class="text-truncate">
                                <div class="float-left mr-1">
                                    <img src="//static5.tgstat.ru/channels/_50/69/6939f1f392766a16787b0c0a5fe9b34a.jpg" class="rounded-circle" style="width:20px; height:20px;">                                </div>

                                women's community                            </div>

                            <div class="font-12 text-muted">
                                1 Nov,
                                14:04                            </div>
                        </div>

                    </div>
                </a>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="23" id="" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-4 slick-slider-item" style="width: 100%; display: inline-block;">
                <a class="popup_ajax text-dark" data-src="/channel/@dateideasspp/4593" href="/channel/@dateideasspp/4593" target="_blank" tabindex="-1">
                    <div class="card card-body card-shadow-12px border m-0 p-0 d-flex flex-column" style="height:140px;">

                        <div class="font-16 text-dark rounded px-2 py-1 mt-1 mb-auto">

                            <div class="row">
                                <div class="col">
                                    <div style="height:74px;" class="overflow-y-hidden">
                                        Нужна помощь зала                                        </div>
                                </div>
                                <div class="col-auto text-center">
                                    <div class="max-width-175px overflow-x-hidden">
                                        <img src="https://static26.tgcnt.ru/posts/_180/54/545d911199814fcf36022520dd58f2c3.jpg" height="80" class="rounded">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-2 mb-1 d-flex flex-row justify-content-between align-items-center mt-2">

                            <div class="text-truncate">
                                <div class="float-left mr-1">
                                    <img src="//static10.tgstat.ru/channels/_50/3f/3f4482ad621aa87f2218f3288653c49b.jpg" class="rounded-circle" style="width:20px; height:20px;">                                </div>

                                date ideas|психология отношений                            </div>

                            <div class="font-12 text-muted">
                                1 Nov,
                                19:14                            </div>
                        </div>

                    </div>
                </a>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="24" id="" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-4 slick-slider-item" style="width: 100%; display: inline-block;">
                <a class="popup_ajax text-dark" data-src="/channel/@transerfing_realnosti_tyt/2780" href="/channel/@transerfing_realnosti_tyt/2780" target="_blank" tabindex="-1">
                    <div class="card card-body card-shadow-12px border m-0 p-0 d-flex flex-column" style="height:140px;">

                        <div class="font-16 text-dark rounded px-2 py-1 mt-1 mb-auto">

                            <div style="height:74px;" class="overflow-y-hidden">
                                Если вы сосредоточитесь на цели, как будто она уже достигнута, ваши двери откроются, и средства найдутся сами собой. Это и есть свобода, от которой буквально кружится голова. Если вы не принимаете ...                                </div>
                        </div>

                        <div class="px-2 mb-1 d-flex flex-row justify-content-between align-items-center mt-2">

                            <div class="text-truncate">
                                <div class="float-left mr-1">
                                    <img src="//static7.tgstat.ru/channels/_50/19/1920a94788ff2b44e13bec36873ac161.jpg" class="rounded-circle" style="width:20px; height:20px;">                                </div>

                                Трансерфинг реальности                            </div>

                            <div class="font-12 text-muted">
                                1 Nov,
                                19:17                            </div>
                        </div>

                    </div>
                </a>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="25" id="" aria-hidden="true" style="width: 348px;" tabindex="-1"><div><div class="col-4 slick-slider-item" style="width: 100%; display: inline-block;">
                <a class="popup_ajax text-dark" data-src="/channel/OrQ2lxEXYN0yZTUy/7186" href="/channel/OrQ2lxEXYN0yZTUy/7186" target="_blank" tabindex="-1">
                    <div class="card card-body card-shadow-12px border m-0 p-0 d-flex flex-column" style="height:140px;">

                        <div class="font-16 text-dark rounded px-2 py-1 mt-1 mb-auto">

                            <div class="row">
                                <div class="col">
                                    <div style="height:74px;" class="overflow-y-hidden">
                                        «Мы притягиваем тех, кто помогает нам усвоить урок и пойти дальше по ступени эволюции»  Если в твоей Жизни есть человек, который причинил боль, то знай - он проявил тебе твою же травму.  Тот, кто б...                                        </div>
                                </div>
                                <div class="col-auto text-center">
                                    <div class="max-width-175px overflow-x-hidden">
                                        <img src="https://static26.tgcnt.ru/posts/_960/24/24be3ccdeac7dfdaf392704ad54c62d8.jpg" height="80" class="rounded">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-2 mb-1 d-flex flex-row justify-content-between align-items-center mt-2">

                            <div class="text-truncate">
                                <div class="float-left mr-1">
                                    <img src="//static7.tgstat.ru/channels/_50/25/253a456ec4478f15fdb3259a0ce97baf.jpg" class="rounded-circle" style="width:20px; height:20px;">                                </div>

                                Мария Самарина про Путь                            </div>

                            <div class="font-12 text-muted">
                                1 Nov,
                                15:05                            </div>
                        </div>

                    </div>
                </a>
            </div></div></div></div></div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button></div>
        </div>
    </div>







    <div class="mb-3 mt-3" id="category-items-list-container">


        <form ref="form" id="category-list-form" class="lm-form" :action="'/'+ data['slug'] +'/items'" method="POST" autocomplete="off">
            <div class="row mb-2 mb-md-0">
                <div class="col-12 col-md text-center text-md-left">
                    <div class="form-group mb-2">
                        <div class="btn-group btn-group-toggle mr-1" data-toggle="buttons">
                            <label class="btn btn-sm btn-outline-dark py-05 active text-truncate form-filter-js">
                                <input type="radio" name="peer_type" id="peer_type_channel" value="channel" checked="" autocomplete="off">
                                Все каналы                    </label>
                            <label class="btn btn-sm btn-outline-dark py-05 text-truncate form-filter-js">
                                <input type="radio" name="peer_type" id="peer_type_chat" value="chat" autocomplete="off">
                                Все чаты                    </label>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-auto text-center text-md-right">

                    <div class="form-group mb-2 d-block" id="channels-sorts">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-sm btn-outline-dark py-05 active text-truncate form-filter-js">
                                <input type="radio" name="sort_channel" value="members" checked="" autocomplete="off">
                                По подписчикам                    </label>
                            <label class="btn btn-sm btn-outline-dark py-05 text-truncate form-filter-js">
                                <input type="radio" name="sort_channel" value="ci" autocomplete="off">
                                По цитируемости                    </label>
                        </div>
                    </div>

                    <div class="form-group mb-2 d-none" id="chats-sorts">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-sm btn-outline-dark py-05 active text-truncate form-filter-js">
                                <input type="radio" name="sort_chat" value="members" checked="" autocomplete="off">
                                По участникам                    </label>
                            <label class="btn btn-sm btn-outline-dark py-05 text-truncate form-filter-js">
                                <input type="radio" name="sort_chat" value="mau" autocomplete="off">
                                По активности                    </label>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row justify-content-center lm-list-container">




                <div v-for="channel in data['channels']" class="col-12 col-sm-6 col-md-4">
                    <OneChannelCard :channel="channel" :current_page="current_page" />                </div></div>




            <div class="d-flex justify-content-center">
                <div class="lm-button-container mt-2">
                    <button class="btn btn-light border lm-button py-1 min-width-220px" type="button">
                        Показать больше            </button>

                    <span class="lm-loader d-none spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                </div>
            </div>

            <input type="hidden" class="lm-page" name="page" value="1">    <input type="hidden" class="lm-offset" name="offset" value="0">
        </form></div>





    <div class="my-3">

        <ChooseCategoryCard :categories="data['categories']" />

    </div>



















</template>

<style scoped>

</style>
