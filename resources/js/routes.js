import Vue from 'vue'
import Router from 'vue-router'
import Dashboard from '@/js/components/Dashboard'
import NotFound from '@/js/components/NotFound'
import store from '@/js/store' // your vuex store



Vue.use(Router)


const router = new Router({
  routes: [
    {
      path: '/',
      component: Dashboard
    },
    { path: '/404', component: NotFound },
    { path: '*', redirect: '/404' },
  ]
}

)


export default router
