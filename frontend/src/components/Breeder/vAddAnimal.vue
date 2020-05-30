<template>
    <section class="main-addAnimal">
        <h3>Добавление животного</h3>
            <form  id="addAnimalForm">
                    <div class="form-item">
                        <h4>Кличка</h4>
                        <input 
                            v-model="animalName" 
                            placeholder="Введите кличку" 
                            type="text" 
                            name="animal-Name"   
                        >
                    </div>
                    <div class="form-item">
                        <h4>Порода</h4>
                        <input 
                            v-model="animalBreed" 
                            placeholder="Введите породу" 
                            type="text" 
                            name="animal-Breed"   
                        >
                    </div>
                    <div class="form-item">
                        <h4>Дата рождения</h4>
                        <input 
                            v-model="DoB" 
                            placeholder="Выберите дату рождения животного" 
                            type="text" 
                            name="animal-DoB"   
                        >
                    </div>
                    <div class="form-item">
                        <h4>Окрас</h4>
                        <input 
                            v-model="animalColor" 
                            placeholder="Введите окрас (не обязательно)" 
                            type="text" 
                            name="animal-Color"   
                        >
                    </div>
                    <div class="form-item">
                        <h4>Имя отца</h4>
                        <input 
                            v-model="father" 
                            placeholder="Введите имя отца (не обязательно)" 
                            type="text" 
                            name="animal-Father"   
                        >
                    </div>
                    <div class="form-item">
                        <h4>Имя матери</h4>
                        <input 
                            v-model="father" 
                            placeholder="Введите имя матери (не обязательно)" 
                            type="text" 
                            name="animal-Mather"   
                        >
                    </div>
                    <div class="form-item">
                        <h4>Выставочный класс</h4>
                        <input 
                            v-model="classAminal" 
                            placeholder="Введите имя матери (не обязательно)" 
                            type="text" 
                            name="animal-Class"   
                        >
                    </div>
                    <div class="form-item">
                        <h4>Титул</h4>
                        <input 
                            v-model="classTitul" 
                            placeholder="Введите имя матери (не обязательно)" 
                            type="text" 
                            name="animal-Class"   
                        >
                    </div>
                    <div class="form-item">
                        <h4>Ветпаспорт</h4>
                            <input type="file" id="file" ref="file" v-on:change="handleFileUpload()"/>                          
                    </div>
                    <div class="form-item">
                        <h4>Титульный сертификат</h4>
                            <input type="file" id="file" ref="file" v-on:change="handleFileUpload()"/>                          
                    </div>
                    <div class="form-item">
                        <h4>Фотографии</h4>
                            <input type="file" id="file" ref="file" v-on:change="handleFileUpload()"/>                          
                    </div>
                    <button v-on:click="submitFile()" class="btn-sent">Submit</button>
            </form>
    </section>
</template>

<script>
export default {
    name: 'AddAnimal',
    data: () => ({
        isFilterListVisible: false,
        animalName: null,
        animalBreed: null,
        DoB: null,
        animalColor: null,
        father: null,
        mother: null,
        classAminal: null,
        classTitul: null,
        file: ''
    }),
    methods: {
      submitFile(){
            let formData = new FormData();
            formData.append('file', this.file);
            axios.post( '/single-file',
                formData,
                {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
              }
            ).then(function(){
          console.log('SUCCESS!!');
        })
        .catch(function(){
          console.log('FAILURE!!');
        });
      },
      handleFileUpload(){
        this.file = this.$refs.file.files[0];
      }
    }
}
</script>

<style lang="scss">
.main-addAnimal{
        max-width: 580px;
        margin: 20px auto 50px;
    }
     
</style>

