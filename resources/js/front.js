import Vue from 'vue';
import App from './App.vue';
import VueRouter from 'vue-router';
import UserShow from './pages/UserShow.vue';
import About from './pages/About.vue';
require('./common.js')

Vue.use(VueRouter);

const routes = [
  // HOMEPAGE CON TUTTI I RISTORANTI
  // SHOW DEL SINGOLO RISTORANTE CHE CONTIENE GIÁ L'INDEX DI TUTTI I SUOI PIATTI
  // ABOUT
  {
    path: '/about',
    name: 'about',
    component: About
  },
  {
    path: '/users/:slug',
    name: 'usersShow',
    component: UserShow,
    props: true,
},
  {
    path: '/',
    component: App
  },
  // LASCIATELA PER ULTIMA! TUTTE LE ALTRE ROTTE SBAGLIATE MOSTRERANNO Page404
];

const router = new VueRouter({
  mode: 'history',
  routes
});

new Vue({
  el: '#root',
  router,
  render: h => h(App)
});
