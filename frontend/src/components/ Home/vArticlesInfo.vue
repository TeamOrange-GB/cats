<template>
    <section
        class="articles"
        @scroll="scrollSection"
        >

        <div class="articles__text">
            <p>В нашем сервисе вы сможете найти интересные статьи по вашим питомцам</p>
            <button class="btn">Посмотреть</button>
        </div>
        <transition name="v-transition-articles">
            <div
                class="articles__img"
                v-show="isAnimateStart"
            >
                <img src="@/assets/image/Home/808.jpg" alt="">
            </div>
        </transition>
    </section>
</template>

<script>

    export default {
        name: 'vArticles',
        data(){
            return {
                isAnimateStart: false
            }
        },
        methods: {
            scrollSection(){
                if(pageYOffset > 2000 && pageYOffset < 3000){
                    this.isAnimateStart = true
                }else {
                    this.isAnimateStart = false
                }
            }
        },
        created() {
            window.addEventListener('scroll', this.scrollSection );
        },
        destroyed() {
            window.removeEventListener('scroll', this.scrollSection );
        }
    }

</script>

<style lang="scss">
    .articles {
        max-width: 1200px;
        min-height: 750px;
        margin: 0 auto 80px;
        display: flex;
        justify-content: flex-start;
        align-items: center;
        &__img {
            margin-left: 40px;
            img {
                max-width: 700px;
                width: 100%;
            }
        }
        &__text {
            max-width: 400px;
            font-size: 20px;
            color: $color-gray;
            line-height: 1.5;
            p {
                margin-bottom: 50px;
            }
        }
    }
    .v-transition-articles {
        &-enter {
            transform: translateX(500px);
            opacity: 0;
        }
        &-enter-active {
            transition: all .9s ease;
        }
        &-enter-to {
            opacity: 1;
        }
        &-leave {
            opacity: 1;
        }
        &-leave-active {
            transition: all .9s ease;
        }
        &-leave-to {
            opacity: 0;
            transform: translateX(500px);
        }
    }
</style>
