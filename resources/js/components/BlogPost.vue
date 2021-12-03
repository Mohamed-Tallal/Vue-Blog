<template>
        <div class="col-lg-8">
            <loader v-if="loader === true"></loader>
            <div class="all-blog-posts">
                <div class="row" >
                    <div class="col-lg-12" v-for="(post) in posts.data" :key="post.id">
                        <div class="blog-post">
                          <div class="blog-thumb">
                            <img style="margin-top: 5rem" src="http://127.0.0.1:8000/dashboard_files/assets/images/blog-post01.jpg" alt="">
                          </div>
                          <div class="down-content">
                            <span>Lifestyle</span>
                            <router-link  :to="{path:'/post-details/' + post.id ,params: { id:  post.id}}"><h4>{{post.tittle}}</h4>
                            </router-link>
                            <ul class="post-info">
                              <li><a href="#">{{post.user_name}}</a></li>
                              <li><a href="#">{{post.created_at}}</a></li>
                              <li><a href="#">{{post.comments}}</a></li>
                            </ul>
                            <p>{{post.desc}}</p>
                            <div class="post-options">
                              <div class="row">
                                <div class="col-6">
                                <ul v-if="post.tages.length !== 0"  class="post-tags ">
                                    <li><i class="fa fa-tags" ></i></li>
                                    <li v-for="(tage,index) in post.tages" :key="index">
                                        <a href="#">{{ ' '+ tage.tittle }}<span v-if="index+1 != post.tages.length"> , </span></a>
                                    </li>
                                  </ul>
                                  <ul class="post-tags"  v-else >
                                    <li><i class="fa fa-tags" ></i></li>
                                    <li>
                                        <a href="#">No Tags</a>
                                    </li>
                                  </ul>
                                </div>
                                <div class="col-6">
                                  <ul class="post-share">
                                    <li><i class="fa fa-share-alt"></i></li>
                                    <li><a href="#">Facebook</a>,</li>
                                    <li><a href="#"> Twitter</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                <div class="col-lg-12">
                  <div class="main-button">
                    <a @click="getData(2)" style="color:#fff" v-if="this.posts.count/(this.page*5) !== 1">Load More Posts</a>
                  </div>
                </div>
                </div>

            </div>
        </div>
</template>
<script>
import loader from './Loader.vue'
export default {
        components: {
            loader
        },
        data() {
            return {
                posts:[],
                page :1,
                loader:true,
            }
        },
        mounted(){
             this.getData();
            console.log(this.posts)
        },
        methods: {
            getData(pages =1){
                this.loader = true
                    if(pages !==1){
                        this.page ++
                    }
                axios.get('http://127.0.0.1:8000/api/post?item=' + this.page).then(res => {
                    this.posts = res.data
                    console.log(this.posts)
                    this.loader = false
                }).catch(error => {
                    console.log(error)

                });
            },
        },
        // created() {
        //this.getData()
        //console.log(this.posts.data)
        //this.$route.query.test
    //}


}
</script>
