<template>
  <div class="modal-backdrop">
    <div class="modal">
      <header class="modal-header">
        <slot name="header">
          Сообщение хозяину животного         
        </slot>
            
      </header>
      <slot name="body">
        <section class="modal-body">
          <p>Заполните поля ниже и хозяин животного обязательно свяжется с вами</p>  
          <form @submit="checkForm" method="get" id="modalForm" action="/">
            <div class="modal-form">
              <div class="modal-form__item">
                <h4>Имя</h4>
                <input 
                  v-model="name" 
                  placeholder="Введите ваше имя"
                  type="text" 
                  name="sender-name"
                  minlength="2" maxlength="50" required      
                >
              </div>
              <div class="modal-form__item">
                <h4>Телефон</h4>
                <input 
                  v-model="phone" 
                  placeholder="Введите ваш телефон" 
                  type="text"
                  name="phone"
                  minlength="5" maxlength="11" required
                >
              </div>
              <div class="modal-form__item">
                <h4>Email</h4>
                <input 
                v-model="email" 
                placeholder="Введите ваш email"
                type="email"
                name="email"
                >
              </div>
              <div class="modal-form__item">
                <h4>Сообщение</h4>
                <textarea 
                v-model="message" 
                placeholder="Введите ваше сообщение"
                name="message"
                maxlength="240" rows="5"></textarea>
              </div>
            </div>
            <slot name="link">
            </slot>
            <div v-if="successSent" class="success">Ваше сообщение успешно отправлено</div>
            <div v-if="errors.length" class="fails">
              <b>Пожалуйста исправьте указанные ошибки:</b>
              <ul>
                <li v-for="error in errors">{{ error }}</li>
            </ul>
            </div>
          </form>
        </section>
       </slot>
       <footer class="modal-footer">
          <slot name="footer">
            <button
              type="button"
              class="btn-close btn-reverse"
              @click="$emit('close')"
            >
              Закрыть
          </button>
            <button
              type="submit"
              class="btn-send btn"
              form="modalForm"
            >
              Отправить
          </button>
        </slot>
      </footer>
    </div>
   
  </div>
</template>

<script>
  export default {
    name: 'vModal',
    data: () => ({
      successSent: false,
      errors: [],
      name: null,
      email: null,
      phone: null,
      link: null,
      message: null,
    }),
    methods: {
      close() {

      },
      sent() {
        this.successSent = true;
      },
      checkForm(e) {

        const reName = /^[а-яА-ЯёЁ\s]+/;
        const rePhone = /(\+7|8)[- _]*\(?[- _]*(\d{3}[- _]*\)?([- _]*\d){7}|\d\d[- _]*\d\d[- _]*\)?([- _]*\d){6})/g;
        const reEmail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        
        this.errors = [];

        if (!reName.test(this.name)) {
          this.errors.push('Введите корректное имя');
        }
        if (!rePhone.test(this.phone)) {
          this.errors.push('Введите корректный номер');
        }
        if (!reEmail.test(this.email) && this.email !== null) {
          this.errors.push('Введите корректный email');
        }
        if (!this.errors.length) {
          this.successSent = true;
          return true;
      }

        e.preventDefault();
      }
    },
  }
</script>

<style lang="scss">
  .modal-backdrop {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.3);
    display: flex;
    justify-content: center;
    align-items: center;
        
  }

  .modal {
    background: $color-white;
    box-shadow: 2px 2px 20px 1px;
    overflow-x: auto;
    display: flex;
    flex-direction: column;
    min-width: 700px;
    padding: 20px;
  }

  .modal-header,
  .modal-footer {
    padding: 15px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
  }

  .modal-header {
    border-bottom: 1px solid #eeeeee;
  }

  .modal-footer {
    flex-direction: row;
    border-top: 1px solid #eeeeee;
    justify-content: space-between;
  }
  p {
    margin: 10px 0 0 0;
  }

  .modal-body {
    position: relative;
    padding: 20px 10px;
    flex-direction: column;
    justify-content: space-between;
  }
  .modal-form__item {
    margin: 20px 0;
  }
  input,
  textarea {
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
  input:focus,
  textarea:focus {
    border-color: #999;
    outline: none;
  }
  input::-webkit-input-placeholder {font-size: 14px;}
  input::-moz-placeholder          {font-size: 14px;}
  input:-ms-input-placeholder      {font-size: 14px;}
  textarea::-webkit-input-placeholder {font-size: 14px;}
  textarea::-moz-placeholder          {font-size: 14px;}
  textarea:-ms-input-placeholder      {font-size: 14px;}
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
  // .btn-close {
  //   @include buttonSetting(200px, 60px, $color-white, $color-cyan, $color-cyan, $color-cyan);
  
  //   color: $color-cyan;
  // }
  .btn-close:hover {
    background-color: $color-cyan;
    border-color: $color-cyan;
  }

  // .btn-send {
  //   @include buttonSetting(150px, 40px, $color-cyan, $color-medium-gray, $color-cyan);
  // }
</style>