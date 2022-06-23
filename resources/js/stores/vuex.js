import Vue from 'vue'
import Vuex from 'vuex'
 
Vue.use(Vuex)
 
export default new Vuex.Store({
  state: {
    resume:{},
    licenses:[],
  },
  mutations: {
    setResume(state, resume) {
      state.resume = {...state.resume, ...resume}
  },
    setLicense(state, licenses) {
      state.licenses = {...state.licenses, ...licenses}
  },
  },
  getters: {
        resume: state => state.resume,
        license: state => state.licenses,
  },
  actions: {
    setResume({commit}, resume) {
      commit("setResume", resume);
  }, 
    setLicense({commit}, licenses) {
      commit("setLicense", licenses);
  }, 
  }
})