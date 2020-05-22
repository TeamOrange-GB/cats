<template>
    <div class="slider__element">
        <p class="slider__element__content">{{slideData.content}}</p>
        <button class="slider__element__btn">Подробнее</button>
    </div>
</template>

<script>
export default {
    props:{
        slideData:{
            type: Object
        }
    },
}
</script>

<style lang="scss">
    .slider__element{
            transition-duration: 3s;
            display: flex;
            flex-shrink: 0;
            flex-wrap: wrap;
            justify-content: center;
            width: 800px ; 
            height: 400px;
            background-color: $color-smoke;
           
            &__btn{
                @include buttonSetting(150px, 50px, $color-cyan, $color-light-grey);
                margin-bottom: 30px;
                align-self: flex-end;
            }
            &__content{
                width: 100%;
                align-self: center;
                text-align: center;
            }
        }
</style>