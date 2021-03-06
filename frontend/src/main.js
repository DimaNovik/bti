import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import { BootstrapVue } from 'bootstrap-vue';
import JsonExcel from 'vue-json-excel'


import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import './assets/scss/app.scss';
Vue.config.productionTip = false;
Vue.use(BootstrapVue);
Vue.component('downloadExcel', JsonExcel)


new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')
