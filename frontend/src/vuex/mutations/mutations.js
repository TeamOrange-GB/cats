export default {
    SET_CATALOG_TO_STATE: (state, catalog) => {
        let array = catalog;
        array.forEach(function(item,i){
            if(item.gender === 1){
                item.gender = 'male.svg'
            }else {
                item.gender = 'female.svg'
            }
            if(item.awards_site != '' && item.awards_site != null){
                item.awards = true
            } else {
                item.awards = false
            }
        })
        state.catalog = array;
        state.isLoading = false;
    },
    SET_UPDATE_COUNTS_LIKES: (state, id) => {
        state.catalog.forEach(function(item, i){
            if(item.id == id){
                item.likes_count++
                item.haveLike = true
            }
        })
    },
    SET_REGISTRATION_DATA_IN_API: (response) => {
        console.log(response)
    },
    SET_ISLOADING: (state) => {
        state.isLoading = true;
    }
}
