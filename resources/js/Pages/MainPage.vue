<script type="application/javascript">
import FlagsComponent from './Components/Flags.vue'
import ChannelsCard from './Components/ChannelsCard.vue'
import OneThirdCard from './Components/OneThirdCard.vue'
import ChooseCategoryCard from './Components/ChooseCategoryCard.vue'
import {Head} from "@inertiajs/vue3";

export default {
    name: 'MainPage',
    components: {Head, FlagsComponent, ChannelsCard, ChooseCategoryCard, OneThirdCard},
    props: {
        popular_channels: Object,
        categories: Array,
        top_by_category: Object,
    }
}
</script>



<template>

    <Head title="Телеграм каналы" />

    <h1 class="text-dark mt-4 text-center">
        Каталог Telegram-каналов и чатов</h1>

    <FlagsComponent />

    <div class="mb-3 position-relative">

        <ChannelsCard :grouped_channels="popular_channels" friendly_title="Самые популярные" />

        <ChooseCategoryCard :categories="categories" friendly_title="Все категории" />

        <ChannelsCard :grouped_channels="top_by_category['blogs']['grouped_channels']" title="blogs" :friendly_title="top_by_category['blogs']['friendly_title']" />

        <ChannelsCard :grouped_channels="top_by_category['news']['grouped_channels']" title="news" :friendly_title="top_by_category['news']['friendly_title']" />

        <div class="row">
            <div class="col-12 px-0 d-flex justify-content-between">

                <OneThirdCard title="politics"
                              :friendly_title="top_by_category['politics']['friendly_title']"
                              :channels_column="top_by_category['politics']['grouped_channels'][0]"/>

                <OneThirdCard title="economics"
                              :friendly_title="top_by_category['economics']['friendly_title']"
                              :channels_column="top_by_category['economics']['grouped_channels'][0]"/>

                <OneThirdCard title="education"
                              :friendly_title="top_by_category['education']['friendly_title']"
                              :channels_column="top_by_category['education']['grouped_channels'][0]"/>

            </div>
        </div>

        <ChannelsCard :grouped_channels="top_by_category['travels']['grouped_channels']" title="travels" :friendly_title="top_by_category['travels']['friendly_title']" />

    </div>

</template>

<style>
</style>


