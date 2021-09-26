import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import InventPage from '../views/InvetPage.vue'
import store  from '@/store';

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home,
    beforeEnter(to, from, next) {
      store.dispatch('fetchPagesCategories').finally(() => {
        store.dispatch('fetchNewsData').finally(() => {
          next();
        })
      })
    }
  },
  {
    path: '/find-invent',
    name: 'InventPage',
    component: InventPage,
  },
  {
    path: '/admin',
    name: 'Admin',
    component: () => import(/* webpackChunkName: "about" */ '../views/Admin.vue'),
    beforeEnter(to, from, next) {
      store.dispatch('checkUser').finally(() => {
        next();
      })
    }
  },
  {
    path: '/page/:id',
    name: 'Inner',
    component: () => import(/* webpackChunkName: "about" */ '../views/Inner.vue'),
    beforeEnter(to, from, next) {
      store.dispatch('fetchPagesCategories').finally(() => {
        store.dispatch('getCurrentContent', to.params.id).finally(() => {
          next();
        })
      })
    },
  },
  {
    path: '/news/:id',
    name: 'InnerNews',
    component: () => import(/* webpackChunkName: "about" */ '../views/InnerNews.vue'),
    beforeEnter(to, from, next) {
      store.dispatch('getCurrentNews', to.params.id).finally(() => {
        next();
      })
    },
  },
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
