<script>
import {Head} from "@inertiajs/vue3";


export default {
    name: "AddChannel",
    components: {Head},
    created() {
    },
    props: {
        main_header: String,
        countries: Object,
        languages: Object,
        categories: Object,
    },
    data() {return {
    }},
    updated() {
    },
    methods: {
    },
}
</script>

<template>
    <!-- id="vue-app"-->

    <Head title="Добавить канал" />

    <div class="row d-flex justify-content-center">
        <div class="col-12 col-sm-8 col-md-9 col-lg-6">
            <h1 class="text-center mt-4 text-dark">{{ main_header }}</h1>

        <template v-if="!categories">
            <div class="card card-body mt-4">

                <div class="d-flex justify-content-center">
                    <p class="lead my-3 text-success text-center">
                        Заявка отправлена.
                        Канал появится в течение 10 минут.
                    </p>
                </div>

                <div class="d-flex justify-content-center">
                    <a class="btn btn-dark btn-block w-50 font-18" href="/add/channel">
                        Добавить еще                </a>
                </div>

            </div>
        </template>

        <template v-else>

            <p class="lead my-3 text-center">
                Если вы не обнаружили свой канал на сайте — воспользуйтесь формой, чтобы его добавить        </p>

            <div class="card card-body ajax-form-container">

                <form id="add-form" class="popup-ajax-form" name="ajx-form" action="/api/add/channel" method="post" autocomplete="off">
                    <div class="form-group field-username">
                        <label class="control-label" for="username">Ссылка на канал или @username</label>
                        <input type="text" id="username" class="form-control" name="username" autofocus="" placeholder="@username, t.me/joinchat/AAAAAgHfyJsuf...">

                        <p class="help-block help-block-error"></p>
                    </div>
                    <div class="form-group field-country">
                        <label class="control-label" for="country">Страна</label>
                        <select id="country" class="custom-select" name="country">
                            <option value="">Выберите страну ...</option>

                            <option v-for="(value, key) in countries" :value=key>{{ value }}</option>

                        </select>

                        <p class="help-block help-block-error"></p>
                    </div>

                    <div class="form-group field-language">
                        <label class="control-label" for="language">Язык контента канала</label>
                        <select id="language" class="custom-select" name="language">
                            <option value="">Выберите язык ...</option>

                            <option v-for="(value, key) in languages" :value=key>{{ value }}</option>

                        </select>

                        <p class="help-block help-block-error"></p>
                    </div>
                    <div class="form-group field-category_id">
                        <label class="control-label" for="category_id">Категория канала</label>
                        <select id="category_id" class="custom-select" name="category_id">
                            <option value="">Выберите категорию ...</option>

                            <option v-for="(value, key) in categories" :value=key>{{ value }}</option>

                        </select>

                        <p class="help-block help-block-error"></p>
                    </div>
                    <div class="submit-result-block collapse mt-3">
                        <div class="alert alert-danger mb-0" role="alert"></div>
                    </div>

                    <div class="form-group mt-4 text-center">
                        <button type="submit" class="btn btn-primary w-50" name="submit-button" data-title-state-original="Отправить" data-title-state-ready="Отправлено">Отправить</button>            </div>

                </form>        </div>
        </template>

        </div>
    </div>


</template>

<style scoped>

</style>
