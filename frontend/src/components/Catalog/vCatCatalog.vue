<template>
    <section class="cat-catalog">
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
        <div class="cat-catalog__gallery">
            <vCatItem
                v-for="i in 8"
                :key="i"
            />
            <div class="cat-catalog__pagination">
                <span></span>
            </div>
        </div>
    </section>
</template>

<script>

    import vCatItem from "./vCatItem";

export default {
    name: 'vCatCatalog',
    components: {
        vCatItem
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
        display: flex;
        justify-content: space-between;
        margin-bottom: 60px;
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
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            flex-wrap: wrap;
            &-item {
                max-width: 320px;
                margin: 20px;
                position: relative;
            }
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

    .pet {
        &__img {
            width: 100%;
        }
        &-info {
            min-height: 44px;
            position: absolute;
            bottom: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: space-between;
            align-items: center;
            &__item {
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 0 20px;
            }
        }
        &__name {
            color: $color-white;
            margin-left: 10px;
        }
        &__breed {
            color: $color-white;
            margin-left: 10px;
        }
        &__awards {
            position: absolute;
            top: 10px;
            right: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            &-item {
                width: 38px;
                height: 38px;
                margin-bottom: 5px;
                display: flex;
                justify-content: center;
                align-items: center;
                background: rgba(0,0,0,0.5);
                border-radius: 50%;
                color: $color-cyan;
                font-size: 30px;
                img {
                    width: 100%;
                }
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
