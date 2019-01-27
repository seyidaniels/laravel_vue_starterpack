import Vue from 'vue'
import Router from 'vue-router'
import Dashboard from '@/js/components/Dashboard'
import store from '@/js/store' // your vuex store



Vue.use(Router)


const router = new Router({
  routes: [
    {
      path: '/',
      component: Dashboard,
    },
  ]
})


export default router
