<template>
    <div class="info-block">
        <div class="info-block__title">
            <span>Имя</span>
            <span>Пароль</span>
            <span>Email</span>
            <span>Мобильный телефон</span>
            <span>Домашний адрес</span>
        </div>
        <div class="info-block__data">
            <span>{{info.surname }} {{info.name}} {{info.middleName}}</span>
            <span>Обновлен 2 года назад</span>
            <span>{{info.email}}</span>
            <span>{{ info.mobilePhone}}</span>
            <span>{{info.homeAdress}}</span>
        </div>
        <div class="info-block__edit">
            <button>Редактировать</button>
            <button>Редактировать</button>
            <button>Редактировать</button>
            <button>Редактировать</button>
            <button>Редактировать</button>
        </div>
        <!-- <h3>This info block</h3> -->
    </div>
</template>

<script>
export default {
    props:{
        info:{
            type: Object
        }
    },
    name: "tab-info-block"
}
</script>