import {
    createRouter,
    createWebHistory
} from "vue-router";
import scrollBehavior from "./scrollBehavior";
import Main from './components/parts/Main.vue';
import Quiz from './components/parts/Quiz.vue';
import Keyword from './components/parts/Keyword.vue';

const routes = [{
        path: '/',
        component: Main,
        name: 'main'
    },
    {
        path: '/quiz',
        component: Quiz,
        name: 'quiz',
        props: route => {
            const q = route.query.categories
            return {
                categories: q
            }
        }
    },
    {
        path: '/keyword',
        component: Keyword,
        name: 'keyword',
        props: route => {
            const q = route.query.initial
            return {
                initial: q
            }
        }
    }
]

const router = createRouter({
    history: createWebHistory(),
    scrollBehavior,
    routes
})

export default router
