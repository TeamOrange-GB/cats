<template>
<section class="header">
    <div class="header__top">
        <router-link :to="{name:'Main'}" class="header__top__logo">
            <img class="header__top__logo__img" src="../assets/image/logo.png" alt="logo">
        </router-link>
        <div v-if="this.GET_USER.name" class="header-user">
            <div class="header-user__info">
                <p>Привет, {{this.GET_USER.name}}</p>
                <a
                    href=""
                    @click="logout"
                >Выйти</a>
            </div>
            <router-link :to="{name:'PersonalAccount'}">
                <img src="../assets/image/Avatars/lyubov-zhenschina-koshka-lico.jpg" alt="avatar">
            </router-link>
        </div>
        <svg @click="showMenu"  class="header__top__burger-menu" xml:space="preserve"   version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
            viewBox="0 0 463.7 259.05"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <g>
                <path class="fil0" d="M11.56 0l440.57 0c6.37,0 11.56,5.19 11.56,11.56l0 44.19c0,6.37 -5.19,11.56 -11.56,11.56l-440.57 0c-6.37,0 -11.56,-5.19 -11.56,-11.56l0 -44.19c0,-6.37 5.19,-11.56 11.56,-11.56zm0 95.87l440.57 0c6.37,0 11.56,5.19 11.56,11.56l0 44.19c0,6.37 -5.19,11.56 -11.56,11.56l-440.57 0c-6.37,0 -11.56,-5.19 -11.56,-11.56l0 -44.19c0,-6.37 5.19,-11.56 11.56,-11.56zm0 95.87l440.57 0c6.37,0 11.56,5.19 11.56,11.56l0 44.19c0,6.37 -5.19,11.56 -11.56,11.56l-440.57 0c-6.37,0 -11.56,-5.19 -11.56,-11.56l0 -44.19c0,-6.37 5.19,-11.56 11.56,-11.56z"/>
            </g>
        </svg>
    </div>
    <div class="header-navigation" >

        <transition name=fade>
            <nav class="header-navigation__list" v-show="show"  >
                <router-link :to="{name:'Main'}" class="header-navigation__link">
                   Главная
                </router-link>
                <router-link :to="{name:'vCatCatalog'}" class="header-navigation__link">
                    Каталог животных
                </router-link>
                <router-link
                    v-if="this.GET_USER.name"
                    :to="{name:'Account'}"
                    class="header-navigation__link"
                >
                    ЛК пользователя
                </router-link>
                <template v-else>
                    <router-link
                        :to="{name:'Auth'}"
                        class="header-navigation__link"
                    >
                        Авторизация
                    </router-link>
                    <router-link
                        :to="{name:'Registration'}"
                        class="header-navigation__link"
                    >
                       Регистрация
                    </router-link>
                </template>
            </nav>
        </transition>
    </div>
</section>
</template>

<script>

    import {mapGetters, mapActions} from 'vuex'

    export default{
        name: 'vHeader',
        data() {
            return {
                show:true,
                widthDevice:screen.width,
            }
        },
        methods: {
            ...mapActions([
                'LOGOUT'
            ]),
            showMenu(){
                this.show=!this.show
            },
            logout(){
                this.LOGOUT()
            }
        },
        mounted() {
            this.widthDevice<641 ? this.show = false : this.show = true;
        },
        computed:{
            ...mapGetters([
                'GET_USER'
            ]),
        }
    }

</script>

<style lang="scss">
    .header {
        margin-bottom: $margin*2;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        padding: 20px 0;
        &__top{
            position: relative;
            width: 100%;
            display: flex;
            justify-content: center;
            &__logo{
                 width: 200px;
                &__img{
                    width: 100%;
                    margin: auto;
                }
            }
            &__avatar{
                right: 50px;
                align-self: start;
                position: absolute;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 80px;
                height: 80px;
                border-radius: 50%;
                overflow: hidden;
                img{
                    height: 100%;
                    z-index: 1;
                }
            }
            &__burger-menu{
                width: 40px;
                display: none;
                transition-duration: 0.3s;
                fill: $color-cyan;
                &:active{
                    fill: $color-light-grey;
                }
            }
        }

    }

    .header-user {
        position: absolute;
        right: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        &__info {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            margin-right: 10px;
            p{
                font-size: 16px;
                margin-bottom: 5px;
            }

        }
        img {
            max-width: 80px;
            width: 100%;
            min-height: 80px;
            border-radius: 50%;
        }
    }

    .header-navigation{
        width: 100%;
        &__list{
            width: 100%;
            padding: 10px 50px;
            background-color:$color-smoke;
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-sizing: border-box;
            flex-wrap: wrap;
        }
        &__link{
            margin: 15px;
            font-size: $font-size;
            font-family: $font-montserrat;
        }
    }
    .fade-enter-active, .fade-leave-active {
         transition: opacity .3s;
    }
    .fade-enter, .fade-leave-to{
        opacity: 0;
    }

@media screen and (max-width: 650px) {
    .header{

        padding: 20px 50px;
        justify-content: space-between;
        &__top{
            justify-content: space-between;

            &__logo{
                width: 140px;
            }

            &__avatar{
                display: none;
            }
            &__burger-menu{
                display: block;
            }
        }
    }
    .header-logo{
        width: 40%;
    }
    .header-navigation{
        background: none;
        &__list{
            display: block;
            padding: 10px 0;
            //position: absolute;
            //top: 20px;
            //right: -50px;
        }
        &__link{
            padding: 8px;
            display: block;
            margin: 0 auto;
            text-align: center;
            &:hover{
                background-color: rgba($color: #000000, $alpha: 0.2);
            }
        }
    }

}



</style>
