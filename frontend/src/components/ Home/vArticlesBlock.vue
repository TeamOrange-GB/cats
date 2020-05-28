<template>
    <section class="articles">
        <article class="article">
            <img src="../../assets/image/Articles/blog_1_610x290_crop_top.png" alt="blog_img_1">
            <h4 class="article__header">Easy Tricks to Teach Your Dog</h4>
            <p class="article__description">Besides, you are welcome to evaluate a great choice of birthday cakes, delicious treats, charming toys, carriers of all types, gifts for pet lovers and their little friends, and even more goods and brilliant ideas to make your pets happy.Let us be your assistants in...</p>
            <router-link to="#" class="article__link">Читать полностью</router-link>
        </article>
        <article class="article">
            <img src="../../assets/image/Articles/blog_2_610x290_crop_top.png" alt="blog_img_2">
            <h4 class="article__header">Easy Tricks to Teach Your Dog</h4>
            <p class="article__description">Besides, you are welcome to evaluate a great choice of birthday cakes, delicious treats, charming toys, carriers of all types, gifts for pet lovers and their little friends, and even more goods and brilliant ideas to make your pets happy.Let us be your assistants in...</p>
            <router-link to="#" class="article__link">Читать полностью</router-link>
        </article>
        <article class="article">
            <img src="../../assets/image/Articles/blog_3_610x290_crop_top.png" alt="blog_img_3">
            <h4 class="article__header">Easy Tricks to Teach Your Dog</h4>
            <p class="article__description">Besides, you are welcome to evaluate a great choice of birthday cakes, delicious treats, charming toys, carriers of all types, gifts for pet lovers and their little friends, and even more goods and brilliant ideas to make your pets happy.Let us be your assistants in...</p>
            <router-link to="#" class="article__link">Читать полностью</router-link>
        </article>
    </section>
</template>
<style lang="scss">
    .articles{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        margin-bottom: 50px;
        .article{
            max-width: 500px;
            width: 100%;
            // flex-basis: 30%;
            padding: 20px;
            margin: 10px;
            img {
                width: 100%;
            }
            &__description{
                margin-bottom: 20px;

            }
            &__link{
                text-transform: uppercase;
                font-family: $font-montserrat;
                font-weight: bold;
                //color: $color-medium-gray;

            }
        }
    }


</style>
