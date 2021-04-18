<template>
  <b-row>
    <b-col>
      <b-container fluid>
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
                      type="text"
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

            <b-row>
              <b-col>
                  <b-form-textarea
                    id="textarea"
                    v-model="form.address"
                    placeholder="Адреса..."
                    rows="3"
                    size="lg"
                    max-rows="6"
                ></b-form-textarea>
              </b-col>
              <b-col>
                <b-form-textarea
                    id="textarea"
                    v-model="form.info"
                    placeholder="ПІБ замовника/назва юридичної особи"
                    rows="3"
                    size="lg"
                    max-rows="6"
                ></b-form-textarea>
              </b-col>
              <b-col>
                <b-form-textarea
                    id="textarea"
                    v-model="form.subject"
                    placeholder="Суб'єкт господарювання, який здійснив останню інвентаризацію об'єкта"
                    rows="3"
                    size="lg"
                    max-rows="6"
                ></b-form-textarea>
              </b-col>
            </b-row>
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
                    label="Площа житлова/корисна"
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
                    label-for="input-10"
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
              <b-col cols="12" md="4">
                <b-form-group
                    id="input-group-10"
                    label="На якому поверсі"
                    label-for="input-10"
                    label-align="left"
                >
                  <b-form-input
                      id="input-10"
                      v-model="form.current_floor"
                      type="number"
                      placeholder="1"
                      size="lg"
                  ></b-form-input>
                </b-form-group>
              </b-col>
              <b-col cols="12" md="4">
                <b-form-group
                    id="input-group-11"
                    label="Кількість сторінок"
                    label-for="input-11"
                    label-align="left"
                >
                  <b-form-input
                      id="input-11"
                      v-model="form.pages"
                      type="number"
                      placeholder="1"
                      size="lg"
                  ></b-form-input>
                </b-form-group>
              </b-col>
            </b-row>
            <b-row class="mt-5 mb-5">
              <b-col>
                <b-button type="button" @click="createOrder()" variant="primary" size="lg" class="mr-3">До чернетки</b-button>
                <b-button type="button" @click="saveOrder()" variant="primary" size="lg" class="mr-3">Зберегти</b-button>
                <b-button type="button" @click="blockOrder()" variant="danger" size="lg">Відмовити</b-button>
              </b-col>
            </b-row>
          </b-form>
        </b-col>
        <b-col md="2" cols="auto"></b-col>
      </b-row>
      </b-container>
    </b-col>
  </b-row>
</template>

<script>
import {mapActions, mapGetters} from "vuex";

export default {
  name: 'InventForm',
  data() {
    return {
      form: {
        code: '',
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
        status: 0,
        info: null,
        pages: 0,
        subject: null
      },
      districts: [
        {text: 'Оберіть район', value: null},
        {text: 'Приморський', value: 1},
        {text: 'Київський', value: 2},
        {text: 'Малиновський', value: 3},
        {text: 'Суворовський', value: 4}
      ],
      type_object: [{text: 'Оберіть тип об\'єкту', value: null}, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13],
      total: 0,
    }
  },
  props: {
    current_invent: {
      type: Number
    }
  },
  computed: {
    ...mapGetters(['inventoriesData', 'lastInventId']),
  },
  methods: {
    ...mapActions(['createInventories', 'getCurrentInventories', 'saveInventories', 'findLast']),
    createOrder() {
      const formData = new FormData();
      const id = this.current_invent;
      this.form.status = 0;

      Object.entries(this.form).map(item => {
        formData.append(item[0], item[1]);
      })

      if(id) {
        this.saveInventories({data: this.form, id}).then(()=> {
          this.backToTable();
        })
      } else {
        this.createInventories(this.form).then(()=> {
          this.backToTable();
        })
      }

    },
    saveOrder() {
      this.form.status = 1;
      const formData = new FormData();
      const id = this.current_invent;

      Object.entries(this.form).map(item => {
        formData.append(item[0], item[1]);
      })

      if(id) {
        this.saveInventories({data: this.form, id}).then(()=> {
          this.backToTable();
        })
      } else {
        this.createOrder();
      }
    },
    blockOrder() {
      this.form.status = 2;

      const id = this.current_invent;
      const formData = new FormData();

      Object.entries(this.form).map(item => {
        formData.append(item[0], item[1]);
      })

      if(id) {
        this.saveInventories({data: this.form, id}).then(()=> {
          this.backToTable();
        })
      } else {
        this.createOrder();
      }
    },
    fulledData(id) {
      this.getCurrentInventories(id).then(response => {
        this.form = response;
      })
    },
    backToTable() {
      this.$emit('componentChange', 'InventTable');
    },
    getCurrentCode() {
      let id = this.lastInventId;

      if(id < 10) {
          this.form.code = `00000000${id}`
      } else if (id >= 10 && id < 100) {
          this.form.code = `0000000${id}`
      } else if (id >= 100 && id < 1000) {
          this.form.code = `000000${id}`
      } else if (id >= 1000 && id < 10000) {
          this.form.code = `00000${id}`
      } else if (id >= 10000 && id < 100000) {
          this.form.code = `0000${id}`
      } else if (id >= 100000 && id < 1000000) {
          this.form.code = `000${id}`
      } else if (id >= 1000000 && id < 10000000) {
          this.form.code = `00${id}`
      } else if (id >= 10000000 && id < 100000000) {
          this.form.code = `0${id}`
      } else if (id >= 100000000 && id < 1000000000) {
          this.form.code = `${id}`
      }
    }
  },
  mounted() {
    if(this.current_invent) {
      this.fulledData(this.current_invent);
    } else {
      this.findLast().then(() => {
        this.getCurrentCode();
      });
    }
  },
  beforeDestroy() {
    this.$emit('chooseCurrent',null);
  }
}
</script>

<style scoped>

</style>