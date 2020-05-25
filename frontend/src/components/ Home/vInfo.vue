<template>
    <section class="v-info">
        <transition name="v-transition-img" class="transition-img">
            <div class="v-info__img"
            v-show="infoImgAnimate"
            >
                <img src="../../assets/image/Home/cats-home.jpg" alt="">
            </div>
        </transition>

        <div class="v-info__text">
            <h1>Онлайн выставка животных</h1>
            <p>Мы приветствуем Вас на странице нашего сервиса.
            Голосуйте за понравившихся питомцев, загружайте своих питомцев, участвуствуйте в выставке!</p>
            <button class="v-info__btn">Принять участие</button>
        </div>

    </section>
</template>

<script>
    export default {
        name: "vHomeInfo",
        data(){
            return {
                infoImgAnimate: false,
            }
        },
        methods: {

        },
        mounted() {
            this.infoImgAnimate = true;
        }
    }
</script>

<style lang="scss">
    .v-info {
        max-width: 1400px;
        // min-height: 750px;
        margin: 0 auto 80px;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 50px;
        
        &__img {
            min-width: 700px;
            margin-right: 40px;
            img {
                width: 100%;
            }
        }
        &__text {
            max-width: 660px;
            width: 100%;
            font-size: 20px;
            color: $color-gray;
            line-height: 1.5;
            box-sizing: border-box;
            h1 {
                margin: 0 0 40px;
                font-family: $font-arimo;
                text-transform: uppercase;
                color: $color-cyan;
                font-size: 60px;
                text-align: left;
                line-height: 1.3;
            }
            p {
                margin-bottom: 50px;
            }
        }
        &__btn {
            @include buttonSetting(200px, 60px, $color-cyan, $color-light-grey);
        }
    }
    .v-transition-img {
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
    }

@media screen and (max-width: 650px) {
    .v-info{
        
        &__img{
            display: none;
        }
        &__text {
            h1 {
                margin: 0 0 40px;
                font-family: $font-arimo;
                text-transform: uppercase;
                color: $color-cyan;
                font-size: 30px;
                text-align: left;
                line-height: 1.3;
            }
            p {
                margin-bottom: 50px;
            }
        }
    }
}

</style>
