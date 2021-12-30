<template>
<div>
    <!--------
    <main-banner></main-banner>
    ---------->
 <banner-content :title="title" :desc="desc"></banner-content>
     <section class="contact-us">
        <div class="contact-us">
            <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                                <div class="down-contact">
                                    <div class="row" style="display: flex;align-content: center;justify-content: center;">
                                            <div class="col-lg-8">
                                                <div class="sidebar-item contact-form">
                                                    <div class="sidebar-heading">
                                                    <h2>Login Form</h2>
                                                    </div>
                                                    <div class="content">
                                                        <div class="row">
                                                        <div class="col-md-6 col-sm-12">
                                                            <input name="name" type="text" :class="['form-control' , errors.name ? 'is-invalid' : '']" v-model="contactModel.name" placeholder="Your name" >
                                                        </div>
                                                        <div class="col-md-6 col-sm-12">
                                                            <input name="email" type="text" :class="['form-control' , errors.email ? 'is-invalid':'']" v-model="contactModel.email"  placeholder="Your email" >
                                                        </div>
                                                        <div class="col-md-12 col-sm-12">
                                                            <input name="subject" type="text" :class="['form-control' , errors.subject ? 'is-invalid':'']" v-model="contactModel.subject"  placeholder="Subject">
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <button id="form-submit" class="main-button">Send Message</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
</div>



</template>

<script>
import loader from './Loader.vue'
import bannerContent from './bannerContent.vue'

export default {
    components:{
        loader,
        bannerContent,
    },
        data() {
            return {
                loader:true,
                page:'',
                title:"Login Page ",
                desc:"LET’S STAY IN TOUCH! ",
                contact : {
                number :"",
                email  :"",
                address: "",
                location: "",
                },
                contactModel:{
                    email  : "",
                    name : "",
                    msg : "",
                    subject : "",
                },
                errors:[]
            }

        },
        mounted(){


        },
        methods: {

        },

}
</script>
