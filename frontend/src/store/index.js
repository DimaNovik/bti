import Vue from 'vue';
import Vuex from 'vuex';
import rest from '@/services/rest';
import Cookies from "js-cookie";

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    allData: [],
    allProposalsData: [],
    lastInventId: 0,
    lastProposalsId: 0,
    user: null
  },
  mutations: {
    setAllData: (state, data) => {
      state.allData = data;
    },

    setAllProposalsData: (state, data) => {
      state.allProposalsData = data;
    },

    setLastInvent: (state, id) => {
      state.lastInventId = id ? id+1 : 1;
    },

    setLastProposals: (state, id) => {
      state.lastProposalsId = id ? id+1 : 1;
    },

    setUser: (state, data) => {
      state.user = data;
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
    async findInventories(_, code) {
      let {data} = await rest({
        method: 'get',
        url:`inventories/find/${code}`
      });
      return data;
    },
    async findLast({commit}) {
      let {data} = await rest({
        method: 'post',
        url:`inventories/last`,
      });

      commit('setLastInvent', data.id)
      return data;
    },

    //user actions
    async registration(_, params) {
      let {data} = await rest({
        method: 'post',
        url:`auth/registration`,
        data: params
      });

      return data;
    },
    async loginUser(_, formData) {

      let {data} = await rest({
        method: 'post',
        url:`auth/login`,
        data: formData,
      });

      Cookies.set('access_token', data.access_token);

      return data;
    },
    async checkUser({commit}) {

      let {data} = await rest({
        method: 'post',
        url:`auth/me`,
      });

      commit('setUser', data)

      return data;
    },

    async logout({commit}) {

      let {data} = await rest({
        method: 'post',
        url:`auth/logout`,
      });

      commit('setUser', null);
      Cookies.remove('access_token');

      return data;
    },
    // Proposals 
    async getAllProposalsData({commit}) {
      let {data} = await rest({
        method: 'get',
        url:'proposals'
      });

      commit('setAllProposalsData', data);
    },
    async getCurrentProposal(_, id) {
      let {data} = await rest({
        method: 'get',
        url:`proposals/${id}`
      });
      return data;
    },
    async createProposal(_, params) {
      let {data} = await rest({
        method: 'post',
        url:`proposals`,
        data: params
      });

      return data;
    },
    async saveProposal(_, params) {
      let {data} = await rest({
        method: 'patch',
        url:`proposals/${params.id}`,
        data: params.data
      });

      return data;
    },
    async findLastProposal({commit}) {
      let {data} = await rest({
        method: 'post',
        url:`proposals/last`,
      });

      commit('setLastProposals', data.id)
      return data;
    },
    async generateProposalPDF(_, params) {
      let {data} = await rest({
        method: 'get',
        url:`proposals/findForPDF/${params}`,
      });
      return data;
    },
  },
  modules: {
  },
  getters: {
    inventoriesData: (state) =>  state.allData,
    proposalsData: (state) =>  state.allProposalsData,
    lastInventId: (state) =>  state.lastInventId.toString(),
    lastProposalsId: (state) =>  state.lastProposalsId.toString(),
    user: (state) =>  state.user,
  }
})
