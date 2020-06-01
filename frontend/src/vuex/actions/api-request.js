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
    SENDING_AUTH_DATA_IN_API({commit}, result) {
        return axios ('/api/register', {
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
    SENDING_REGISTRATION_DATA_IN_API(name, email, password, conf_pass) {
        // let response = axios.post ('/register', {
        //     // method: "POST",
        //     name: 'name',
        //     email: 'email',
        //     password: 'password',
        //     password_confirmation: 'conf_pass'
        // })
        //     .then((response) => {
        //         console.log(response);
        //         return response;
        //     })
        //     .catch((error) => {
        //         console.log(error);
        //         return error;
        //     })

        let response = axios.post('http://cats.xyz/register', {
            email: 'email_var',
            name: 'name_var',
            password: 'password_var',
            password_confirmation: 'password_confirmation_var'
        }).then()
        {
            let message = response.data['message'];
            let status = response.data['status'];
            let user = response.data['user'];
            return response;
        }

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
