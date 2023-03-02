import Vue from 'vue';
import App from './App.vue';
import VueRouter from 'vue-router';
import UserShow from './pages/UserShow.vue';
import UserIndex from './pages/UserIndex.vue';
import About from './pages/About.vue';
require('./common.js')

Vue.use(VueRouter);

const routes = [
    {
        path: '/',
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
