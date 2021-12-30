/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
 require('./bootstrap');

 import Vue from 'vue'
 import VueRouter from 'vue-router'
 import Vuex from 'vuex'
 import store from './store/store'
 //import exampleComponent from './components/ExampleComponent.vue'
import myHeader from './components/MyHeader.vue'
import myFooter from './components/MyFooter.vue'
import bannerContent from './components/bannerContent.vue'
// ES6 Modules or TypeScript
import Swal from 'sweetalert2'
 Vue.use(VueRouter)


window.Vue = require('vue');
Vue.component('pagination', require('laravel-vue-pagination'));

import routes from './router'
const router = new VueRouter({
    mode:'history',
    routes
  })



// CommonJS

window.Swal = Swal;


const Toast = Swal.mixin({
    toast: true,
    position: 'bottom-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })
  window.Toast = Toast

Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue').default
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue').default
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue').default
);

const app = new Vue({
    el: '#vueId',
    router,
    store,
    components:{
        myHeader,
        myFooter,
        bannerContent,
    }
});
