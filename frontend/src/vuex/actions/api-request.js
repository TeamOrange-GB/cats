import axios from 'axios'

export default {
    GET_CATALOG_FROM_API({commit}) {
        return axios ('/api/catalog', {
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
            method: "POST",
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
    },
    FIRST_USER_LOGIN(){
        return axios('/api/user', {
            method: "GET"
        })
            .then((response)=> {
                console.log(response);
                return response;
            })
            .catch((error) => {
                console.log(error);
                return error;
            })
    }
}
