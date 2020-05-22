<template>
    <section class="cat-catalog">
        <div class="cat-catalog__filters"></div>
        <div class="cat-catalog__galary"></div>
    </section>
</template>
<script>
export default {
    name: 'vCatCatalog'
}
</script>
<style lang="scss">
    .cat-catalog{
        display: flex;
        border:1px solid red;
        &__filters{
            border:1px solid red;
        }
        &__galary{
            border:1px solid red;
        }
    }
</style>