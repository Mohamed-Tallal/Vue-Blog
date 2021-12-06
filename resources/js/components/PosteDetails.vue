<template>
    <div class="row">
    <loader v-if="loader === true"></loader>
      <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="http://127.0.0.1:8000/dashboard_files/assets/images/blog-post-02.jpg" alt="">
                    </div>
                    <div class="down-content">
                      <span>{{post.category_name}}</span>
                      <a href="post-details.html"><h4>{{post.tittle}}</h4></a>
                      <ul class="post-info">
                        <li><a href="#">{{post.user_name}}</a></li>
                        <li><a href="#">{{post.created_at}}</a></li>
                        <li><a href="#">{{post.comments_count+' Comments'}}</a></li>
                      </ul>
                      <p>{{post.desc}}</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags" v-if="post.tages.length !== 0">
                              <li><i class="fa fa-tags"></i></li>
                              <li v-for="(tage,index) in post.tages" :key="index"><a href="#">{{' ' + tage.tittle}}</a>
                              <span v-if="index+1 !=  post.tages.length">,</span>
                              </li>
                            </ul>
                            <ul class="post-tags" v-else>
                              <li><i class="fa fa-tags"></i></li>
                              <li>No Tags</li>
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
                <div class="col-lg-12" v-if="post.comments.length !== 0">
                  <div class="sidebar-item comments">
                    <div class="sidebar-heading">
                      <h2>{{ post.comments.length   }} comments</h2>
                    </div>
                    <div class="content">
                      <ul v-for="comment in post.comments" :key="comment.id">
                        <li class="pt-3">
                          <div class="author-thumb">
                            <img src="http://127.0.0.1:8000/dashboard_files/assets/images/comment-author-01.jpg" alt="">
                          </div>
                          <div class="right-content">
                            <h4>{{comment.user.name}}<span>{{comment.created_at}}</span><span>Reply</span></h4>
                            <p>{{comment.tittle}}</p>
                          </div>
                        </li>
                        <li class="replied" v-for="reply in comment.replys" :key="reply.id">
                          <div class="author-thumb">
                            <img src="http://127.0.0.1:8000/dashboard_files/assets/images/comment-author-02.jpg" alt="">
                          </div>
                          <div class="right-content">
                            <h4>{{reply.user.name}}<span>{{reply.created_at}}</span></h4>
                            <p>{{reply.tittle}}</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item submit-comment">
                    <div class="sidebar-heading">
                      <h2>Your comment</h2>
                    </div>
                    <div class="content">
                      <form id="comment" action="#" method="post">
                        <div class="row">
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="message" rows="6" id="message" placeholder="Type your comment" required=""></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-button">Submit</button>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    <side-par></side-par>

    </div>
</template>

<script>
import loader from './Loader.vue'
import sidePar from './SidePar.vue'

export default {
    components:{
        loader,
        sidePar
    },
        data() {
            return {
                loader:true,
                page: '',
                post: {
                    id: 1,
                    tittle: "",
                    image: " ",
                    desc: "",
                    created_at: " ",
                    user_name: " ",
                    user_id: "" ,
                    category_name: " ",
                    category_id: "",
                    comments_count: "",
                    comments: [],
                    tages: []
                }
            }

        },
        mounted(){
            this.page = this.$route.params.id;
            this.postDetails(this.page);
            console.log(this.page)
        },

        methods: {
            postDetails(id){
                this.loader = true
                axios.get('http://127.0.0.1:8000/api/post/'+id).then(res=>{
                    this.post = res.data.data ;
                    console.log(this.post)
                    this.loader = false
                }).catch(err => {
                    console.log(err.data.data)

                })
            },
        },

}
</script>
