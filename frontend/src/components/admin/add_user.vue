<template>
  <b-row>
    <b-col>
      <b-container>
        <b-row class="mt-5">
          <b-col cols="12" md="6">
            <b-form @submit.prevent="onSubmit">
              <b-form-group
                  id="input-group-1"
                  label="Логін користувача"
                  label-for="input-1"
              >
                <b-form-input
                    id="input-1"
                    v-model="form.name"
                    type="text"
                    placeholder="Введіть логін"
                    required
                ></b-form-input>
              </b-form-group>

              <b-form-group id="input-group-2" label="Пароль користувача" label-for="input-2">
                <b-form-input
                    id="input-2"
                    v-model="form.password"
                    placeholder="Введіть пароль"
                    required
                ></b-form-input>
              </b-form-group>

              <b-form-group id="input-group-3" label="Оберіть тип доступу" label-for="input-3">
                <b-form-select
                    id="input-3"
                    v-model="form.role"
                    :options="roles"
                    required
                ></b-form-select>
              </b-form-group>

              <b-button type="submit" variant="danger">Додати користувача</b-button>
              <p class="red mt-3" v-if="error">Помикал реєстрації. Перевірте дані</p>
              <p class="red mt-3" v-if="success">Користувач успішно стровений</p>
            </b-form>
          </b-col>
        </b-row>
      </b-container>
    </b-col>
  </b-row>
</template>

<script>
import { mapActions } from 'vuex';
export default {
  name: 'AddUser',
  data() {
    return {
      form: {
        name: '',
        password: '',
        email: '',
        role: 0
      },
      error: false,
      success: false,
      roles: [
          {
            text: 'Оберіть права',
            value: 0
          },
          {
            text: 'Повний доступ',
            value: 1
          },
          {
            text: 'Робота з архівом',
            value: 2
          },
          {
            text: 'Робота з ???',
            value: 3
          },
      ],
    }
  },
  methods: {
    ...mapActions(['registration']),
    onSubmit() {
      const formData = new FormData();
      this.error = false;
      this.success = false;

      Object.entries(this.form).map(item => {
        formData.append(item[0], item[1]);
      })

      this.registration(formData).then(()=> {
        this.success = true;
      }).catch(() => {
        this.error = true;
      });

    }
  }
}
</script>

<style scoped>

</style>