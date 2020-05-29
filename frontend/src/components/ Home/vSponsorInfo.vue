<template>
    <section
        @scroll="scrollSection"
        class="sponsor-info"
    >
        <transition name="v-transition-sponsor">
        <div
            v-show="isAnimateStart"
            class="sponsor-info__img"
        >
            <img src="@/assets/image/Home/5137.jpg" alt="">
        </div>
        </transition>
        <div class="sponsor-info__text">
            <p>Вы также можете стать спонсором нашей онлайн-выставки, поощрить её победителей, поддержать питомцев и проект.</p>
            <button class="btn">Стать спонсором</button>
        </div>
    </section>
</template>

<script>
    export default {
        name: "vSponsorInfo",
        data(){
            return {
                isAnimateStart: false
            }
        },
        methods: {
            scrollSection(){
                if(pageYOffset > 1100){
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
    .sponsor-info {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        max-width: 1200px;
        min-height: 400px;
        margin: 0 auto 60px;
        &__img {
            margin-right: 40px;
            img {
                max-width: 700px;
                width: 100%;
            }
        }
        &__text {
            max-width: 400px;
            p {
                margin-bottom: 50px;
                line-height: 1.5;
            }
        }
    }
    .v-transition-sponsor {
        &-enter {
            transform: translateX(-500px);
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
            transform: translateX(-500px);
        }
    }
    @media screen and (max-width: 650px){
        .sponsor-info__img{
            display: none;
        }
        .sponsor-info__text{
            .btn{
                margin: 0 auto;
            }
        }
    }

</style>
