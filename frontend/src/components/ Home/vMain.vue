<template>
    <section class="v-main">
            <Slider/>
            <ArticlesBlock/>
            <Sponsors/>
    </section>
</template>

<script>
    import Slider from './vSlider.vue'
    import ArticlesBlock from './vArticlesBlock.vue'
    import Sponsors from './vSponsors.vue'
    export default {
        components:{
            Slider,
            ArticlesBlock,
            Sponsors
        },

        name: "vMain"
    }
</script>

<style lang="scss">

</style>
