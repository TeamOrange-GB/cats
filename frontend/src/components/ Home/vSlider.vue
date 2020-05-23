<template>
    <div class="slider">
        <div class="slider__elements-block">
            <SliderItem v-for="slide of sliderItems" :key="slide.id" :slideData="slide" :style="{transform:shiftValue}"></SliderItem>
            <button class="slider__controls-left" @click="lastSlide"></button>
            <button class="slider__controls-right" @click="nextSlide"></button>
        </div>
    </div>
</template>
<script>
import SliderItem from './vSlider-item.vue'
export default {
    components:{
        SliderItem
    },
    data() {
        return {

            curentSlide:0,
            shiftValue: 'translateX(0px)',
            sliderItems:[
                {
                    id: 1,
                    img:"https://via.placeholder.com/150x150",
                    content: "Slide-1"
                },
                {
                    id: 2,
                    img:"https://via.placeholder.com/150x150",
                    content: "Slide-2"
                },
                {
                    id: 3,
                    img:"https://via.placeholder.com/150x150",
                    content: "Slide-3"
                },
                {
                    id: 4,
                    img:"https://via.placeholder.com/150x150",
                    content: "Slide-4"
                },
                {
                    id: 5,
                    img:"https://via.placeholder.com/150x150",
                    content: "Slide-5"
                },
                {
                    id: 6,
                    img:"https://via.placeholder.com/150x150",
                    content: "Slide-6"
                },

            ]
        }
    },
    methods: {
        elementShift(){
            if(this.curentSlide<this.sliderItems.length-2){
                this.curentSlide++
                this.shiftValue = `translateX(${this.curentSlide*-800}px)`

            }else{
                this.curentSlide=0
                this.shiftValue = `translateX(${this.curentSlide*-800}px)`
            }

        },

        lastSlide(){
            if(this.curentSlide>0){
                this.curentSlide--
                this.shiftValue = `translateX(${this.curentSlide*-800}px)`
            }
        },
        nextSlide(){
            if(this.curentSlide<this.sliderItems.length-2){

                this.curentSlide++
                this.shiftValue = `translateX(${this.curentSlide*-800}px)`
                console.log(this.sliderItems.length)
                console.log(this.curentSlide)
            }

        }
    },
    mounted() {
       setInterval(()=>{this.elementShift()}, 7000)
    },
}
</script>

<style lang="scss">
    .slider{
        padding: 0 50px;
        &__elements-block{
            position: relative;
            margin: 0 auto;
            display: flex;
            max-width: 1600px;
            overflow: hidden;
            margin-bottom: 50px;
        }
        &__controls-left{
            transition-duration: 0.3s;
            position: absolute;
            left: 20px;
            width: 40px;
            height: 80px;
            top: 50%-10%;
            background: url('../../assets/image/arrow-grey.svg') center no-repeat;
            background-size: cover;
            border: none;
            &:hover{
                background: url('../../assets/image/arrow.svg') center no-repeat;
                background-size: cover;
            }
        }
        &__controls-right{
            transition-duration: 0.3s;
            width: 40px;
            height: 80px;
            top: 50%-10%;
            position: absolute;
            right: 20px;
            background: url('../../assets/image/arrow-grey.svg') center no-repeat;
            background-size: cover;
            border: none;
            transform: rotate(180deg);
            &:hover{
                background: url('../../assets/image/arrow.svg') center no-repeat;
                background-size: cover;
            }
        }

        // &__pagination{
        //     text-align: center;
        //     // border: 1px solid blue;
        //     width: 100%;
        //     &__dot{
        //         transition: border 0.3s linear;
        //         background: none;
        //         border: 2px solid $color-light-grey;
        //         width: 15px;
        //         height: 15px;
        //         margin: 3px;
        //         border-radius: 50%;
        //         &:hover{
        //             border-color: $color-dark-gray;
        //         }
        //     }
        // }
    }
</style>
