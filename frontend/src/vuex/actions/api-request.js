import axios from 'axios'

export default {
    GET_CATALOG_FROM_API({commit}) {
        return axios('/api/catalog', {
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
    SENDING_AUTH_DATA_IN_API(trash, data) {
        return axios.post('/login', {
            email: data.email,
            password: data.password
        })
            .then((response) => {
                console.log(response)
                return response;
            })
            .catch((error) => {
                //статус 422, если неправильный логин или пароль, подробно в вкладке network отладчика
                console.log(error);
                return error;
            })
    },
    SENDING_REGISTRATION_DATA_IN_API(trash, data) {

        return axios.post('/register', {
            'name': data.name,
            'email': data.email,
            'password': data.password,
            'password_confirmation': data.password_confirmation
        })
            .then((response) => {
                console.log(response)
            })
            .catch((error) => {
                //статус 422, если не получилось зарегистрироваться, подробно в вкладке network отладчика

                console.log(error);
                return error;
            })
    },
    FIRST_USER_LOGIN() {
        console.log('FIRST_USER_LOGIN');
        return axios.get('api/user')
            .then((response) => {
                console.log(response);
                return response;
            })
            .catch((error) => {
                console.log(error);
                return error;
            })
    },
    LOGOUT() {
        return axios.post('/logout')
            .then((response) => {
                console.log(response)
            })
            .catch((error) => {
                console.log(error);
                return error;
            })
    }
}
