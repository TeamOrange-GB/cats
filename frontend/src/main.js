import Vue from 'vue';
import App from './App.vue';
import store from './store';
import Header from './components/Header';
import Footer from './components/Footer';

import '@/assets/scss/styles.scss';
import '@/assets/scss/reset.scss';
import '@/assets/scss/typografy.scss';
import '@/assets/scss/_header.scss';
import '@/assets/scss/_footer.scss';

Vue.component("app-header", Header);
Vue.component("app-footer", Footer);

Vue.config.productionTip = false

new Vue({
  render: h => h(App)
}).$mount('#app')
