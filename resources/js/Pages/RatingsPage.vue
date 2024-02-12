<script>
import {Head} from "@inertiajs/vue3";
import Flags from "@/Pages/Components/Flags.vue";

export default {
    name: "RatingsPage",
    components: {Flags, Head},
    props: {
        main_header: String,
        channels: Array,
        categories: Array,
    },
}
</script>

<template>
  <!-- id="vue-app"-->

  <Head title="Рейтинг"/>

  <h1 class="text-center text-dark mt-4">
    {{ main_header }}</h1>

  <div class="d-flex justify-content-center">
    <div>
      <div class="d-block float-left mr-2 mb-2">

        <Flags></Flags>

      </div>

      <div class="d-none d-lg-inline">
        <div class="btn-group" role="group">
          <a class="btn btn-sm btn-outline-dark active" href="#">
            все каналы </a>
          <a class="btn btn-sm btn-outline-dark" style="color: silver" href="#">
            публичные каналы </a>
          <a class="btn btn-sm btn-outline-dark" style="color: silver" href="#">
            приватные каналы </a></div></div>


      <div class="d-block float-left d-lg-none mr-2 mb-2">

        <div class="btn-group ">
          <button class="btn btn-light border dropdown-toggle text-truncate btn-sm" type="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            все каналы
          </button>

          <div class="dropdown-menu max-height-320px overflow-y-scroll">
            <a class="dropdown-item active" href="#">
              все каналы </a>
            <a class="dropdown-item " href="#">
              публичные каналы </a>
            <a class="dropdown-item " href="#">
              приватные каналы </a></div></div></div>


      <div class="d-block float-left d-lg-none mr-2 mb-2">
        <div class="btn-group">
          <button class="btn btn-light border dropdown-toggle text-truncate btn-sm" type="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <i class="uil-list-ul"></i>
            Все категории
          </button>

          <div class="dropdown-menu max-height-320px overflow-y-scroll">
            <a class="dropdown-item active" href="/ratings/channels?sort=members">
              Все категории </a>


            <template v-for="(friendly_title, slug) in categories">

              <a class="dropdown-item " :href="'/ratings/channels/'+ slug">
                {{ friendly_title }} </a>

            </template></div></div></div></div></div>

  <div class="row mt-3">
    <div class="d-none col-lg-3 d-lg-block">
      <div id="sticky-left-column" class="sticky-left-column">
        <div id="sticky-left-column__inner" class="sticky-left-column__inner" style="position: relative;">
          <div class="list-group list-group-flush border rounded">
            <a class="list-group-item list-group-item-action px-2 pl-lg-3 border-hover-info-right-3px  active text-dark border-info-right-3px"
               href="#">
              Все категории </a>


            <template v-for="(friendly_title, slug) in categories">

              <a class="list-group-item list-group-item-action px-2 pl-lg-3 border-hover-info-right-3px "
                 :href="'/ratings/channels/'+ slug ">
                {{ friendly_title }} </a>

            </template></div></div></div></div>

    <div class="col-12 col-lg-9">


      <div v-for="(channel,index) in channels" id="sticky-center-column" class="sticky-center-column">

        <div class="card peer-item-row mb-2 ribbon-box border">
          <div class="card-body py-2 position-relative">

            <a class="js-btn-favorite favorite-btn favorite-btn-bottom popup_ajax " href="#"
               :data-src="'/my/favorites/'+ channel['alias'] +'/create'" data-id="2907945"><i
                class="fav-icon"
                title=""
                data-toggle="tooltip"
                data-placement="top"
                data-original-title="Добавить в Избранное"
                data-original-title-inactive="Добавить в Избранное"
                data-original-title-active="В Избранном"></i></a>
            <div class="ribbon ribbon-secondary float-right position-absolute">
              #{{ index + 1 }}
            </div>

            <div class="row">

              <div class="col col-12 col-sm-5 col-md-5 col-lg-4">

                <a :href="'/channel/'+ channel['alias'].replace(/@/,'') " target="_blank">
                  <div class="row">
                    <div class="mx-1 mr-2">
                      <img
                          :src=" channel['img'] "
                          class="img-thumbnail border-2px border-success rounded-circle"
                          style="width:76px; height:76px;"></div>
                    <div class="col d-flex flex-column justify-content-around pl-0">
                      <div class="text-truncate font-16 text-dark mt-n1">
                        {{ channel['name'] }}
                      </div>
                      <div class="text-truncate font-14 text-dark mt-n1">
                        {{ channel['subscribers'] }} <span
                          class="text-body font-12">подписчиков</span>
                      </div>
                      <div class="text-truncate font-12 text-dark">
                <span class="border rounded bg-light px-1">
                  {{ channel['friendly_category'] }}                </span></div></div></div>
                </a></div>

              <div class="col col-12 col-sm-7 col-md-7 col-lg-8 px-0 pr-lg-4 pl-lg-5">
                <hr class="d-block d-sm-none mt-2 mb-0 w-100">

                <div class="row">
                  <div class="col col-4 pt-1">

                    <div class="text-center">

                      <h4 class="text-dark font-weight-normal mb-1 font-16 font-sm-18">
                        {{ channel['subscribers'] }} </h4>
                      <div class="text-muted font-13 font-sm-14 text-truncate">
                        подписчиков</div></div></div>

                  <div class="col col-4 pt-1">
                    <div class="text-center">
                      <h4 class="font-weight-normal mb-1 font-16 font-sm-18"
                          style="color: #cccccc">
                        242k </h4>
                      <div class="font-13 font-sm-14 text-truncate" style="color: #cccccc">
                        охват 1 поста</div></div></div>

                  <div class="col col-4 pt-1">
                    <div class="text-center">
                      <h4 class="font-weight-normal mb-1 font-16 font-sm-18"
                          style="color: #cccccc">
                        575 </h4>
                      <div class="font-13 font-sm-14 text-truncate" style="color: #cccccc">
                        индекс цитирования</div></div></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</template>

<style scoped>

</style>
