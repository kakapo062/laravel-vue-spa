<template>
<div class="wrap">
    <div class="resume_wrap">
        <h3 class="resume_step_title">作成日</h3>
        <div class="resume_step_note_wrap">
        </div>
        <div class="resume_form_wrap">
            <div class="form_inner">
            <el-date-picker
                v-model="resume.date"
                type="date"
                placeholder="作成日を選択します"
                class="date_input"
                @change="setResume()"
            >
            </el-date-picker>
            </div>
        </div>
        <!-- <p>{{ resume.date }}</p> -->
        <div class="pager_wrap">
            <div class="pager_inner">
                <div @click="submit()" class="next_step_btn"><span>データを保存する</span></div>
                <router-link v-bind:to="{name: 'resume10'}" class="back_step_btn"><span>戻る</span></router-link>
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
import { mapGetters } from 'vuex'
    export default {
    data() {
        return {
            resume: {
                date: '',
                year: '',
                month: '',
                day: '',
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
    },
    methods: {
        setResume(){
            const dateValue = this.resume.date;
            if(dateValue !== "") {
                this.resume.year = dateValue.getFullYear();
                this.resume.month = ('00' + (dateValue.getMonth()+1)).slice(-2);
                this.resume.day = ('00' + dateValue.getDate()).slice(-2);
                // return (this.resume.year + '年' + this.resume.month + '月' + this.resume.day + '日');
                this.$store.dispatch('setResume',this.resume);
            }
        },
        submit() {
            // form を動的に生成
            var form = document.createElement('form');
            form.action = '/output';
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
    },
}
</script>