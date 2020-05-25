<template>
    <div class="cat-catalog__gallery-item">
        <img class="pet__img" src="@/assets/image/Home/cats.png" alt="">
        <div class="pet-info">
            <div class="pet-info__item">
                <img src="@/assets/image/Home/cat-name.svg" alt="">
                <p class="pet__name">{{animal.name_real}}</p>
            </div>
            <div class="pet-info__item">
                <img src="@/assets/image/Home/cat-breed.svg" alt="">
                <p class="pet__breed">{{animal.breed}}</p>
            </div>
        </div>
        <div class="pet__awards">
            <div class="pet__awards-item">
                <img :src="selectionGender" alt="">
            </div>
            <div
                v-if="isAwardsVisible"
                class="pet__awards-item"
            >
                <img src="@/assets/image/Home/awards.svg" alt="">
            </div>
            <div class="pet__awards-item">
                {{animal.likes_count}}
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "vCatItem",
        props: {
            animal: {
                type: Object,
                default: () => {
                    {}
                }
            },
            isAwardsVisible: {
                type: Boolean,
                default: () => {
                    false
                }
            },
            selectionGender: {
                type: String,
                default: () => {
                    ''
                }
            }
        }
    }
</script>

<style scoped>

</style>
