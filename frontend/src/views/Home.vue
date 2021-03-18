<template>
  <div class="home">
  <b-container>
    <b-row class="mb-5 mt-5">
      <b-col cols="auto" md="3"></b-col>
      <b-col cols="12" md="6">
        <b-form @submit="onSubmit">
          <b-form-group
              id="input-group-1"
              label-for="input-1"
              label="Номер інвентаризаціїної справи"
          >
            <b-form-input
                id="input-1"
                v-model="number"
                type="number"
                placeholder="000000000"
                size="lg"
                required
                class="text-center"
            ></b-form-input>
          </b-form-group>
          <b-button type="submit" variant="primary" size="lg">Пошук</b-button>
        </b-form>
      </b-col>
      <b-col cols="auto" md="3"></b-col>
    </b-row>
    <b-row>
      <b-col cols="auto" md="3"></b-col>
      <b-col cols="12" md="6">
        <b-card class="mt-3" header="Інвентаризаціїна справа передана до КП «БТІ» (зберігання)">
          <p> <span class="underlined"><b>12.02.2021</b></span> 
        за об'єктом нерухомого майна за адресою:
        </p>
        <p><span class="underlined"><b>м. Одеса вул. Дальницька буд. 39, кв. 11</b></span></p>
        <p>Площа загальна: <b>34м<sup>2</sup></b></p>
        <p>Площа житлова: <b>34м<sup>2</sup></b></p>
        <p>Площа земельної ділянки: <b>34м<sup>2</sup></b></p>
        <p>Поверхи: <b>2</b></p>
        </b-card>
      </b-col>
      <b-col cols="auto" md="3"></b-col>
    </b-row>
    </b-container>
  </div>
</template>

<script>

export default {
  name: 'Home',
  data() {
    return {
      number: null
    }
  },
  methods: {
    onSubmit() {

    }
  }
}
</script>
