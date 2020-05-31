<template>
    <section class="v-info">

        <transition name="v-transition-info">

            <div class="v-info__img"
            v-show="isAnimateStart"
            >
                <img src="@/assets/image/Home/cats-home.jpg" alt="">
            </div>
        </transition>
        <div class="v-info__text">
            <h1>Онлайн выставка животных</h1>
            <p>Мы приветствуем Вас на странице нашего сервиса.
            Голосуйте за понравившихся питомцев, загружайте своих питомцев, участвуствуйте в выставке!</p>
            <button class="btn">Принять участие</button>
        </div>
    </section>
</template>

<script>
    export default {
        name: "vHomeInfo",
        data(){
            return {
                isAnimateStart: false,
            }
        },
        mounted() {
            let vm = this;
            setTimeout(function(){
                vm.isAnimateStart = true
            }, 500)
        }
    }
</script>

<style lang="scss">
    .v-info {
        max-width: 1400px;
        // min-height: 750px;
        margin: 0 auto 80px;
        display: flex;
        justify-content: flex-end;
        align-items: center;
        //padding: 0 50px;

        &__img {
            margin-right: 40px;
            img {
                max-width: 700px;
                width: 100%;
            }
        }
        &__text {
            max-width: 660px;
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
            
        }
    }
    .v-transition-info {
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
        .btn{
            margin: 0 auto;
        }
    }
}

</style>
