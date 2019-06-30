
import Vue from 'vue';
import VueRouter from 'vue-router';
import ChallengeOne from '@/js/components/ChallengeOne';
import ChallengeTwo from '@/js/components/ChallengeTwo';


Vue.use(VueRouter);
const router = new VueRouter({
    mode: 'history',
    routes: [
        {
        path: '/',
        name: 'ChallengeOne',
        component: ChallengeOne
        },
        {
            path:'/ChallengeTwo',
            name: 'ChallengeTwo',
            component:ChallengeTwo
        }
    ]
});

export default router;