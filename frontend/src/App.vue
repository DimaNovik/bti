<template>
  <div id="app">
    <Inform/>
    <app-header />
    <app-menu v-if="$route.name != 'Admin'"/>
    <transition  name="fade" mode="out-in">
      <router-view/>
    </transition>
    <app-footer />
  </div>
</template>

<script>
  import Inform from '@/components/Inform';
  import Header from '@/components/Header';
  import Menu from '@/components/Menu';
  import Footer from '@/components/Footer';

  export default {
    components: {
      Inform,
      'app-header': Header,
      'app-menu': Menu,
      'app-footer': Footer,
    }

  }
</script>

<style lang="scss">
.fade-enter-active, .fade-leave-active {
  transition: opacity 15s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active до версии 2.1.8 */ {
  opacity: 0;
}
</style>
