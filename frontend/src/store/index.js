import Vue from 'vue';
import Vuex from 'vuex';
import rest from '@/services/rest';

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    allData: [],
  },
  mutations: {
    setAllData: (state, data) => {
      state.allData = data;
    },
  },
  actions: {
    async getAllData({commit}) {
      let {data} = await rest({
        method: 'get',
        url:'inventories'
      });

      commit('setAllData', data);
    },
    async getCurrentInventories(_, id) {
      let {data} = await rest({
        method: 'get',
        url:`inventories/${id}`
      });
      return data;
    },
    async createInventories(_, params) {
      let {data} = await rest({
        method: 'post',
        url:`inventories`,
        data: params
      });

      return data;
    },
    async saveInventories(_, params) {
      let {data} = await rest({
        method: 'patch',
        url:`inventories/${params.id}`,
        data: params.data
      });

      return data;
    },
  },
  modules: {
  },
  getters: {
    inventoriesData: (state) =>  state.allData,
  }
})
