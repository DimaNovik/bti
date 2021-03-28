<template>
  <b-row>
    <b-col>
      <b-container fluid>
        <b-row class="mt-5 mb-2">
          <b-col cols="12" md="4">
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
          <b-col cols="12" offset-md="6" md="2" align="center">
            <b-button type="button" variant="danger" size="lg" @click="$emit('componentChange', 'InventForm')">Додати</b-button>
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
                       @filtered="onFiltered"
                       @row-clicked="(item) => openToEdit(item)"
                       class="admin__table">
                <template v-slot:cell(status)="row">
                  <span class="yellow" v-if="row.item.status === 0">Чернетка</span>
                  <span class="green" v-if="row.item.status === 1">Ухвалено</span>
                  <span class="red" v-if="row.item.status === 2">Відхилено</span>
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
  name: 'InventTable',
  data() {
    return {
      search: null,
      currentPage: 1,
      perPage: 20,
      totalRows: null,
      json_fields: {
        '№ замовлення': 'code',
        'Район': 'district',
        'Тип об\'єкту': 'type_object',
        'Адреса': 'address',
        '№ будинку': 'house_number',
        '№ квартири': 'apartment',
        '№ приміщення': 'office_number',
        'Корпус': 'house_building',
        'Площа загальна': 'total_area',
        'Площа житлова': 'main_area',
        'Площа зем. ділянки': 'land_area',
        'Поверхів': 'floor',
        'Статус': 'status',
        'Дата створення': 'created_at',
        'Дата оновлення': 'updated_at',
      },
      fields: [
        {
          key: "code",
          label: "№ замовлення",
        },
        {
          key: "district",
          label: "Район",
          sortable: true
        },
        {
          key: "type_object",
          label: "Тип об'єкту",
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
          key: "apartment",
          label: "№ квартири",
          sortable: true
        },
        {
          key: "office_number",
          label: "№ приміщення",
          sortable: true
        },
        {
          key: "house_building",
          label: "Корпус",
          sortable: true
        },

        {
          key: "total_area",
          label: "Площа загальна",
          sortable: true
        },
        {
          key: "main_area",
          label: "Площа житлова",
          sortable: true
        },
        {
          key: "land_area",
          label: "Площа зем. ділянки",
          sortable: true
        },
        {
          key: "floor",
          label: "Поверхів",
          sortable: true
        },
        {
          key: "status",
          label: "Статус",
          sortable: true
        },
        {
          key: "created_at",
          label: "Дата створення",
          sortable: true
        },
        {
          key: "updated_at",
          label: "Дата оновлення",
          sortable: true
        },
      ],
    }
  },
  computed: {
    ...mapGetters(['inventoriesData']),
    setAllDataTable() {
      return this.inventoriesData.length ? this.inventoriesData : [];
    },
    sortOptions() {
      return this.fields
          .filter(f => f.sortable)
          .map(f => {
            return { text: f.label, value: f.key }
          })
    }
  },
  methods: {
    ...mapActions(['getAllData']),
    openToEdit(item) {
      this.$emit('chooseCurrent', item.id);
      this.$emit('componentChange', 'InventForm');
    },
    onFiltered(filteredItems) {
      this.totalRows = filteredItems.length
      this.currentPage = 1
    }
  },
  created() {
    this.totalRows = this.inventoriesData.length
  },
  mounted() {
    this.getAllData()
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