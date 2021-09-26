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
          <div v-html="getContent['text']"></div>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>
  import { mapGetters } from "vuex";

  export default {
    name: "InnerNews",
    computed: {
      ...mapGetters(['currentNews']),
      getContent() {
        return this.currentNews ? this.currentNews : null
      },
    },
  }
</script>