<template>
    
    <section class="petcard">
        <h1>{{ petName }}, {{ breed }}, {{old}}</h1>
        <h2>{{ petColor }}</h2>
        <div class="petcard-content">
            <div class="petcard-content__info">

                    <h3>Основные сведения</h3>
                    <h4>Владелец</h4>
                    <p>{{ user_name }} <strong class="btn" @click="openLink()">Личная страница</strong></p>
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

                    <h4>Ветпаспорт</h4>
                    <a href="#"><img :src="vetPassImg" alt="vet-passport" tabindex="0" class="docs_img"></a>
                    <h4>Титульный сертификат</h4>
                    <a href="#"><img :src="titulImg" alt="titul" tabindex="0" class="docs_img"></a>

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
import modal from './vModal.vue';
import {mapActions, mapGetters} from 'vuex';

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
        user_id: 1,
        user_name: 'User',
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
        titulImg: "https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/sert.jpg",
        petInfo: {},
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
    },
    methods: {
        openLink() {
            this.$router.push(`/breeder/${this.user_id}`);
        },
        ...mapActions([
                'GET_PETINFO_FROM_API',
                'SET_ISLOADING',
            ]),
        
    },
    beforeMount() {
        // this.SET_ISLOADING();
        this.GET_PETINFO_FROM_API(this.$route.params.id)
            .then(response => this.petInfo = response);
        console.log(this.petInfo);

    }
}

</script>

<style lang="scss">
.petcard {
    display: flex;
    flex-flow: row wrap;
    justify-content: space-between;
    width: 80%;
    margin: 0 auto;
    max-width: 1230px;
  }
    .petcard h1,
    .petcard h2 {
    width: 100%;
  }
.petcard-content{
    display: flex;
    flex-flow: row wrap;
    justify-content: space-between;
    margin-bottom: 50px;
    box-sizing: border-box;

    &__info, &__gallery{

        box-sizing: border-box;
    }
    &__info {
       max-width: 500px;
        margin: 0 0 20px 0;
    }
    &__gallery {
        max-width: 730px;
        box-sizing: border-box;
        text-align: center;
    }      

    &__mainphoto {
        position: relative;
        box-sizing: border-box;

        img{
            width: 100%;
            margin: 0;
            object-fit: cover;
        }
        
    }
    &__icons {
        position: absolute;
        width: 100%;
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
        .docs_img {
            width: 40%;
            margin: 20px 0 0 0;
            object-fit: cover;
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
@media all and (max-width: 800px) {
    .petcard {
        width: 95%
    }
    .petcard-content {
        &__info, &__gallery {
            width: 100%;
            box-sizing: border-box;
           
        }
        &__mainphoto {
            margin: 20px 0 100px 0;
        }
        &__icons {
       
        height: 70px;
        bottom: -70px;
        background: rgba(0, 0, 0, 0);

        flex-direction: column;

        align-items: flex-start;
        padding: 5px 0;

        a {
            color: $color-cyan;
            font-size: 15px;
        }
        a:hover {
            color: $color-gray;
        }
        }
    }

}

</style>
