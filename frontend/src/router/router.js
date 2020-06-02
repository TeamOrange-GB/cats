import Vue from 'vue'
import VueRouter from 'vue-router'

//  Импортриуем сюда компоненты для роутинга


import vPetCard from "../components/Animal/vPetCard";
import vMain from "../components/ Home/vMain";
import vRegistration from '../components/Registration/vRegistration';
import vBreeder from '../components/Breeder/vBreeder';
import vCatCatalog from '../components/Catalog/vCatCatalog.vue';

import vAccount from '../components/accounts/vAccount';
import vUserAccount from '../components/accounts/vUserAccount';
import vSponsorAccount from '../components/accounts/vSponsorAccount';
import vAddAnimal from '../components/Breeder/vAddAnimal.vue';
import vPersonalAccount from '../components/PersonalAccount/vPersonalAccount.vue'
import vAuth from "../components/Registration/vAuth";



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
        path: '/user-account',
        name: 'UserAccount',
        component: vUserAccount,
        props: true
    },
    {
        path: '/account',
        name: 'Account',
        component: vAccount,
        props: true
    },
    {
        path: '/sponsor-account',
        name: 'SponsorAccount',
        component: vSponsorAccount,
        props: true
    },
    {
        path: '/add-animal',
        name: 'AddAnimal',
        component: vAddAnimal,
    },
    {
        path: '/personal-account',
        name: 'PersonalAccount',
        component: vPersonalAccount,
        props: true
    },
    {
        path: '/auth',
        name: 'Auth',
        component: vAuth,
        props: true
    }
];

const router = new VueRouter
({
    mode: 'history',
    routes
});

export default router;
