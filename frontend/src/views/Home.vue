<template>
  <div class="home">
    <b-container>
      <b-row class="mb-5 mt-5">
        <b-col cols="10">
          <h1 class="mb-4">Новини</h1>
          <template v-if="getNews.length">
            <b-row>
              <b-col cols="4" v-for="(item, key) in getNews" :key="key" class="news mb-4">
                <a href="#" @click.prevent="navigateToNews(item.id)"><h3 class="news__title">{{item.name}}</h3></a>
                <p v-html="item.text" class="news__text"></p>
                <p align="right" class="news__date">Дата: 20.02.2021</p>
              </b-col>
            </b-row>
          </template>
          <template v-else>
            <b-row class="mt-5">
              <b-col>
                <p class="red">Новини відсутні</p>
              </b-col>
            </b-row>
          </template>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>
import { mapGetters } from 'vuex';

export default {
  name: 'Home',
  computed: {
    ...mapGetters(['newsData']),
    getNews() {
      return this.newsData.length ? this.newsData : []
    }
  },
  methods: {
    navigateToNews(id) {
      this.$router.push(`/news/${id}`)
    }
  }

}
</script>

<style lang="scss">
.home {
  flex: 1;

  &__info_text {
    font-size: 18px;
    line-height: 24px;
  }

  &__info_error {
    color: #c82333;
    font-size: 18px;
    line-height: 24px;
    text-align: center;
  }
}

.fade-enter-active, .fade-leave-active {
  transition: opacity .5s;
}

.fade-enter, .fade-leave-to /* .fade-leave-active до версии 2.1.8 */
{
  opacity: 0;
}
  .news {

    &__title {
      margin-bottom: 20px;
    }

    &__text {
      max-height: 80px;
      margin-bottom: 10px;
      overflow: hidden;
    }
    &__date {
      color: rgb(#000, .5);
    }
  }
</style>
