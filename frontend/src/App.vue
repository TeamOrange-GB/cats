<template>
  <div id="app">
        <vHeader></vHeader>
        <vFooter></vFooter>
  </div>

</template>

<script>
import vHeader from './components/Header'
import vFooter from './components/Footer'
  export default {
    name: 'App',
    components: {
      vHeader, vFooter
    }
  }
</script>

<style lang="scss" scoped></style>
