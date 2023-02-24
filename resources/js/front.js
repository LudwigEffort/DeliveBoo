Vue.use(VueRouter);
require('./common');

import Vue from 'vue';
import App from './App';
import VueRouter from 'vue-router';
import UserIndex from './pages/UserIndex.vue';
import UserShow from './pages/UserShow';
import DishIndex from './pages/dishes/DishIndex.vue';
import DishShow from './pages/dishes/DishShow';
import About from './pages/About.vue';
import Page404 from './pages/Page404.vue';


const routes = [
//*HOMEPAGE CON TUTTI I RISTORANTI
    { path: '/', name: 'home', component: UserIndex },

 //*SHOW DEL SINGOLO RISTORANTE CHE CONTIENE GIÁ L'INDEX DI TUTTI I SUOI PIATTI
    { path: '/:slug', name: 'UserShow', component: UserShow, props: true },

//TODO MODIFICARE QUESTA ROTTA (FORSE)
    { path: '/:slug/:dish', name: 'Dish', component: DishShow, props: true }, //*SINGOLO DISH DEL SINGOLO RISTORANTE

//*ABOUT
    { path: '/about', name: 'about', component: About },

//!LASCIATELA PER ULTIMA. TUTTE LE ALTRE ROTTE
    { path: "*", component: UserIndex },
];

// Personalizzazione del vue-router
const router = new VueRouter({
    mode: 'history',
    routes,
});
// Render dell'App
new Vue({
    el: '#root',
    render: h => h(App),
    router
});
