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
                <li class="active">
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
                <li>
                    <router-link v-bind:to="{name: 'resume10'}">
                        <span>10</span>
                    </router-link>
                </li>
            </ul>
        </div>
        <h3 class="resume_step_title">連絡先</h3>
        <div class="resume_step_note_wrap">
            <p class="resume_step_note">※不明な点がありましたら未記入のまま次の項目へお進みください。</p>
        </div>
        <div class="resume_form_wrap">
            <div class="form_inner">
                <div class="item_wrap">
                    <p class="item_name">電話番号（ハイフンあり）</p>
                    <div class="item_body">
                        <div class="input_wrap">
                            <el-input v-model="resume.phone" @input="setResume()" autocomplete="off" placeholder="例）090-1234-5678" title="電話番号" class="input_inner">
                            </el-input>
                        </div>
                    </div>
                </div>
                <div class="item_wrap">
                    <p class="item_name">メールアドレス</p>
                    <div class="item_body">
                        <div class="input_wrap">
                            <el-input v-model="resume.email" @input="setResume()" autocomplete="off" placeholder="例）abc@example.com" title="メールアドレス" class="input_inner">
                            </el-input>
                        </div>
                    </div>
                </div>
                <el-collapse accordion>
                    <el-collapse-item name="1" class="step2">
                        <template slot="title">
                        <p class="width100" @click="openMenu =!openMenu">
                            <template v-if="openMenu === false">上記以外に希望する連絡先がある場合</template>
                        <template v-else>閉じる</template>
                        </p>
                        </template>
                    <div class="">
                    <p class="address_note">※上記以外に連絡を希望する場合のみ入力してください</p>
                    <div class="item_wrap">
                        <p class="item_name">電話番号（ハイフンあり）</p>
                        <div class="item_body">
                            <div class="input_wrap">
                                <el-input v-model="resume.phone_add" @input="setResume()" autocomplete="off" placeholder="例）090-1234-5678" title="電話番号" class="input_inner">
                                </el-input>
                            </div>
                        </div>
                    </div>
                    <div class="item_wrap">
                        <p class="item_name">メールアドレス</p>
                        <div class="item_body">
                            <div class="input_wrap">
                                <el-input v-model="resume.email_add" @input="setResume()" autocomplete="off" placeholder="例）abc@example.com" title="メールアドレス" class="input_inner">
                                </el-input>
                            </div>
                        </div>
                    </div>
                </div>
                    </el-collapse-item>
                </el-collapse>
            </div>
        </div>
        <div class="pager_wrap">
            <div class="pager_inner">
                <router-link v-bind:to="{name: 'resume4'}" class="next_step_btn"><span>次へ</span></router-link>
                <router-link v-bind:to="{name: 'resume2'}" class="back_step_btn"><span>戻る</span></router-link>
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
            openMenu: false,
            isActive: false,
            isDisplay: true,
            resume: {
                phone: '',
                email: '',
                phone_add: '',
                email_add: '',
            },
        }
    },
    mounted() {
        if (localStorage.phone) {
            this.resume.phone = localStorage.phone;
            this.$store.dispatch('setResume',this.resume)
        }
        if (localStorage.email) {
            this.resume.email = localStorage.email;
            this.$store.dispatch('setResume',this.resume)
        }
        if (localStorage.phone_add) {
            this.resume.phone_add = localStorage.phone_add;
            this.$store.dispatch('setResume',this.resume)
        }
        if (localStorage.email_add) {
            this.resume.email_add = localStorage.email_add;
            this.$store.dispatch('setResume',this.resume)
        }
    },
    methods: {
        open(){
            if(this.openMenu ===false){
                this.openMenu = true
            }else{
                this.openMenu = false
            }
        },
        active: function(){
            this.isActive = !this.isActive;
            this.isDisplay = !this.isDisplay;
        },
        setResume() {
            this.$store.dispatch('setResume',this.resume)
             localStorage.phone = this.resume.phone;
             localStorage.email = this.resume.email;
             localStorage.phone_add = this.resume.phone_add;
             localStorage.email_add = this.resume.email_add;
            },
        }
}
</script>