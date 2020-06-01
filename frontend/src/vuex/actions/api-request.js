import axios from 'axios'

export default {
    GET_CATALOG_FROM_API({commit}) {
        return axios ('http://cats.xyz/api/catalog', {
        // return axios ('http://localhost:3000/catalog', {
            method: "GET"
        })
            .then((catalog) => {
                commit('SET_CATALOG_TO_STATE', catalog.data);
                return catalog;
            })
            .catch((error) => {
                console.log(error);
                return error;
            })
    },
    SENDING_REGISTRATION_DATA_IN_API({commit}, result) {
        return axios ('/api/login', {
            method: "GET",
            data: result
        })
            .then((response) => {
                commit('SET_REGISTRATION_DATA_IN_API', response.data);
                return response;
            })
            .catch((error) => {
                console.log(error);
                return error;
            })
    }
}
