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
    import {mapActions} from 'vuex'

    export default {
        name: "vMain",
        components:{
            vInfo,
            vCatCatalogHome,
            Sponsors,
            vAbout
        },
        methods: {
            ...mapActions([
                'FIRST_VISIT_USER_LOGIN'
            ]),
        },
        mounted() {
            this.FIRST_VISIT_USER_LOGIN()
        }
    }
</script>

<style lang="scss">

</style>
