import axios from 'axios'

export default {


    GET_PETINFO_FROM_API({commit}, pet_id) {
        return axios(`http://ca76934.tmweb.ru/api/pet/${pet_id}`, {
            method: "GET"
        })
            .then((response) => {
                console.log(response.data)
                return response;
            })
            .catch((error) => {
                console.log(error);
                return error;
            })
    },

    /*
           FIRST_VISIT_USER_LOGIN() {
               return axios.get('http://ca76934.tmweb.ru/api/user')
                   .then((response) => {
                       console.log(response);
                       return response;
                   })
                   .catch((error) => {
                       return error;
                   })
           },
           LOGOUT() {
               return axios.post('http://ca76934.tmweb.ru/logout')
                   .then((response) => {
                       console.log(response)
                   })
                   .catch((error) => {
                       console.log(error);
                       return error;
                   })
           } */

    /* GET_USERINFO_FROM_API({commit}, user_id) {
           return axios('http://ca76934.tmweb.ru/api/user/' + user_id, {
               method: "GET"
           })
               .then((response) => {
                   console.log(response.data)
                   return response.data;
               })
               .catch((error) => {
                   console.log(error);
                   return error;
               })
       },
       SENDING_AUTH_DATA_IN_API(trash, data) {
           return axios.post('http://ca76934.tmweb.ru/login', {
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
       }, */

}
