import Vue from 'vue'
import Vuex from 'vuex'
import VuexPersistence from 'vuex-persist'
import localForage from "localforage" // 追加

Vue.use(Vuex)

const vuexLocal = new VuexPersistence({
  storage: localForage,
  asyncStorage: true,
})

const store = new Vuex.Store({
  state: {
    resume:{},
    licenses:[],
    workHistorys:[],
  },
  mutations: {
    setResume(state, resume) {
      state.resume = {...state.resume, ...resume}
  },
    setLicense(state, licenses) {
      state.licenses = {...state.licenses, ...licenses}
  },
    setWorkHistorys(state, licenses) {
      state.workHistorys = {...state.workHistorys, ...licenses}
  },
  },
  getters: {
        resume: state => state.resume,
        license: state => state.licenses,
        workHistory: state => state.workHistorys,
  },
  actions: {
      setResume({commit}, resume) {
        commit("setResume", resume);
    }, 
      setLicense({commit}, licenses) {
        commit("setLicense", licenses);
    }, 
      setWorkHistory({commit}, workHistorys) {
        commit("setLicense", workHistorys);
    },
  },
  plugins: [vuexLocal.plugin],
});

export default store