<template>
<div>
    <loader v-if="loader === true" ></loader>
        <banner-content></banner-content>
     <section class="contact-us">
        <div class="contact-us">
        <loader v-if="loader === true" ></loader>
        <div class="container">
            <div class="row">

            <div class="col-lg-12">
                <div class="down-contact">
                <div class="row">
                    <div class="col-lg-8">
                    <div class="sidebar-item contact-form">
                        <div class="sidebar-heading">
                        <h2>Send us a message</h2>
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
                                <textarea name="message" rows="6" :class="['form-control' , errors.msg ? 'is-invalid':'']" placeholder="Your Message" v-model="contactModel.msg" ></textarea>
                            </div>
                            <div class="col-lg-12">

                                <button @click="createContact()" id="form-submit" class="main-button">Send Message</button>

                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="sidebar-item contact-information">
                        <div class="sidebar-heading">
                        <h2>contact information</h2>
                        </div>
                        <div class="content">
                        <ul>
                            <li>
                            <h5>{{contact.number}}</h5>
                            <span>PHONE NUMBER</span>
                            </li>
                            <li>
                            <h5>{{contact.email}}</h5>
                            <span>EMAIL ADDRESS</span>
                            </li>
                            <li>
                            <h5>{{contact.address}}</h5>
                            <span>STREET ADDRESS</span>
                            </li>
                        </ul>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div id="map">
                <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
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
        bannerContent
    },
        data() {
            return {
                loader:true,
                page:'',
                contact : {
                number :"",
                email  :"",
                address: "",
                location: ""
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

            this.page =this.$route.name;
            console.log(this.loader)
            this. getContactData();
        },
        methods: {
            getContactData(){
                axios.get('http://127.0.0.1:8000/api/contact-us').then(res=>{
                    this.contact = res.data.data;
                    console.log(this.contact);
                }).catch(error => {
                    console.log(error)
                })
                 this.loader = false
            },

            createContact(){
                axios.post('http://127.0.0.1:8000/api/create-post/',this.contactModel).then(res=>{
                  this.contactModel = {
                    email  : "",
                    name : "",
                    msg : "",
                    subject : "",
                };
                this.errors = [];
                Toast.fire({
                icon: 'success',
                title: res.data.message
                })
                }).catch((err) => {
                this.errors = err.response.data.errors;
                console.log(e)
                console.log(this.errors)
                });

            }
        },

}
</script>
