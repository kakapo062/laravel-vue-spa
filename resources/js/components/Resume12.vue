<template>
<div class="wrap">
    <div class="resume_wrap">
        <h3 class="resume_step_title">履歴書を保存して<br>データを受け取る</h3>
        <div class="resume_step_note_wrap">
            <!-- <p class="resume_step_note">※ダウンロード後もデータ上で編集することが可能です。空欄箇所がある場合でも、このままお進みください。</p> -->
        </div>
        <div class="resume_form_wrap">
            <div class="form_inner">
                <p class="normal_text_wrap mb_16">作成した履歴書データ（PDF）を入力したメールアドレス宛に送信します。</p>
                <div class="item_wrap">
                    <p class="item_name">メールアドレス</p>
                    <div class="item_body">
                        <div class="input_wrap">
                            <el-input v-model="resume.submit_email" @input="setResume()" placeholder="例）abc@example.com" title="メールアドレス" name="email" class="input_inner ">
                            </el-input>
                        </div>
                    </div>
                     <p v-if="isInValidEmail && resume.submit_email !== ''" class="error">メールアドレスの形式で入力してください。</p>
                </div>
                <div @click="submit()" :class="{disable: isInValidEmail}" class="next_step_btn submit_btn">送信</div>
            </div>
        </div>
        <div class="download_wrap">
            <p class="download_text">データダウンロードをご希望の方</p>
            <div @click="download()" class="next_step_btn pdf_btn">ダウンロード</div>
        </div>
        <div class="pager_wrap">
            <div class="pager_inner last_back_inner">
                <!-- <router-link v-bind:to="{name: 'Thanks'}" class="next_step_btn"><span>送信</span></router-link> -->
                <!-- <a href="/output" class="next_step_btn"><span>送信</span></a> -->
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
                submit_email: ''
            },
             csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        }
    },
    computed: {
         ...mapGetters([
            //  'resume',
             'licenses',
             'workHistories',
             'schoolHistories',
             ]),
            isInValidEmail(){
            //メールアドレスとして判定される文字列と記号の組み合わせを定数化
            const reg = new RegExp(/^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}\.[A-Za-z0-9]{1,}$/);
            //指定した組み合わせになっていなかった場合判定を返す。
            return !reg.test(this.resume.submit_email);
        }
    },
    methods: {
        submit() {
            // form を動的に生成
            if(this.isInValidEmail){
                return false;
            } else {

            var form = document.createElement('form');
            form.action = '/submit';
            form.method = 'POST';
            form.enctype = 'multipart/form-data'

            // POSTパラメーター用にinputタグを生成
            var reqElm = document.createElement('input');
            // nameとvalueにそれぞれPOSTしたいパラメーターを追加
            reqElm.name = '_token';
            reqElm.type = 'hidden';
            reqElm.value = this.csrf;
            // フォームタグにinputタグを追加
            form.appendChild(reqElm);

            // POSTパラメーター用にinputタグを生成
            var family_name = document.createElement('input');
            family_name.name = 'family_name';
            family_name.type = 'hidden';
            family_name.value = this.$store.getters.resume.family_name || "";
            form.appendChild(family_name);

            var first_name = document.createElement('input');
            first_name.name = 'first_name';
            first_name.type = 'hidden';
            first_name.value = this.$store.getters.resume.first_name || "";
            form.appendChild(first_name);

            var family_ruby = document.createElement('input');
            family_ruby.name = 'family_ruby';
            family_ruby.type = 'hidden';
            family_ruby.value = this.$store.getters.resume.family_ruby || "";
            form.appendChild(family_ruby);

            var first_ruby = document.createElement('input');
            first_ruby.name = 'first_ruby';
            first_ruby.type = 'hidden';
            first_ruby.value = this.$store.getters.resume.first_ruby || "";
            form.appendChild(first_ruby);

            var birthyear = document.createElement('input');
            birthyear.name = 'birthyear';
            birthyear.type = 'hidden';
            birthyear.value = this.$store.getters.resume.birthyear || "";
            form.appendChild(birthyear);

            var birthmonth = document.createElement('input');
            birthmonth.name = 'birthmonth';
            birthmonth.type = 'hidden';
            birthmonth.value = this.$store.getters.resume.birthmonth || ""
            form.appendChild(birthmonth);

            var birthday = document.createElement('input');
            birthday.name = 'birthday';
            birthday.type = 'hidden';
            birthday.value = this.$store.getters.resume.birthday || "";
            form.appendChild(birthday);

            var age = document.createElement('input');
            age.name = 'age';
            age.type = 'hidden';
            age.value = this.$store.getters.resume.age || "";
            form.appendChild(age);

            var radio1 = document.createElement('input');
            radio1.name = 'radio1';
            radio1.type = 'hidden';
            radio1.value = this.$store.getters.resume.radio1 || "";
            form.appendChild(radio1);

            var address_ruby = document.createElement('input');
            address_ruby.name = 'address_ruby';
            address_ruby.type = 'hidden';
            address_ruby.value = this.$store.getters.resume.address_ruby || "";
            form.appendChild(address_ruby);

            var post_code = document.createElement('input');
            post_code.name = 'post_code';
            post_code.type = 'hidden';
            post_code.value = this.$store.getters.resume.post_code || "";
            form.appendChild(post_code);

            var address = document.createElement('input');
            address.name = 'address';
            address.type = 'hidden';
            address.value = this.$store.getters.resume.address || "";
            form.appendChild(address);

            var address_option = document.createElement('input');
            address_option.name = 'address_option';
            address_option.type = 'hidden';
            address_option.value = this.$store.getters.resume.address_option || "";
            form.appendChild(address_option);

            var address_ruby_add = document.createElement('input');
            address_ruby_add.name = 'address_ruby_add';
            address_ruby_add.type = 'hidden';
            address_ruby_add.value = this.$store.getters.resume.address_ruby_add || "";
            form.appendChild(address_ruby_add);

            var address_add = document.createElement('input');
            address_add.name = 'address_add';
            address_add.type = 'hidden';
            address_add.value = this.$store.getters.resume.address_add || "";
            form.appendChild(address_add);

            var post_code_add = document.createElement('input');
            post_code_add.name = 'post_code_add';
            post_code_add.type = 'hidden';
            post_code_add.value = this.$store.getters.resume.post_code_add || "";
            form.appendChild(post_code_add);

            var address_option_add = document.createElement('input');
            address_option_add.name = 'address_option_add';
            address_option_add.type = 'hidden';
            address_option_add.value = this.$store.getters.resume.address_option_add || "";
            form.appendChild(address_option_add);

            var phone = document.createElement('input');
            phone.name = 'phone';
            phone.type = 'hidden';
            phone.value = this.$store.getters.resume.phone || "";
            form.appendChild(phone);
            
            var phone_add = document.createElement('input');
            phone_add.name = 'phone_add';
            phone_add.type = 'hidden';
            phone_add.value = this.$store.getters.resume.phone_add || "";
            form.appendChild(phone_add);

            var email = document.createElement('input');
            email.name = 'email';
            email.type = 'hidden';
            email.value = this.$store.getters.resume.email || "";
            form.appendChild(email);

            var email_add = document.createElement('input');
            email_add.name = 'email_add';
            email_add.type = 'hidden';
            email_add.value = this.$store.getters.resume.email_add || "";
            form.appendChild(email_add);

            var url = document.createElement('input');
            url.name = 'url';

            if(this.$store.getters.resume.image_file){
                // 写真データがある場合
                url.type = 'file';
                url.files = this.$store.getters.resume.image_file;
            } else {
                //写真データがない場合
                url.type = 'hidden';
                url.value = "";
            }
            form.appendChild(url);

            var year = document.createElement('input');
            year.name = 'year';
            year.type = 'hidden';
            year.value = this.$store.getters.resume.year || "";
            form.appendChild(year);

            var month = document.createElement('input');
            month.name = 'month';
            month.type = 'hidden';
            month.value = this.$store.getters.resume.month || ""
            form.appendChild(month);

            var day = document.createElement('input');
            day.name = 'day';
            day.type = 'hidden';
            day.value = this.$store.getters.resume.day || "";
            form.appendChild(day);

            var dependent = document.createElement('input');
            dependent.name = 'dependent';
            dependent.type = 'hidden';
            dependent.value = this.$store.getters.resume.dependent || "";
            form.appendChild(dependent);

            var spouse = document.createElement('input');
            spouse.name = 'spouse';
            spouse.type = 'hidden';
            spouse.value = this.$store.getters.resume.spouse || "";
            form.appendChild(spouse);

            var duty = document.createElement('input');
            duty.name = 'duty';
            duty.type = 'hidden';
            duty.value = this.$store.getters.resume.duty || "";
            form.appendChild(duty);

            var reason = document.createElement('input');
            reason.name = 'reason';
            reason.type = 'hidden';
            reason.value = this.$store.getters.resume.reason || "";
            form.appendChild(reason);

            var hope = document.createElement('input');
            hope.name = 'hope';
            hope.type = 'hidden';
            hope.value = this.$store.getters.resume.hope || "";
            form.appendChild(hope);

            var date = document.createElement('input');
            date.name = 'date';
            date.type = 'hidden';
            date.value = this.$store.getters.resume.date || "";
            form.appendChild(date);

            var year = document.createElement('input');
            year.name = 'year';
            year.type = 'hidden';
            year.value = this.$store.getters.resume.year || "";
            form.appendChild(year);

            var month = document.createElement('input');
            month.name = 'month';
            month.type = 'hidden';
            month.value = this.$store.getters.resume.month || "";
            form.appendChild(month);

            var day = document.createElement('input');
            day.name = 'day';
            day.type = 'hidden';
            day.value = this.$store.getters.resume.day || "";
            form.appendChild(day);

            var submit_email = document.createElement('input');
            submit_email.name = 'submit_email';
            submit_email.type = 'hidden';
            submit_email.value = this.$store.getters.resume.submit_email || "";
            form.appendChild(submit_email);

            var licenses = document.createElement('input');
            licenses.name = 'licenses';
            licenses.type = 'hidden';
            licenses.value = JSON.stringify(this.$store.getters.licenses || "");
            form.appendChild(licenses);

            var workHistories = document.createElement('input');
            workHistories.name = 'workHistories';
            workHistories.type = 'hidden';
            workHistories.value = JSON.stringify(this.$store.getters.workHistories || "");
            form.appendChild(workHistories);

            var schoolHistories = document.createElement('input');
            schoolHistories.name = 'schoolHistories';
            schoolHistories.type = 'hidden';
            schoolHistories.value = JSON.stringify(this.$store.getters.schoolHistories || "");
            form.appendChild(schoolHistories);

            // body に追加
            document.body.appendChild(form);
            // // submit
            form.submit();
            }
        },
        download() {
            // form を動的に生成
            var form = document.createElement('form');
            form.action = '/download';
            form.method = 'POST';
            form.enctype = 'multipart/form-data'

            // POSTパラメーター用にinputタグを生成
            var reqElm = document.createElement('input');
            // nameとvalueにそれぞれPOSTしたいパラメーターを追加
            reqElm.name = '_token';
            reqElm.type = 'hidden';
            reqElm.value = this.csrf;
            // フォームタグにinputタグを追加
            form.appendChild(reqElm);

            // POSTパラメーター用にinputタグを生成
            var family_name = document.createElement('input');
            family_name.name = 'family_name';
            family_name.type = 'hidden';
            family_name.value = this.$store.getters.resume.family_name || "";
            form.appendChild(family_name);

            var first_name = document.createElement('input');
            first_name.name = 'first_name';
            first_name.type = 'hidden';
            first_name.value = this.$store.getters.resume.first_name || "";
            form.appendChild(first_name);

            var family_ruby = document.createElement('input');
            family_ruby.name = 'family_ruby';
            family_ruby.type = 'hidden';
            family_ruby.value = this.$store.getters.resume.family_ruby || "";
            form.appendChild(family_ruby);

            var first_ruby = document.createElement('input');
            first_ruby.name = 'first_ruby';
            first_ruby.type = 'hidden';
            first_ruby.value = this.$store.getters.resume.first_ruby || "";
            form.appendChild(first_ruby);

            var birthyear = document.createElement('input');
            birthyear.name = 'birthyear';
            birthyear.type = 'hidden';
            birthyear.value = this.$store.getters.resume.birthyear || "";
            form.appendChild(birthyear);

            var birthmonth = document.createElement('input');
            birthmonth.name = 'birthmonth';
            birthmonth.type = 'hidden';
            birthmonth.value = this.$store.getters.resume.birthmonth || ""
            form.appendChild(birthmonth);

            var birthday = document.createElement('input');
            birthday.name = 'birthday';
            birthday.type = 'hidden';
            birthday.value = this.$store.getters.resume.birthday || "";
            form.appendChild(birthday);

            var age = document.createElement('input');
            age.name = 'age';
            age.type = 'hidden';
            age.value = this.$store.getters.resume.age || "";
            form.appendChild(age);

            var radio1 = document.createElement('input');
            radio1.name = 'radio1';
            radio1.type = 'hidden';
            radio1.value = this.$store.getters.resume.radio1 || "";
            form.appendChild(radio1);

            var address_ruby = document.createElement('input');
            address_ruby.name = 'address_ruby';
            address_ruby.type = 'hidden';
            address_ruby.value = this.$store.getters.resume.address_ruby || "";
            form.appendChild(address_ruby);

            var post_code = document.createElement('input');
            post_code.name = 'post_code';
            post_code.type = 'hidden';
            post_code.value = this.$store.getters.resume.post_code || "";
            form.appendChild(post_code);

            var address = document.createElement('input');
            address.name = 'address';
            address.type = 'hidden';
            address.value = this.$store.getters.resume.address || "";
            form.appendChild(address);

            var address_option = document.createElement('input');
            address_option.name = 'address_option';
            address_option.type = 'hidden';
            address_option.value = this.$store.getters.resume.address_option || "";
            form.appendChild(address_option);

            var address_ruby_add = document.createElement('input');
            address_ruby_add.name = 'address_ruby_add';
            address_ruby_add.type = 'hidden';
            address_ruby_add.value = this.$store.getters.resume.address_ruby_add || "";
            form.appendChild(address_ruby_add);

            var address_add = document.createElement('input');
            address_add.name = 'address_add';
            address_add.type = 'hidden';
            address_add.value = this.$store.getters.resume.address_add || "";
            form.appendChild(address_add);

            var post_code_add = document.createElement('input');
            post_code_add.name = 'post_code_add';
            post_code_add.type = 'hidden';
            post_code_add.value = this.$store.getters.resume.post_code_add || "";
            form.appendChild(post_code_add);

            var address_option_add = document.createElement('input');
            address_option_add.name = 'address_option_add';
            address_option_add.type = 'hidden';
            address_option_add.value = this.$store.getters.resume.address_option_add || "";
            form.appendChild(address_option_add);

            var phone = document.createElement('input');
            phone.name = 'phone';
            phone.type = 'hidden';
            phone.value = this.$store.getters.resume.phone || "";
            form.appendChild(phone);
            
            var phone_add = document.createElement('input');
            phone_add.name = 'phone_add';
            phone_add.type = 'hidden';
            phone_add.value = this.$store.getters.resume.phone_add || "";
            form.appendChild(phone_add);

            var email = document.createElement('input');
            email.name = 'email';
            email.type = 'hidden';
            email.value = this.$store.getters.resume.email || "";
            form.appendChild(email);

            var email_add = document.createElement('input');
            email_add.name = 'email_add';
            email_add.type = 'hidden';
            email_add.value = this.$store.getters.resume.email_add || "";
            form.appendChild(email_add);

            var url = document.createElement('input');
            url.name = 'url';

            if(this.$store.getters.resume.image_file){
                // 写真データがある場合
                url.type = 'file';
                url.files = this.$store.getters.resume.image_file;
            } else {
                //写真データがない場合
                url.type = 'hidden';
                url.value = "";
            }
            form.appendChild(url);

            var year = document.createElement('input');
            year.name = 'year';
            year.type = 'hidden';
            year.value = this.$store.getters.resume.year || "";
            form.appendChild(year);

            var month = document.createElement('input');
            month.name = 'month';
            month.type = 'hidden';
            month.value = this.$store.getters.resume.month || ""
            form.appendChild(month);

            var day = document.createElement('input');
            day.name = 'day';
            day.type = 'hidden';
            day.value = this.$store.getters.resume.day || "";
            form.appendChild(day);

            var dependent = document.createElement('input');
            dependent.name = 'dependent';
            dependent.type = 'hidden';
            dependent.value = this.$store.getters.resume.dependent || "";
            form.appendChild(dependent);

            var spouse = document.createElement('input');
            spouse.name = 'spouse';
            spouse.type = 'hidden';
            spouse.value = this.$store.getters.resume.spouse || "";
            form.appendChild(spouse);

            var duty = document.createElement('input');
            duty.name = 'duty';
            duty.type = 'hidden';
            duty.value = this.$store.getters.resume.duty || "";
            form.appendChild(duty);

            var reason = document.createElement('input');
            reason.name = 'reason';
            reason.type = 'hidden';
            reason.value = this.$store.getters.resume.reason || "";
            form.appendChild(reason);

            var hope = document.createElement('input');
            hope.name = 'hope';
            hope.type = 'hidden';
            hope.value = this.$store.getters.resume.hope || "";
            form.appendChild(hope);

            var date = document.createElement('input');
            date.name = 'date';
            date.type = 'hidden';
            date.value = this.$store.getters.resume.date || "";
            form.appendChild(date);

            var year = document.createElement('input');
            year.name = 'year';
            year.type = 'hidden';
            year.value = this.$store.getters.resume.year || "";
            form.appendChild(year);

            var month = document.createElement('input');
            month.name = 'month';
            month.type = 'hidden';
            month.value = this.$store.getters.resume.month || "";
            form.appendChild(month);

            var day = document.createElement('input');
            day.name = 'day';
            day.type = 'hidden';
            day.value = this.$store.getters.resume.day || "";
            form.appendChild(day);

            var licenses = document.createElement('input');
            licenses.name = 'licenses';
            licenses.type = 'hidden';
            licenses.value = JSON.stringify(this.$store.getters.licenses || "");
            form.appendChild(licenses);

            var workHistories = document.createElement('input');
            workHistories.name = 'workHistories';
            workHistories.type = 'hidden';
            workHistories.value = JSON.stringify(this.$store.getters.workHistories || "");
            form.appendChild(workHistories);

            var schoolHistories = document.createElement('input');
            schoolHistories.name = 'schoolHistories';
            schoolHistories.type = 'hidden';
            schoolHistories.value = JSON.stringify(this.$store.getters.schoolHistories || "");
            form.appendChild(schoolHistories);

            // body に追加
            document.body.appendChild(form);
            // // submit
            form.submit();
        },
        setResume() {
            this.$store.dispatch('setResume',this.resume)
        },
    }
}
</script>