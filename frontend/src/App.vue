<template>
  <div id="app">
      <vHeader/>
      <vSpinner />
      <section class="content">
          <keep-alive>
              <router-view></router-view>
          </keep-alive>
      </section>
      <vFooter/>
  </div>

</template>

<script>

import vHeader from './components/vHeader';
import vSpinner from './components/vSpinner';
import vFooter from './components/vFooter';

  export default {
    name: 'App',
    components: {
      vHeader,
      vSpinner,
      vFooter
    }
  }
</script>


<style lang="scss">
    .main {

    }
    .content {
        min-height: calc(100vh - 464px);
        padding: 0 40px;
    }
</style>

