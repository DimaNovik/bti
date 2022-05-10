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
          <b-col cols="12" md="5"></b-col>
          <b-col cols="12"  md="3" align="center">
            <b-button type="button" variant="danger" size="lg" @click="$emit('componentChange', 'AddNews'), $emit('chooseCurrent', null)">Додати</b-button>
          </b-col>
        </b-row>
        <template v-if="setAllNewsTable.length">
          <b-row>
            <b-col>
              <b-table striped
                       hover
                       responsive
                       small
                       :items="setAllNewsTable"
                       :fields="fields"
                       :current-page="currentPage"
                       :per-page="perPage"
                       :filter="search"
                       @filtered="onFiltered"
                       @row-clicked="(item) => openToEdit(item)"
                       class="admin__table">
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
  import { mapActions, mapGetters } from "vuex";

  export default {
    name: 'NewsTable',
    data() {
      return {
        search: null,
        currentPage: 1,
        perPage: 20,
        totalRows: null,
        fields: [
          {
            key: "name",
            label: "Заголовок",
            sortable: true
          },
          {
            key: "text",
            label: "Текст",
            sortable: true
          },
          {
            key: "img",
            label: "Картинка",
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
      ...mapGetters(['newsData']),
      setAllNewsTable() {
        return this.newsData.length ? this.newsData : [];
      },
    },
    methods: {
      ...mapActions(['fetchNewsData']),
      openToEdit(item) {
        this.$emit('chooseCurrent', item.id);
        this.$emit('componentChange', 'AddNews');
      },
      onFiltered(filteredItems) {
        this.totalRows = filteredItems.length
        this.currentPage = 1
      }
    },
    created() {
      this.totalRows = this.newsData.length
    },
    mounted() {
      this.fetchNewsData()
    }
  }
</script>