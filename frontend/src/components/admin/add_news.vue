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
                label="Головне зображення"
                label-for="input-1"
              >
                <b-form-file
                  v-model="form.img"
                  :state="Boolean(form.img)"
                  placeholder="Оберіть зображення..."
                ></b-form-file>
              </b-form-group>

              <p class="mb-3">
                <ckeditor v-model="form.text"></ckeditor>
              </p>


              <b-row>
                <b-col cols="3">
                  <b-button type="submit" variant="danger">{{current_invent ? 'Оновити новину' : 'Додати новину'}}</b-button>
                </b-col>
                <b-col cols="3">
                  <b-button type="button" @click="deleteNews" variant="danger" v-if="current_invent">Видалити</b-button>
                </b-col>
              </b-row>


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
          img: [],
        },
        error: false,
        success: false,
      }
    },
    methods: {
      ...mapActions(['addNewsContent', 'getCurrentNews', 'updateNewsContent', 'deleteNewsContent']),
      onSubmit() {
        if(this.current_invent) {
          this.onUpdate();
          return;
        }
        const formData = new FormData();
        this.error = false;
        this.success = false;

        Object.entries(this.form).map(item => {
          formData.append(item[0], item[1]);
        })

        this.addNewsContent(formData).then(()=> {
          this.success = true;
          this.$emit('componentChange', 'NewsTable');
        }).catch(() => {
          this.error = true;
        });
      },
      fulledData(id) {
        this.getCurrentNews(id).then(response => {
          this.form.name = response.name;
          this.form.text = response.text;
          this.form.img = response.img;
        })
      },
      onUpdate() {
        this.error = false;
        this.success = false;
        this.updateNewsContent({data: {
          name: this.form.name,
            text: this.form.text,
            img: this.img
          },id:this.current_invent })
          .then(() => {
            this.success = true;
            this.$emit('componentChange', 'NewsTable');
          })
          .catch(() => {
            this.error = true;
          });
      },
      deleteNews() {
        this.deleteNewsContent(this.current_invent).then(() => {
          this.$emit('componentChange', 'NewsTable');
        });
      }
    },
    mounted() {
      if(this.current_invent) {
        this.fulledData(this.current_invent);
      }
    }
  }
</script>