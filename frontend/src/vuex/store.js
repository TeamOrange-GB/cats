import Vue from 'vue'
import Vuex from 'vuex'

import actionsList from './actions/actions'
import actionsApi from './actions/api-request'
import mutations from "./mutations/mutations";
import getters from "./getters/getters";

const actions = {...actionsList, ...actionsApi};

Vue.use(Vuex);

let store = new Vuex.Store({
   state: {
    catalog: []
   },
   mutations,
   actions,
   getters
});

export default store;
