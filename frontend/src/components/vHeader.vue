<template>
<section class="header">
    <a class="header-logo" href="/">
        <img class="header-logo__img" src="../assets/image/logo.png" alt="">
    </a>
    <nav class="header-nav">
        <a class="header-nav__link" href="#">Главная</a>
        <a class="header-nav__link" href="#">Котики</a>
        <a class="header-nav__link" href="#">Выставки</a>
        <a class="header-nav__link" href="#">О нас</a>
        <a class="header-nav__link" href="#">Контакты</a>
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
        margin-bottom: $margin-bottom*2;
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
    font-size: $fs;
    font-family: $ff;
  }
}
</style>
