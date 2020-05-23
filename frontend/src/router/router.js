import Vue from 'vue'
import VueRouter from 'vue-router'

//  Импортриуем сюда компоненты для роутинга

<<<<<<< HEAD
import vPetCard from "../components/vPetCard";
import vMain from "../components/vMain";
import vRegistration from '../components/vRegistration';
import vBreeder from '../components/Breeder/vBreeder';
=======
import vPetCard from "../components/Animal/vPetCard";
import vMain from "../components/ Home/vMain";
import vRegistration from '../components/Registration/vRegistration';
import vBreeder from '../components/Breeder/vBreeder';
import vCatCatalog from '../components/Catalog/vCatCatalog.vue';
>>>>>>> 7b8f14db0f2828b923e9599d81892593a875ecf2


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
];

const router = new VueRouter
({
    mode: 'history',
    routes
})

export default router;
