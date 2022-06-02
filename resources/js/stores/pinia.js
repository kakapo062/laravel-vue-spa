// defineStoreをインポート
import {defineStore} from 'pinia'

// defineStore`でストアを定義
// 第一引数はアプリケーション内でユニークなキー
export const useStoreCounter = defineStore('counter', {

    // state -> ストアの初期状態を定義
    state: () => ({
        count: 1,
        family_name: '山田',
    }),

    // getters -> 状態を取得するgetter（computedに相当）
    getters: {
        doubleCount: (state) => state.count * 2,
    },

    // actions -> 状態を変更するaction(methodsに相当)
    actions: {
        increment()
        {
            this.count++
        },
        decrement()
        {
            this.counter--
        },
    }
})