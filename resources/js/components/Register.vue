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
                <div class="row" style=" display: flex;
                                        align-content: center;
                                        justify-content: center;
                                        ">
                    <div class="col-lg-8">
                    <div class="sidebar-item contact-form">
                        <div class="sidebar-heading">
                        <h2>Register Form</h2>
                        </div>
                     <form enctype="multipart/form-data">
                                        <div class="content">
                            <div class="row">
                            <div class="col-md-12 col-sm-12 mb-1" style="
                                                                    display: flex;
                                                                    justify-content: center
                                                                ">
                                <img src="http://127.0.0.1:8000/dashboard_files/assets/images/blog-post01.jpg" width="300px" alt="">
                                <div style="position: relative;top: 8px;left: -30px;">
                                    <div style="border-radius: 5px;background: #fff;padding: 5px; cursor: pointer;"><i class="fas fa-camera"></i></div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 mb-3" style="display: flex;justify-content: center;">
                                    <p >User Image</p>
                            </div>
                            <div class="col-md-6 col-sm-12">

                                <input name="name" type="text" :class="['form-control' , errors.name ? 'is-invalid' : '']" v-model="contactModel.name" placeholder="Your name" >

                            </div>
                            <div class="col-md-6 col-sm-12">

                                <input type="file"   @change="ImageFiles" >

                            </div>
                            <div class="col-md-12 col-sm-12">

                                <input name="subject" type="text" :class="['form-control' , errors.subject ? 'is-invalid':'']" v-model="contactModel.subject"  placeholder="Subject">

                            </div>
                            <div class="col-lg-12">
                                <textarea name="message" rows="6" :class="['form-control' , errors.msg ? 'is-invalid':'']" placeholder="Your Message" v-model="contactModel.msg" ></textarea>
                            </div>
                            <div class="col-lg-12">

                                <button @click.prevent="storeImage" class="main-button">Send Message</button>

                            </div>
                            </div>
                        </div>
                        </form>


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
                title:"Register Page ",
                desc:"LET’S STAY IN TOUCH! ",
                contact : {
                number :"",
                email  :"",
                image  :"",
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
            ImageFiles(event){
                console.log(event.target.files[0])
                this.image =event.target.files[0]
            },
            storeImage(){
                let config ={
                    header :{
                        "content-type" : "multipart/form-data"
                    }
                }
                let formData = new FormData();
                formData.append('image' , this.image)
                axios.post("http://127.0.0.1:8000/api/store-post", formData , config).then(res=>{
                    console.log(res.data)
                })
            }
        },

}
</script>
