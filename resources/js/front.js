Vue.use(VueRouter);
require('./common');

import Vue from 'vue';
import App from './App';
import VueRouter from 'vue-router';
import UserIndex from './pages/UserIndex.vue';

//*Tramite il lazy load non serve l'import dei componenti

//import UserShow from './pages/UserShow';
//import About from './pages/About.vue';
//import Page404 from './pages/Page404.vue';


const routes = [
//*HOMEPAGE CON TUTTI I RISTORANTI
    {
        path: '/',
        name: 'home',
        component: UserIndex,
        props:true
    },

//*SHOW DEL SINGOLO RISTORANTE CHE CONTIENE GIÁ L'INDEX DI TUTTI I SUOI PIATTI
    {
        path: '/:slug',
        name: 'UserShow',
        props: true,
        component: () => import(/* webpackChunkName: "UserShow" */"./pages/UserShow.vue"),
    },

//*ABOUT
    {
        path: '/about',
        name: 'about',
        component: () => import(/* webpackChunkName: "about" */"./pages/About.vue")
    },

//!LASCIATELA PER ULTIMA! TUTTE LE ALTRE ROTTE SBAGLIATE MOSTRERANNO UserIndex
    {
        path: "*",
        component: UserIndex
    },
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
