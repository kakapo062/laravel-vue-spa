<template>
<div class="wrap">
    <div class="resume_wrap">
        <div class="step_nav_wrap">
            <ul class="step_nav_list">
                <li>
                    <router-link v-bind:to="{name: 'resume'}">
                        <span>1</span>
                    </router-link>
                </li>
                <li>
                    <router-link v-bind:to="{name: 'resume2'}">
                        <span>2</span>
                    </router-link>
                </li>
                <li>
                    <router-link v-bind:to="{name: 'resume3'}">
                        <span>3</span>
                    </router-link>
                </li>
                <li>
                    <router-link v-bind:to="{name: 'resume4'}">
                        <span>4</span>
                    </router-link>
                </li>
                <li>
                    <router-link v-bind:to="{name: 'resume5'}">
                        <span>5</span>
                    </router-link>
                </li>
                <li class="active">
                    <router-link v-bind:to="{name: 'resume6'}">
                        <span>6</span>
                    </router-link>
                </li>
                <li>
                    <router-link v-bind:to="{name: 'resume7'}">
                        <span>7</span>
                    </router-link>
                </li>
                <li>
                    <router-link v-bind:to="{name: 'resume8'}">
                        <span>8</span>
                    </router-link>
                </li>
                <li>
                    <router-link v-bind:to="{name: 'resume9'}">
                        <span>9</span>
                    </router-link>
                </li>
                <li>
                    <router-link v-bind:to="{name: 'resume10'}">
                        <span>10</span>
                    </router-link>
                </li>
            </ul>
        </div>
        <h3 class="resume_step_title">職歴</h3>
        <div class="resume_step_note_wrap">
            <p class="resume_step_note">※不明な点がありましたら未記入のまま次の項目へお進みください。</p>
        </div>
        <div class="resume_form_wrap">
            <div class="form_inner">
                <div class="normal_text_wrap">
                    <p class="normal_text">「▲上へ」「▼下へ」ボタンをクリックして並び替え、古いものが上にくるようにしてください。</p>
                </div>
                <ul>
                    <transition-group>
                    <li
                    class="card_wrap history_item_wrap"
                    v-for="(workHistory, index) in workHistorys"
                    v-bind:key="workHistory.id"
                    @click="click(index)"
                    :class="{isActive: activeIndex == index}"
                    >
                        <div class="card_list_item">
                            <div class="card_content_wrap">
                                <div class="item_wrap">
                                    <p class="item_name">会社名</p>
                                    <div class="item_body">
                                        <div class="input_wrap">
                                            <el-input
                                            v-model="workHistory.comp_name"
                                            @input="setWorkHistorys()"
                                            autocomplete="off"
                                            placeholder="例）〇〇〇株式会社"
                                            title="会社名"
                                            class="input_inner">
                                            </el-input>
                                        </div>
                                    </div>
                                </div>
                                <div class="item_wrap">
                                    <div class="item_name">
                                        <p class="lh_1">在籍期間<span class="small_text history_small">※現在もお勤めの場合は在籍開始年月のみご入力ください</span></p>
                                    </div>
                                    <div class="item_body flex mb_8">
                                        <div class="input_wrap">
                                            <el-select v-model="workHistory.start_year" @change="setWorkHistorys()" placeholder="1996" class="input_year">
                                                <el-option
                                                v-for="item in workHistory.start_years"
                                                :key="item.value"
                                                :label="item.label"
                                                :value="item.value">
                                                </el-option>
                                            </el-select>
                                        </div>
                                        <span>年</span>
                                        <div class="input_wrap">
                                            <el-select v-model="workHistory.start_month" @change="setWorkHistorys()" placeholder="1" class="input_month">
                                                <el-option
                                                v-for="item in workHistory.start_months"
                                                :key="item.value"
                                                :label="item.label"
                                                :value="item.value">
                                                </el-option>
                                            </el-select>
                                        </div>
                                        <span>月から</span>
                                    </div>
                                    <div class="item_body flex mb_16">
                                        <div class="input_wrap">
                                            <el-select v-model="workHistory.end_year" @change="setWorkHistorys()" placeholder="1996" class="input_year">
                                                <el-option
                                                v-for="item in workHistory.end_years"
                                                :key="item.value"
                                                :label="item.label"
                                                :value="item.value">
                                                </el-option>
                                            </el-select>
                                        </div>
                                        <span>年</span>
                                        <div class="input_wrap">
                                            <el-select v-model="workHistory.end_month"
                                            @change="setWorkHistorys()"
                                            placeholder="1"
                                            class="input_month">
                                                <el-option
                                                v-for="item in workHistory.end_months"
                                                :key="item.value"
                                                :label="item.label"
                                                :value="item.value">
                                                </el-option>
                                            </el-select>
                                        </div>
                                        <span>月まで</span>
                                    </div>
                                </div>
                                <div class="card_btn_wrap flex" v-if="activeIndex == index">
                                    <div @click.stop="register(index)" class="card_register_btn">登録</div>
                                    <div @click.stop="del(index)" class="card_delete_btn">削除</div>
                                </div>
                            </div>
                            <div class="card_change_btn_wrap" v-if="activeIndex !== index">
                                <div @click.stop="up(index)" class="card_up_btn">
                                    <img src="/images/card_up.svg" alt="" class="up_img">
                                </div>
                                <div @click.stop="down(index)" class="card_down_btn">
                                    <img src="/images/card_down.svg" alt="" class="down_img">
                                </div>
                            </div>
                        </div>
                    </li>
                    </transition-group>
                </ul>
                <div @click="addWorkHistory()" class="navy_btn_wrap">
                    <div class="navy_btn">職歴を追加</div>
                </div>
            </div>
        </div>
        <div class="pager_wrap">
            <div class="pager_inner">
                <router-link v-bind:to="{name: 'resume7'}" class="next_step_btn"><span>次へ</span></router-link>
                <router-link v-bind:to="{name: 'resume5'}" class="back_step_btn"><span>戻る</span></router-link>
            </div>
        </div>
    </div>
    <router-link v-bind:to="{name: 'Preview'}" class="fixed_preview_btn">
        <span>プレビュー</span>
    </router-link>
    <div class="preview_btn_wrap">
        <router-link v-bind:to="{name: 'Preview'}" class="preview_btn">
            <span>プレビュー</span>
        </router-link>
    </div>
