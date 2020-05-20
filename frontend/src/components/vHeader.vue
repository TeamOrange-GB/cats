<template>
<section class="header">
    <a class="header-logo" href="/">
        <img class="header-logo__img" src="../assets/image/logo.png" alt="">
    </a>
    <nav class="header-nav">
        <router-link :to="{name:'Main'}">
            <a class="header-nav__link" href="">Главная</a>
        </router-link>
        <a class="header-nav__link" href="#">Котики</a>
        <a class="header-nav__link" href="#">Выставки</a>
        <a class="header-nav__link" href="#">О нас</a>
        <a class="header-nav__link" href="#">Контакты</a>
        <router-link :to="{name:'PetCard'}">
            <a class="header-nav__link" href="">PetCard</a>
        </router-link>
        <router-link :to="{name:'Breeder'}">
            <a class="header-nav__link" href="">BreederCard</a>
        </router-link>
        <router-link :to="{name:'Registration'}">
            <a class="header-nav__link" href="">Регистрация</a>
        </router-link>
    </nav>
</section>
</template>

<script>

    export default{
        name: 'vHeader',
    }

</script>

<style lang="scss">
    .header {
        margin-bottom: $margin*2;
    }
.header-logo{
    padding-top: 20px;
    display: block;
}
.header-logo__img{
    width: 326px;
    height: 63px;
    display: block;
    margin: auto;
}

.header-nav{
    background-color: #F5F5F5;
    height: 40px;
    margin-top: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
  &__link{
    margin-right: 30px;
    font-size: $font-size;
    font-family: $font-montserrat;
  }
}
</style>
