export default {
    SET_CATALOG_TO_STATE: (state, catalog) => {
        let array = catalog;
        console.log(array);
        array.forEach(function(item,i){
            if(item.gender === 'male'){
                item.gender = 'male.svg'
            }else {
                item.gender = 'female.svg'
            }
            if(item.awards_site != ''){
                item.awards = true
            } else {
                item.awards = false
            }
        })
        state.catalog = array;
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
    }
}
