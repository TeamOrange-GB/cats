<template>
<section class="header">
    <a href="#"><img src="../image/logo.png" alt="logo"></a>
    <div>
        <ul class="navbar">
            <li class="navbar-text"><a href="#">Главная</a></li>
            <li class="navbar-text"><a href="#">Котики</a></li>
            <li class="navbar-text"><a href="#">Выставки</a></li>
            <li class="navbar-text"><a href="#">О нас</a></li>
            <li class="navbar-text"><a href="#">Контакты</a></li>
        </ul>
    </div>
</section>
</template>

<style lang="scss" scoped>

img[alt="logo"]{
    width: 326px;
    height: 63px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top: 40px;
}

.navbar{
    background-color: #F5F5F5;
    height: 40px;
    margin-top: 60px;
    display: flex;
    justify-content: center;
  &-text{
    margin-right: 30px;
    font-size: $fs;
    font-family: $ff;
  }
}
</style>