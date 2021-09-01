<template>
  <b-row>
    <b-col>
      <b-container>
        <b-row class="mt-5">
          <b-col cols="12" md="8">
            <b-form>
              <b-form-group id="input-group-1" label="Оберіть категорію" label-for="input-1">
                <b-form-select
                    id="input-1"
                    v-model="form.category"
                    :options="getCategories"
                    required
                ></b-form-select>
              </b-form-group>
              <b-form-group
                  id="input-group-2"
                  label="Назва сторінки"
                  label-for="input-2"
              >
                <b-form-input
                    id="input-2"
                    v-model="form.page"
                    type="text"
                    placeholder="Введіть назву сторінки"
                ></b-form-input>
              </b-form-group>

              <p class="mb-3">
                <ckeditor v-model="form.content"></ckeditor>
              </p>

              <b-button type="submit" @click.prevent="onSubmit" variant="danger" class="mt-3 mb-3" :disabled="!form.category || !form.content">Додати</b-button>
              <p class="red mt-3 mb-3" v-if="error">Помикал реєстрації. Перевірте дані</p>
              <p class="red mt-3 mb-3" v-if="success">Дані успішно відправлені</p>
            </b-form>
          </b-col>
        </b-row>
      </b-container>
    </b-col>
  </b-row>
</template>

<script>
import { mapActions, mapGetters } from 'vuex';
export default {
  name: 'AddPages',
  data() {
    return {
      form: {
        category: null,
        page: null,
        content: '',
      },
      error: false,
      success: false,
    }
  },
  computed: {
    ...mapGetters(['pagesCategories']),
    getCategories() {
      return this.pagesCategories ? this.pagesCategories : [];
    }
  },
  methods: {
    ...mapActions(['fetchPagesCategories', 'addPageContent', 'updatePageContent']),
    onSubmit() {
      const formData = new FormData();
      this.error = false;
      this.success = false;

      formData.append('parent', this.form.category);
      formData.append('name', this.form.page);
      formData.append('content_page', this.form.content);

      this.addPageContent(formData).then(()=> {
        this.success = true;
      }).catch(() => {
        this.error = true;
      });
    },
    onUpdate() {
      const formData = new FormData();
      this.error = false;
      this.success = false;

      formData.append('id', this.form.category);
      formData.append('name', this.form.page);
      formData.append('content_page', this.form.content);

      this.updatePageContent({data: {
          name: this.form.page,
          content_page: this.form.content
        },
        id: this.form.category})
      .then(() => {
        this.success = true;
      })
      .catch(() => {
         this.error = true;
      });
    }
  },
  mounted() {
    this.fetchPagesCategories();
  }
}
</script>

<style scoped>

</style>
