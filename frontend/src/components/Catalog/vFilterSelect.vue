<template>
    <div
        @click="toggleFilterList"
        class="filter-breed"
    >
        <span class="filter-breed__text">Порода</span>
        <img
            :class="{'filter-breed__arrow--rotate': isFilterListVisible}"
            class="filter-breed__arrow"
            src="@/assets/image/down.svg"
            alt=""
        >
        <div
            v-if="isFilterListVisible"
            class="filter-breed__list"
        >
            <span>Порода 1</span>
            <span>Порода 2</span>
            <span>Порода 3</span>
            <span>Порода 4</span>
            <span>Порода 5</span>
            <span>Порода 6</span>
        </div>
    </div>
</template>

<script>
    export default {
        name: "vFilterSelect",
        data(){
            return{
                isFilterListVisible:false
            }
        },
        methods: {
            toggleFilterList(){
                this.isFilterListVisible = !this.isFilterListVisible
            }
        }
    }
</script>

<style lang="scss">
    .filter{
        &-breed {
            color: $color-light-grey;
            border: 1px solid $color-light-grey;
            padding: 10px;
            min-width: 200px;
            min-height: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            cursor: pointer;
            &__text {

             }
            &__arrow {
                 width: 16px;
                 height: 16px;
                 transition: .5s;
                &--rotate {
                     transition: .5s;
                     transform: rotate(180deg);
                 }
            }
            &__list {
                position: absolute;
                top: 45px;
                left: 0;
                z-index: 10;
                background: $color-white;
                width: 220px;
                border: 1px solid $color-light-grey;

                span {
                    display: block;
                    padding: 10px 10px;
                    transition: .2s;
                    font-family: $font-arimo;

                    &:hover {
                        transition: .2s;
                        background: $color-cyan;
                        color: $color-white;
                    }
                }
            }
        }
    }
</style>
