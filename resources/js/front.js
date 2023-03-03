import Vue from 'vue';
import App from './App.vue';
import VueRouter from 'vue-router';
import UserShow from './pages/UserShow.vue';
import UserIndex from './pages/UserIndex.vue';
import About from './pages/About.vue';
import Cart from './pages/Cart.vue';
require('./common.js')

Vue.use(VueRouter);

const routes = [
    {
        path: '/',
        name: 'home',
        component: UserIndex
    },
    {
        path: '/about',
        name: 'about',
        component: About
    },
    {
        path: '/users/:slug',
        name: 'userShow',
        component: UserShow,
        props: true,
    },
    {
        path: '/cart/',
        name: 'cart',
        component: Cart,
    },
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
