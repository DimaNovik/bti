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
                <b-col cols="12" md="4">
                  <b-form-group label="Оберіть тип особи" v-slot="{ ariaDescribedby }">
                    <b-form-radio v-model="form.person" :aria-describedby="ariaDescribedby" name="some-radios"
                                  :value="1">Юридична особа
                    </b-form-radio>
                    <b-form-radio v-model="form.person" :aria-describedby="ariaDescribedby" name="some-radios"
                                  :value="2">Фізична особа
                    </b-form-radio>
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
                  >
                    <b-form-input
                      id="input-11"
                      v-model="form.additionally"
                      type="number"
                      size="lg"
                      :min='0'
                      :disabled="form.type !== 1 && form.type !== 2"
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
                    v-model="form.personal_data"
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
                      v-model="form.office"
                      type="text"
                      placeholder="Введіть № приміщення"
                      size="lg"

                    ></b-form-input>
                  </b-form-group>
                </b-col>
              </b-row>
              <b-row class="mt-3 mb-3">
                <b-col>
                  <b-button type="button" @click="createOrder()" variant="primary" size="lg" class="mr-3">До чернетки
                  </b-button>
                  <b-button type="button" @click="saveOrder()" variant="primary" size="lg" class="mr-3">Сплачено
                  </b-button>
                  <b-button type="button" @click="blockOrder()" variant="danger" size="lg">Повернення</b-button>
                </b-col>
              </b-row>
              <b-row>
                <b-col>
                  <b-link :href="`admin/proposals/find_for_pdf/${getProposalId}`" class="mr-3 link" target="_blank">
                    Роздрукувати
                  </b-link>
                  <b-link @click.prevent="saveOrder(true)" class="mr-3 link">Роздрукувати доплату</b-link>
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
    import { mapActions, mapGetters } from "vuex";

    const TYPE_WORK_SUM = [
        {
            id: 1,
            sum: 498
        },
        {
            id: 2,
            sum: 482
        },
        {
            id: 4,
            sum: 458
        },
        {
            id: 5,
            sum: 443
        },
        {
            id: 6,
            sum: 410
        },
        {
            id: 7,
            sum: 395
        },
        {
            id: 9,
            sum: 410
        },
        {
            id: 10,
            sum: 168
        },
        {
            id: 11,
            sum: 209
        },
        {
            id: 12,
            sum: 446
        },
        {
            id: 13,
            sum: 431
        },
        {
            id: 14,
            sum: 1305
        },
        {
            id: 15,
            sum: 1290
        },
        {
            id: 16,
            sum: 1068
        },
        {
            id: 17,
            sum: 1052
        },
        {
            id: 18,
            sum: 1057
        },
        {
            id: 19,
            sum: 1042
        },
        {
            id: 20,
            sum: 660
        },
        {
            id: 21,
            sum: 644
        },
        {
            id: 22,
            sum: 815
        },
        {
            id: 23,
            sum: 577
        },
        {
            id: 24,
            sum: 90
        },
        {
            id: 25,
            sum: 412
        },
        {
            id: 26,
            sum: 682
        },
        {
            id: 27,
            sum: 666
        },
    ];


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
                    personal_data: null,
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
                    { text: 'Оберіть тип роботи', value: null },
                    {
                        text: '1. Відповідь щодо наявності зареєстрованого права власності стосовно фізичних осіб',
                        value: 1
                    },
                    {
                        text: '2. Відповідь щодо наявності зареєстрованого права власності стосовно юридичних осіб',
                        value: 2
                    },
                    {
                        text: '4. Підготовка відповіді щодо технічних показників об\'єкту нерухомості для фізичних осіб',
                        value: 4
                    },
                    {
                        text: '5. Підготовка відповіді щодо технічних показників об\'єкту нерухомості для юридичних осіб',
                        value: 5
                    },
                    {
                        text: '6. Надання копій з інвентаризаційної або реєстраційної справи стосовно фізичних осіб',
                        value: 6
                    },
                    {
                        text: '7. Надання копій з інвентаризаційної або реєстраційної справи стосовно юридичних осіб',
                        value: 7
                    },
                    { text: '9. Проставлення штампу у домовій книзі', value: 9 },
                    {
                        text: '10. Приймання на зберігання інвентаризаційної справи  при первинній інвентаризації',
                        value: 10
                    },
                    {
                        text: '11. Приймання на зберігання інвентаризаційної справи  при поточній інвентаризації',
                        value: 11
                    },
                    { text: '12. Проведення судової експертизи (обстежень і досліджень) для фізичних осіб', value: 12 },
                    {
                        text: '13. Проведення судової експертизи (обстежень і досліджень) для юридичних осіб',
                        value: 13
                    },
                    {
                        text: '14. Нова зйомка об’єкту нерухомості для  фізичних осіб (домоволодіння, нежитлові будівлі та споруди тощо)',
                        value: 14
                    },
                    {
                        text: '15. Нова зйомка об’єкту нерухомості для юридичних осіб (домоволодіння, нежитлові будівлі та споруди тощо)',
                        value: 15
                    },
                    {
                        text: '16. Поточна технічна інвентаризація об’єкту нерухомості для фізичних осіб (домоволодіння, нежитлові будівлі та споруди тощо)',
                        value: 16
                    },
                    {
                        text: '17. Поточна технічна інвентаризація об’єкту нерухомості для юридичних осіб (домоволодіння, нежитлові будівлі та споруди тощо)',
                        value: 17
                    },
                    {
                        text: '18. Нова зйомка об’єкту нерухомості для  фізичних осіб (квартира, нежитлові приміщення тощо)',
                        value: 18
                    },
                    {
                        text: '19. Нова зйомка об’єкту нерухомості для  юридичних осіб (квартира, нежитлові приміщення тощо)',
                        value: 19
                    },
                    {
                        text: '20. Поточна технічна інвентаризація об’єкту нерухомості для фізичних осіб (квартира, нежитлові приміщення тощо)',
                        value: 20
                    },
                    {
                        text: '21. Поточна технічна інвентаризація об’єкту нерухомості для юридичних осіб (квартира, нежитлові приміщення тощо)',
                        value: 21
                    },
                    { text: '22. Додатково за проведення поділу, виділу об’єктів нерухомого майна', value: 22 },
                    { text: '23. Додатково за проведення розрахунку часток об’єктів нерухомого майна', value: 23 },
                    {
                        text: '24. Додатково за проведення переоцінки будинку, житлової прибудови, підвалу надбудови/господарських будівель, прибудов/господарських споруд/  будинків та споруд у зв’язку з індексацією',
                        value: 24
                    },
                    { text: '25. Складання висновку про неможливість розподілу домоволодіння', value: 25 },
                    { text: '26. Підготовка відповіді щодо знесення об’єкту нерухомості для фізичних осіб', value: 26 },
                    {
                        text: '27. Підготовка відповіді щодо знесення об’єкту нерухомості для юридичних осіб',
                        value: 27
                    },
                ],
                total: 0,
                sumCopyes: 1,
                dataLoaded: false,
            }
        },
        props: {
            current_invent: {
                type: Number
            }
        },
        watch: {
            'form.type': {
                immediate: false,
                handler(newVal) {
                    if (!this.dataLoaded) {
                        this.form.sum = TYPE_WORK_SUM.find(item => item.id === newVal).sum;
                    }
                }

            },
            'form.copyes': {
                immediate: false,
                handler(newVal, oldVal) {
                    if (newVal != oldVal && !this.dataLoaded) {
                        if (newVal > oldVal) {
                            this.form.sum = parseFloat((this.form.sum + this.sumCopyes).toFixed(10));
                        } else {
                            this.form.sum = parseFloat((this.form.sum - this.sumCopyes).toFixed(10));
                        }
                    }
                }

            },
            'form.coefiction': {
                immediate: false,
                handler(newVal, oldVal) {
                    if (newVal != oldVal && !this.dataLoaded) {
                        if (newVal > oldVal) {
                            this.form.sum = this.form.sum * 2;
                        } else {
                            this.form.sum = this.form.sum / 2;
                        }
                    }
                }

            },
            'form.additionally': {
                immediate: false,
                handler(newVal, oldVal) {
                    if (newVal != oldVal && !this.dataLoaded) {
                        if (newVal > oldVal) {
                            this.form.sum = this.form.sum + 21;
                        } else {
                            this.form.sum = this.form.sum - 21;
                        }
                    }
                }

            },
        },
        computed: {
            ...mapGetters([ 'currentProposalsData', 'lastProposalsId' ]),
            getProposalId() {
                return this.currentProposalsData && this.currentProposalsData?.id;
            },
            getCurrentLastSum() {
                return this.currentProposalsData && this.currentProposalsData?.sum
            },
        },
        methods: {
            ...mapActions([ 'createProposal', 'getCurrentProposal', 'saveProposal', 'findLastProposal', 'generateProposalPDF' ]),
            createOrder() {
                const formData = new FormData();
                const id = this.current_invent;
                this.form.status = 0;

                Object.entries(this.form).map(item => {
                    formData.append(item[0], item[1]);
                })

                if (id) {
                    this.saveProposal({ data: this.form, id }).then(() => {
                        this.backToTable();
                    })
                } else {
                    this.createProposal(this.form).then(() => {
                        this.backToTable();
                    })
                }

            },
            saveOrder(isSurcharge) {
                if (!isSurcharge) {
                    this.form.status = 1;
                }

                const formData = new FormData();
                const id = this.current_invent;

                Object.entries(this.form).map(item => {
                    formData.append(item[0], item[1]);
                })

                if (id) {
                    this.saveProposal({ data: this.form, id }).then(() => {
                        if (isSurcharge) {
                            window.open(`${document.location}/proposals/find_for_pdf/${this.getProposalId}?sum=${localStorage.getItem('lasSum')}`)
                        } else {
                            this.backToTable();
                        }
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

                if (id) {
                    this.saveProposal({ data: this.form, id }).then(() => {
                        this.backToTable();
                    })
                } else {
                    this.createOrder();
                }
            },
            fulledData(id) {
                this.getCurrentProposal(id).then(response => {
                    this.form = response;
                    this.dataLoaded = true;

                    setTimeout(() => {
                        this.dataLoaded = false;
                        localStorage.setItem('lasSum', this.getCurrentLastSum);
                    }, 1000)
                })
            },
            backToTable() {
                this.$emit('componentChange', 'ProposalsTable');
            },
            getCurrentCode() {
                let id = +this.lastProposalsId;

                if (id < 10) {
                    this.form.code = `00000000${id}`
                } else if (id >= 10 && id < 100) {
                    this.form.code = `0000000${id}`
                } else if (id >= 100 && id < 1000) {
                    this.form.code = `0000000${id}`
                } else if (id >= 1000 && id < 10000) {
                    this.form.code = `000000${id}`
                } else if (id >= 10000 && id < 100000) {
                    this.form.code = `00000${id}`
                } else if (id >= 100000 && id < 1000000) {
                    this.form.code = `0000${id}`
                } else if (id >= 1000000 && id < 10000000) {
                    this.form.code = `000${id}`
                } else if (id >= 10000000 && id < 100000000) {
                    this.form.code = `00${id}`
                } else if (id >= 100000000 && id < 1000000000) {
                    this.form.code = `0${id}`
                }
            },
            printOrder(id) {
                this.generateProposalPDF(id)
            },
        },
        mounted() {
            if (this.current_invent) {
                this.fulledData(this.current_invent);


            } else {
                this.findLastProposal().then(() => {
                    this.getCurrentCode();
                });
            }
        },
        beforeDestroy() {
            localStorage.setItem('lasSum', 0);
            this.$emit('chooseCurrent', null);
        }
    }
</script>

<style lang="scss">

  .link {
    padding: 0.5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: 0.3rem;
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;

    &:hover {
      color: #fff;
      background-color: #0069d9;
      border-color: #0062cc;
      text-decoration: none
    }
  }
</style>
