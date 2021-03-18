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
                  placeholder="0000001"
                  size="lg"
                  required
                ></b-form-input>
              </b-form-group>
            </b-col>
            <b-col md="6">
              <b-form-group
              id="input-group-2"
              label="Інвентарний номер"
              label-for="input-2"
              label-align="left"
            >
              <b-form-input
                id="input-2"
                v-model="form.invent_code"
                type="number"
                placeholder="Введіть інвентарний номер"
                size="lg"
                required
              ></b-form-input>
            </b-form-group>
            </b-col>
          </b-row>
            <b-form-group id="input-group-3" label="Район" label-for="input-3" label-align="left">
              <b-form-select
                id="input-3"
                v-model="form.district"
                :options="districts"
                size="lg"
                required
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
                    type="number"
                    placeholder="Введіть № будинку"
                    size="lg"
                    required
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
                    type="number"
                    placeholder="Введіть № квартири"
                    size="lg"
                    required
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
                    type="number"
                    placeholder="Введіть № корпусу"
                    size="lg"
                    required
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
                    required></b-form-input>
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
                    required></b-form-input>
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
                    required></b-form-input>
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
                    required></b-form-input>
                </b-form-group>
              </b-col>
            </b-row>
            <b-row class="mt-5 mb-5">
              <b-col>
                <b-button type="submit" variant="primary" size="lg" class="mr-3">До чернетки</b-button>
                <b-button type="reset" variant="primary" size="lg" class="mr-3">Зберегти</b-button>
                <b-button type="reset" variant="danger" size="lg">Відмовити</b-button>
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

export default {
  name: 'Form',
  data() {
    return {
      form: {
        code: '0000001',
        invent_code: null,
        district: null,
        address: null,
        house_number: null,
        apartment: null,
        house_building: null,
        total_area: 0.00,
        main_area: 0.00,
        land_area: 0.00,
        floor: 1,
      },
      districts: [{ text: 'Оберіть район', value: null }, 'Приморський', 'Київський', 'Малиновський', 'Суворовський'],
    }
  },
  methods: {
  
  }
}
</script>
