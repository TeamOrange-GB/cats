<template>
  <div class="breeder__cats">
      <catscard v-for="i in 7" :key="i" />
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
  }
</style>
