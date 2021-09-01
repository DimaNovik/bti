<template>
  <b-row class="admin">
    <b-col cols="12" md="2">
      <admin_menu @componentChange="changeComponent"
                  @logoutUser="logoutUser"
                  :isAuth="user"/>
    </b-col>
    <b-col cols="12" md="10">
      <template v-if="user">
        <component :is="currentComponent"
                   :current_invent="currentInvent"
                   @chooseCurrent="value => this.currentInvent = value"
                   @componentChange="changeComponent"></component>
      </template>
      <template v-else>
        <LoginUser />
      </template>
    </b-col>
  </b-row>
</template>

<script>

import admin_menu from "@/components/admin/admin_menu";
import AddUser from "@/components/admin/add_user";
import AddPages from "@/components/admin/add_pages";
import UpdatePages from "@/components/admin/update_pages";
import LoginUser from "@/components/admin/login_user";
import InventTable from "@/components/admin/invent_table";
import InventForm from "@/components/admin/invent_form";
import ProposalsTable from "@/components/admin/proposals_table";
import ProposalsForm from "@/components/admin/proposals_form";
import StartTemplate from "@/components/admin/start_template";

import { mapGetters, mapActions } from 'vuex';
export default {
  name: 'Admin',
  data() {
    return {
      currentComponent: StartTemplate,
      currentInvent: null,
    }
  },
  components: {
    admin_menu,
    AddUser,
    AddPages,
    LoginUser,
    InventForm,
    InventTable,
    ProposalsTable,
    ProposalsForm,
    StartTemplate,
    UpdatePages
  },
  computed: {
    ...mapGetters(['user']),
  },
  methods: {
    ...mapActions(['logout']),
    changeComponent(component) {
      this.currentComponent = component;
    },
    logoutUser() {
      this.logout();
    }
  }

}
</script>

<style lang="scss">
.admin {
  flex: 1;

  &__table {
    .table thead th, .table th, .table td {
      white-space: nowrap;
    }
    .table tr {
      cursor: pointer;
    }
  }
}

.yellow {
  color:  #ffc107;
}

.red {
  color: #c82333;
}

.green {
  color: #1c7430;
}
</style>
