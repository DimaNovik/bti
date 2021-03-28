<template>
  <b-row>
    <b-col>
      <header class="header">
        <router-link to="/" class="header__logo">
          <img src="/img/logo.png" alt="" class="header__img">
        </router-link>
        <div class="header__inform">
          <p class="header__inform_text"><b>Увага! Сайт знаходиться в розробці</b></p>
        </div>
      </header>
    </b-col>
  </b-row>
</template>
<script>

export default {
  name: 'Header',
}

</script>

<style lang="scss">
  .header {
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    background-image: url('/img/bg_main.jpg');
    background-repeat: no-repeat;
    background-position: 50% 0;
    background-size: contain;
    background-color: #fcfcfc;
    padding: 62px 20px;

    @media screen and (max-width: 680px){
      padding: 20px 0;
      background-size: 130% auto;
      background-position: 50% 100%;
    }

    &__logo {
      display: flex;
      justify-content: center;
      width: 50%;

      @media screen and (max-width: 680px){
        width: 100%;

        img {
          height: auto;
        }
      }
    }

    &__inform {
      display: flex;
      justify-content: flex-end;
      width: 50%;

      @media screen and (max-width: 680px){
        width: 100%;
        justify-content: center;
      }

      &_text {
        color: #c82333;
        line-height: 24px;
      }
    }
  }
</style>
