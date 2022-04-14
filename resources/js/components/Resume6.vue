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
                <div class="card_wrap history_item_wrap" v-for="(user, index) in users" v-bind:key="user.id">
                    <div class="item_wrap">
                        <p class="item_name">会社名</p>
                        <div class="item_body">
                            <div class="input_wrap comp_name_wrap">
                                <input
                                v-model="user.name"
                                type="text"
                                autocomplete="off"
                                placeholder="例）〇〇〇株式会社"
                                title="会社名"
                                class="input_inner"
                                >
                            </div>
                        </div>
                    </div>
                    <div class="item_wrap">
                        <div class="item_name">
                            <p class="">在籍期間<span class="small_text history_small">※現在もお勤めの場合は在籍開始年月のみご入力ください</span></p>
                        </div>
                        <div class="item_body flex mb_8">
                            <div class="input_wrap">
                                <select name="" id="">
                                    <option value="2020年">2020年</option>
                                </select>
                            </div>
                            <div class="input_wrap">
                                <select name="" id="">
                                    <option value="3月">3月</option>
                                </select>
                            </div>
                            <span>から</span>
                        </div>
                        <div class="item_body flex mb_16">
                            <div class="input_wrap">
                                <select name="" id="">
                                    <option value="2021年">2021年</option>
                                </select>
                            </div>
                            <div class="input_wrap">
                                <select name="" id="">
                                    <option value="3月">3月</option>
                                </select>
                            </div>
                            <span>まで</span>
                        </div>
                        <div class="card_btn_wrap flex">
                            <div class="card_register_btn">登録</div>
                            <div @click="del(index)" class="card_delete_btn">削除</div>
                        </div>
                    </div>
                </div>
                <div @click="add" class="navy_btn_wrap">
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
    <div class="preview_btn_wrap">
        <router-link v-bind:to="{name: 'index'}" class="preview_btn">
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
            users: [
                {name: '',}
            ]
        }
    },
    methods: {
        active: function(){
            this.isActive = !this.isActive;
            this.isDisplay = !this.isDisplay;
        },
        add: function(){
            this.users.push({ name: '', email: '' })
        },
        del: function(index){
            this.users.splice(index, 1)
        },
    }
}
</script>