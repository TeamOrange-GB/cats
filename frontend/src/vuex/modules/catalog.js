import axios from 'axios'

// методы vuex для страницы каталога животных

const catalog = {
    state:{
        catalog: [],
        isLoading: false
    },
    actions: {
        GET_CATALOG_FROM_API({commit}) {
            return axios.get('/api/pets')
                .then((catalog) => {
                    commit('SET_ISLOADING');
                    commit('SET_CATALOG_TO_STATE', catalog.data);
                    commit('SET_LOADING_FINISHED');
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
        },
        SET_UPDATE_COUNTS_LIKES: (state, likes) => {
            let currentLikesAnimal = state.catalog.find(item => item.id === likes.id);
            currentLikesAnimal.likes_count++;
            currentLikesAnimal.haveLike = true;
        },
    },
    getters: {
        CATALOG(state) {
            return state.catalog;
        },
    }
};

export default catalog;
