<template>
  <b-row>
    <b-col>
      <b-container fluid>
       <b-row class="mt-5 mb-5">
        <b-col md="2" cols="auto"></b-col>
        <b-col md="8" cols="12">
          <b-form>
            <b-row>
              <b-col cols="12" md="4">
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
              <b-col  cols="12" md="2">
                    <b-form-group label="Оберіть тип особи" v-slot="{ ariaDescribedby }">
                        <b-form-radio v-model="form.person" :aria-describedby="ariaDescribedby" name="some-radios" :value="1">Юридична особа</b-form-radio>
                        <b-form-radio v-model="form.person" :aria-describedby="ariaDescribedby" name="some-radios" :value="2">Фізична особа</b-form-radio>
                    </b-form-group>
                </b-col>
                <b-col cols="12" md="4">
                <b-form-group
                    id="input-group-1"
                    label="Коефіцієнт"
                    label-for="input-1"
                    label-align="left"
                >
                  <b-form-input
                      id="input-1"
                      v-model="form.coefiction"
                      type="number"
                      size="lg"
                      :min='1'
                      :max='2'
                  ></b-form-input>
                </b-form-group>
              </b-col>
            </b-row>
            <b-form-group
                    id="input-group-2"
                    label="Тип роботи"
                    label-for="input-2"
                    label-align="left"
                >
                  <b-form-select
                      id="input-2"
                      v-model="form.type"
                      :options="types_work"
                      size="lg"

                  ></b-form-select>
            </b-form-group>
            <b-row>
                <b-col cols="12" md="4">
                <b-form-group
                    id="input-group-10"
                    label="Сума"
                    label-for="input-10"
                    label-align="left"
                >
                  <b-form-input
                      id="input-10"
                      v-model="form.sum"
                      type="number"
                      size="lg"
                  ></b-form-input>
                </b-form-group>
              </b-col>
              <b-col cols="12" md="4">
                <b-form-group
                    id="input-group-11"
                    label="Кількість копій"
                    label-for="input-11"
                    label-align="left"
                >
                  <b-form-input
                      id="input-11"
                      v-model="form.copyes"
                      type="number"
                      size="lg"
                      :min='0'
                  ></b-form-input>
                </b-form-group>
              </b-col>
              <b-col cols="12" md="4">
                <b-form-group
                    id="input-group-11"
                    label="Додатково до кожної позиції"
                    label-for="input-11"
                    label-align="left"
                >
                  <b-form-input
                      id="input-11"
                      v-model="form.additionally"
                      type="number"
                      size="lg"
                      :min='0'
                  ></b-form-input>
                </b-form-group>
              </b-col>
            </b-row>
            
            <b-row>
                <b-col>
                    <b-form-group
                    id="input-group-12"
                    label="Місто"
                    label-for="input-12"
                    label-align="left"
                >
                  <b-form-input
                      id="input-12"
                      v-model="form.city"
                      type="text"
                      placeholder="Введіть назву міста"
                      size="lg"
                  ></b-form-input>
                </b-form-group>
                </b-col>
            </b-row>
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
            <b-row class="mt-3 mb-3">
              <b-col>
                <b-button type="button" @click="createOrder()" variant="primary" size="lg" class="mr-3">До чернетки</b-button>
                <b-button type="button" @click="saveOrder()" variant="primary" size="lg" class="mr-3">Сплачено</b-button>
                <b-button type="button" @click="blockOrder()" variant="danger" size="lg" >Повернення</b-button>
              </b-col>
            </b-row>
            <b-row>
              <b-col>
                <b-link :href="`admin/proposals/find_for_pdf/${getProposalId}`" class="mr-3" size="lg">Роздрукувати</b-link>
                <b-button type="button" @click="printOrder()" variant="primary" size="lg">Роздрукувати доплату</b-button>
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
  name: 'ProposalsForm',
  data() {
    return {
      form: {
        code: '',
        sum: null,
        copyes: 0,
        type: null,
        person: 1,
        person_data: null,
        address: null,
        city: null,
        house_number: null,
        house_building: null,
        apartment: null,
        office: null,
        status: 0,
        pages: 0,
        coefiction: 1,
        additionally: 0,
      },
      types_work: [
        {text: 'Оберіть тип роботи', value: null},
        {text: 'Відповідь щодо наявності зареєстрованого права власності стосовно фізичних осіб', value: 1},
        {text: 'Відповідь щодо наявності зареєстрованого права власності стосовно юридичних осіб', value: 2},
        {text: 'Підготовка відповіді щодо технічних показників об\'єкту нерухомості для фізичних осіб', value: 4},
        {text: 'Підготовка відповіді щодо технічних показників об\'єкту нерухомості для юридичних осіб', value: 5},
        {text: 'Надання копій з інвентаризаційної або реєстраційної справи стосовно фізичних осіб', value: 6},
        {text: 'Надання копій з інвентаризаційної або реєстраційної справи стосовно юридичних осіб', value: 7},
        {text: 'Проставлення штампу у домовій книзі', value: 9},
        {text: 'Приймання на зберігання інвентаризаційної справи  при первинній інвентаризації', value: 10},
        {text: 'Приймання на зберігання інвентаризаційної справи  при поточній інвентаризації', value: 11},
      ],
      type_work_sum: [
        {
          id: 1,
          sum: 495.48
        },
        {
          id: 2,
          sum: 434.69
        },
        {
          id: 4,
          sum: 438.32
        },
        {
          id: 5,
          sum: 377.53
        },
        {
          id: 6,
          sum: 426.85
        },
        {
          id: 7,
          sum: 366.06
        },
        {
          id: 9,
          sum: 438.32
        },
        {
          id: 10,
          sum: 262.12
        },
        {
          id: 11,
          sum: 331.48
        },
      ],
      total: 0,
      sumCopyes: 0.91
    }
  },
  props: {
    current_invent: {
      type: Number
    }
  },
  watch: {
      'form.type'(val) {
        this.form.copyes = 0;
        this.form.additionally = 0;
        
        this.form.sum = this.type_work_sum.find(item => item.id === val).sum;
       
      },
      'form.copyes'(newVal, oldVal) {
          if(newVal != oldVal) {
              if(newVal>oldVal) {
                this.form.sum = parseFloat((this.form.sum + this.sumCopyes).toFixed(10));
              } else {
                this.form.sum = parseFloat((this.form.sum - this.sumCopyes).toFixed(10));
              }
          }
      },
      'form.coefiction'(newVal, oldVal) {
          if(newVal != oldVal) {
              if(newVal>oldVal) {
                this.form.sum = this.form.sum * 2;
              } else {
                this.form.sum = this.form.sum / 2;
              }
          }
      }
  },
  computed: {
    ...mapGetters(['proposalsData', 'lastProposalsId']),
    getProposalId() {
      return this.proposalsData[0]?.id;
    }
  },
  methods: {
    ...mapActions(['createProposal', 'getCurrentProposal', 'saveProposal', 'findLastProposal', 'generateProposalPDF']),
    createOrder() {
      const formData = new FormData();
      const id = this.current_invent;
      this.form.status = 0;

      Object.entries(this.form).map(item => {
        formData.append(item[0], item[1]);
      })

      if(id) {
        this.saveProposal({data: this.form, id}).then(()=> {
          this.backToTable();
        })
      } else {
        this.createProposal(this.form).then(()=> {
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
        this.saveProposal({data: this.form, id}).then(()=> {
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
        this.saveProposal({data: this.form, id}).then(()=> {
          this.backToTable();
        })
      } else {
        this.createOrder();
      }
    },
    fulledData(id) {
      this.getCurrentProposal(id).then(response => {
        this.form = response;
      })
    },
    backToTable() {
      this.$emit('componentChange', 'ProposalsTable');
    },
    getCurrentCode() {
      let id = this.lastProposalsId;

      if(id.length < 10) {
          this.form.code = `0000000${id}`
      } else if (id.length >= 10 && id.length < 100) {
          this.form.code = `0000000${id}`
      } else if (id.length >= 100 && id.length < 1000) {
          this.form.code = `000000${id}`
      } else if (id.length >= 1000 && id.length < 10000) {
          this.form.code = `00000${id}`
      } else if (id.length >= 10000 && id.length < 100000) {
          this.form.code = `0000${id}`
      } else if (id.length >= 100000 && id.length < 1000000) {
          this.form.code = `000${id}`
      } else if (id.length >= 1000000 && id.length < 10000000) {
          this.form.code = `00${id}`
      } else if (id.length >= 10000000 && id.length < 100000000) {
          this.form.code = `0${id}`
      } else if (id.length >= 100000000 && id.length < 1000000000) {
          this.form.code = `${id}`
      }
    },
    printOrder(id) {
        this.generateProposalPDF(id)
    }
  },
  mounted() {
    if(this.current_invent) {
      this.fulledData(this.current_invent);
    } else {
      this.findLastProposal().then(() => {
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