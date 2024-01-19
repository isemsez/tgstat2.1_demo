<script>
export default {
    name: "Select2",
    props: ["options", "modelValue"],
    emits: ["update:modelValue"],
    mounted: function() {
        let app = this
        $(this.$el)
            .val(this.modelValue)
            // emit event on change.
            .on('change', function () {
                app.$emit('update:modelValue', $(this).val())
            })
    },
    watch: {
        options: function (options) {
            // update options
            $(this.$el).select2({ data: options })
        },
    },
}
</script>

<template>
    <select><slot></slot></select>
</template>

<style scoped>

</style>
