<template>
    <div class="cat-catalog__gallery">
        <div class="spinner-loading" v-if="ISLOADING">Идет загрузка данных...</div>
        <div class="gallery-list">
            <vCatItem
                v-for="(animal, index) in arrayAnimal"
                :key="index"
                :animal="animal"
                :isAwardsVisible="animal.awards"
                @likeCountUp="likeCountUp"
            />
        </div>
        <div
            v-if="showPagination && isPaginationVisible"
            class="gallery-pagination"
        >
            <div
                v-for="(page, index) in pages"
                :key="page"
                :class="{'page--selected' : page === pageNumber }"
                @click="changePage(index)"
                class="page"
            >
                {{page}}
            </div>
        </div>
    </div>
</template>

<script>

    import vCatItem from "./vCatItem";
    import {mapActions, mapGetters} from 'vuex'

    export default {
        name: "vCatGallery",
        components: {
            vCatItem
        },
        props: {
            animalsNumber: {
              type: Number,
                default() {
                    return 4;
                }
            },
            isPaginationVisible: {
                type: Boolean,
                default() {
                    return false
                }
            },
            filterParam: {
                type: Object,
                default() {
                    return undefined;
                }
            },

        },
        data(){
            return {
                pageNumber: 1,
                arrayAnimal: []
                }
            },
        methods: {
            ...mapActions([
                'GET_CATALOG_FROM_API',
                'UPDATE_COUNTS_LIKES',
                'SET_ISLOADING',
            ]),
            changePage(index){
                this.pageNumber = index + 1;
                this.getArrayAnimal();
            },
            sortByLikes(){
                this.CATALOG.sort((a,b) => b.likes_count - a.likes_count);
            },
            likeCountUp(id){
                this.UPDATE_COUNTS_LIKES(id)
            },
            getArrayAnimal(){
                let arr = this.paginatedList;
                this.arrayAnimal = this.filterParam ? this.filterArrayAnimal(arr, this.filterParam) : arr;
            },
            filterArrayAnimal(array, filterParam){
                let arr = [...array];
                Object.entries(filterParam).forEach(param => {
                    arr = arr.filter(item => item[param[0]] === param[1]);
                });
                return arr;
            },
        },
        computed: {
            ...mapGetters([
                'CATALOG',
                'ISLOADING'
            ]),
            pages(){
                return Math.ceil(this.CATALOG.length / this.animalsNumber);
            },
            showPagination(){
                if(this.animalsNumber > this.CATALOG.length){
                    return false
                }else {
                    return true
                }
            },
            paginatedList(){
                let from = (this.pageNumber - 1) * this.animalsNumber;
                let to = from + this.animalsNumber;
                this.sortByLikes();
                let arr = this.CATALOG.map(f=>f);
                return arr.slice(from, to);
            },
        },
        mounted() {
            this.SET_ISLOADING();
            this.GET_CATALOG_FROM_API()
                .then(this.getArrayAnimal)
        }
    }
</script>

<style lang="scss">
    .gallery-list {
        display: flex;
        justify-content: flex-start;
        flex-wrap: wrap;
        margin-bottom: 40px;
    }
    .gallery-pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        .page {
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 60px;
            height: 60px;
            color: $color-light-grey;
            margin: 0 10px;
            border: 1px solid $color-light-grey;
            border-radius: 50%;
            &--selected {
                background: url("~@/assets/image/Home/pag1.png") center no-repeat;
                background-size: 80px;
                border: none;
                width: 80px;
                height: 80px;
                color: $color-cyan;
            }
        }
    }
    .catalog-home{
        .gallery-list {
            display: flex;
            justify-content: flex-start;
            flex-wrap: nowrap;
        }
    }
</style>
