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
                    <a href="#"><img src="../assets/image/vetpasport.jpg" alt="vet-passport"></a>
                    <h4>Титульный сертификат</h4>
                    <a href="#"><img src="../assets/image/sert.jpg" alt="titul"></a>

                </div>
            </div>
            <div class="petcard-content__gallery">
                <div class="petcard-content__mainphoto">
                    <a href="#"><img src="../assets/image/coon.jpg" alt="Maine-Coon"></a>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'vPetCard',
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
        img{
            width: 750px;
            height: 470px;
            margin: 0;
            object-fit: cover;
        }
    }
}
</style>
