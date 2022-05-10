<template>
  <b-container class="inform" fluid>
    <b-row>
      <b-col>
        <div>
          <p class="inform__text">«Гаряча лінія» по коронавірусу: <strong>безкоштовно</strong> <strong>15-50</strong> (стаціонарні) або <strong>0-800-50-15-50</strong> (мобільні)</p>
        </div>
      </b-col>
    </b-row>
  </b-container>

</template>

<script>
export default {
  name: "Inform"
}
</script>

<style lang="scss">
.inform {
  padding-top: 10px;
  padding-bottom: 10px;
  background-color: red;

  &__text {
    color: #fff;
    font-size: 16px;
    line-height: 20px;
    text-align: center;
  }
}
</style>