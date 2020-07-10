import axios from 'axios'

// методы vuex для страницы животного

const petcard = {
    state: {
        isLoading: false,
    },
    actions: {
        GET_PETINFO_FROM_API({commit}, pet_id) {
            commit('SET_ISLOADING');
            return axios.get(`/api/pet/${pet_id}`)
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

export default petcard;