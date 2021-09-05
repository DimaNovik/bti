<template>
  <div class="home">
    <b-container>
      <b-row class="mb-5 mt-5">
        <b-col cols="6">
          <div class="news__left">
            <h1>Новини</h1>
            <div>
              <img src="" alt="">
              <p>Короткий текст</p>
              <p>05.09.2021</p>
            </div>
          </div>
        </b-col>
        <b-col cols="4">
          <ul class="news__right">
            <li>
              <img src="" alt="">
              <p>Текст</p>
              <p>04.01.2021</p>
            </li>
            <li>
              <img src="" alt="">
              <p>Текст</p>
              <p>04.01.2021</p>
            </li>
            <li>
              <img src="" alt="">
              <p>Текст</p>
              <p>04.01.2021</p>
            </li>
          </ul>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>


export default {
  name: 'Home',

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
