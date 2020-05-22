<template>
    <article class="catscard">
      <figure>
        <h2>{{ name }}</h2>
        <figcaption>{{ breed }}</figcaption>
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
    flex-flow: row wrap;
    box-sizing: border-box;
    margin-bottom: 20px;

  }

</style>
