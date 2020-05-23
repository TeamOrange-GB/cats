gi<template>
    <article class="catscard">
      <figure>
        <h2>{{ name }}</h2>
        <figcaption class="catscard__breed">{{ breed }}</figcaption>
        <img class="catscard__pic" :src="imageUrl" alt="Фото">
      </figure>
    </article>
</template>

<script>
export default {
  name: 'CatsCard',
  data: () => ({
    name: "Василий",
    breed: "Мейн кун",
    imageUrl: "https://via.placeholder.com/200x300.png?text=You+Can+Not+See+This+Cat",
  }),
}
</script>

<style lang="scss">
  .catscard {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
    box-sizing: border-box;
<<<<<<< HEAD:frontend/src/components/Breeder/vCatsCard.vue
    margin-bottom: 20px;
    padding: 20px;
        h2 {
            margin-bottom: 20px;
        }
=======
    margin: 20px;
  }

  figure h2 {
    margin-bottom: 10px;
>>>>>>> 7b8f14db0f2828b923e9599d81892593a875ecf2:frontend/src/components/vCatsCard.vue
  }

</style>
