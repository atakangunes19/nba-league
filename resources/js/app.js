import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router';

import App from './Components/App.vue';
import HomePage from './Pages/HomePage.vue';
import CreateLeague from './Pages/CreateLeague.vue';
import Simulation from './Pages/Simulation.vue';

const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: '/', component: HomePage },
        { path: '/tournament/create', component: CreateLeague },
        { path: '/tournament/:id/simulation', component: Simulation },
    ]
});

const app = createApp(App);
app.use(router);
app.mount('#app');
