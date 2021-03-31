<template>
  <b-container fluid>
    <b-row class="menu">
      <b-col cols="auto" md="2"></b-col>
      <b-col cols="12" md="8">
        <nav class="menu__area">
          <ul class="menu__nav">
            <li v-for="(item, index) in menu" :key="index" class="menu__item">
              <a :href="item.link"
               class="menu__link" 
               :target="item.target">{{ item.title }}</a>
            </li>
          </ul>
        </nav>
      </b-col>
      <b-col cols="auto" md="2"></b-col>
    </b-row>
  </b-container>
</template>

<script>
export default {
  name: 'Menu',
  data() {
    return {
      menu: [
        {
          title: 'Про підприємство',
          link: 'https://omr.gov.ua/ua/city/enterprises/bti',
          target: '_blank'
        },
        {
          title: 'Напрямки роботи',
          link: '/'
        },
        {
          title: 'Сервіси',
          link: '/'
        },
        {
          title: 'Публічна інформація',
          link: '/'
        },
      ]
    }
  }
}
</script>

<style lang="scss">
.menu {
  background-color: #a10909;

  &__area {
    display: flex;
   
  }

  &__nav {
    width:100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
  }

  &__item {

    @media screen and (max-width: 968px) {
      width: 100%;
    }
  }

  &__link {
    display: block;
    color: #fff;
    padding: 25px;
    text-align: center;
    text-transform: uppercase;
    transition: background-color .3s ease, color .3s ease;

    @media screen and (max-width: 680px){
      padding: 15px;
    }

    &:hover {
      background-color: #a5978b;
      color: #fff;
      text-decoration: none;
    }
  }

}
</style>