


<template>
<div class="iconsGallery">
  <div class="photoCount">Всего фотографий: {{ items.length }}</div>
  <div class="gallery">
  
      <div v-for="p in paginatedData" class="gallery-images">
        <div class="gallery-img">
          <a href="#"><img :src="p.src" alt="Maine-Coon"></a>
        </div>
      </div>
      <div class="paginationButtons">
        
        <button 
            :disabled="pageNumber === 0" 
            @click="prevPage">
            Предыдущие
        </button>
        <button 
            :disabled="pageNumber >= pageCount -1" 
            @click="nextPage">
            Следующие
        </button>
      </div>
  </div>
</div>
</template>

<script>

export default {
  name: 'vGallery',

  data () {
      return {
        pageNumber: 0, // by default
        items: [
          {
            id: 1, src: 'https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/maineCoons/cat1.jpg',
          },
          {
            id: 2, src: 'https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/maineCoons/cat2.jpg',
          },
          {
            id: 3, src: 'https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/maineCoons/cat3.jpg',
          },
          {
            id: 4, src: 'https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/maineCoons/cat4.jpg',
          },
                    {
            id: 5, src: 'https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/maineCoons/cat5.jpg',
          },
          {
            id: 6, src: 'https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/maineCoons/cat6.jpg',
          },
          {
            id: 7, src: 'https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/maineCoons/cat7.jpg',
          },
                    {
            id: 8, src: 'https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/maineCoons/cat8.jpg',
          },
          {
            id: 9, src: 'https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/maineCoons/cat9.jpg',
          },
          {
            id: 10, src: 'https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/maineCoons/cat10.jpg',
          },
          {
            id: 11, src: 'https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/maineCoons/cat11.jpg',
          },
                    {
            id: 12, src: 'https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/maineCoons/cat12.jpg',
          },
          {
            id: 13, src: 'https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/maineCoons/cat13.jpg',
          },
          {
            id: 14, src: 'https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/maineCoons/cat14.jpg',
          },
        ],
      }
    },
  props:{
    size:{
      type:Number,
      required:false,
      default: 6
    }
  },
  methods:{
      nextPage(){
         this.pageNumber++;
      },
      prevPage(){
        this.pageNumber--;
      }
  },
  computed:{
    pageCount(){
      let l = this.items.length,
          s = this.size;
      return Math.ceil(l/s);
    },
    paginatedData(){
      const start = this.pageNumber * this.size,
            end = start + this.size;
      return this.items
               .slice(start, end);
    }
  },
}
</script>

<style lang="scss">
.iconsGallery {
  flex-direction: column;
}
  .gallery {
    display: flex;
    flex-flow: row wrap;
    justify-content: space-between;
    align-items: stretch;
    width: 750px;
    height: 470px;
    margin: 20px 0;
  }
  .photoCount {
    margin: 20px 0;
    text-align: center;
    color: $color-light-grey;
    font-family: $font-arimo;
    font-size: 18px;
  }
  .gallery-images {

  }
  .gallery-img {
    width: 200px;
    height: 150px;
    margin: 0 0 20px 0;
    img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  }

.paginationButtons{
  margin: 0 auto;
  display: flex;
  align-items: flex-end;

  button,
  button:hover,
  button:hover:disabled {
  background-color: $color-cyan;
  border-radius: 5px;
  margin: 0 20px;
  font-family: $font-arimo;
  color: $color-white;
  border: 2px solid $color-cyan;
  text-transform: uppercase;
  font-size: 14px;
  font-weight: 700;
  min-width: 170px;
  height: 50px;
  line-height: 50px;
  padding: 0;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  outline: 0;   
  -webkit-perspective: 1000;
  -moz-perspective: 1000;
  -ms-perspective: 1000;
  perspective: 1000;
  -webkit-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  -webkit-transition: background 0.2s ease-in-out,border-color 0.2s ease-in-out,color 0.2s ease-in-out;
  -moz-transition: background 0.2s ease-in-out,border-color 0.2s ease-in-out,color 0.2s ease-in-out;
  transition: background 0.2s ease-in-out,border-color 0.2s ease-in-out,color 0.2s ease-in-out;
  }
  button:hover{
    cursor:pointer;
    background: $color-gray;
    border: 2px solid $color-gray;       
  }
  button:hover:disabled,
  button:disabled {
    cursor:not-allowed;
    background: $color-gray;
    border: 2px solid $color-gray;
  }
}






</style>