import VueRouter from 'vue-router';
import Home from './views/Home.vue';
import About from './views/About.vue';
import Work from './views/Work.vue';
let routes = [
    {
        path: '/',
        component: Home
    },

    {
        path: '/about',
        component: About
    },
    {
        path: '/work',
        component: Work
    },



];
export default new VueRouter({
    routes,
    linkActiveClass: 'is-active'
});
