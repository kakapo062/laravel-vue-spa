import Vue from 'vue'
import Vuex from 'vuex'
// import VuexPersistence from 'vuex-persist'
// import localForage from "localforage"

Vue.use(Vuex)

// const vuexLocal = new VuexPersistence({
//   storage: localForage,
//   asyncStorage: true,
// })

const store = new Vuex.Store({
  state: {
    resume:{},
    licenses:[],
    workHistories:[],
    schoolHistories:[],
  },
  mutations: {
    setResume(state, resume) {
      state.resume = {...state.resume, ...resume}
  },
    setLicense(state, licenses) {
      state.licenses = {...state.licenses, ...licenses}
  },
    setWorkHistories(state, workHistories) {
      state.workHistories = {...state.workHistories, ...workHistories}
  },
    setSchoolHistories(state, schoolHistories) {
      state.schoolHistories = {...state.schoolHistories, ...schoolHistories}
  },
  },
  getters: {
        resume: state => state.resume,
        licenses: state => state.licenses,
        workHistories: state => state.workHistories,
        schoolHistories: state => state.schoolHistories,
  },
  actions: {
      setResume({commit}, resume) {
        commit("setResume", resume);
    }, 
      setLicense({commit}, licenses) {
        commit("setLicense", licenses);
    }, 
      setWorkHistories({commit}, workHistories) {
        commit("setWorkHistories", workHistories);
    },
      setSchoolHistories({commit}, schoolHistories) {
        commit("setSchoolHistories", schoolHistories);
    },
  },
  // plugins: [vuexLocal.plugin],
});

export default store