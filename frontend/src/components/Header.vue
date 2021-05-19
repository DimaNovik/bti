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
      <div class="inform_area">
        <div class="info">
          <div>
            <p class="info__phone" align="center">15-35</p>
          </div>
          <div>
            <p class="info__text" align="right">ТЕЛЕФОН ДОВІРИ - ГАРЯЧА ЛІНІЯ</p>
            <p align="right"><a href="https://1535.odessa.ua/" target="_blank" rel="nooper" class="info__link">ЄДИНИЙ ЦЕНТР ЗВЕРНЕНЬ ГРОМАДЯН</a></p>
          </div>
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

  .inform_area {
    display: flex;
    justify-content: 'space-between';
    margin-top: 40px;
  }

  .info {
    display: flex;
    justify-content: 'space-between';
    align-items: 'center';
    padding: 20px 15px;
    border-radius: 5px;
    background-color: #FFF;

    &__phone {
      margin-top: 5px;
      margin-right: 20px;
      font-weight: 700;
      font-size: 36px;
      color: #EF0A29;
    }
    &__text {
      margin-bottom: 10px;
    }
    &__link {
      text-decoration: underline;
      color: blue
    }
  }
</style>
