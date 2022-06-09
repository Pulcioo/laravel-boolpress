import Vue from 'vue';

import VueRouter from 'vue-router';

Vue.use(VueRouter);

import HomeComponent from './pages/HomeComponent'
import ContactsComponent from './pages/ContactsComponent'
import NotFoundComponent from './pages/NotFoundComponent'
import BlogComponent from './pages/BlogComponent'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: HomeComponent
        },
        {
            path: '/contacts',
            name: 'contacts',
            component: ContactsComponent
        },
        {
            path: '/blog',
            name: 'blog',
            component: BlogComponent
        },
        {
            path: '/*',
            name: 'notFound',
            component: NotFoundComponent
        },
    ]

})

export default router;
