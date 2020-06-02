<template>
    <div class="gallery-list__item">
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
        <div class="pet__aside">
            <div class="pet__aside-item pet__aside-gender">
                <img :src="require('../../assets/image/Home/'+ animal.gender)" alt="">
            </div>
            <div
                v-if="isAwardsVisible"
                class="pet__aside-item"
            >
                <img src="@/assets/image/Home/awards.svg" alt="">
            </div>
            <div class="pet__aside-item pet__aside-likes">
                {{animal.likes_count}}
            </div>
            <div
                @click="likeItemAnimal(animal.id, animal.haveLike)"
                class="pet__aside-item pet__aside-likes"
            >
                <img
                    v-if="animal.haveLike"
                    src="@/assets/image/Home/heart-fill.svg"
                />
                <img
                    v-else
                    src="@/assets/image/Home/heart.svg"
                    alt=""
                >

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
                default(){
                    return false
                }
            },
            isAwardsVisible: {
                type: Boolean,
                default(){
                    return false
                }
            }
        },
        methods: {
            likeItemAnimal(id, haveLike){
                if(!haveLike){
                    this.$emit('likeCountUp', id);
                }
            },
        }
    }
</script>

<style lang="scss">
    .gallery-list__item {
        flex-basis: 22.5%;
        margin: 20px;
        position: relative;
        cursor: pointer;
    }
    .pet {
        &__img {
            width: 100%;
        }
        &-info {
            min-height: 44px;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            &__item {
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 0 20px 5px;
            }
        }
        &__name {
            color: $color-white;
            margin-left: 10px;
        }
        &__breed {
            color: $color-white;
            margin-left: 10px;
        }
        &__aside {
            position: absolute;
            top: 10px;
            right: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            &-item {
                width: 38px;
                height: 38px;
                margin-bottom: 5px;
                display: flex;
                justify-content: center;
                align-items: center;
                background: rgba(0,0,0,0.5);
                border-radius: 50%;
                color: $color-cyan;
                font-size: 20px;
                &.pet__aside-gender {
                    img {
                        max-width: 20px;
                    }
                }
                &.pet__aside-likes {
                    color: $color-light-red;
                    cursor: pointer;
                    img {
                        max-width: 20px;
                    }
                    &--count {
                        img {
                            display: none;
                        }
                    }
                }


                img {
                    width: 100%;
                }
            }
        }
    }
</style>
