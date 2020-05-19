import Vue from 'vue';
import App from './App.vue';
import store from './store';
import Header from './components/Header';
import Footer from './components/Footer';

import '@/assets/scss/styles.scss';
import '@/assets/scss/reset.scss';
import '@/assets/scss/typografy.scss';

Vue.component("vHeader", Header);
Vue.component("vFooter", Footer);

Vue.config.productionTip = false

new Vue({
  render: h => h(App)
}).$mount('#app')
