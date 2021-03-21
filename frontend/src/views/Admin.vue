<template>
  <div class="admin">
    <b-container>
      <b-row class="mt-5 mb-5">
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
        <b-col cols="12" offset-md="6" md="2">
          <b-button type="button" variant="primary" size="lg" @click="$router.push('/form')">Додати</b-button>
        </b-col>
      </b-row>
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
                   class="admin__table"></b-table>
        </b-col>
      </b-row>
      <b-row class="mt-3 mb-5">
        <b-col>
          <b-pagination
              v-model="currentPage"
              :total-rows="totalRows"
              :per-page="perPage"
              size="sm"
          ></b-pagination>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>

import {mapActions, mapGetters} from 'vuex';

export default {
  name: 'Admin',
  data() {
    return {
      search: null,
      currentPage: 1,
      perPage: 20,
      totalRows: null,
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
          key: "house_building",
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
    openToEdit() {
      console.log(1);
    },
    onFiltered(filteredItems) {
      // Trigger pagination to update the number of buttons/pages due to filtering
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

  &__table {
    .table thead th, .table th, .table td {
      white-space: nowrap;
    }
    .table tr {
      cursor: pointer;
    }
  }
}
</style>
