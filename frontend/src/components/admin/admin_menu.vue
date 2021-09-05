<template>
  <nav class="admin-nav">
    <ul class="admin-nav__list">
      <template v-if="isAuth">
      <li v-for="(item, index) in menu"
          :key="index" class="admin-nav__item">
        <a href="" class="admin-nav__link" v-if="item.role.includes(isAuth.role)" @click.prevent="$emit('componentChange', item.component)">{{item.title}}</a>
      </li>
      <li class="admin-nav__item" v-if="isAuth">
        <a href="#" class="admin-nav__link" @click.prevent="$emit('logoutUser')">Вийти</a>
      </li>
      </template>
    </ul>
  </nav>
</template>

<script>
export default {
  name: 'AdminMenu',
  data() {
    return {
      menu: [
        {
          title: 'Інвентаризаційні справи',
          component: 'InventTable',
          role: [1,2],
        },
        {
          title: 'Замовлення',
          component: 'ProposalsTable',
          role: [1, 3]
        },
        {
          title: 'Додати користувача',
          component: 'AddUser',
          role: [1]
        },
        {
          title: 'Додати сторінку',
          component: 'AddPages',
          role: [1]
        },
        {
          title: 'Оновити сторінку',
          component: 'UpdatePages',
          role: [1]
        },
        {
          title: 'Новини',
          component: 'AddNews',
          role: [1]
        }
      ]
    }
  },
  props: {
    isAuth: {
      type: Object,
      default() {
        return {
          role: 0
        }
      }
    }
  }
}
</script>

<style lang="scss">
.admin-nav {
  height: 100%;
  background-color: #a10909;

  &__list {
    display: flex;
    justify-content: center;
    flex-direction: column;
  }

  &__item {
    text-align: center;
  }

  &__link {
    display: block;
    padding: 25px 0;
    color: #fff;
    text-transform: uppercase;

    &:hover {
      background-color: #a5978b;
      color: #fff;
      text-decoration: none;
    }
  }
}
</style>
