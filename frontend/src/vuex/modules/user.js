import axios from 'axios'

const user = {
    state:{
        user: {},
        message: ''
    },
    actions: {
        ADD_NEW_USER({commit}, data) {
            return axios.post('/register', {
                'name': data.name,
                'email': data.email,
                'password': data.password,
                'password_confirmation': data.password_confirmation
            })
                .then((response) => {
                    console.log(response);
                    commit('SET_NEW_USER', response.data);
                    return response;
                })
                .catch((error) => {
                    //статус 422, если не получилось зарегистрироваться, подробно в вкладке network отладчика
                    return error;
                })
        },
        AUTH_USER({commit}, data) {
            return axios.post('/login', {
                email: data.email,
                password: data.password
            })
                .then((response) => {
                    console.log(response);
                    commit('SET_NEW_USER', response.data);
                    return response;
                })
                .catch((error) => {
                    //статус 422, если неправильный логин или пароль, подробно в вкладке network отладчика
                    return error;
                })
        },
        LOGOUT({commit}) {
            return axios.post('/logout')
                .then((response) => {
                    console.log(response);
                    commit('SET_LOGOUT', response.data);
                })
                .catch((error) => {
                    return error;
                })
        }
    },
    mutations: {
        SET_NEW_USER: (state, response) => {
            state.user = response.user;
            state.message = response.message;
        },
        SET_LOGOUT: (state, response) => {
            state.user = {};
            state.message = '';
        }
    },
    getters: {
        GET_USER(state) {
            return state.user;
        },
        GET_MESSAGE(state) {
            return state.message;
        }
    }
};

export default user;
