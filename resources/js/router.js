
import blogPost from './components/BlogPost.vue'
//import dd from'./components/posteDetails.vue'
import posteDetails from './components/PosteDetails.vue'
import contactUs from './components/contactUs.vue'
import adminLogin from './components/Admin/adminLogin.vue'

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
    {
        path: '/admin/login',
        name : 'adminLogin',
        component: adminLogin,
    },
  ]

export default routes ;
