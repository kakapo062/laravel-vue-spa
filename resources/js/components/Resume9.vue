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
                <li class="active">
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
        <h3 class="resume_step_title">その他</h3>
        <div class="resume_step_note_wrap">
            <p class="resume_step_note">※不明な点がありましたら未記入のまま次の項目へお進みください。</p>
        </div>
        <div class="resume_form_wrap">
            <div class="form_inner">
                <div class="item_wrap">
                    <div class="item_name flex align_item_base">
                        <p class="">扶養家族</p>
                        <p class="small_text">※配偶者を除く</p>
                    </div>
                    <div class="item_body flex">
                        <div class="input_wrap input_family">
                        <el-select v-model="resume.dependent" @change="setResume()" placeholder="1" class="input_year">
                            <el-option
                            v-for="item in resume.dependents"
                            :key="item.value"
                            :label="item.label"
                            :value="item.value">
                            </el-option>
                        </el-select>
                        </div>
                        <span>人</span>
                    </div>
                </div>
                <div class="item_wrap">
                    <p class="item_name">配偶者</p>
                    <div class="item_body flex flex_column_2">
                        <el-radio v-model="resume.spouse" @change="setResume()" label="あり" border>あり</el-radio>
                        <el-radio v-model="resume.spouse" @change="setResume()" label="なし" border>なし</el-radio>
                    </div>
                </div>
                <div class="item_wrap">
                    <p class="item_name">配偶者の扶養義務</p>
                    <div class="item_body flex flex_column_2">
                        <el-radio v-model="resume.duty" @change="setResume()" label="あり" border>あり</el-radio>
                        <el-radio v-model="resume.duty" @change="setResume()" label="なし" border>なし</el-radio>
                    </div>
                </div>
            </div>
        </div>
        <div class="pager_wrap">
            <div class="pager_inner">
                <router-link v-bind:to="{name: 'resume10'}" class="next_step_btn"><span>次へ</span></router-link>
                <router-link v-bind:to="{name: 'resume8'}" class="back_step_btn"><span>戻る</span></router-link>
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
            isActive: false,
            isDisplay: true,
            resume: {
                dependent: '',
                dependents: [
                    {
                        value: '0',
                        label: '0'
                    },
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
                ],
                spouse: '',
                duty: '',
            }
        }
    },
    mounted() {
        if (localStorage.dependent) {
            this.resume.dependent = localStorage.dependent;
            this.$store.dispatch('setResume',this.resume)
        }
        if (localStorage.spouse) {
            this.resume.spouse = localStorage.spouse;
            this.$store.dispatch('setResume',this.resume)
        }
        if (localStorage.duty) {
            this.resume.duty = localStorage.duty;
            this.$store.dispatch('setResume',this.resume)
        }
    },
    methods: {
        active(){
            this.isActive = !this.isActive;
            this.isDisplay = !this.isDisplay;
        },
        setResume() {
        this.$store.dispatch('setResume',this.resume)
        localStorage.dependent = this.resume.dependent;
        localStorage.spouse = this.resume.spouse;
        localStorage.duty = this.resume.duty;        
        },
    }
}
</script>