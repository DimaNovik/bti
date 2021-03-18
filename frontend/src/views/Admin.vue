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
          hover :items="items" 
          :fields="fields"
          :current-page="currentPage"
          :per-page="perPage"
          responsive
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

export default {
  name: 'Admin',
  data() {
    return {
      search: null,
      currentPage: 0,
      perPage: 10,
      totalRows: 25,
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
                        key: "invent_code",
                        label: "Інвентарний номер",
                        sortable: true
                    },
                    {
                        key: "address",
                        label: "Адреса",
                        sortable: true
                    },
                    {
                        key: "house_number",
                        label: "Номер будинку",
                        sortable: true
                    },
                    {
                        key: "apartment",
                        label: "Номер квартири",
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
                        label: "Площа головна",
                        sortable: true
                    },
                    {
                        key: "land_area",
                        label: "Площа земельна",
                        sortable: true
                    },
                    {
                        key: "floor",
                        label: "Поверхів",
                        sortable: true
                    },
                    {
                        key: "type",
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
      items: [
          { code: '0000001', district: 1, invent_code: '12345678', address: 'вул. Дальницька', house_number: '39', house_building: '', apartment: '11', total_area: '34', main_area: '34', land_area: '40', floor: '1', type: 1, created_at: '00-00-0000', updated_at: '00=00-0000'},
          { code: '0000001', district: 1, invent_code: '12345678', address: 'вул. Дальницька', house_number: '39', house_building: '', apartment: '11', total_area: '34', main_area: '34', land_area: '40', floor: '1', type: 1, created_at: '00-00-0000', updated_at: '00=00-0000'},
          { code: '0000001', district: 1, invent_code: '12345678', address: 'вул. Дальницька', house_number: '39', house_building: '', apartment: '11', total_area: '34', main_area: '34', land_area: '40', floor: '1', type: 1, created_at: '00-00-0000', updated_at: '00=00-0000'},
          { code: '0000001', district: 1, invent_code: '12345678', address: 'вул. Дальницька', house_number: '39', house_building: '', apartment: '11', total_area: '34', main_area: '34', land_area: '40', floor: '1', type: 1, created_at: '00-00-0000', updated_at: '00=00-0000'},
          { code: '0000001', district: 1, invent_code: '12345678', address: 'вул. Дальницька', house_number: '39', house_building: '', apartment: '11', total_area: '34', main_area: '34', land_area: '40', floor: '1', type: 1, created_at: '00-00-0000', updated_at: '00=00-0000'},
          { code: '0000001', district: 1, invent_code: '12345678', address: 'вул. Дальницька', house_number: '39', house_building: '', apartment: '11', total_area: '34', main_area: '34', land_area: '40', floor: '1', type: 1, created_at: '00-00-0000', updated_at: '00=00-0000'},
          { code: '0000001', district: 1, invent_code: '12345678', address: 'вул. Дальницька', house_number: '39', house_building: '', apartment: '11', total_area: '34', main_area: '34', land_area: '40', floor: '1', type: 1, created_at: '00-00-0000', updated_at: '00=00-0000'},
          { code: '0000001', district: 1, invent_code: '12345678', address: 'вул. Дальницька', house_number: '39', house_building: '', apartment: '11', total_area: '34', main_area: '34', land_area: '40', floor: '1', type: 1, created_at: '00-00-0000', updated_at: '00=00-0000'},
          { code: '0000001', district: 1, invent_code: '12345678', address: 'вул. Дальницька', house_number: '39', house_building: '', apartment: '11', total_area: '34', main_area: '34', land_area: '40', floor: '1', type: 1, created_at: '00-00-0000', updated_at: '00=00-0000'},
          { code: '0000001', district: 1, invent_code: '12345678', address: 'вул. Дальницька', house_number: '39', house_building: '', apartment: '11', total_area: '34', main_area: '34', land_area: '40', floor: '1', type: 1, created_at: '00-00-0000', updated_at: '00=00-0000'},
          { code: '0000001', district: 1, invent_code: '12345678', address: 'вул. Дальницька', house_number: '39', house_building: '', apartment: '11', total_area: '34', main_area: '34', land_area: '40', floor: '1', type: 1, created_at: '00-00-0000', updated_at: '00=00-0000'},
          { code: '0000001', district: 1, invent_code: '12345678', address: 'вул. Дальницька', house_number: '39', house_building: '', apartment: '11', total_area: '34', main_area: '34', land_area: '40', floor: '1', type: 1, created_at: '00-00-0000', updated_at: '00=00-0000'},
          { code: '0000001', district: 1, invent_code: '12345678', address: 'вул. Дальницька', house_number: '39', house_building: '', apartment: '11', total_area: '34', main_area: '34', land_area: '40', floor: '1', type: 1, created_at: '00-00-0000', updated_at: '00=00-0000'},
          { code: '0000001', district: 1, invent_code: '12345678', address: 'вул. Дальницька', house_number: '39', house_building: '', apartment: '11', total_area: '34', main_area: '34', land_area: '40', floor: '1', type: 1, created_at: '00-00-0000', updated_at: '00=00-0000'},
          { code: '0000001', district: 1, invent_code: '12345678', address: 'вул. Дальницька', house_number: '39', house_building: '', apartment: '11', total_area: '34', main_area: '34', land_area: '40', floor: '1', type: 1, created_at: '00-00-0000', updated_at: '00=00-0000'},
      ],
      
    }
  },
  methods: {
  
  }
}
</script>

<style lang="scss">
.admin {

  &__table {
    .table thead th, .table th, .table td {
      white-space: nowrap;
    }
  }
}
</style>
