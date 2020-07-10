import axios from 'axios'

// методы vuex для всего сайта

const common = {
    state: {
        isLoading: false,
    },
    actions: {
        SET_ISLOADING({commit}) {
            commit('SET_ISLOADING');
        },
        SET_LOADING_FINISHED({commit}) {
            commit('SET_LOADING_FINISHED');
        },
    },
    mutations: {
        SET_ISLOADING: (state) => {
            state.isLoading = true;
        },
        SET_LOADING_FINISHED: (state) => {
            state.isLoading = false;
        },
    },
    getters: {
        ISLOADING(state) {
            return state.isLoading;
        }
    },
};

export default common;