</div>
</template>

<script>
    export default {
    data() {
        return {
            activeIndex: undefined,
            workHistorys: [],
        }
    },
    methods: {
       addWorkHistory(){
            let workHistory = {
                isActive: false,
                id: '',
                comp_name: '',
                start_year: '',
                start_month: '',
                end_year: '',
                end_month: '',
                start_years: [
                    {
                    value: '2022',
                    label: '2022'
                    },
                    {
                    value: '2021',
                    label: '2021'
                    },
                    {
                    value: '2020',
                    label: '2020'
                    },
                    {
                    value: '2019',
                    label: '2019'
                    },
                    {
                    value: '2018',
                    label: '2018'
                    },
                    {
                    value: '2017',
                    label: '2017'
                    },
                    {
                    value: '2016',
                    label: '2016'
                    },
                    {
                    value: '2015',
                    label: '2015'
                    },
                    {
                    value: '2014',
                    label: '2014'
                    },
                    {
                    value: '2013',
                    label: '2013'
                    },
                    {
                    value: '2012',
                    label: '2012'
                    },
                    {
                    value: '2011',
                    label: '2011'
                    },
                    {
                    value: '2010',
                    label: '2010'
                    },
                    {
                    value: '2009',
                    label: '2009'
                    },
                    {
                    value: '2008',
                    label: '2008'
                    },
                    {
                    value: '2007',
                    label: '2007'
                    },
                    {
                    value: '2006',
                    label: '2006'
                    },
                    {
                    value: '2005',
                    label: '2005'
                    },
                    {
                    value: '2004',
                    label: '2004'
                    },
                    {
                    value: '2003',
                    label: '2003'
                    },
                    {
                    value: '2002',
                    label: '2002'
                    },
                    {
                    value: '2001',
                    label: '2001'
                    },
                    {
                    value: '2000',
                    label: '2000'
                    },
                    {
                    value: '1999',
                    label: '1999'
                    },
                    {
                    value: '1998',
                    label: '1998'
                    },
                    {
                    value: '1997',
                    label: '1997'
                    },
                    {
                    value: '1996',
                    label: '1996'
                    },
                    {
                    value: '1995',
                    label: '1995'
                    },
                    {
                    value: '1994',
                    label: '1994'
                    },
                    {
                    value: '1993',
                    label: '1993'
                    },
                    {
                    value: '1992',
                    label: '1992'
                    },
                    {
                    value: '1991',
                    label: '1991'
                    },
                    {
                    value: '1990',
                    label: '1990'
                    },
                    {
                    value: '1989',
                    label: '1989'
                    },
                    {
                    value: '1988',
                    label: '1988'
                    },
                    {
                    value: '1987',
                    label: '1987'
                    },
                    {
                    value: '1986',
                    label: '1986'
                    },
                    {
                    value: '1985',
                    label: '1985'
                    },
                    {
                    value: '1984',
                    label: '1984'
                    },
                    {
                    value: '1983',
                    label: '1983'
                    },
                    {
                    value: '1982',
                    label: '1982'
                    },
                    {
                    value: '1981',
                    label: '1981'
                    },
                    {
                    value: '1980',
                    label: '1980'
                    },
                    {
                    value: '1979',
                    label: '1979'
                    },
                    {
                    value: '1978',
                    label: '1978'
                    },
                    {
                    value: '1977',
                    label: '1977'
                    },
                    {
                    value: '1976',
                    label: '1976'
                    },
                    {
                    value: '1975',
                    label: '1975'
                    },
                    {
                    value: '1974',
                    label: '1974'
                    },
                    {
                    value: '1973',
                    label: '1973'
                    },
                    {
                    value: '1972',
                    label: '1972'
                    },
                    {
                    value: '1971',
                    label: '1971'
                    },
                    {
                    value: '1970',
                    label: '1970'
                    },
                    {
                    value: '1969',
                    label: '1969'
                    },
                    {
                    value: '1968',
                    label: '1968'
                    },
                    {
                    value: '1967',
                    label: '1967'
                    },
                    {
                    value: '1966',
                    label: '1966'
                    },
                    {
                    value: '1965',
                    label: '1965'
                    },
                    {
                    value: '1964',
                    label: '1964'
                    },
                    {
                    value: '1963',
                    label: '1963'
                    },
                    {
                    value: '1962',
                    label: '1962'
                    },
                    {
                    value: '1961',
                    label: '1961'
                    },
                    {
                    value: '1960',
                    label: '1960'
                    },
                    {
                    value: '1959',
                    label: '1959'
                    },
                    {
                    value: '1958',
                    label: '1958'
                    },
                    {
                    value: '1957',
                    label: '1957'
                    },
                    {
                    value: '1956',
                    label: '1956'
                    },
                    {
                    value: '1955',
                    label: '1955'
                    },
                    {
                    value: '1954',
                    label: '1954'
                    },
                    {
                    value: '1953',
                    label: '1953'
                    },
                    {
                    value: '1952',
                    label: '1952'
                    },
                    {
                    value: '1951',
                    label: '1951'
                    },
                    {
                    value: '1950',
                    label: '1950'
                    },
                    {
                    value: '1949',
                    label: '1949'
                    }
                ],
                start_months: [
                {
                    value: '1',
                    label: '1'
                },
                {
                    value: '2',
                    label: '2'
                },
                {
                    value: '3',
                    label: '3'
                },
                {
                    value: '4',
                    label: '4'
                },
                {
                    value: '5',
                    label: '5'
                },
                {
                    value: '6',
                    label: '6'
                },
                {
                    value: '7',
                    label: '7'
                },
                {
                    value: '8',
                    label: '8'
                },
                {
                    value: '9',
                    label: '9'
                },
                {
                    value: '10',
                    label: '10'
                },
                {
                    value: '11',
                    label: '11'
                },
                {
                    value: '12',
                    label: '12'
                },
                ],
                end_years: [
                    {
                    value: '2022',
                    label: '2022'
                    },
                    {
                    value: '2021',
                    label: '2021'
                    },
                    {
                    value: '2020',
                    label: '2020'
                    },
                    {
                    value: '2019',
                    label: '2019'
                    },
                    {
                    value: '2018',
                    label: '2018'
                    },
                    {
                    value: '2017',
                    label: '2017'
                    },
                    {
                    value: '2016',
                    label: '2016'
                    },
                    {
                    value: '2015',
                    label: '2015'
                    },
                    {
                    value: '2014',
                    label: '2014'
                    },
                    {
                    value: '2013',
                    label: '2013'
                    },
                    {
                    value: '2012',
                    label: '2012'
                    },
                    {
                    value: '2011',
                    label: '2011'
                    },
                    {
                    value: '2010',
                    label: '2010'
                    },
                    {
                    value: '2009',
                    label: '2009'
                    },
                    {
                    value: '2008',
                    label: '2008'
                    },
                    {
                    value: '2007',
                    label: '2007'
                    },
                    {
                    value: '2006',
                    label: '2006'
                    },
                    {
                    value: '2005',
                    label: '2005'
                    },
                    {
                    value: '2004',
                    label: '2004'
                    },
                    {
                    value: '2003',
                    label: '2003'
                    },
                    {
                    value: '2002',
                    label: '2002'
                    },
                    {
                    value: '2001',
                    label: '2001'
                    },
                    {
                    value: '2000',
                    label: '2000'
                    },
                    {
                    value: '1999',
                    label: '1999'
                    },
                    {
                    value: '1998',
                    label: '1998'
                    },
                    {
                    value: '1997',
                    label: '1997'
                    },
                    {
                    value: '1996',
                    label: '1996'
                    },
                    {
                    value: '1995',
                    label: '1995'
                    },
                    {
                    value: '1994',
                    label: '1994'
                    },
                    {
                    value: '1993',
                    label: '1993'
                    },
                    {
                    value: '1992',
                    label: '1992'
                    },
                    {
                    value: '1991',
                    label: '1991'
                    },
                    {
                    value: '1990',
                    label: '1990'
                    },
                    {
                    value: '1989',
                    label: '1989'
                    },
                    {
                    value: '1988',
                    label: '1988'
                    },
                    {
                    value: '1987',
                    label: '1987'
                    },
                    {
                    value: '1986',
                    label: '1986'
                    },
                    {
                    value: '1985',
                    label: '1985'
                    },
                    {
                    value: '1984',
                    label: '1984'
                    },
                    {
                    value: '1983',
                    label: '1983'
                    },
                    {
                    value: '1982',
                    label: '1982'
                    },
                    {
                    value: '1981',
                    label: '1981'
                    },
                    {
                    value: '1980',
                    label: '1980'
                    },
                    {
                    value: '1979',
                    label: '1979'
                    },
                    {
                    value: '1978',
                    label: '1978'
                    },
                    {
                    value: '1977',
                    label: '1977'
                    },
                    {
                    value: '1976',
                    label: '1976'
                    },
                    {
                    value: '1975',
                    label: '1975'
                    },
                    {
                    value: '1974',
                    label: '1974'
                    },
                    {
                    value: '1973',
                    label: '1973'
                    },
                    {
                    value: '1972',
                    label: '1972'
                    },
                    {
                    value: '1971',
                    label: '1971'
                    },
                    {
                    value: '1970',
                    label: '1970'
                    },
                    {
                    value: '1969',
                    label: '1969'
                    },
                    {
                    value: '1968',
                    label: '1968'
                    },
                    {
                    value: '1967',
                    label: '1967'
                    },
                    {
                    value: '1966',
                    label: '1966'
                    },
                    {
                    value: '1965',
                    label: '1965'
                    },
                    {
                    value: '1964',
                    label: '1964'
                    },
                    {
                    value: '1963',
                    label: '1963'
                    },
                    {
                    value: '1962',
                    label: '1962'
                    },
                    {
                    value: '1961',
                    label: '1961'
                    },
                    {
                    value: '1960',
                    label: '1960'
                    },
                    {
                    value: '1959',
                    label: '1959'
                    },
                    {
                    value: '1958',
                    label: '1958'
                    },
                    {
                    value: '1957',
                    label: '1957'
                    },
                    {
                    value: '1956',
                    label: '1956'
                    },
                    {
                    value: '1955',
                    label: '1955'
                    },
                    {
                    value: '1954',
                    label: '1954'
                    },
                    {
                    value: '1953',
                    label: '1953'
                    },
                    {
                    value: '1952',
                    label: '1952'
                    },
                    {
                    value: '1951',
                    label: '1951'
                    },
                    {
                    value: '1950',
                    label: '1950'
                    },
                    {
                    value: '1949',
                    label: '1949'
                    }
                ],
                end_months: [
                {
                    value: '1',
                    label: '1'
                },
                {
                    value: '2',
                    label: '2'
                },
                {
                    value: '3',
                    label: '3'
                },
                {
                    value: '4',
                    label: '4'
                },
                {
                    value: '5',
                    label: '5'
                },
                {
                    value: '6',
                    label: '6'
                },
                {
                    value: '7',
                    label: '7'
                },
                {
                    value: '8',
                    label: '8'
                },
                {
                    value: '9',
                    label: '9'
                },
                {
                    value: '10',
                    label: '10'
                },
                {
                    value: '11',
                    label: '11'
                },
                {
                    value: '12',
                    label: '12'
                },
                ],
            }
            // はじめの数値
            let nextId = this.workHistorys.length;
            // データを加えるとき
            workHistory.id = nextId
            this.workHistorys.push(workHistory)
        },
        del(index){
            this.workHistorys.splice(index, 1)
            this.$store.dispatch('setWorkHistory',this.workHistorys)
        },
        setWorkHistorys(){
            this.$store.dispatch('setWorkHistory',this.workHistorys)
        },
        up(index) {
            if(index == 0){
                return false
            } else {
                let upstart = this.workHistorys.slice(0, index-1) //最初から、対象のindexの2個前まで取得
                let uplast = this.workHistorys.slice(index+1) //対象のindexから最後までの配列。
                const newArray = [...upstart, this.workHistorys[index], this.workHistorys[index-1], ...uplast]; //新しい配列作成
                this.workHistorys = newArray //新しい配列をdataに入れ替え
            }
        },
        down(index) {
            let end = [this.workHistorys.length - 1] //最後の要素
            if(index == end) {
                return false
            } else {
                let downstart = this.workHistorys.slice(0, index) //最初から、対象のindexの1個前まで取得
                let downlast = this.workHistorys.slice(index+2) //対象のindexの次から最後までの配列。
                const newArray = [...downstart, this.workHistorys[index+1], this.workHistorys[index], ...downlast]; //新しい配列作成
                this.workHistorys = newArray //新しい配列をdataに入れ替え
            }
        },
        click(index) {
            if(this.activeIndex != index){
                this.activeIndex = index
                this.workHistorys[index].isActive = !this.workHistorys[index].isActive
                } else {
                    // this.activeIndex = undefined;
                    // これなら.isActiveが消えるが、登録ボタン以外を押したときも消えてしまう
            }
        },
        register(index){
            if(this.activeIndex == index){
                this.activeIndex = undefined;
                this.$store.dispatch('setWorkHistory',this.workHistorys)
            }
        },
    }
}
</script>

<style scoped>
/* 表示・非表示アニメーション中 */
.v-enter-active,
.v-leave-active {
  transition: all 700ms;
}
/* 表示アニメーション開始時 ・ 非表示アニメーション後 */
.v-enter, .v-leave-to {
  opacity: 0;
}

/* 要素が移動する時に700msで移動するように指定 */
.v-move {
  transition: all 700ms;
}
.v-leave-active {
  /* 移動のトランジションをさせる場合は非表示アニメーション中に position: absoluteを指定しないと正しく動作しない */
  position: absolute;
}

</style>