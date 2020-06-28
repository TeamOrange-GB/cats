import axios from 'axios'

export default {


    GET_PETINFO_FROM_API({commit}, pet_id) {
        return axios(`/api/pet/${pet_id}`, {
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


        /*   FIRST_VISIT_USER_LOGIN() {
               return axios.get('http://ca76934.tmweb.ru/api/user')
                   .then((response) => {
                       console.log(response);
                       return response;
                   })
                   .catch((error) => {
                       return error;
                   })
           },*/


     GET_USERINFO_FROM_API({commit}, user_id) {
           return axios('/api/user/' + user_id, {
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


}
