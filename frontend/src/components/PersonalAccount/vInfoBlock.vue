<template>
    <form class="info-block" @submit="submitFunc">
        <div class="info-block__section" v-for="input of formList" :key="input.id">
            <label :for="input.name" class="info-block__title">{{input.title}}</label>
            <input :type="input.type" :value="input.value" :id="input.name" :name="input.name" :class="['info-block__input',{activeInput: input.editInput} ]" :readonly="!input.editInput">
            <transition name="fade"> 
                <button class="info-block__edit" @click="input.editInput=!input.editInput" v-show="!input.editInput">Редактировать</button>
            </transition>
            <transition name="fade">
                <div class="info-block__save-change" v-show="input.editInput">
                    <button class="btn" @click="input.editInput=!input.editInput">Сохранить</button>
                    <button class="btn-reverse" @click="input.editInput=!input.editInput">Отменить</button>
                </div>
            </transition>
        </div>
    </form>
</template>

<script>
export default {
    props:{
        info:{
            type: Object
        }
    },
    name: "tab-info-block",
    data(){
        return {
            formList:[
                 {
                    id: 1,
                    name: "surname",
                    title: "Фамилия",
                    type: "text",
                    editInput: false,
                    value: "Наумова",
                },
                {
                    id:2,
                    name: "name",
                    title: "Имя",
                    type: "text",
                    editInput: false,
                    value: "Валентина",
                },
                {
                    id:3,
                    name: "middleName",
                    title: "Отчество",
                    type: "text",
                    editInput: false,
                    value: "Дмитриевна",
                },
                {
                    id:4,
                    name: "password",
                    title: "Пароль",
                    type: "password",
                    editInput: false,
                    value: "12345",
                },
                {
                    id:5,
                    name: "email",
                    title: "E-mail",
                    type: "text",
                    editInput: false,
                    value: "veta92@gmail.com",
                },
                {
                    id:6,
                    name: "mobilePhone",
                    title: "Мобильный телефон",
                    type: "text",
                    editInput: false,
                    value: "+79190305456",
                },
               
            ],
        }
    },
    methods:{
        submitFunc(e){
          e.preventDefault();
        }
    },
    
}
</script>

<style lang="scss">
    .info-block{
        padding-top: 30px;
        width: 100%;
        display: flex;
        flex-direction: column;
        &__section{
            max-width: 500px;
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 30px;
        }
        &__title{
            font-family: $font-arimo;
            font-size: 18px;
            width: 100%;
            margin-bottom: 14px;
            padding-left: 10px;
        }
        &__input{
            font-family: $font-arimo;
            
            
            width: 70%;
            font-size: 18px;
            border-color: transparent;
            color: lighten($color: $color-light-grey, $amount: 30%);
            font-weight: lighter;
            &:focus{
                border-color: transparent;
            }
        }
        .activeInput{
            border-color: lighten($color: $color-light-grey, $amount: 30%);;
            &:focus{
                border-color:$color-cyan
            }
        }
        &__edit{
            width: 30%;
            padding: 9px 20px;
            
            background: none;
            outline: none;
            border-bottom: 1px solid lighten($color: $color-light-grey, $amount: 30%);
            color: $color-cyan;
            border: none;
        }
        &__save-change{
            display: flex;
            justify-content: center;
            margin-top: 20px;
            width: 70%;
            button{
                margin: 0px 20px;
            }
            .btn,
            .btn-reverse{
                width: 130px;
                height: 35px;
                border-radius: 23px;
                font-size: 15px;
            }
        }
        &__data{
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
         .fade-enter-active, .fade-leave-active {
                transition: opacity .3s;
            }
        .fade-enter, .fade-leave-to{
            opacity: 0;
        }
    }
    
</style>