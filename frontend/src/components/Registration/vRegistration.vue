<template>
    <section class="v-registration">
        <h2 class="reg-title">Регистрация</h2>
        <div class="reg-btn">
            <button class="reg-btn__user">Пользователь</button>
            <button class="reg-btn__breeder">Заводчик</button>
            <button class="reg-btn__sponsor">Спонсор</button>
        </div>
        <vUser/>
    </section>
</template>

<script>
    import vUser from './vUser'
    export default {
        name: "vRegistration",
        components: {
            vUser
        }
    }

</script>

<style lang="scss">

.reg-title{
    font-size: $font-size;
}

.reg-btn{
    display: flex;
    justify-content: space-around;
    font-size: 20px;
        &__user{
            width: 200px;
            height: 70px;
            font-family: $font-montserrat;
            border: 2px solid $color-light-grey;
            border-radius: 10px;
            color: $color-light-grey;
            background-color: $color-cyan;
                &:hover{
                    background-color: $color-light-grey;
                    color: $color-cyan;
                    border: 2px solid $color-cyan;
                }
                    &:active{
                        color: $color-light-grey;
                        background-color: $color-cyan;
                        border: 2px solid $color-light-grey;
                    }
}
        &__breeder{
            width: 200px;
            height: 70px;
            font-family: $font-montserrat;
            border: 2px solid $color-light-grey;
            border-radius: 10px;
            color: $color-light-grey;
            background-color: $color-cyan;
                &:hover{
                    background-color: $color-light-grey;
                    color: $color-cyan;
                    border: 2px solid $color-cyan;
                }
                    &:active{
                        color: $color-light-grey;
                        background-color: $color-cyan;
                        border: 2px solid $color-light-grey;
                    }
        }
        &__sponsor{
            width: 200px;
            height: 70px;
            font-family: $font-montserrat;
            border: 2px solid $color-light-grey;
            border-radius: 10px;
            color: $color-light-grey;
            background-color: $color-cyan;
                &:hover{
                    background-color: $color-light-grey;
                    color: $color-cyan;
                    border: 2px solid $color-cyan;
                }
                &:active{
                        color: $color-light-grey;
                        background-color: $color-cyan;
                        border: 2px solid $color-light-grey;
                    }
        }
}

</style>
