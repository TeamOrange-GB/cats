<template>
  <section class="breeder">
    <div class="breeder-info">
      <h1>Данные о заводчике</h1>
      <p>Заводчик: <strong>{{ name }}</strong></p>
      <p>Питомник: <strong>{{ farm }}</strong></p>
      <p>Свидетельство: <strong>{{ license }}</strong></p>
      <p>Опыт разведения: <strong>{{ experience }}</strong></p>
      <p>Страна: <strong>{{ country }}</strong></p>
      <p>Город: <strong>{{ city }}</strong></p>
      <p>Дополнительная информация:</p>
      <p>{{ addInfo }}</p>
    </div>
    <breedercats />
  </section>
</template>

<script>
  import breedercats from './vBreederCats'

  export default {
    name: 'vBreeder',
    data: () => ({
      name: "Имярек",
      farm: "Питомник №1",
      license: "№123456789",
      experience: "2 года",
      country: "Россия",
      city: "Москва",
      addInfo: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ullam animi tempore obcaecati officiis incidunt? Deleniti reprehenderit fugiat temporibus vitae harum optio nulla assumenda cum quidem ab iste facilis quam libero doloremque id pariatur at sapiente, unde dolorem aut quas nemo? Natus doloribus laudantium nihil consequuntur ducimus quibusdam sed repudiandae.",
    }),
    computed: {

    },
    components: {breedercats}
  }
</script>

<style lang="scss">
  .breeder-info {
    margin-bottom: 50px;
  }
</style>