<template>
    <section class="petcard">
        <h1>{{ petName }}, {{ breed }}, {{old}}</h1>
        <h2>{{ petColor }}</h2>
        <div class="petcard-content">
            <div class="petcard-content__info">
                <div class="petcard-content__maininfo">
                    <h3>Основные сведения</h3>
                    <h4>Дата рождения</h4>
                    <p>{{ birthDate }}</p>
                    <h4>Отец</h4>
                    <p>{{ father }}</p>
                    <h4>Мать</h4>
                    <p>{{ mother }}</p>
                    <h4>Выставочный класс</h4>
                    <p>{{ showClass }}</p>
                    <h4>Титул</h4>
                    <p>{{ titul }}</p>
                </div>
                <div class="petcard-content__docs">
                    <h3>Документы</h3>
                    <h4>Ветпаспорт</h4>
                    <a href="#"><img :src="vetPassImg" alt="vet-passport" tabindex="0"></a>
                    <h4>Титульный сертификат</h4>
                    <a href="#"><img :src="titulImg" alt="titul" tabindex="0"></a>
                </div>
            </div>
            <div class="petcard-content__gallery">
                <div class="petcard-content__mainphoto">
                    <a href="#"><img :src="mainImg" alt="Maine-Coon"></a>
                    <div class="petcard-content__icons">
                        <a href="#" class="shareLink">Поделиться</a>
                        <a href="#" class="matchLink"  @click="showInviteMatch = true">Пригласить на вязку</a>
                            <modal v-if="showInviteMatch" 
                                   @close="showInviteMatch = false" 
                                    >
                                    <h3 slot="header">Приглашение на вязку</h3>  
                                    <div slot="link">      
                                        <h4>Ссылка на страницу вашего животного</h4>
                                        <input placeholder="Введите вашу ссылку" v-model="link">
                                    </div>            
                            </modal>
                        <a href="#" class="kittenLink" @click="showRequestKitten = true">Купить котенка</a>
                            <modal v-if="showRequestKitten" 
                                   @close="showRequestKitten = false"
                                   >
                                    <h3 slot="header">Я хочу купить котенка</h3>                       
                            </modal>
                    </div>
                </div>
                    <gallery />

            </div>
        </div>
    </section>
</template>

<script>
import gallery from './vGallery.vue';
import modal from './vModal.vue'

export default {
    name: 'vPetCard',
    components: {
        gallery,
        modal
        },
    data: () => ({
        showRequestKitten: false,
        showInviteMatch: false,

        petName: 'Василий',
        breed: 'maine coon',
        birthDate: '2019-05-21',
        father: 'GICH Goldenglory`s Lucas',
        mother: 'GICH Goldenglory`s Emilie',
        showClass: 'SHOW',
        titul: 'Чемпион',
        petColor: 'Голубой тикированный табби',
        gender: 'male',
        age: 'adult',
        mainImg: "https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/maineCoons/coon.jpg",
        vetPassImg: "https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/vetpasport.jpg",
        titulImg: "https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/sert.jpg"

    }),
    computed: {
        old() {
            let diff = Math.floor(new Date().getTime() - new Date(this.birthDate));

            let days = Math.floor(diff/(1000 * 60 * 60 * 24)),
                months = Math.floor(days/31),
                years = Math.floor(months/12);

            if (years <= 1) {
                return `${months} месяцев`;
            } else {
                return (years == 2 || years == 3 || years == 4) ? `${years} года` : `${years} лет`;
            }

        }
    }
}

</script>

<style lang="scss">

.petcard{
    margin: $margin 0;
}

.petcard-content{
    display: flex;
    justify-content: space-between;
    flex-direction: row;
    flex-wrap: wrap;
    max-width: 1230px;
    margin: 0 auto;
    &__info, &__gallery{
        display: flex;
        justify-content: flex-start;
        flex-direction: column;
    }
    &__docs{
        margin: 0 0 20px 0;
        img {
            width: 200px;
            height: 100px;
            margin: 20px 0 0 0;
            object-fit: cover;
        }
    }
    &__maininfo {
        margin: 0 0 20px 0;
    }
    &__mainphoto {
        position: relative;
        img{
            width: 750px;
            height: 470px;
            margin: 0;
            object-fit: cover;
        }
        
    }
    &__icons {
        position: absolute;
        width: 750px;
        height: 50px;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        padding: 0 30px;
        box-sizing: border-box;
        a {
            color: $color-white;
            font-size: 20px;
        }
        a::before {
            margin: 0 5px 0 0;
        }
        .shareLink::before {
            content: "\27A4";
        }
        .kittenLink::before {
            content: "\1F6D2";
        }
        .matchLink::before {
            content: "\262F";
        }
    }

}
img[tabindex="0"] {
  cursor: zoom-in;
}
img[tabindex="0"]:focus {
  position: fixed;
  z-index: 10;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: auto;
  height: auto;
  max-width: 99%;
  max-height: 99%;
  margin: auto;
  box-shadow: 0 0 20px #000, 0 0 0 1000px rgba(210,210,210,.4);
}
img[tabindex="0"]:focus,  /* убрать строку, если не нужно, чтобы при клике на увеличенное фото, оно возвращалось в исходное состояние */
img[tabindex="0"]:focus ~ * {
  pointer-events: none;
  cursor: zoom-out;
}

</style>
