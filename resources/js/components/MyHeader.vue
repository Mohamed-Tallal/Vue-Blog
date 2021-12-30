<template>

<div>
    <!-- Header -->
        <header >
        <nav class="navbar navbar-expand-lg">
            <div class="container">
            <router-link class="navbar-brand" to="/"><h2>Tallal Blog <em>.</em></h2></router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <router-link class="nav-link" to="/" active-class="active">Home</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" to="/contact-us" active-class="active">Contact Us</router-link>
                </li>
                    <li class="nav-item">
                    <router-link class="nav-link" to="/login" active-class="active">Login</router-link>
                </li>
                    <li class="nav-item">
                    <router-link class="nav-link" to="/register" active-class="active">Register</router-link>
                </li>
                </ul>
            </div>
            </div>
        </nav>
        </header>
        <router-view></router-view>
    <my-footer></my-footer>
</div>
</template>
<script>
import myFooter from './MyFooter.vue'
import loginPage from './Login.vue'
export default {
    data() {
      return {
          load:false
      }
    },
    components:{
        myFooter,
        loginPage
    },


}
</script>
