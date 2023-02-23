require('./common');

import Vue from 'vue';
import App from './App';
import UserShow from './pages/UserShow';
import VueRouter from 'vue-router';


Vue.use(VueRouter);

const routes = [
    {   path: '/', name: 'home', component: App,},
    {   path: '/:slug', name: 'UserShow', component:UserShow, props: true},
    /* {   path: '/', name: 'home', component: App,},

    {   path: '/', name: 'home', component: App,},
    {   path: '/', name: 'home', component: App,}, */
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
