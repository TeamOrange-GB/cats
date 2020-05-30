<template>
    <section class="sponsors">
        <h2 class="sponsors__title">
            Наши спонсоры
        </h2>
        <div class="sponsors-list">
            <img src="../../assets/image/Sponsors/brand_1_170x78_crop_top.png" alt="brand_1">
            <img src="../../assets/image/Sponsors/brand_2_170x78_crop_top.png" alt="brand_2">
            <img src="../../assets/image/Sponsors/brand_3_170x78_crop_top.png" alt="brand_3">
            <img src="../../assets/image/Sponsors/brand_4_170x78_crop_top.png" alt="brand_4">
            <img src="../../assets/image/Sponsors/brand_5_170x78_crop_top.png" alt="brand_5">
            <img src="../../assets/image/Sponsors/brand_6_170x78_crop_top.png" alt="brand_6">
        </div>
    </section>
</template>

<style lang="scss">
    .sponsors{
        padding: 50px;
        &__title {
            margin: 0 0 20px;
            font-family: "arimo", sans-serif;
            text-transform: uppercase;
            color: #49bcab;
            font-size: 45px;
            text-align: center;
            line-height: 1.3;
        }
        &-list {
            display: flex;
            justify-content: center;
            background-color: $color-smoke;
            flex-wrap: wrap;
        }
        img{
            margin: 0 10px;
        }
    }
    @media screen and (max-width: 650px){
        .sponsors{
            &__title{
                font-size: 30px;
            }
        }
    }
</style>
