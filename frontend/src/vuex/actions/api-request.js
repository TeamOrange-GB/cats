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
    SENDING_AUTH_DATA_IN_API({commit}, login, password) {
        return axios.post('/login', {
            email: login,
            password: password
        })
            .then((response) => {
                console.log(response)
                return response;
            })
            .catch((error) => {
                console.log(error);
                return error;
            })
    },
    SENDING_REGISTRATION_DATA_IN_API(name, email, password, conf_pass) {
        return axios.post('/register', {
            name: name,
            email: email,
            password: password,
            password_confirmation: conf_pass
        })
            .then((response) => {
                console.log(response)
            })
            .catch((error) => {
                console.log(error);
                return error;
            })
    },
    FIRST_USER_LOGIN(){
        return axios('http://cats.xyz/api/user', {
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
