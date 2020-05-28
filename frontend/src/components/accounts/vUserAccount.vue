<template>
<section class="main-UserAccount">
    <h3>Личный кабинет</h3>
    <form  id="userDataForm">
        <div class="form-item">
            <h4>Изменить имя</h4>
            <input 
                v-model="userName" 
                v-bind:placeholder="userName" 
                type="text" 
                name="user-Name"   
            >
        </div>
        <div class="form-item">
            <h4>Изменить логин</h4>
            <input 
                v-model="userLogin" 
                v-bind:placeholder="userLogin" 
                type="text" 
                name="user-userLogin"   
            >
        </div>
        <div class="form-item">
            <h4>Изменить email</h4>
            <input 
                v-model="email" 
                v-bind:placeholder="email" 
                type="email" 
                name="user-email"
            >
        </div>
        <div class="form-item">
            <h4>Изменить пароль</h4>
            <input 
                v-model="password" 
                v-bind:placeholder="password" 
                v-bind:type="[showPass ? 'text' : 'password']"
                name="user-password"
            >
            <a href="#" class="password-control"  @click="showPass = !showPass" v-bind:class="{view: showPass}"></a>
        </div>
        <div class="form-item">
            <h4>Повторите пароль</h4>
            <input 
                v-model="passwordConfirm" 
                v-bind:placeholder="passwordConfirm" 
                v-bind:type="[showPassComf ? 'text' : 'password']"
                name="user-password"
            >
            <a href="#" class="password-control"  @click="showPassComf = !showPassComf" v-bind:class="{view: showPassComf}"></a>

        </div>
        <div v-if="successChange" class="success">Ваше данные успешно обновлены</div>
        <div v-if="errors.length" class="fails">
            <b>Пожалуйста исправьте указанные ошибки:</b>
            <ul>
            <li v-for="error in errors">{{ error }}</li>
        </ul>
        </div>
        <div class="formButtons">
            <button
                type="button"
                class="btn-close"
                v-on:click="deleteAccount"
                >
                Удалить аккаунт
            </button>
            <button
                type="button"
                class="btn-sent"
                form="userDataForm"
                @click="checkForm"
                >
                Сохранить
            </button>

            <modal v-if="deleteAcc" @close="deleteAcc = false">
                <h1 slot="header">Вы уверены, что хотите удалить аккаунт?</h1>  
                <div slot="body"></div>
                <div slot="footer" class="formButtons">
                    <button
                    type="button"
                    class="btn-close"
                    @click="deleteAcc = false"
                    >
                    Отмена
                    </button>
                    <button
                    type="submit"
                    class="btn-sent"
                    @click="deleteAcc = false"
                    >
                    Удалить
                    </button>
                </div>                    
            </modal>
        </div>
    </form>

</section>
</template>

<script>
import modal from '../Animal/vModal.vue'

 export default {
    name: 'vUserAccount',
    components: {
        modal
        },
    data: () => ({
      showPass: false,
      showPassComf: false,
      successChange: false,
      deleteAcc: false,
      errors: [],
      userName: 'Anna Puchkova',
      email: 'puchkova.anne@gmail.com',
      userLogin: 'Newta',
      password: '123456',
      passwordConfirm: '123456',
    }),
    methods: {
      deleteAccount() {
          this.deleteAcc = true;
      },
      checkForm(e) {

        const reName = /^[A-zа-яА-ЯёЁ\s]{2,20}$/;
        const rePhone = /(\+7|8)[- _]*\(?[- _]*(\d{3}[- _]*\)?([- _]*\d){7}|\d\d[- _]*\d\d[- _]*\)?([- _]*\d){6})/g;
        const reEmail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        const reLogin = /^[а-яА-ЯёЁa-zA-Z0-9-_\.]{2,20}$/;

        this.errors = [];

        if (!reName.test(this.userName)) {
          this.errors.push('Введите корректное имя: от 2 до 50 букв');
        }
        if (!reEmail.test(this.email)) {
          this.errors.push('Введите корректный email');
        }
        if (!reLogin.test(this.userLogin)) {
          this.errors.push('Введите корректный логин: от 2 до 20 символов');
        }
        if (this.passwordConfirm !== this.password) {
          this.errors.push('Пароли должны совпадать');
        }
        if (!this.errors.length) {
          this.successChange = true;
          return true;
      }
        this.successChange = false;
        e.preventDefault();
      }
    },
 }
</script>

<style lang="scss">
    .main-UserAccount {
        max-width: 580px;
        margin: 20px auto 50px;
    }
    .form-item {
    margin: 20px 0;
    position: relative;
  }
  .form-item input {
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -khtml-border-radius: 5px;
    width: 100%;
    height: 34px;
    display: block;
    padding: 6px 10px;
    background-image: none;
    border: 1px solid $color-smoke;
    background-color: $color-white;
    font-size: 14px;
    color: #777;
    font-family: $font-arimo;
    transition: border-color 0.5s ease-in-out;
    box-sizing: border-box;
    outline: none;
  }
  .form-item input:focus {
    border-color: #999;
    outline: none;
  }
  .form-item input::-webkit-input-placeholder {font-size: 14px;}
  .form-item input::-moz-placeholder          {font-size: 14px;}
  .form-item input:-ms-input-placeholder      {font-size: 14px;}
  
    .formButtons {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items:flex-end;
        min-width: 100%;
        margin: 20px 0 0 0;
    }
  .success {
    color: #349E53;
    font-size: 15px;
    letter-spacing: -0.015em;
    font-weight: bold;
    font-family: $font-arimo;
  }
  .success::before {
    content: "\2713";
    box-sizing: border-box;
    width: 20;
    height: 20;
    fill: none;
    margin: 0 5px 0 0;
  }
  .fails {
    color: $color-text-alert;
    background-color: $color-alert;
    border: 1px solid $color-border-alert;
    line-height: 1.5;
    padding: 10px 15px;
    box-sizing: border-box;
    font: 16px/1.5em Arimo,sans-serif;
    border-radius: 5px;
  }
 .password-control {
	position: absolute;
	top: 35px;
	right: 6px;
	display: inline-block;
	width: 20px;
	height: 20px;
	background: url('https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/Accounts/eye-inactive.png');
  background-size: cover;
}
.view {
	background: url('https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/Accounts/eye.png');
background-size: cover;
}

</style>