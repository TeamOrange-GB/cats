import axios from 'axios'

const catalog = {
    state:{
        catalog: [],
        isLoading: false
    },
    actions: {
        GET_CATALOG_FROM_API({commit}) {
            return axios.get('/api/pets')
                .then((catalog) => {
                    commit('SET_CATALOG_TO_STATE', catalog.data);
                    return catalog;
                })
                .catch((error) => {
                    return error;
                })
        },
        UPDATE_COUNTS_LIKES({commit}, id) {
            return axios.put('/api/likes/pet/' + id, {
                id: id
            })
                .then((likes) => {
                    commit('SET_UPDATE_COUNTS_LIKES', likes.data);
                    return likes;
                })
                .catch((error) => {
                    return error;
                })
        },
        SET_ISLOADING({commit}) {
            commit('SET_ISLOADING');
        }
    },
    mutations: {
        SET_CATALOG_TO_STATE: (state, catalog) => {
            let array = catalog;
            array.forEach(function(item,i){
                if(item.gender === 1){
                    item.gender = 'male.svg'
                }else {
                    item.gender = 'female.svg'
                }
            });
            state.catalog = array;
            state.isLoading = false;
        },
        SET_UPDATE_COUNTS_LIKES: (state, likes) => {
            let currentLikesAnimal = state.catalog.find(item => item.id === likes.id);
            currentLikesAnimal.likes_count++;
            currentLikesAnimal.haveLike = true;
        },
        SET_ISLOADING: (state) => {
            state.isLoading = true;
        }
    },
    getters: {
        CATALOG(state) {
            return state.catalog;
        },
        ISLOADING(state) {
            return state.isLoading;
        }
    }
};

export default catalog;
