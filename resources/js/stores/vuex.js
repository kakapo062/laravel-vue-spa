import Vue from 'vue'
import Vuex from 'vuex'
 
Vue.use(Vuex)
 
export default new Vuex.Store({
  state: {
    resume:{}
  },
  mutations: {
    setResume(state, userDetail) {
      state.resume = {...state.resume, ...userDetail}
  }, //スプレット構文を用いてオブジェクトを展開して結合させる。
  },
  getters: {
    resume: state => state.resume,
  },
  actions: {
    setResume({commit}, resume) {
      commit("setResume", resume);
  }, //スプレット構文を用いてオブジェクトを展開して結合させる。
  }
})