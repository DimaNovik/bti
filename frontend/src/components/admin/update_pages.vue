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

              <b-button type="submit" @click.prevent="onUpdate" variant="primary" class="ml-2 mt-3 mb-3" :disabled="!form.category || !form.content">Оновити</b-button>
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
  name: 'UpdatePages',
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
  watch: {
    'form.category'(val) {
      this.setCurrentContent(val);
    }
  },
  computed: {
    ...mapGetters(['allPages', 'allPagesContent']),
    getCategories() {
      return this.allPages ? this.allPages : [];
    }
  },
  methods: {
    ...mapActions(['fetchPagesCategories', 'updatePageContent']),
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
    },
    setCurrentContent(id) {
      const { name, content_page} = this.allPagesContent.find(item => item.id === id);
      this.form.page = name ?? '';
      this.form.content = content_page ?? '';
    }
  },
  mounted() {
    this.fetchPagesCategories();
  }
}
</script>

<style scoped>

</style>
