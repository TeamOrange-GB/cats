<template>
<div>
    <h1>{{ petName }}, {{ breed }}, {{old}}</h1>
    <h2>{{ petColor }}</h2>
    <div class="petcard__content">
        <div class="petcard__content__info">
            <div class="petcard__content__info__maininfo">
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
            <div class="petcard__content__info__docs">
                <h3>Документы</h3>
                <h4>Ветпаспорт</h4>
                <a href="#"><img src="../image/vet-passport.jpg" alt="vet-passport"></a>
                <h4>Титульный сертификат</h4>
                <a href="#"><img src="../image/titul.jpg" alt="titul"></a>
                
            </div>
        </div>
        <div class="petcard__content__galery">
            <div class="petcard__content__galery__mainphoto">
                <a href="#"><img src="../image/main-coon.jpg" alt="Maine-Coon"></a>
            </div>
        </div>
    </div>
</div>
</template>

<style lang="scss" scoped>
   @import "../assets/scss/_petcard.scss";
</style>

<script>
export default {
    data: () => ({
        petName: 'Василий',
        breed: 'maine coon',
        birthDate: '2019-05-21',
        father: 'GICH Goldenglory`s Lucas',
        mother: 'GICH Goldenglory`s Emilie',
        showClass: 'SHOW',
        titul: 'Чемпион',
        petColor: 'Голубой тикированный табби',
        gender: 'male',
        age: 'adult'

    }),
    computed: {
        old() {
            let diff = Math.floor(new Date().getTime() - new Date(this.birthDate));

            let days = Math.floor(diff/(1000 * 60 * 60 * 24));
            let months = Math.floor(days/31);
            let years = Math.floor(months/12);

            if (years <= 1) {
                return `${months} месяцев`;
            } else {
                return (years == 2 || years == 3 || years == 4) ? `${years} года` : `${years} лет`;
            }
            
        }
    }
}
    

</script>