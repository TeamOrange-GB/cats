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

    import {mapActions} from 'vuex'

    export default {
        name: "vMain",
        components:{
            vInfo,
            vCatCatalogHome,
            ArticlesBlock,
            vSponsorInfo,
            Sponsors
        },
        methods: {
            ...mapActions([
                'FIRST_USER_LOGIN'
            ])
        },
        mounted() {
            this.FIRST_USER_LOGIN()
        }

    }
</script>

<style lang="scss">

</style>
