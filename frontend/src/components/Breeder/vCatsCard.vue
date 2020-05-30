<template>
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
    margin: 20px;
  }

  figure h2 {
    margin-bottom: 10px;
  }

</style>
