
import blogPost from './components/BlogPost.vue'
//import dd from'./components/posteDetails.vue'
import posteDetails from './components/PosteDetails.vue'
import contactUs from './components/contactUs.vue'
import userLogin from './components/Login.vue'
import userRegister from './components/Register.vue'
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
        path: '/login',
        name : 'userLogin',
        component: userLogin,
    },
    {
        path: '/register',
        name : 'userRegister',
        component: userRegister,
    },
  ]

export default routes ;
