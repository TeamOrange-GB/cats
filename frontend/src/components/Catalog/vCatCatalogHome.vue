<template>
    <section class="catalog-home">
        <h2 class="catalog-home__title">Участники выставки</h2>
        <vCatGallery
            :animalsNumber="4"
            :isPaginationVisible="false"
        />
        <router-link class="catalog-home__more" :to="{name: 'vCatCatalog'}">
            Посмотреть остальных участников
        </router-link>
    </section>
</template>

<script>
    import vCatGallery from "./vCatGallery";

    export default {
        name: "vCatCatalogHome",
        components: {
            vCatGallery
        }
    }
</script>

<style lang="scss">
    .catalog-home {
        margin-bottom: 80px;
        &__title {
            margin: 0 0 40px;
            font-family: $font-arimo;
            text-transform: uppercase;
            color: $color-cyan;
            font-size: 45px;
            text-align: center;
            line-height: 1.3;
        }
        &__more {
            display: block;
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
            font-size: 30px;
            color: $color-cyan;
            transition: .5s;
            text-decoration: underline;
            &:hover {
                color: $color-light-grey;
                transition: .5s;
            }
        }
    }
    @media screen and (max-width: 650px){
        .catalog-home{
            &__title{
                font-size: 30px;
            }
        }
    }
</style>
