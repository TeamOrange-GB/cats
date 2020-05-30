<template>
    <section class="v-main">
        <vInfo/>
        <vCatCatalogHome/>
        <Sponsors/>
        <vSponsorInfo/>
    </section>
</template>

<script>
    import vSponsorInfo from "./vSponsorInfo";
    import vInfo from './vInfo'
    import vCatCatalogHome from "../Catalog/vCatCatalogHome";
    import ArticlesBlock from './vArticlesInfo.vue'
    import Sponsors from './vSponsors.vue'

    export default {
        name: "vMain",
        components:{
            vInfo,
            vCatCatalogHome,
            ArticlesBlock,
            vSponsorInfo,
            Sponsors
        }
    }
</script>

<style lang="scss">

</style>
