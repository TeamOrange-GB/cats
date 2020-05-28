<template>
    <section class="sponsor-content">
        <h3>Стать спонсором</h3>
        <h4>Приглашаем к сотрудничеству</h4>
        <p>организации и компании, которые хотели бы помочь в развитии нашей площадки или поддержать отдельных
            участников выстовок.
        </p>
        <h4>Преимущества спонсорства</h4>
        <p>Возможность разместить баннер или другие рекламные материалы. 
            Упоминание о спонсорской поддержке в статьях на сайте</p>
        <form id="sponsorDataForm">
        <div class="form-item">
            <h4>ФИО/название компании</h4>
            <input 
                v-model="sponsorName" 
                placeholder="" 
                type="text" 
                name="sponsor-Name"
                minlength="2" maxlength="50" required   
            >
        </div>
        <div class="form-item">
            <h4>Сайт</h4>
            <input 
                v-model="sponsorSite" 
                placeholder="" 
                type="text" 
                name="sponsor-Site"  
            >
        </div>
        <div class="form-item">
            <h4>Email</h4>
            <input 
                v-model="sponsorEmail" 
                placeholder="" 
                type="email" 
                name="sponsor-Email"  
            >
        </div>
        <div class="form-item">
            <h4>Телефон</h4>
            <input 
                v-model="sponsorPhone" 
                placeholder="" 
                type="text" 
                name="sponsor-Phone"  
            >
        </div>
      <!--  <div class="form-item">
            <h4>Логин</h4>
            <input 
                v-model="sponsorLogin" 
                :placeholder="sponsorLogin" 
                type="text" 
                name="sponsor-Login"  
            >
        </div>-->
        <div class="form-item">
            <h4>Сообщение</h4>
            <textarea 
                v-model="sponsorMessage" 
                placeholder="Введите ваше сообщение"
                name="sponsor-Message"
                ></textarea>
              </div>
        </div>
        <div v-if="successfulSent" class="successSponsor">Ваш спонсорский аккаунт создан</div>
        <div v-if="errors.length" class="failsSponsor">
            <b>Пожалуйста исправьте указанные ошибки:</b>
            <ul>
            <li v-for="error in errors">{{ error }}</li>
        </ul>
        </div>
        <button
              type="button"
              class="btn-sent"
              form="sponsorDataForm"
              @click="checkSponsorForm"
            >
              Отправить
          </button>
        </form>
    </section>
</template>

<script>

export default {
    name: 'vUserAccount',
    data: () => ({
      successfulSent: false,
      errors: [],
      sponsorName: null,
      sponsorSite: null,
      sponsorEmail: null,
      sponsorPhone: null,
      sponsorMessage: null,
      sponsorLogin: 'Newta',
      sponsorPassword: null,
    }),
    methods: {
      sent() {
        this.successfulSent = true;
      },
      checkSponsorForm(e) {

        const reName = /^[A-zа-яА-ЯёЁ0-9\s]+/;
        const rePhone = /(\+7|8)[- _]*\(?[- _]*(\d{3}[- _]*\)?([- _]*\d){7}|\d\d[- _]*\d\d[- _]*\)?([- _]*\d){6})/g;
        const reEmail = /^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$ /;
        const reUrl = /^(https?:\/\/)?([\da-zа-яА-ЯёЁ\.-]+)\.([a-zа-яА-ЯёЁ\.]{2,6})([\/\w \.-]*)*\/?$/;
        const reMessage = /.{5,500}/;
        
        this.errors = [];

        if (!reName.test(this.sponsorName)) {
          this.errors.push('Введите корректное имя или название организации');
        }
        if (!rePhone.test(this.sponsorPhone) && this.sponsorPhone !== null) {
          this.errors.push('Введите корректный номер телефона');
        }
        if (!reEmail.test(this.sponsorEmail) && this.sponsorEmail !== null) {
          this.errors.push('Введите корректный email');
        }
        if (!reUrl.test(this.sponsorSite) && this.sponsorSite !== null) {
          this.errors.push('Введите корректный сайт');
        }
        if (!reMessage.test(this.sponsorMessage)) {
          this.errors.push('Введите сообщение');
        }
        if (!this.errors.length) {
          this.successfulSent = true;
          return true;
      }
        this.successfulSent = false;
        e.preventDefault();
      }
    },
}
</script>

<style lang="scss">
    .sponsor-content {
    display: flex;
    justify-content: flex-start;
    flex-direction: column;
    flex-wrap: wrap;
    max-width: 580px;
    margin: 20px auto 50px;
    }
    .form-item {
    margin: 20px 0;
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

  .successSponsor {
    color: #349E53;
    font-size: 15px;
    letter-spacing: -0.015em;
    font-weight: bold;
    font-family: $font-arimo;
    margin: 0 0 20px 0;
  }
  .successSponsor::before {
    content: "\2713";
    box-sizing: border-box;
    width: 20;
    height: 20;
    fill: none;
    margin: 0 5px 0 0;
  }
  .failsSponsor {
    color: $color-text-alert;
    background-color: $color-alert;
    border: 1px solid $color-border-alert;
    line-height: 1.5;
    padding: 10px 15px;
    box-sizing: border-box;
    font: 16px/1.5em Arimo,sans-serif;
    border-radius: 5px;
    margin: 0 0 20px 0;
  }
</style>