<template>
  <div class="modal-backdrop">
    <div class="modal">
      <header class="modal-header">
        <slot name="header">
          Сообщение хозяину животного
          
        </slot>
            <p>Заполните поля ниже и хозяин животного обязательно свяжется с вами</p>  
      </header>
      <section class="modal-body">
        <div class="modal-form">
          <div class="modal-form__item">
            <h4>Имя</h4>
            <input v-model="formData.formName" placeholder="Введите ваше имя">
          </div>
          <div class="modal-form__item">
            <h4>Телефон</h4>
            <input v-model="formData.formPhone" placeholder="Введите ваш телефон">
          </div>
          <div class="modal-form__item">
            <h4>Email</h4>
            <input v-model="formData.formEmail" placeholder="Введите ваш email">
          </div>
          <div class="modal-form__item">
            <h4>Сообщение</h4>
            <textarea v-model="formData.formMessage" placeholder="Введите ваше сообщение"></textarea>
          </div>
        </div>
        <slot name="body">
        </slot>
        <div v-if="successSent" class="success">Ваше сообщение успешно отправлено</div>

       </section>
       <footer class="modal-footer">
          <slot name="footer">
            <button
              type="button"
              class="btn-close"
              @click="$emit('close')"
            >
              Закрыть
          </button>
            <button
              type="button"
              class="btn-sent"
              @click="sent"
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
      formData: {},
    }),
    methods: {
      close() {

      },
      sent() {
        this.successSent = true;
      }
    },
  };
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
  .btn-close {
    @include buttonSetting(150px, 40px, $color-white, $color-medium-gray, $color-cyan);
    color: $color-cyan;
  }
  .btn-close:hover {
    background-color: $color-cyan;
    border-color: $color-cyan;
  }

  .btn-sent {
    @include buttonSetting(150px, 40px, $color-cyan, $color-medium-gray, $color-cyan);
  }
</style>