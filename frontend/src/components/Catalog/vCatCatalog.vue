<template>
    <section class="cat-catalog">
        <h2 class="cat-catalog__title">Участники выставки</h2>
        <div class="cat-catalog__list">
            <div class="cat-catalog__filters">
                <h3>Фильтры</h3>
                <div class="cat-catalog__filters-list">
                    <vFilterSelect

                    />

                    <div class="filter-param">
                        <span>По лайкам</span>
                        <label class="filter-checkbox__label">
                            <input type="checkbox">
                            <span></span>
                        </label>
                    </div>
                    <div class="filter-param">
                        <span>По дате добавления</span>
                        <label class="filter-checkbox__label">
                            <input type="checkbox">
                            <span></span>
                        </label>
                    </div>
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
    import vFilterSelect from "./vFilterSelect";

export default {
    name: 'vCatCatalog',
    components: {
        vCatGallery,
        vFilterSelect
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
            flex-direction: column;
        }
        &__filters{
            padding: 20px;
            border-bottom: 1px solid $color-cyan;
            h3 {
                color: $color-cyan;
                text-align: center;
                margin-bottom: 40px;
            }
            &-list {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
        }
        &__gallery{
            flex-grow: 1;
        }
    }

    .filter {
        &-param {
            color: $color-cyan;
            display: flex;
            justify-content: space-between;
            align-items: center;
            span{
                font-family: $font-arimo;
                margin-right: 10px;
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
                background: white;
                box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.4);
            }
            &::after{
                left: 4px;
                height: 16px;
                width: 16px;
                margin-top: -7px;
                background: $color-cyan;
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
            background-color: white;
        }
    }


</style>
