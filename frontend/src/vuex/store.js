import Vue from 'vue'
import Vuex from 'vuex'

import actionsList from './actions/actions'
import actionsApi from './actions/api-request'
import mutations from "./mutations/mutations";
import getters from "./getters/getters";

const actions = {...actionsList, ...actionsApi};

import commonModule from './modules/common'
import catalogModule from './modules/catalog'
import userModule from './modules/user'
import usercardModule from './modules/usercard'
import petcardModule from './modules/petcard'

Vue.use(Vuex);

let store = new Vuex.Store({
    modules: {
        common: commonModule,
        catalog: catalogModule,
        user: userModule,
        usercard: usercardModule,
        petcard: petcardModule,
    },
    state: {},
    mutations,
    actions,
    getters
});

export default store;
