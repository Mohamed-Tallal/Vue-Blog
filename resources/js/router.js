
import blogPost from './components/BlogPost.vue'
//import dd from'./components/posteDetails.vue'
import posteDetails from './components/PosteDetails.vue'

const routes = [
    {
         path: '/',
         name : 'blogPost',
         component: blogPost,
    },
    {
        path: '/post-details/:id',
        name : 'posteDetails',
        component: posteDetails,
   },
  ]

export default routes ;
