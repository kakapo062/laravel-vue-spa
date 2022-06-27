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
                <li>
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
                <li class="active">
                    <router-link v-bind:to="{name: 'resume10'}">
                        <span>10</span>
                    </router-link>
                </li>
            </ul>
        </div>
        <h3 class="resume_step_title">本人希望欄</h3>
        <div class="resume_step_note_wrap">
            <p class="resume_step_note">※不明な点がありましたら未記入のまま次の項目へお進みください。</p>
        </div>
        <div class="resume_form_wrap">
            <div class="form_inner">
                <p class="small_note_text">給与・勤務時間・勤務地など希望があれば入力しましょう</p>
                <div class="card_wrap">
                    <div class="card_inner">
                        <el-input
                        type="textarea"
                        :autosize="{ minRows: 5, maxRows: 20}"
                        placeholder="入力例：貴社の規定に従います。現在就業中のため、平日は17時以降にお電話頂けますと幸いです。"
                        v-model="resume.hope"
                        @change="setResume()"
                        >
                        </el-input>
                    </div>
                    <p class="count_check">文字数：{{ resume.hope.length }}</p>
                </div>
            </div>
        </div>
        <div class="form-group">
  <label>住所</label>
  <div class="flex items-center">
    <input class="form-control" type="number" v-model="postalcode1"/><span class="block ml-2 mr-2">ー</span>
    <input class="form-control" type="number" v-model="postalcode2"/>
    <button class="px-4 py-1 rounded-lg text-white bg-black font-normal text-sm ml-4" @click="searchAddress">住所検索</button>
  </div>
</div>
<div class="form-group">
  <label>都道府県</label>
  <input class="form-control" type="text" v-model="prefecture"/>
</div>
<div class="form-group">
  <label>市区町村</label>
  <input class="form-control" type="text" v-model="city"/>
</div>
<div class="form-group">
  <label>地名・番名</label>
  <input class="form-control" type="text" v-model="town"/>
</div>
<div class="form-group">
  <label>建物名・階・番号</label>
  <input class="form-control" type="text" v-model="building"/>
</div>
        <div class="pager_wrap">
            <div class="pager_inner">
                <router-link v-bind:to="{name: 'resume11'}" class="next_step_btn"><span>次へ</span></router-link>
                <router-link v-bind:to="{name: 'resume9'}" class="back_step_btn"><span>戻る</span></router-link>
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
const jsonpAdapter = require('axios-jsonp')
    export default {
    data() {
        return {
            isActive: false,
            isDisplay: true,
            resume: {
                hope: '',
            },
            postalcode1: '',
            postalcode2: '',
            prefecture: '',
            city: '',
            town: '',
            building: '',
        }
    },
    methods: {
        active(){
            this.isActive = !this.isActive;
            this.isDisplay = !this.isDisplay;
        },
        setResume(){
            const dateValue = this.resume.date;
            if(dateValue !== "") {
                this.$store.dispatch('setResume',this.resume);
            }
        },
            searchAddress() {
            const zipCode = this.postalcode1 + this.postalcode2
            api.get(`https://api.zipaddress.net/?zipcode=${zipCode}`, {adapter: jsonpAdapter}).then(rs => {
                const response = rs.data
                this.prefecture = response.pref
                this.city = response.city
                this.town = response.town
                this.building = ''
            })
            },
    }
}
</script>