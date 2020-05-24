<template>
  <div class="breeder__cats">
      <catscard v-for="i in 9" :key="i" />
  </div>
</template>

<script>
import catscard from './vCatsCard.vue'

export default {
  name: 'vBreederCats',
  components: {catscard}
}
</script>

<style lang="scss">
  .breeder__cats {
    display: flex;
    flex-flow: row wrap;
    justify-content: space-around;
    max-width: 900px;
    min-width: 60%;
    margin: 0 auto;
  }
  @media screen and (max-width: 600px) {
    .breeder__cats {
      max-width: 500px;
    }
  }
  @media screen and (max-width: 800px) {
    .breeder__cats {
      max-width: 700px;
    }
  }
  @media screen and (max-width: 600px) {
    .breeder__cats {
      max-width: 500px;
    }
  }
</style>