<template>
        <div class="col-lg-8">
            <div class="all-blog-posts">
                <div class="row" v-for="(post,i) in posts.data" :key="i">
                    <div class="col-lg-12">
                        <div class="blog-post">
                          <div class="blog-thumb">
                            <img style="margin-top: 5rem" src="http://127.0.0.1:8000/dashboard_files/assets/images/blog-post01.jpg" alt="">
                          </div>
                          <div class="down-content">
                            <span>Lifestyle</span>
                            <a href="post-details.html"><h4>{{post.tittle}}</h4></a>
                            <ul class="post-info">
                              <li><a href="#">{{post.user_name}}</a></li>
                              <li><a href="#">{{post.created_at}}</a></li>
                              <li><a href="#">{{post.comments}}</a></li>
                            </ul>
                            <p>{{post.desc}}</p>
                            <div class="post-options">
                              <div class="row">
                                <div class="col-6">
                                <ul class="post-tags ">
                                    <li><i class="fa fa-tags" ></i></li>
                                    <li v-for="(tage) in post.tages" :key="tage.id">
                                        <a href="#">{{ ' '+ tage.tittle }}<span v-if="tage.length !== 0"> , </span></a>
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
                </div>
                <pagination :data="posts" @pagination-change-page="getData"></pagination>

            </div>
        </div>
</template>
<script>
export default {
        data() {
            return {
                posts:[]
            }
        },
          beforeCreate(){
           alert("beforeCreate")
        },
        mounted(){
             this.getData();
            console.log(this.posts)

        },
        methods: {
            getData(page = 1){
                axios.get('api/post?page=' + page).then(res => {
                    this.posts = res.data
                    console.log(this.posts)
                }).catch(error => {
                    console.log(error)

                });
            }
        },
         created() {
        this.getData()
        console.log(this.posts.data)
    }


}
</script>
