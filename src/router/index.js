import Vue from 'vue'
import VueRouter from 'vue-router';
import registration from '../pages/registration';
import shop from '../pages/shop';

Vue.use(VueRouter)

const routes = [
    {
        name: 'mainPage',
        path: '/',
        component: () => import('../pages/mainPage')
    },
    {
        name: 'registration',
        path: '/registration',
        props: (route) => ({ query: route.query.filter }),
        component: registration
    },
    {
        name: 'shop',
        path: '/shop',
        props: (route) => ({ query: route.query.filter }),
        component: shop
    }
]

const router = new VueRouter({
    routes
})

export default router