<template>
<section class="header">
    <a class="header-logo" href="/">
        <img class="header-logo__img" src="../assets/image/logo.png" alt="">
    </a>
    <nav class="header-nav">
        <router-link
            class="header-nav__link"
            :to="{name:'Main'}">
            Главная
        </router-link>

        <router-link
            class="header-nav__link"
            :to="{name:'vCatCatalog'}">
            Котики
        </router-link>

        <a class="header-nav__link" href="#">Выставки</a>
        <a class="header-nav__link" href="#">О нас</a>
        <a class="header-nav__link" href="#">Контакты</a>
        <router-link
            class="header-nav__link"
            :to="{name:'PetCard'}">
            PetCard
        </router-link>
        <router-link
            class="header-nav__link"
            :to="{name:'Breeder'}">
          BreederCard
        </router-link>
        <router-link
            class="header-nav__link"
            :to="{name:'Registration'}">
           Регистрация
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
    margin:0 15px;
    font-size: $font-size;
    font-family: $font-montserrat;
      &:nth-of-type(1){
          margin:0 15px 0 0;
      }
      &:nth-last-of-type(1){
          margin:0 0 0 15px;
      }
  }
}
</style>
