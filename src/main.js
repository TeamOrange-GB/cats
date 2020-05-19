import Vue from 'vue'
import App from './App.vue'
import store from './store'
import Header from './components/Header'
import Footer from './components/Footer'
import PetCard from './components/PetCard'

import '@/assets/scss/reset.scss'
import '@/assets/scss/typografy.scss'
import '@/assets/scss/_header.scss'
import '@/assets/scss/_footer.scss'
import '@/assets/scss/_petcard.scss'

Vue.component("app-header", Header);
Vue.component("app-footer", Footer);
Vue.component("app-petcard", PetCard);

Vue.config.productionTip = false

new Vue({
  render: h => h(App)
}).$mount('#app')
