<template>
    <section class="v-main">
        <vInfo/>
        <vCatCatalog/>
        <ArticlesBlock/>
        <Sponsors/>
    </section>
</template>

<script>
    import vInfo from './vInfo'
    import vCatCatalog from "../Catalog/vCatCatalog";
    import ArticlesBlock from './vArticlesBlock.vue'
    import Sponsors from './vSponsors.vue'
    export default {
        components:{
            vInfo,
            vCatCatalog,
            ArticlesBlock,
            Sponsors
        },

        name: "vMain"
    }
</script>

<style lang="scss">

</style>
