<template>
  <div id="app">
        <vHeader></vHeader>
        <vPetCard></vPetCard>
     <!-- <section class="content">
          <h1>Идёт разработка!</h1>
      </section>
      <vFooter></vFooter>-->
  </div>

</template>

<script>

import vHeader from './components/vHeader'
import vPetCard from './components/vPetCard'
import vFooter from './components/vFooter'

  export default {
    name: 'App',
    components: {
      vHeader,
      vPetCard,
      vFooter
    }
  }
</script>


<style lang="scss">
    .content {
        margin-bottom: 270px;
    }
    h1 {
        text-align: center;
        font-size: 40px;
        font-weight: bold;
    }
</style>

