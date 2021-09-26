<template>
  <b-row>
    <b-col class="mb-5">
      <b-container>
        <b-row class="mt-5">
          <b-col cols="12" md="8">
            <b-form @submit.prevent="onSubmit">
              <b-form-group
                id="input-group-1"
                label="Заголовок"
                label-for="input-1"
              >
                <b-form-input
                  id="input-1"
                  v-model="form.name"
                  type="text"
                  placeholder="Введіть заголовок"
                  required
                ></b-form-input>
              </b-form-group>

              <b-form-group
                id="input-group-1"
                label="Фото"
                label-for="input-1"
              >
                <b-form-file
                  v-model="form.img"
                  :state="Boolean(form.img)"
                  placeholder="Оберіть картинку..."
                ></b-form-file>
              </b-form-group>

              <p class="mb-3">
                <ckeditor v-model="form.text"></ckeditor>
              </p>

              <b-button type="submit" variant="danger">Додати новину</b-button>
              <p class="red mt-3" v-if="error">Помилка. Перевірте дані</p>
              <p class="red mt-3" v-if="success">Новина успішно додана/оновлена</p>
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
    name: 'AddNews',
    props: {
      current_invent: {
        type: Number
      }
    },
    data() {
      return {
        form: {
          name: '',
          text: '',
          img: '',
        },
        error: false,
        success: false,
      }
    },
    methods: {
      ...mapActions(['addNewsContent', 'getCurrentNews']),
      onSubmit() {
        const formData = new FormData();
        this.error = false;
        this.success = false;

        Object.entries(this.form).map(item => {
          formData.append(item[0], item[1]);
        })

        this.addNewsContent(formData).then(()=> {
          this.success = true;
        }).catch(() => {
          this.error = true;
        });
      },
      fulledData(id) {
        this.getCurrentNews(id).then(response => {
          console.log(response);
          this.form = response;
        })
      },
    },
    mounted() {
      if(this.current_invent) {
        this.fulledData(this.current_invent);
      }
    }
  }
</script>