
import { defineStore } from "pinia"

export const useStore = defineStore("counter", {
  state: () => ({
    count: 0,
    suzuki: 'スズキ'
  }),
  getters: {
    tenfold() {
      return this.count * 10
    },
  },
  actions: {
    increment() {
      this.count++
    },
  },
})