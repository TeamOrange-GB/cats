import Vue from 'vue'
import VueRouter from 'vue-router'

//  Импортриуем сюда компоненты для роутинга


import vPetCard from "../components/Animal/vPetCard";
import vMain from "../components/ Home/vMain";
import vRegistration from '../components/Registration/vRegistration';
import vBreeder from '../components/Breeder/vBreeder';
import vCatCatalog from '../components/Catalog/vCatCatalog.vue';
import vPersonalAccount from '../components/PersonalAccount/vPersonalAccount.vue'


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
    {
        path: '/cat-catalog',
        name: 'vCatCatalog',
        component: vCatCatalog,
        props: true
    },
    {
        path: '/personal-account',
        name: 'vPersonalAccount',
        component: vPersonalAccount,
        props: true
    },
];

const router = new VueRouter
({
    mode: 'history',
    routes
});

export default router;
