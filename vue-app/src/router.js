import Vue from 'vue';
import Rotuer from 'vue-router';
import Home from './views/Home.vue';
import Hello from './views/Hello.vue';
import Bye from './views/Bye.vue';

Vue.use(Rotuer);

export default new Rotuer({
    mode: 'history',
    routes: [
        { path: '/', component: Home },
        { path: '/Hello', component: Hello },
        { path: '/Bye', component: Bye },
    ]
})