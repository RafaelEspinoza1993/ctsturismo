
import Vue from 'vue';
import VueRouter from 'vue-router';
import ChallengeOne from '@/js/components/ChallengeOne';
import ChallengeTwo from '@/js/components/ChallengeTwo';
import ChallengeThree from '@/js/components/ChallengeThree';
import ChallengeFour from '@/js/components/ChallengeFour';

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
        },
        {
            path: '/ChallengeThree',
            name: 'ChallengeThree',
            component:ChallengeThree
        },
        {
            path: '/ChallengeFour',
            name: 'ChallengeFour',
            component: ChallengeFour
        }
    ]
});

export default router;