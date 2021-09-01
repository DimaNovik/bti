<template>
  <b-row>
    <b-col>
      <b-container fluid>
        <b-row class="mt-5 mb-2" align-v="center">
          <b-col cols="12" md="3">
            <b-form>
              <b-form-group
              >
                <b-form-input
                    id="input-1"
                    v-model="search"
                    type="text"
                    placeholder="Пошук..."
                    required
                ></b-form-input>
              </b-form-group>
            </b-form>
          </b-col>
          <b-col cols="12" md="5">
            <b-form-group label="Пошук за:">
              <b-form-checkbox-group
                id="checkbox-group-1"
                v-model="selected"
                :options="options"
                name="flavour-1"
              ></b-form-checkbox-group>
            </b-form-group>
          </b-col>
          <b-col cols="12"  md="4" align="center">
            <b-button type="button" variant="danger" size="lg" @click="$emit('componentChange', 'ProposalsForm')">Додати</b-button>
          </b-col>
        </b-row>
        <b-row class="mb-4">
          <b-col>
            <a href="#">
            <download-excel
                :data="setAllDataTable"
                :fields="json_fields"
                name="filename.xls">

              Завантажити дані у Excel
              <img src="https://img.icons8.com/officexs/16/000000/ms-excel.png" class="mt-n1 ml-2"/>
            </download-excel>
            </a>
          </b-col>
        </b-row>
        <template v-if="setAllDataTable.length">
          <b-row>
            <b-col>
              <b-table striped
                       hover
                       responsive
                       small
                       :items="setAllDataTable"
                       :fields="fields"
                       :current-page="currentPage"
                       :per-page="perPage"
                       :filter="search"
                       :filter-ignored-fields="ignoredFields"
                       :filter-included-fields="selected"
                       :filter-debounce="200"
                       @filtered="onFiltered"
                       @row-clicked="(item) => openToEdit(item)"
                       class="admin__table">
                <template v-slot:cell(person)="row">
                  <span v-if="row.item.person === 1">Юридична</span>
                  <span v-if="row.item.person === 2">Фізична</span>
                </template>
                <template v-slot:cell(status)="row">
                  <span class="yellow" v-if="row.item.status === 0">Чернетка</span>
                  <span class="green" v-if="row.item.status === 1">Сплачено</span>
                  <span class="red" v-if="row.item.status === 2">Повернення</span>
                </template>
              </b-table>
            </b-col>
          </b-row>
          <b-row class="mt-3 mb-5">
            <b-col>
              <b-pagination
                  v-model="currentPage"
                  :total-rows="totalRows"
                  :per-page="perPage"
                  pills
              ></b-pagination>
            </b-col>
          </b-row>
        </template>
        <template v-else>
          <b-row>
            <b-col align="center">
              <p class="red">Дані відсутні</p>
            </b-col>
          </b-row>
        </template>
      </b-container>
    </b-col>
  </b-row>
</template>

<script>
import {mapActions, mapGetters} from "vuex";

export default {
  name: 'ProposalsTable',
  data() {
    return {
      search: null,
      currentPage: 1,
      perPage: 40,
      totalRows: null,
      json_fields: {
        '№ замовлення': 'code',
        'Сума': 'sum',
        'Копій': 'copyes',
        'Вид роботи': 'type',
        'Юр./Фіз. особа': 'person',
        'Персональні дані': 'personal_data',
        'Місто': 'city',
        'Адреса': 'address',
        '№ буд.': 'house_number',
        'Корпус': 'house_building',
        '№ кв.': 'apartment',
        '№ приміщення': 'office',
        'Статус': 'status',
        'Коефіціент': 'coefiction',
        'Дата створення': 'created_at',
        'Дата статусу': 'updated_at',
      },
      fields: [
        {
          key: "code",
          label: "№ замовлення",
        },
        {
          key: "sum",
          label: "Сума",
          sortable: true
        },
        {
          key: "copyes",
          label: "Копії",
          sortable: true
        },
        {
          key: "type",
          label: "Вид роботи",
          sortable: true
        },
        {
          key: "person",
          label: "Юр./Фіз. особа",
          sortable: true
        },
        {
          key: "personal_data",
          label: "ПІБ замовника/назва юридичної особи",
          sortable: true
        },
        {
          key: "city",
          label: "Місто",
          sortable: true
        },
        {
          key: "address",
          label: "Адреса",
          sortable: true
        },
        {
          key: "house_number",
          label: "№ будинку",
          sortable: true
        },
        {
          key: "house_building",
          label: "Корпус",
          sortable: true
        },
        {
          key: "apartment",
          label: "№ квартири",
          sortable: true
        },
        {
          key: "office",
          label: "№ приміщення",
          sortable: true
        },
        {
          key: "status",
          label: "Статус",
          sortable: true
        },
        {
          key: "coefiction",
          label: "Коефіцієнт",
          sortable: true
        },
        {
          key: "additionally",
          label: "Додатково",
          sortable: true
        },
        {
          key: "created_at",
          label: "Дата створення",
          sortable: true
        },
        {
          key: "updated_at",
          label: "Дата статусу",
          sortable: true
        },
      ],
      ignoredFields: ['created_at', 'updated_at', 'coefiction', 'status', 'type', 'copyes'],
      selected: [],
      options: [
        { text: '№ замовлення', value: 'code' },
        { text: 'Сума', value: 'sum' },
        { text: 'Персональні дані', value: 'personal_data' },
        { text: 'Адреса', value: 'address' }
      ]
    }
  },
  computed: {
    ...mapGetters(['proposalsData']),
    setAllDataTable() {
      return this.proposalsData.length ? this.proposalsData : [];
    },
  },
  methods: {
    ...mapActions(['getAllProposalsData']),
    openToEdit(item) {
      this.$emit('chooseCurrent', item.id);
      this.$emit('componentChange', 'ProposalsForm');
    },
    onFiltered(filteredItems) {
      this.totalRows = filteredItems.length
      this.currentPage = 1
    }
  },
  created() {
    this.totalRows = this.proposalsData.length
  },
  mounted() {
    this.getAllProposalsData()
  }
}
</script>

<style lang="scss">
.admin {

  .page-item.active .page-link {
    background-color: #dc3545;
    border-color: #dc3545;

    &:focus {
      box-shadow: none;
    }
  }

}
</style>