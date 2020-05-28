<template>
    <section class="cat-catalog">
        <h2 class="cat-catalog__title">Участники выставки</h2>
        <div class="cat-catalog__list">
            <div class="cat-catalog__filters">
                <h3>Фильтры</h3>
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

                <div class="filter-param">
                    <span>Параметр 1</span>
                    <label class="filter-checkbox__label">
                        <input type="checkbox">
                        <span></span>
                    </label>
                </div>
                <div class="filter-param">
                    <span>Параметр 2</span>
                    <label class="filter-checkbox__label">
                        <input type="checkbox">
                        <span></span>
                    </label>
                </div>
                <div class="filter-param">
                    <span>Параметр 3</span>
                    <label class="filter-checkbox__label">
                        <input type="checkbox">
                        <span></span>
                    </label>
                </div>
                <div class="filter-param">
                    <span>Параметр 4</span>
                    <label class="filter-checkbox__label">
                        <input type="checkbox">
                        <span></span>
                    </label>
                </div>
                <div class="filter-param">
                    <span>Параметр 5</span>
                    <label class="filter-checkbox__label">
                        <input type="checkbox">
                        <span></span>
                    </label>
                </div>

            </div>
            <vCatGallery
                :animalsNumber="10"
                :isPaginationVisible="true"
            />
        </div>
    </section>
</template>

<script>

    import vCatGallery from "./vCatGallery";

export default {
    name: 'vCatCatalog',
    components: {
        vCatGallery
    },
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
    .cat-catalog{
        margin-bottom: 60px;
        &__title {
            margin: 0 0 20px;
            font-family: $font-arimo;
            text-transform: uppercase;
            color: $color-cyan;
            font-size: 45px;
            text-align: center;
            line-height: 1.3;
        }
        &__list {
            display: flex;
            justify-content: space-between;
        }
        &__filters{
            padding: 20px;
            display: flex;
            align-items: center;
            flex-direction: column;
            min-width: 340px;
            border-right: 1px solid $color-cyan;
            h3 {
                color: $color-light-grey;
                text-align: center;
                margin-bottom: 40px;
            }
        }
        &__gallery{
            flex-grow: 1;
        }
    }

    .filter {
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
            margin-bottom: 40px;
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
        &-param {
            color: $color-light-grey;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            min-width: 200px;
            span{
                font-family: $font-arimo;
            }
        }
    }

    // Custom checkbox

    .filter-checkbox__label {
        display: inline-block;
        padding: 5px 5px 5px 40px;
        margin: 0;
        position: relative;
        cursor: pointer;
        input {
            position: absolute;
            opacity: 0;
            cursor: inherit;
        }
        span {
            display: inline-block;
            padding: 4px 0;
            &::before {
                left: 0;
                height: 22px;
                margin-top: -10px;
                width: 44px;
                border-radius: 20px;
                background: #BFBFBF;
                box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.4);
            }
            &::after{
                left: 4px;
                height: 16px;
                width: 16px;
                margin-top: -7px;
                background: $color-white;
                border-radius: 50%;
            }

        }
        span::after,
        span::before{
            content: '';
            position: absolute;
            top: 50%;
            transition: .3s;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        input:checked + span:before {
            background-color: $color-cyan;
        }
        input:checked + span:after {
            left: 24px;
        }
    }


</style>
