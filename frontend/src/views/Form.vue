<template>
  <div class="admin">
    <b-container>
      <b-row class="mt-5 mb-5">
        <b-col md="2" cols="auto"></b-col>
        <b-col md="8" cols="12">
          <b-form>
            <b-row>
              <b-col md="6">
                <b-form-group
                    id="input-group-1"
                    label="Номер замовлення"
                    label-for="input-1"
                    label-align="left"
                >
                  <b-form-input
                      id="input-1"
                      v-model="form.code"
                      type="number"
                      size="lg"
                      disabled
                  ></b-form-input>
                </b-form-group>
              </b-col>
              <b-col md="6">
                <b-form-group
                    id="input-group-2"
                    label="Тип об'єкту"
                    label-for="input-2"
                    label-align="left"
                >
                  <b-form-select
                      id="input-2"
                      v-model="form.type_object"
                      :options="type_object"
                      size="lg"

                  ></b-form-select>
                </b-form-group>
              </b-col>
            </b-row>
            <b-form-group id="input-group-3" label="Район" label-for="input-3" label-align="left">
              <b-form-select
                  id="input-3"
                  v-model="form.district"
                  :options="districts"
                  size="lg"

              ></b-form-select>
            </b-form-group>

            <b-form-textarea
                id="textarea"
                v-model="form.address"
                placeholder="Адреса..."
                rows="3"
                size="lg"
                max-rows="6"
            ></b-form-textarea>

            <b-row class="mt-3">
              <b-col cols="4">
                <b-form-group
                    id="input-group-4"
                    label="Номер будинку"
                    label-for="input-4"
                    label-align="left"
                >
                  <b-form-input
                      id="input-4"
                      v-model="form.house_number"
                      type="text"
                      placeholder="Введіть № будинку"
                      size="lg"

                  ></b-form-input>
                </b-form-group>
              </b-col>
              <b-col cols="4">
                <b-form-group
                    id="input-group-6"
                    label="Номер корпусу"
                    label-for="input-6"
                    label-align="left"
                >
                  <b-form-input
                      id="input-6"
                      v-model="form.house_building"
                      type="text"
                      placeholder="Введіть № корпусу"
                      size="lg"

                  ></b-form-input>
                </b-form-group>
              </b-col>
              <b-col cols="4">
                <b-form-group
                    id="input-group-5"
                    label="Номер квартири"
                    label-for="input-5"
                    label-align="left"
                >
                  <b-form-input
                      id="input-5"
                      v-model="form.apartment"
                      type="text"
                      placeholder="Введіть № квартири"
                      size="lg"

                  ></b-form-input>
                </b-form-group>
              </b-col>
              <b-col cols="4">
                <b-form-group
                    id="input-group-5"
                    label="Номер приміщення"
                    label-for="input-5"
                    label-align="left"
                >
                  <b-form-input
                      id="input-5"
                      v-model="form.office_number"
                      type="text"
                      placeholder="Введіть № приміщення"
                      size="lg"

                  ></b-form-input>
                </b-form-group>
              </b-col>
            </b-row>
            <b-row>
              <b-col cols="12" md="4">
                <b-form-group
                    id="input-group-75"
                    label="Площа загальна"
                    label-for="input-7"
                    label-align="left"
                >
                  <b-form-input
                      id="input-7"
                      v-model="form.total_area"
                      type="number"
                      placeholder="0"
                      size="lg"
                      ></b-form-input>
                </b-form-group>

              </b-col>
              <b-col cols="12" md="4">

                <b-form-group
                    id="input-group-8"
                    label="Площа головна"
                    label-for="input-8"
                    label-align="left"
                >
                  <b-form-input
                      id="input-8"
                      v-model="form.main_area"
                      type="number"
                      placeholder="0"
                      size="lg"
                      ></b-form-input>
                </b-form-group>
              </b-col>
              <b-col cols="12" md="4">
                <b-form-group
                    id="input-group-9"
                    label="Площа земельна"
                    label-for="input-9"
                    label-align="left"
                >
                  <b-form-input
                      id="input-9"
                      v-model="form.land_area"
                      type="number"
                      placeholder="0"
                      size="lg"
                      ></b-form-input>
                </b-form-group>
              </b-col>
              <b-col cols="12" md="4">
                <b-form-group
                    id="input-group-10"
                    label="Кількість поверхів"
                    label-for="input-0"
                    label-align="left"
                >
                  <b-form-input
                      id="input-10"
                      v-model="form.floor"
                      type="number"
                      placeholder="1"
                      size="lg"
                      ></b-form-input>
                </b-form-group>
              </b-col>
            </b-row>
            <b-row class="mt-5 mb-5">
              <b-col>
                <b-button type="button" @click="createOrder()" variant="primary" size="lg" class="mr-3" v-if="form.status === 0">До чернетки</b-button>
                <b-button type="button" @click="saveOrder()" variant="primary" size="lg" class="mr-3">Зберегти</b-button>
                <b-button type="button" @click="blockOrder()" variant="danger" size="lg">Відмовити</b-button>
              </b-col>
            </b-row>
          </b-form>
        </b-col>
        <b-col md="2" cols="auto"></b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>

import {mapActions, mapGetters} from "vuex";

export default {
  name: 'Form',
  data() {
    return {
      form: {
        code: '0000001',
        type_object: null,
        district: null,
        address: null,
        house_number: null,
        apartment: null,
        house_building: null,
        office_number: null,
        total_area: null,
        main_area: null,
        land_area: null,
        floor: 1,
        status: 0
      },
      districts: [
        {text: 'Оберіть район', value: null},
        {text: 'Приморський', value: 1},
        {text: 'Київський', value: 2},
        {text: 'Малиновський', value: 3},
        {text: 'Суворовський', value: 4}
      ],
      type_object: [{text: 'Оберіть тип об\'єкту', value: null}, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
      total: 0,
    }
  },
  computed: {
    ...mapGetters(['inventoriesData']),
  },
  methods: {
    ...mapActions(['createInventories', 'getCurrentInventories', 'saveInventories']),
    createOrder() {
      const formData = new FormData();

      Object.entries(this.form).map(item => {
        formData.append(item[0], item[1]);
      })

      this.createInventories(this.form).then(()=> {
        this.$router.push('/admin');
      })
    },
    saveOrder() {
      this.form.status = 1;

      const { id } = this.$route.query;
      const formData = new FormData();

      Object.entries(this.form).map(item => {
        formData.append(item[0], item[1]);
      })

      this.saveInventories({data: this.form, id}).then(()=> {
        this.$router.push('/admin');
      })
    },
    blockOrder() {
      this.form.status = 2;

      const { id } = this.$route.query;
      const formData = new FormData();

      Object.entries(this.form).map(item => {
        formData.append(item[0], item[1]);
      })

      this.saveInventories({data: this.form, id}).then(()=> {
        this.$router.push('/admin');
      })
    },
    fulledData(id) {
      this.getCurrentInventories(id).then(response => {
        this.form = response;
      })
    }
  },
  mounted() {
    const { id } = this.$route.query;

    if(id) {
      this.fulledData(id);
    }
  }
}
</script>
