<template>
    <section class="v-about">
        <h2>О нас</h2>
        <div class="v-about__block">
            <div class="v-info__text">

                <p>Мы творческая группа Orange, встретились на стажировке IT курсов и решившие создать этот проект. На этом сайте вы можете голосовать за понравившегося Вам питомца, тем самым увеличивая его колличество лайков и позицию в рейтинге! Именно ваш лайк может изменить ситуацию!</p>
            </div>
            <transition name="v-transition-info">

                <div class="v-transition__img"

                >
                    <img src="@/assets/image/Home/about.jpg" alt="">
                </div>
            </transition>
        </div>
    </section>
</template>

<script>
    export default {
        name: "vAbout",
        data(){
            return {

            }
        }
    }
</script>

<style lang="scss">
    .v-about {
        margin-bottom: 40px;
        h2 {
            margin: 0 0 40px;
            font-family: "arimo", sans-serif;
            color: #49bcab;
            font-size: 45px;
            text-transform: uppercase;
            text-align: center;
            line-height: 1.3;
        }
        &__block {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }
    @media all and (max-width: 1000px){
        .v-about__block {
            flex-direction: column;
        }
    }
</style>
