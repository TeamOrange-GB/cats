<template>
   <section class="personal-account">
       <h1 class="personal-account__title">Личный кабинет</h1>
       <div class="personal-account__content">
           <div class="avatar">
                <button class="avatar__change"></button>
                <img src="../../assets/image/Avatars/lyubov-zhenschina-koshka-lico.jpg" alt="">
            </div>
            <div class="control-block">
                <button v-for="tab in tabs" 
                :key="tab.nameComponent" 
                @click="currentTab = tab.nameComponent" 
                :class="['control-block__tab-button', { active: currentTab === tab.nameComponent }]">
                {{tab.title}}
                </button>
                <component v-bind:is="currentTabComponent" class="tab" :info="personalInfo"></component>
                
            </div>
       </div>
        
   </section>
</template>

<script>
import vInfoBlog from "./vInfoBlock.vue"
import vPetsList from "./vPetsList.vue"
export default {
    name: "vPersonalAccount",
    components:{
        vInfoBlog,
        vPetsList
    },
    data() {
        return {
            tabs: [{
                        title:"Личные данные",
                        nameComponent: "vInfoBlog"
                    },
                    {
                        title:"Питомцы",
                        nameComponent: "vPetsList"
                    }
                    
                ],
            currentTab: "vInfoBlog",
            personalInfo:{
                name: "Валентина",
                surname: "Наумова",
                middleName: "Дмитриевна",
                email: "veta92@gmail.com",
                mobilePhone: "+79190305456",
                homeAdress: "Екатеринбург, улица Хохрякова, 63"
            }
        }
    },
    computed: {
        currentTabComponent: function() {
            return  this.currentTab;
          }
    },
}

</script>

<style lang="scss">
    .personal-account{
        //border: 1px solid red;
        padding: 0 50px;

        &__title{
            text-align: left;
            color: $color-cyan;
            margin-bottom: 30px;
        }
        
        &__content{
            display: flex;
            .control-block{
                &__tab-button{
                    padding: 6px 10px;
                    border-top-left-radius: 3px;
                    border-top-right-radius: 3px;
                    border: 1px solid $color-cyan;
                    cursor: pointer;
                    background: none;
                    margin-bottom: -1px;
                    margin-right: -1px;
                    color: $color-cyan;
                    &:hover {
                        background: #e0e0e0;
                    }
                    
                }
                .active {
                        background: $color-cyan;
                        color: $color-white;
                }
                .tab {
                    // border: 1px solid #ccc;
                    // padding: 10px;
                }
            }
            .info-block{
                // border: 1px solid red;
                display: flex;
                &__title,
                &__edit{
                    display: flex;
                    flex-direction: column;
                    border-top: 1px solid lighten($color: $color-light-grey, $amount: 30%);
                    background-color: $color-smoke;
                    span{
                        font-size: $font-size;
                        color: $color-medium-gray;
                        font-family: $font-montserrat;
                        
                        border-bottom: 1px solid lighten($color: $color-light-grey, $amount: 30%);
                        padding: 10px;
                    }
                }
                &__data{
                    // border: 1px solid red;
                    display: flex;
                    flex-direction: column;
                    border-top: 1px solid lighten($color: $color-light-grey, $amount: 30%);
                    background-color: $color-smoke;
                    
                    span{
                        padding: 10px;
                        font-size: $font-size;
                        color: $color-medium-gray;
                        font-family: $font-montserrat;
                        
                        border-bottom: 1px solid lighten($color: $color-light-grey, $amount: 30%) ;
                    }
                }
                &__edit{
                    button{
                        padding: 9px 20px;
                        border: none;
                        background: none;
                        outline: none;
                        border-bottom: 1px solid lighten($color: $color-light-grey, $amount: 30%);
                        color: $color-cyan;
                    }
                }
            }
        }
        .avatar{
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            // border: 1px solid red;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 20px;
            img{
                height: 100%;
                z-index: 1;
            }
            &__change{
                transition-duration: 0.3s;
                opacity: 0;
                background: url('../../assets/image/camera_enhance_24px_outlined.svg') center no-repeat;
                background-size: 30%;
                position: absolute;
                border-radius: 50%;
                background-color: rgba($color: #000000, $alpha: 0.5);
                width: 100%;
                height: 100%;
                z-index: 2;
                border: none;
                &:hover{
                    opacity: 1;
                }
            }
        }
    }
</style>