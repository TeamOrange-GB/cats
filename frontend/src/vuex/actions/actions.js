export default {
    UPDATE_COUNTS_LIKES({commit}, id) {
        commit('SET_UPDATE_COUNTS_LIKES', id)
    },
    SET_ISLOADING({commit}) {
        commit('SET_ISLOADING');
    }
}
