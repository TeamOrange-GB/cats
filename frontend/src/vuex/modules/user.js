import axios from 'axios'


const user = {
    state:{
        user: []
    },
    actions: {
        SENDING_REGISTRATION_DATA_IN_API({commit}, data) {
            return axios.post('/register', {
                'name': data.name,
                'email': data.email,
                'password': data.password
            })
                .then((response) => {
                    commit('SET_REGISTRATION_DATA_IN_API', response.data);
                    return response;
                })
                .catch((error) => {
                    //статус 422, если не получилось зарегистрироваться, подробно в вкладке network отладчика
                    console.log(error);
                    return error;
                })
        },
    },
    mutations: {
        SET_REGISTRATION_DATA_IN_API: (state, response) => {
            state.user = response;
            console.log(response)
        },
    },
    getters: {
        GET_USER(state) {
            return state.user;
        }
    }
};

export default user;
