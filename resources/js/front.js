Vue.use(VueRouter);
require('./common');

import Vue from 'vue';
import App from './App';
import VueRouter from 'vue-router';
import UserShow from './pages/UserShow.vue';


Vue.use(VueRouter);

const routes = [
  {
    path: '/',
    component: App,
  },
  {
    path: '/user-show',
    component: UserShow,
  },
];

const router = new VueRouter({
  routes,
});

new Vue({
  el: '#root',
  router, // Modifica qui la variabile da route a router
  render: h => h(App),
});


