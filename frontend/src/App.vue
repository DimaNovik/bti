<template>
  <div id="app">
    <Inform/>
    <app-header />
    <app-menu v-if="$route.name === 'Home'"/>
    <router-view/>
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

</style>
