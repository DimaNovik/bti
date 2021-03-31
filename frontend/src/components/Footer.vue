<template>
  <footer class="footer">
    <b-container fluid>
      <b-row>
        <b-col>
          <div class="footer__area">
            <p class="footer__text">КОМУНАЛЬНЕ ПІДПРИЄМСТВО «БЮРО ТЕХНІЧНОЇ ІНВЕНТАРИЗАЦІЇ» ОДЕСЬКОЇ МІСЬКОЇ РАДИ</p>
            <p class="footer__text">Усі права захищенні &copy; 2021</p>
          </div>
        </b-col>
      </b-row>
    </b-container>
  </footer>
</template>

<script>
export default {
  name: 'Footer'
}
</script>

<style lang="scss">
.footer {
  background-color: #f2f2f2;

  &__area {
    padding: 25px 0;
  }

  &__text {
    font-size: 14px;
    line-height: 16px;
    color: #9e9e9e;
  }
}
</style>