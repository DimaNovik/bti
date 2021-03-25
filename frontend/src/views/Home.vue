<template>
  <div class="home">
  <b-container>
    <b-row class="mb-5 mt-5">
      <b-col cols="auto" md="3"></b-col>
      <b-col cols="12" md="6">
        <b-form>
          <b-form-group
              id="input-group-1"
              label-for="input-1"
              label="Номер інвентаризаціїної справи"
          >
            <b-form-input
                id="input-1"
                v-model="code"
                type="number"
                :placeholder="placeholder"
                size="lg"
                :formatter="formatNumber"
                class="text-center"
            ></b-form-input>
          </b-form-group>
          <b-button type="button"
                    variant="primary"
                    size="lg"
                    :disabled="code.length < 9"
                    @click="findOrder">Пошук</b-button>
        </b-form>
      </b-col>
      <b-col cols="auto" md="3"></b-col>
    </b-row>
    <transition appear name="fade">
      <b-row v-if="result.length > 0">
        <b-col cols="auto" md="3"></b-col>
        <b-col cols="12" md="6">
          <b-card class="mt-3" header="Інвентаризаціїна справа передана до КП «БТІ» (зберігання)">
            <p> <span class="underlined"><b>{{getOrderDate}}</b></span>
          за об'єктом нерухомого майна за адресою:
          </p>
          <p><span class="underlined"><b>м. Одеса {{getResult.address}} буд. {{getResult.house_number}}, кв. {{getResult.apartment}}</b></span></p>
          <p>Площа загальна: <b>{{getResult.total_area}}м<sup>2</sup></b></p>
          <p>Площа житлова: <b>{{getResult.main_area}}м<sup>2</sup></b></p>
          <p>Площа земельної ділянки: <b>{{getResult.land_area}}м<sup>2</sup></b></p>
          <p>Поверхи: <b>{{getResult.floor}}</b></p>
          </b-card>
        </b-col>
        <b-col cols="auto" md="3"></b-col>
      </b-row>
      <b-row v-if="error">
        <b-col cols="auto" md="3"></b-col>
        <b-col cols="12" md="6">
          <p class="red">Інвентаризаціїна справа не знайдена</p>
        </b-col>
        <b-col cols="auto" md="3"></b-col>
      </b-row>
    </transition>
    </b-container>
  </div>
</template>

<script>

import {mapActions} from "vuex";
const moment = require('moment');

export default {
  name: 'Home',
  data() {
    return {
      code: '',
      placeholder: '',
      result: [],
      error: false,
    }
  },
  computed: {
    getResult() {
        return this.result.length ? this.result[0] : []
    },
    getOrderDate() {
      return this.result.length ? moment(this.getResult.updated_at).format('DD-MM-YYYY') : '00-00-0000'
    }
  },
  methods: {
    ...mapActions(['findInventories']),
    findOrder() {
      this.error = false;
      this.result = [];
      this.findInventories(this.code).then(response => {
        if(response.length > 0) {
          this.result.push(response)
        } else {
          this.error = true;
        }
      }).catch(() => {
        this.error = true;
      })
    },
    formatNumber(e){
      return String(e).substring(0,9);
    }
  }
}
</script>

<style lang="scss">
.fade-enter-active, .fade-leave-active {
  transition: opacity .5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active до версии 2.1.8 */ {
  opacity: 0;
}

.red {
  color: #c82333;
}
</style>
