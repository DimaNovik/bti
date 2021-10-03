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
    currentProposalsData: [],
    user: null,
    menu: [],
    pages: [],
    pagesContent: [],
    pagesCategories: [],
    content: null,
    news: [],
    currentNews: null
  },
  mutations: {
    setAllData: (state, data) => {
      state.allData = data;
    },

    setAllProposalsData: (state, data) => {
      state.allProposalsData = data;
    },

    setCurrentProposalsData: (state, data) => {
      state.currentProposalsData = data;
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

    setPagesCategories: (state, data) => {
      let categories = data.map(item => {
        if(item.parent === 0) {
          return {text: item.name, value: item.id}
        }
      }).filter(item => item);

      let allPages = data.map(item => ({text: item.name, value: item.id}));


      let parents = data.filter(item => item.parent === 0);
      let childs = data.filter(item => item.parent !== 0);


      childs.forEach((child) => {
        parents.forEach((parent) => {
          if(child.parent === parent.id) {
            if(parent?.childs) {

              parent.childs.push(child);
            } else {
              parent.childs = [];
              parent.childs.push(child);
            }
          }
        })
      })

      state.menu = parents;
      state.pages = allPages;
      state.pagesContent = data;
      state.pagesCategories = categories;
    },

    setCurrentContent: (state, data) => {
      state.content = data;
    },

    setAllNewsData: (state, data) => {
      state.news = data;
    },

    setCurrentNewsData: (state, data) => {
      state.currentNews = data;
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
    async getCurrentProposal({commit}, id) {
      let {data} = await rest({
        method: 'get',
        url:`proposals/${id}`
      });

      commit('setCurrentProposalsData', data);

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
    async fetchPagesCategories({commit}) {
      let {data} = await rest({
        method: 'post',
        url:`page/categories`,
      });

      commit('setPagesCategories', data)
      return data;
    },
    async addPageContent(_, params) {
      let {data} = await rest({
        method: 'post',
        url:`page`,
        data: params
      });

      return data;
    },
    async updatePageContent(_, params) {
      let {data} = await rest({
        method: 'patch',
        url:`page/${params.id}`,
        data: params.data
      });

      return data;
    },
    async getCurrentContent({commit}, id) {
      let {data} = await rest({
        method: 'get',
        url:`page/${id}`
      });
      commit('setCurrentContent', data);

      return data;
    },
    async fetchNewsData({commit}) {
      let {data} = await rest({
        method: 'get',
        url:'news'
      });

      commit('setAllNewsData', data);
    },
    async addNewsContent(_, params) {
      let {data} = await rest({
        method: 'post',
        url:`news`,
        data: params
      });

      return data;
    },
    async getCurrentNews({commit}, id) {
      let {data} = await rest({
        method: 'get',
        url:`news/${id}`
      });

      commit('setCurrentNewsData', data);

      return data;
    },
    async updateNewsContent(_, params) {
      let {data} = await rest({
        method: 'patch',
        url:`news/${params.id}`,
        data: params.data
      });

      return data;
    },
    async deleteNewsContent(_, id) {
      let {data} = await rest({
        method: 'delete',
        url:`news/${id}`,
      });

      return data;
    },
  },
  modules: {
  },
  getters: {
    inventoriesData: (state) =>  state.allData,
    proposalsData: (state) =>  state.allProposalsData,
    currentProposalsData: (state) =>  state.currentProposalsData,
    lastInventId: (state) =>  state.lastInventId.toString(),
    lastProposalsId: (state) =>  state.lastProposalsId.toString(),
    user: (state) =>  state.user,
    menu: (state) => state.menu,
    pages: (state) => state.user,
    pagesCategories: (state) =>  state.pagesCategories,
    content: (state) => state.content,
    allPages: (state) => state.pages,
    allPagesContent: (state) => state.pagesContent,
    newsData: (state) => state.news,
    currentNews: (state) => state.currentNews
  }
})
