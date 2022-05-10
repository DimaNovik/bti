<template>
  <div class="home">
    <b-container>
      <b-row class="mb-5 mt-5" align-v="center">
        <b-col cols="12" md="12" xl="12">
          <h2 class="text-uppercase">{{getContent['name']}}</h2>
        </b-col>
      </b-row>
      <b-row class="mb-5 mt-5" align-v="center">
        <b-col cols="12" md="12" xl="12">
          <div v-html="getContent['content_page']"></div>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>

import {mapGetters, mapActions} from "vuex";

export default {
  name: 'Inner',
  watch: {
    '$route'(to) {
      this.getCurrentRouteContent(to?.params?.id);
    }
  },
  computed: {
    ...mapGetters(['content']),
    getContent() {
      return this.content ? this.content : null
    },
  },
  methods: {
    ...mapActions(['getCurrentContent']),
    getCurrentRouteContent(id) {
      this.getCurrentContent(id)
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
</style>
