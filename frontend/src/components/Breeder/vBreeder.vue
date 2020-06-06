<template>
  <section class="breeder">
    <h1>{{ name }}</h1>
    <h2>{{ farm }}</h2>
    <div class="breeder__card">
      <div class="breeder__info">
        <h3>Основные сведения</h3>
        <h4>Свидетельство:</h4>
        <p>{{ license }}</p>
        <h4>Опыт разведения:</h4>
        <p>{{ experience }}</p>
        <h4>Страна:</h4>
        <p>{{ country }}</p>
        <h4>Город:</h4>
        <p>{{ city }}</p>
        <h4>Дополнительная информация:</h4>
        <p>{{ addInfo }}</p>
      </div>
      <figure class="breeder__pic">
        <img class="breeder__photo" src="https://avatars.mds.yandex.net/get-zen_doc/1811900/pub_5cd124aba8ac8300b34993a0_5cd1261b583aa800af53c31d/scale_1200" alt="Фото">
      </figure>
    </div>
    <vCatGallery :animalsNumber="10"
                :isPaginationVisible="true" />
  </section>
</template>

<script>
  // import breedercats from './vBreederCats'
  import vCatGallery from "../Catalog/vCatGallery";

  export default {
    name: 'vBreeder',
    components: { vCatGallery },
    data: () => ({
      name: "Юрий Куклачев",
      farm: "Питомник №1",
      license: "№123456789",
      experience: "2 года",
      country: "Россия",
      city: "Москва",
      addInfo: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ullam animi tempore obcaecati officiis incidunt? Deleniti reprehenderit fugiat temporibus vitae harum optio nulla assumenda cum quidem ab iste facilis quam libero doloremque id pariatur at sapiente, unde dolorem aut quas nemo? Natus doloribus laudantium nihil consequuntur ducimus quibusdam sed repudiandae.",
    }),
  }
</script>

<style lang="scss">
  .breeder {
    display: flex;
    flex-flow: row wrap;
    justify-content: space-between;
    width: 80%;
    margin: 0 auto;
    max-width: 1230px;
  }

  .breeder h1,
  .breeder h2 {
    width: 100%;
  }

  .breeder__card {
    display: flex;
    flex-flow: row nowrap;
    justify-content: space-between;
    margin-bottom: 50px;
  }

  .breeder__info {
    width: 40%;
    box-sizing: border-box;
    margin-right: 50px;
    line-height: 1.5em;
  }

  .breeder__pic {
    width: 60%;
    box-sizing: border-box;
    text-align: center;
  }

  .breeder__photo {
    width: 100%;
  }
</style>
