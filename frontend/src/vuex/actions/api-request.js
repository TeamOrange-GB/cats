import axios from 'axios'

export default {
    GET_CATALOG_FROM_API({commit}) {
        return axios ('url', {
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
    }
}
