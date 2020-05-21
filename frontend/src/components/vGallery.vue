


<template>
<div class="xxx">test {{ test }}</div>
 <v-carousel>
    <v-carousel-item
      v-for="(item,i) in items"
      :key="i"
      :src="item.src"
      reverse-transition="fade-transition"
      transition="fade-transition"
    ></v-carousel-item>
  </v-carousel>

</template>

<script>

export default {
  name: 'vGallery',

  data () {
      return {
          test: 'test',
        items: [
          {
            src: 'https://cdn.vuetifyjs.com/images/carousel/squirrel.jpg',
          },
          {
            src: 'https://cdn.vuetifyjs.com/images/carousel/sky.jpg',
          },
          {
            src: 'https://cdn.vuetifyjs.com/images/carousel/bird.jpg',
          },
          {
            src: 'https://cdn.vuetifyjs.com/images/carousel/planet.jpg',
          },
        ],
      }
    },

}
</script>

<style lang="scss">
  .xxx {
    display: flex;
    flex-flow: row wrap;
    justify-content: space-around;
    background-color: green;
  }
</style>