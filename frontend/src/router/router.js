import Vue from 'vue'
import VueRouter from 'vue-router'

//  Импортриуем сюда компоненты для роутинга

import vPetCard from "../components/vPetCard";
import vMain from "../components/vMain";
import vRegistration from '../components/vRegistration';
import vBreeder from '../components/vBreeder';


Vue.use(VueRouter);

const routes = [
    {
        path: '/pet-card',
        name: 'PetCard',
        component: vPetCard,
        props: true
    },
    {
        path: '/',
        name: 'Main',
        component: vMain,
        props: true
    },
    {
        path: '/registration',
        name: 'Registration',
        component: vRegistration,
        props: true
    },
    {
        path: '/breeder',
        name: 'Breeder',
        component: vBreeder,
        props: true
    },
];

const router = new VueRouter
({
    mode: 'history',
    routes
})

export default router;
