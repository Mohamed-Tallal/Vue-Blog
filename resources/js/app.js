/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
 require('./bootstrap');

 import Vue from 'vue'
 import VueRouter from 'vue-router'

 Vue.use(VueRouter)


window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

import routes from './router'
const router = new VueRouter({
    mode:'history',
    routes
  })

//import exampleComponent from './components/ExampleComponent.vue'
import myHeader from './components/MyHeader.vue'
import myFooter from './components/MyFooter.vue'
import sidePar from './components/SidePar.vue'


const app = new Vue({
    el: '#app',
    router,
    components:{
        myHeader,
        myFooter,
        sidePar,
    }
});