import Vue from 'vue'
import Layout from './components/layout'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'
import App from './App.vue'; 
import IndexPage from './compontents/index'

Vue.use(VueRouter)
Vue.use(VueResource)
let router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            component: IndexPage
        }
    ]
})
/* eslint-disable no-new */
const app = new Vue({
  router,
  template: '<Layout/>',
  render: h => h(Layout)
}).$mount('#app')
