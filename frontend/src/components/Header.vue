<template>
<header class="header">
  <b-row >
    <b-col xl="1"></b-col>
    <b-col xl="10" center>
      <div class="header__top">
        <router-link to="/" class="header__logo">
          <img src="/img/logo.png" alt="" class="header__img">
        </router-link>
        <div class="header__inform">
          <p class="header__inform_text"><b>Увага! Сайт знаходиться в розробці</b></p>
        </div>
      </div>
    </b-col>
    <b-col xl="1"></b-col>
  </b-row>
  </header>
</template>
<script>

export default {
  name: 'Header',
}

</script>

<style lang="scss">
  .header {
    position: relative;
    
    background-image: url('/img/bg_main.jpg');
    background-repeat: no-repeat;
    background-position: 50% 0;
    background-size: contain;
    background-color: #fff;
    padding: 62px 20px;
    
    &__top {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }
    @media screen and (max-width: 680px){
      padding: 20px 0;
      background-size: cover;
      background-position: 55% 100%;
    }

    &__logo {
      display: flex;
      width: 50%;

      @media screen and (max-width: 680px){
        width: 100%;

        img {
          width: 90%;
          height: auto;
          margin: 0 auto;
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
