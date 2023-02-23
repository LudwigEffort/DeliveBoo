require('./common');

import Vue from 'vue';
import App from './App';
import UserIndex from './pages/UserIndex.vue';
import UserShow from './pages/UserShow';
import DishIndex from './pages/dishes/DishIndex.vue';
import DishShow from './pages/dishes/DishShow';
import VueRouter from 'vue-router';
import About from './pages/About.vue';
import Page404 from './pages/Page404.vue';


Vue.use(VueRouter);

//*TUTTE LE ROTTE
const routes = [
    { path: '/', name: 'home', component: UserIndex}, //*HOMEPAGE CON TUTTI I RISTORANTI
    { path: '/:slug', name: 'UserShow', component:UserShow, props: true}, //*SHOW DEL SINGOLO RISTORANTE

    { path: '/:user', name: 'DishIndex', component: DishIndex, props: true}, //*INDEX DEI DISHES DEL SINGOLO RISTORANTE
    { path: '/:user/:slug', name: 'DishShow', component:DishShow, props: true}, //*SINGOLO DISH DEL SINGOLO RISTORANTE

    { path: '/about', name: 'about', component: About}, //*ABOUT
    //{ path: "*", name: 'Page404', component: Page404 }, //!LASCIATELA PER ULTIMA
];

// personalizzazione del vue-router
const router = new VueRouter({
    mode: 'history',
    routes,
});

new Vue({
    el: '#root',
    render: h => h(App),
    router
});
