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
                <li class="active">
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
                <li>
                    <router-link v-bind:to="{name: 'resume10'}">
                        <span>10</span>
                    </router-link>
                </li>
            </ul>
        </div>
        <h3 class="resume_step_title">住所</h3>
        <div class="resume_step_note_wrap">
            <p class="resume_step_note">※不明な点がありましたら未記入のまま次の項目へお進みください。</p>
        </div>
        <div class="resume_form_wrap">
            <div class="form_inner">
                <div class="item_wrap">
                    <p class="item_name">郵便番号（ハイフン不要）</p>
                    <div class="item_body flex">
                        <div class="input_wrap">
                            <el-input v-model="resume.post_code" @input="setResume()" autocomplete="off" placeholder="例) 000-1234" title="郵便番号" class="input_inner">
                            </el-input>
                        </div>
                        <div class="auto_btn_wrap">
                            <div class="auto_btn">自動入力</div>
                        </div>
                    </div>
                </div>
                <div class="item_wrap">
                    <p class="item_name">都道府県・市区町村・番地</p>
                    <div class="item_body">
                        <div class="input_wrap">
                            <el-input v-model="resume.address" @input="setResume()" autocomplete="off" placeholder="例）〇〇県〇〇市○丁目" title="都道府県・市区町村・番地" class="input_inner">
                            </el-input>
                        </div>
                    </div>
                </div>
                <div class="item_wrap">
                    <p class="item_name">マンション・建物名</p>
                    <div class="item_body">
                        <div class="input_wrap">
                            <el-input v-model="resume.address_opt" @input="setResume()" autocomplete="off" placeholder="例）〇〇マンション" title="マンション・建物名" class="input_inner">
                            </el-input>
                        </div>
                    </div>
                </div>
                <div class="item_wrap">
                    <p class="item_name">住所ふりがな</p>
                    <p class="item_name_sub">都道府県と市区町村までを記入してください</p>
                    <div class="item_body">
                        <div class="input_wrap">
                            <el-input v-model="resume.address_ruby" @input="setResume()" autocomplete="off" placeholder="例）とうきょうとしながわくにしごたんだ" title="住所ふりがな" class="input_inner">
                            </el-input>
                        </div>
                    </div>
                </div>
                <el-collapse accordion>
                    <el-collapse-item name="1" class="step2">
                        <template slot="title">
                        <p class="width100" @click="openMenu =!openMenu">
                            <template v-if="openMenu === false">上記以外に希望する住所を追加</template>
                        <template v-else>閉じる</template>
                        </p>
                        </template>
                    <div class="">
                    <p class="address_note">※現住所以外に連絡を希望する場合のみ入力してください</p>
                    <div class="item_wrap">
                    <p class="item_name">郵便番号（ハイフン不要）</p>
                    <div class="item_body flex">
                        <div class="input_wrap">
                            <el-input v-model="resume.post_code_add" @input="setResume()" autocomplete="off" placeholder="例) 000-1234" title="郵便番号" class="input_inner">
                            </el-input>
                        </div>
                        <div class="auto_btn_wrap">
                            <div class="auto_btn">自動入力</div>
                        </div>
                    </div>
                </div>
                <div class="item_wrap">
                    <p class="item_name">都道府県・市区町村・番地</p>
                    <div class="item_body">
                        <div class="input_wrap">
                            <el-input v-model="resume.address_add" @input="setResume()" autocomplete="off" placeholder="例）〇〇県〇〇市○丁目" title="都道府県・市区町村・番地" class="input_inner">
                            </el-input>
                        </div>
                    </div>
                </div>
                <div class="item_wrap">
                    <p class="item_name">マンション・建物名</p>
                    <div class="item_body">
                        <div class="input_wrap">
                            <el-input v-model="resume.address_opt" @input="setResume()" autocomplete="off" placeholder="例）〇〇マンション" title="マンション・建物名" class="input_inner">
                            </el-input>
                        </div>
                    </div>
                </div>
                <div class="item_wrap">
                    <p class="item_name">住所ふりがな</p>
                    <p class="item_name_sub">都道府県と市区町村までを記入してください</p>
                    <div class="item_body">
                        <div class="input_wrap">
                            <el-input v-model="resume.address_ruby_opt" @input="setResume()" autocomplete="off" placeholder="例）とうきょうとしながわくにしごたんだ" title="住所ふりがな" class="input_inner">
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
                <router-link v-bind:to="{name: 'resume3'}" class="next_step_btn"><span>次へ</span></router-link>
                <router-link v-bind:to="{name: 'resume'}" class="back_step_btn"><span>戻る</span></router-link>
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
            resume: {
                post_code: '',
                address: '',
                address_option: '',
                address_ruby: '',
                post_code_add: '',
                address_add: '',
                address_option_add: '',
                address_ruby_add: '',
            },
        }
    },
    methods: {
        setResume(){
            this.$store.dispatch('setResume',this.resume)
        },
        open(){
            if(this.openMenu ===false){
                this.openMenu = true
            }else{
                this.openMenu = false
            }
        }
    }
}
</script>