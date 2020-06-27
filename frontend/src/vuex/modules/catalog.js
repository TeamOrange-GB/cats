import axios from 'axios'

const catalog = {
    state:{
        catalog: [],
        isLoading: false
    },
    actions: {
        GET_CATALOG_FROM_API({commit}) {
            return axios.get('http://ca76934.tmweb.ru/api/pets')
                .then((catalog) => {
                    commit('SET_CATALOG_TO_STATE', catalog.data);
                    return catalog;
                })
                .catch((error) => {
                    return error;
                })
        },
        UPDATE_COUNTS_LIKES({commit}, id) {
            return axios.post('http://ca76934.tmweb.ru/api/likes/add/pet/' + id, {
                id: id
            })
                .then((likes) => {
                    commit('SET_UPDATE_COUNTS_LIKES', likes.data);
                    console.log(likes.data)
                    return likes;
                })
                .catch((error) => {
                    console.log(error);
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
                if(item.awards_site != '' && item.awards_site != null){
                    item.awards = true
                } else {
                    item.awards = false
                }
            });
            state.catalog = array;
            state.isLoading = false;
        },
        SET_UPDATE_COUNTS_LIKES: (state, id) => {
            state.catalog.forEach(function(item, i){
                if(item.id == id){
                    item.likes_count++;
                    item.haveLike = true
                }
            })
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
