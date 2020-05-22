<template>
    <div class="cat-catalog__gallery-item">
        <img class="pet__img" src="@/assets/image/Home/cats.png" alt="">
        <div class="pet-info">
            <div class="pet-info__item">
                <img src="@/assets/image/Home/cat-name.svg" alt="">
                <p class="pet__name">Барсик</p>
            </div>
            <div class="pet-info__item">
                <img src="@/assets/image/Home/cat-breed.svg" alt="">
                <p class="pet__breed">Мейн кун</p>
            </div>
        </div>
        <div class="pet__awards">
            <div class="pet__awards-item">
                <img src="@/assets/image/Home/sex.svg" alt="">
            </div>
            <div class="pet__awards-item">
                <img src="@/assets/image/Home/awards.svg" alt="">
            </div>
            <div class="pet__awards-item">
                6
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "vCatItem"
    }
</script>

<style scoped>

</style>
