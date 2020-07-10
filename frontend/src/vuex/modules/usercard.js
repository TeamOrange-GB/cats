import axios from 'axios'

// методы vuex для страницы пользователя/заводчика

const usercard = {
    state: {
        isLoading: false,
    },
    actions: {
        GET_USERINFO_FROM_API({commit}, user_id) {
            commit('SET_ISLOADING');
            return axios.get(`/api/user/${user_id}`)
                .then((response) => {
                    // console.log(response.data)
                    commit('SET_LOADING_FINISHED');
                    return response.data;
                })
                .catch((error) => {
                    // console.log(error);
                    commit('SET_LOADING_FINISHED');
                    return error;
                })
        },
    },
    mutations: {
    },
    getters: {
    },
};

export default usercard;