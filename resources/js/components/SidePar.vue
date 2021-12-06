<template>
            <div class="col-lg-4">
                <Loader v-if="loader === true"></Loader>
                      <div class="sidebar">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="sidebar-item search">
                              <form id="search_form" name="gs" method="GET" action="#">
                                <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                              </form>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="sidebar-item recent-posts">
                              <div class="sidebar-heading">
                                <h2>Recent Posts</h2>
                              </div>
                              <div class="content">
                                <ul>
                                  <li><a href="post-details.html">
                                    <h5>Vestibulum id turpis porttitor sapien facilisis scelerisque</h5>
                                    <span>May 31, 2020</span>
                                  </a></li>
                                  <li><a href="post-details.html">
                                    <h5>Suspendisse et metus nec libero ultrices varius eget in risus</h5>
                                    <span>May 28, 2020</span>
                                  </a></li>
                                  <li><a href="post-details.html">
                                    <h5>Swag hella echo park leggings, shaman cornhole ethical coloring</h5>
                                    <span>May 14, 2020</span>
                                  </a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="sidebar-item categories">
                              <div class="sidebar-heading">
                                <h2>Categories</h2>
                              </div>
                              <div class="content">
                                <ul v-if="categories.length !== 0">
                                  <li v-for="cat in categories" :key="cat.id"><a href="#">{{'- '+cat.tittle}}</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="sidebar-item tags">
                              <div class="sidebar-heading">
                                <h2>Tag Clouds</h2>
                              </div>
                              <div class="content">
                                <ul v-if="tags.length !== 0">
                                  <li v-for="tag in tags" :key="tag.id"><a href="#">{{tag.tittle}}</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
</template>

<script>
import Loader from './Loader.vue'
    export default {
        components:{
            Loader
        },
        data() {
            return {
                loader:true,
                tags:[],
                categories:[],
            }
        },
        mounted() {
            console.log('Component mounted.')
            this.getTagData()
            this.getCategoryData()
            this.loader = false
        },
        methods: {
            getTagData(){
                axios.get('http://127.0.0.1:8000/api/tag-data').then(res=>{
                    this.tags = res.data.data
                }).catch(err => {
                    console.log(err)
                })
            },
             getCategoryData(){
                axios.get('http://127.0.0.1:8000/api/category-data').then(res=>{
                    this.categories = res.data.data
                }).catch(err => {
                    console.log(err)
                })
            }
        },
    }
</script>
