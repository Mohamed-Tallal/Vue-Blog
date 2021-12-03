
import blogPost from './components/BlogPost.vue'
//import dd from'./components/posteDetails.vue'
import posteDetails from './components/PosteDetails.vue'
import contactUs from './components/contactUs.vue'

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
   {
    path: '/contact-us',
    name : 'contactUs',
    component: contactUs,
    },
  ]

export default routes ;
