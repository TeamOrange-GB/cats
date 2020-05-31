
<template>
<div class="iconsGallery">
  <div class="photoCount">{{ paginatedData[0].id }} - {{ paginatedData[paginatedData.length - 1].id }} фотографий из {{ items.length}}</div>
  <div class="gallery">

      <div v-for="p in paginatedData" class="gallery-images">
        <div class="gallery-img">
          <a href="#"><img :src="p.src" alt="Maine-Coon" tabindex="0"></a>
        </div>
      </div>

  </div>
  <div class="paginationButtons">
        <button
            v-if="pageNumber !== 0"
            @click="prevPage"
            class="arrowButton">
            <
        </button>
        <button
          v-for="(n, i) in pageCount"
          class="pageButton"
          :disabled="pageNumber + 1 === n"
          @click="openPage(i)">
            {{ n }}
        </button>
        <button
            v-if="pageNumber < pageCount - 1"
            @click="nextPage"
            class="arrowButton">
            >
        </button>
      </div>
</div>
</template>

<script>

export default {
  name: 'vGallery',

  data () {
      return {
        pageNumber: 0,
        size: 6,
        items: [
          {
            id: 1, src: 'https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/maineCoons/cat1.jpg',
          },
          {
            id: 2, src: 'https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/maineCoons/cat10.jpg',
          },
          {
            id: 3, src: 'https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/maineCoons/cat11.jpg',
          },
          {
            id: 4, src: 'https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/maineCoons/cat12.jpg',
          },
          {
            id: 5, src: 'https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/maineCoons/cat1.jpg',
          },
          {
            id: 6, src: 'https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/maineCoons/cat10.jpg',
          },
          {
            id: 7, src: 'https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/maineCoons/cat11.jpg',
          },
                    {
            id: 8, src: 'https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/maineCoons/cat12.jpg',
          },
          {
            id: 9, src: 'https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/maineCoons/cat1.jpg',
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
            id: 13, src: 'https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/maineCoons/cat1.jpg',
          },
          {
            id: 14, src: 'https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/maineCoons/cat10.jpg',
          },
        ],
      }
    },
  methods:{
      nextPage(){
         this.pageNumber++;
      },
      prevPage(){
        this.pageNumber--;
      },
      openPage(i){
        this.pageNumber = i;
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
    justify-content: flex-start;
    align-items: space-around;
    width: 750px;
    margin: 20px 0;
    padding: 15px 30px;
    box-shadow: 0 0 10px rgba(0,0,0,0.5);
    box-sizing: border-box;
  }
  .photoCount {
    margin: 20px 0;
    text-align: center;
    color: $color-light-grey;
    font-family: $font-arimo;
    font-size: 18px;
  }
  .gallery-img {
    width: 200px;
    height: 150px;
    margin: 15px;
    img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  }

.paginationButtons{
  margin: 0 auto;
  width: 100%;
  display: flex;
  flex-direction: row;
  align-items: flex-end;
  justify-content: flex-start;

  .arrowButton,
  .arrowButton:hover,
  .arrowButton:hover:disabled {
  color: #777;
  background: $color-white;
  border-radius: 5px;
  margin: 0 5px;
  font-family: $font-arimo;
  border: none;
  text-transform: uppercase;
  font-size: 30px;
  font-weight: 700;
  height: 44px;
  line-height: 44px;
  min-width: 44px;
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
  .arrowButton:hover{
    cursor:pointer;
    color: $color-cyan;
  }
  .arrowButton:hover:disabled,
  .arrowButton:disabled {
    cursor:not-allowed;
    background: $color-gray;
    border: 2px solid $color-gray;
  }

  .pageButton,
  .pageButton:hover,
  .pageButton:hover:disabled{
    background-color: $color-white;
    color: $color-cyan;
    font-size: 16px;
    height: 44px;
    line-height: 44px;
    min-width: 44px;
    margin: 0 5px;
    font-family: $font-arimo;
    border: 1px solid $color-smoke;
    border-radius: 5px;
    font-weight: bold;
    text-align: center;
    display: inline-block;
    outline: 0;
    -webkit-perspective: 1000;
    -moz-perspective: 1000;
    -ms-perspective: 1000;
    perspective: 1000;
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    -webkit-transition: background 0.5s ease-in-out,border-color 0.5s ease-in-out,color 0.5s ease-in-out;
    -moz-transition: background 0.5s ease-in-out,border-color 0.5s ease-in-out,color 0.5s ease-in-out;
    transition: background 0.5s ease-in-out,border-color 0.5s ease-in-out,color 0.5s ease-in-out;
  }
  .pageButton:hover{
    cursor:pointer;
    backface-visibility: hidden;
    border: 1px solid $color-gray;
  }
  .pageButton:hover:disabled,
  .pageButton:disabled {
    cursor:not-allowed;
    background: $color-gray;
    border: 2px solid $color-gray;
    color: $color-white;
  }
}

img[tabindex="0"] {
  cursor: zoom-in;
}
img[tabindex="0"]:focus {
  position: fixed;
  z-index: 10;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: auto;
  height: auto;
  max-width: 99%;
  max-height: 99%;
  margin: auto;
  box-shadow: 0 0 20px #000, 0 0 0 1000px rgba(210,210,210,.4);
}
img[tabindex="0"]:focus,  /* убрать строку, если не нужно, чтобы при клике на увеличенное фото, оно возвращалось в исходное состояние */
img[tabindex="0"]:focus ~ * {
  pointer-events: none;
  cursor: zoom-out;
}




</style>
