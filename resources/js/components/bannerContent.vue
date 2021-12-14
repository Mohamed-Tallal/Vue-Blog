<template>
<div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>{{title}}</h4>
                <h2>{{desc}}</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>
</template>

<script>
export default {
    props:["title","desc"],
    data() {
        return {
            show:false
        }
    },
/**
 *
 * watch:{
    $route (to, from){
        this.show = false;
        console.log('Hello world'+this.show)
        }
    }
 */

}
</script>
