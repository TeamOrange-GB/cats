<template>
<section class="header">
    <div class="header__top">
        <router-link :to="{name:'Main'}" class="header__top__logo">
            <img class="header__top__logo__img" src="../assets/image/logo.png" alt="logo">
        </router-link>
        <router-link :to="{name:'PersonalAccount'}" class="header__top__avatar">
            <img src="../assets/image/Avatars/lyubov-zhenschina-koshka-lico.jpg" alt="avatar">
        </router-link>
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
                <!-- :style="{ width: widthDevice + 'px' }" -->
                <router-link :to="{name:'Main'}" class="header-navigation__link">
                   Главная
                </router-link>

                <router-link :to="{name:'vCatCatalog'}" class="header-navigation__link">
                    Котики
                </router-link>

                <a class="header-navigation__link" href="#">Выставки</a>
                <a class="header-navigation__link" href="#">О нас</a>
                <a class="header-navigation__link" href="#">Контакты</a>
                <router-link :to="{name:'PetCard'}" class="header-navigation__link">
                    PetCard
                </router-link>
                <router-link :to="{name:'Breeder'}" class="header-navigation__link">
                  BreederCard
                </router-link>
                <router-link :to="{name:'Registration'}" class="header-navigation__link">
                   Регистрация
                </router-link>
                <router-link :to="{name:'Account'}" class="header-navigation__link">
                  ЛК пользователя
                </router-link>
                <router-link :to="{name:'AddAnimal'}" class="header-navigation__link">
                  Создание карточки
                </router-link>
            </nav>
        </transition>
    </div>
</section>
</template>

<script>

    export default{
        name: 'vHeader',
        data() {
            return {
                show:true,
                widthDevice:screen.width
            }
        },
        methods: {
            showMenu(){
                this.show=!this.show
            }
        },
        mounted() {
            this.widthDevice<641 ? this.show = false : this.show = true

        },
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
                //border: 1px solid red;
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
