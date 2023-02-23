require('./common');

import Vue from 'vue';
import App from './App';
import UserIndex from './pages/UserIndex.vue';
import UserShow from './pages/UserShow';
import VueRouter from 'vue-router';
import About from './pages/About.vue';
import Page404 from './pages/Page404.vue';


Vue.use(VueRouter);

const routes = [
    { path: '/', name: 'home', component: UserIndex},
    { path: '/:slug', name: 'UserShow', component:UserShow, props: true},
    { path: '/about', name: 'about', component: About},
    { path: ".*", name: 'Page404', component: Page404 }, //LASCIATELA PER ULTIMA
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
