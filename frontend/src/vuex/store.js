import Vue from 'vue'
import Vuex from 'vuex'

import actionsList from './actions/actions'
import actionsApi from './actions/api-request'
import mutations from "./mutations/mutations";
import getters from "./getters/getters";

const actions = {...actionsList, ...actionsApi};

import catalogModule from './modules/catalog'

Vue.use(Vuex);

let store = new Vuex.Store({
    modules: {
        catalog: catalogModule
    },
   state: {},
   mutations,
   actions,
   getters
});

export default store;
