<template>
<div class="wrap">
    <div class="resume_wrap">
        <h3 class="resume_step_title">履歴書を保存して<br>データを受け取る</h3>
        <div class="resume_step_note_wrap">
            <p class="resume_step_note">※ダウンロード後もデータ上で編集することが可能です。空欄箇所がある場合でも、このままお進みください。</p>
        </div>
        <div class="resume_form_wrap">
            <div class="form_inner">
                <p class="normal_text_wrap mb_16">作成した職務経歴書データ（PDF・Word）を入力したメールアドレス宛に送信します。</p>
                <div class="item_wrap">
                    <p class="item_name">メールアドレス</p>
                    <div class="item_body">
                        <div class="input_wrap">
                            <el-input v-model="resume.email" @input="setResume()" placeholder="例）abc@example.com" title="メールアドレス" name="email" class="input_inner">
                            </el-input>
                        </div>
                    </div>
                </div>
                <div class="item_body">
                    <label for="mail_check" class="mail_check_label">
                        <input type="checkbox" v-model="resume.ismail" id="mail_check" @change="setResume()" class="mail_check_input">メールアドレスを持っていない
                    </label>
                </div>
                 <p class="mail_desc">ご自身のメールアドレスをお持ちでない場合はチェックしてください。</p>
                 <p class="small_note_text">宅建Jobエージェントの公式LINEよりデータをお送りすることも可能です。ご希望の場合はLINEよりご連絡ください。</p>
            </div>
        </div>
        <div class="pager_wrap">
            <div class="pager_inner">
                <!-- <router-link v-bind:to="{name: 'Thanks'}" class="next_step_btn"><span>送信</span></router-link> -->
                <!-- <a href="/output" class="next_step_btn"><span>送信</span></a> -->
                
                <div @click="submit()" class="next_step_btn">送信</div>
                <router-link v-bind:to="{name: 'resume11'}" class="back_step_btn"><span>戻る</span></router-link>
            </div>
        </div>
    </div>
    <div class="preview_btn_wrap">
        <router-link v-bind:to="{name: 'Preview'}" class="preview_btn">
            <span>プレビュー</span>
        </router-link>
    </div>
</div>
</template>

<script>
import { mapGetters } from 'vuex'
    export default {
    data() {
        return {
            resume: {
                ismail: '',
            },
             csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        }
    },
    computed: {
        //  ...mapGetters([
        //      'resume',
        //      'license'
        //      ]),
    },
    methods: {
        submit() {
            // form を動的に生成
            var form = document.createElement('form');
            form.action = '/welcome';
            form.method = 'POST';
            form.enctype = 'multipart/form-data'

            // POSTパラメーターようにinputタグを生成
            var reqElm = document.createElement('input');
            // nameとvalueにそれぞれPOSTしたいパラメーターを追加
            reqElm.name = 'csrf-token';
            reqElm.type = 'hidden';
            reqElm.value = this.csrf;
            // フォームタグにinputタグを追加
            form.appendChild(reqElm);
            // body に追加
            document.body.appendChild(form);

            // submit
            form.submit();
        },
        setResume() {
            this.$store.dispatch('setResume',this.resume)
        },
    }
}
</script>