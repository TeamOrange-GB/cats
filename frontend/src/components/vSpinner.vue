<template>
    <div class="spinner-loading" v-if="ISLOADING">Идет загрузка данных...</div>
</template>

<script>
    import {mapActions, mapGetters} from 'vuex'

    export default {
        name: "vSpinner",
        computed: {
            ...mapGetters([
                'ISLOADING'
            ]),
        }
    }
</script>

<style>
    .spinner-loading {
        position: absolute;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        display: flex;
        flex-flow: row nowrap;
        justify-content: center;
        align-items: center;
        background: #eeeeee;
        z-index: 1000;
        padding: 0 50px;
    }
</style>
