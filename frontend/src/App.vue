<template>
  <div id="app">
      <vHeader/>
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
    .main {

    }
    .content {
        min-height: calc(100vh - 464px);
    }
</style>

