<template>
  <b-row>
    <b-col>
      <b-container>
        <b-row class="mt-5">
          <b-col cols="12" md="6">
            <b-form @submit.prevent="onSubmit" @key.enter="onSubmit">
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

              <b-button type="submit" variant="danger">Увійти</b-button>
              <p class="red mt-3" v-if="error">Користувач не знайден</p>
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
  name: 'LoginUser',
  data() {
    return {
      form: {
        name: null,
        password: null
      },
      error: false
    }
  },
  methods: {
    ...mapActions(['loginUser', 'checkUser']),
    onSubmit() {
      const formData = new FormData();
      this.error = false;

      Object.entries(this.form).map(item => {
        formData.append(item[0], item[1]);
      })

      this.loginUser(formData).then(()=> {
        this.checkUser();
      }).catch(() => {
        this.error = true;
      });
    }
  }
}
</script>

<style scoped>

</style>