<template>
    <section class="v-main">
        <vInfo/>
        <vAbout/>
        <vCatCatalogHome/>
        <Sponsors/>
    </section>
</template>

<script>
    import vInfo from './vInfo'
    import vCatCatalogHome from "../Catalog/vCatCatalogHome";
    import Sponsors from './vSponsors.vue'
    import vAbout from './vAbout'

    export default {
        name: "vMain",
        components:{
            vInfo,
            vCatCatalogHome,
            Sponsors,
            vAbout
        }
    }
</script>

<style lang="scss">

</style>
