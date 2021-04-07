<template>
  <div class="home">
    <b-container>
      <b-row class="mb-5 mt-5" align-v="center">
        <b-col cols="12" md="6" xl="6">
          <p class="mb-5"><b>Пошук інформації за номером інвентаризаціїної справи:</b></p>
          <b-row align-h="center">
            <b-col cols="12" md="12" lg="8" >
              <b-form @submit.prevent="findOrder" @key.enter="findOrder">
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
                <b-row>
                  <b-col cols="4"></b-col>
                  <b-col cosl="4" align="center">
                  <b-button type="button"
                              variant="danger"
                              size="lg"
                              class="home__info_btn"
                              :disabled="code.length < 9"
                              @click="findOrder">
                              Пошук
                              </b-button>
                  </b-col>
                  <b-col cols="4"></b-col>
                </b-row>

              </b-form>
            </b-col>
            <b-col cols="12" md="0" lg="4"></b-col>
          </b-row>
        </b-col>
        <b-col cols="12" md="6" xl="6">
          <transition appear name="fade">
            <b-row>
              <b-col cols="12">
                <b-card class="mt-3" header="Інвентаризаціїна справа передана до КП «БТІ» (зберігання)"  v-if="result.length > 0">
                  <p class="home__info_text"><span class="underlined"><b>{{ getOrderDate }}</b></span>
                    за об'єктом нерухомого майна за адресою:
                  </p>
                  <p class="home__info_text"><span class="underlined">
                    <b>м. Одеса {{ getResult.address }} буд. {{ getResult.house_number }},
                      <span v-if="getResult.house_building">корп. {{getResult.house_building}}</span>
                      кв. {{ getResult.apartment }} <span v-if="getResult.office_number">офіс: {{getResult.office_number}}</span>
                    </b>
                  </span>
                  </p>
                  <p class="home__info_text">Площа загальна: <b>{{ getResult.total_area }}м<sup>2</sup></b></p>
                  <p class="home__info_text">Площа житлова: <b>{{ getResult.main_area }}м<sup>2</sup></b></p>
                  <p class="home__info_text">Площа земельної ділянки: <b>{{ getResult.land_area }}м<sup>2</sup></b></p>
                  <p class="home__info_text">Поверхи: <b>{{ getResult.floor }}</b></p>
                </b-card>
                <p class="home__info_error" v-if="error">Інвентаризаціїна справа не знайдена</p>
              </b-col>
            </b-row>
          </transition>
        </b-col>
      </b-row>
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
      this.$refs.invisibleRecaptcha.execute()
      this.findInventories(this.code).then(response => {
        if (response.length > 0) {
          this.result = response;
        } else {
          this.error = true;
        }
      }).catch(() => {
        this.error = true;
      })
    },
    formatNumber(e) {
      return String(e).substring(0, 9);
    },
    onVerify: function (response) {
      console.log('Verify: ' + response)
    },
    onExpired: function () {
      console.log('Expired')
    },
  }
}
</script>

<style lang="scss">
.home {
  flex: 1;

  &__info_text {
    font-size: 18px;
    line-height: 24px;
  }

  &__info_error {
    color: #c82333;
    font-size: 18px;
    line-height: 24px;
    text-align: center;
  }
}

.fade-enter-active, .fade-leave-active {
  transition: opacity .5s;
}

.fade-enter, .fade-leave-to /* .fade-leave-active до версии 2.1.8 */
{
  opacity: 0;
}
</style>
