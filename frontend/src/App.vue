<template>
  <div id="app">
        <vHeader></vHeader>
      <section class="content">
          <h1>Идёт разработка!</h1>
      </section>
      <vRegistration></vRegistration>
      <vFooter></vFooter>
  </div>

</template>

<script>

import vHeader from './components/vHeader';
import vRegistration from './components/vRegistration';
import vFooter from './components/vFooter';

  export default {
    name: 'App',
    components: {
      vHeader,
      vRegistration,
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

