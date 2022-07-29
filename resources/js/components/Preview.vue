<template>
<div class="wrap preview_wrap">
    <div class="preview_head_wrap">
        <div class="preview_head">
            <h3 class="resume_step_title">プレビュー</h3>
            <div class="resume_step_note_wrap">
                <p class="resume_step_note">※レイアウト崩れがないかご確認ください。ダウンロード後もデータ上で編集することが可能です。</p>
            </div>
        </div>
    </div>
    <!-- <p>苗字：{{ resume.family_name }}</p> -->
        <div class="preview-tabs">
            <!-- <input id="user-viewer-tab" type="radio" name="preview-tab-active" value="previewFormat">
            <label for="user-viewer-tab" class="tab-item">プレビュー</label>
            <input id="example-viewer-tab" type="radio" name="preview-tab-active" value="sampleFormat">
            <label for="example-viewer-tab" class="tab-item">記入例</label> -->
        <div id="preview-viewer" class="preview-viewer tab-content">
            <div class="is-preview">
            <div id="preview-page-01" class="doc-paper preview rirekisho">
                <div class="flex">
                <div class="rirekisho-box1">
                    <div class="rirekisho-header">
                    <div class="title">履歴書</div>
                    <div class="date"><span>{{ resume.year }}年 {{ resume.month }}月 {{ resume.day }}日</span> 現在 </div>
                    </div>
                    <div data-highlight="タップで編集" class="rirekisho-profile">
                    <div class="ruby flex">
                        <div class="label">ふりがな</div>
                        <div class="input">{{ resume.family_ruby }} {{ resume.first_ruby }}</div>
                    </div>
                    <div class="name flex">
                        <div class="label">名前</div>
                        <div class="input">{{ resume.family_name }} {{ resume.first_name }}</div>
                    </div>
                    <div class="etc flex">
                        <div class="birthday"><span class="year">{{ resume.birthyear }}</span>年 <span class="month">{{ resume.birthmonth }}</span>月 <span class="day">{{ resume.birthday }}</span>日生（満 <span class="age">{{ resume.age }}</span> 歳） </div>
                        <div class="gender"><span class="male" :class="{'preview-is-checked': resume.radio1 == '男性' }">男</span><span>・</span><span class="female" :class="{'preview-is-checked': resume.radio1 == '女性' }">女</span></div>
                    </div>
                    </div>
                </div>
                <div data-highlight="タップで編集" class="rirekisho-photo">
                    <div>
                    <div class="rirekisho-photo-inner">
                        <img :src="resume.url" alt="">
                    </div>
                    </div>
                </div>
                </div>
                <div class="rirekisho-box2">
                <div class="contact-information contact-main flex">
                    <div data-highlight="タップで編集" class="contact-information-address">
                    <div class="ruby flex">
                        <div class="label">ふりがな</div>
                        <div class="input">{{ resume.address_ruby }}</div>
                    </div>
                    <div class="address flex">
                        <div class="label">現住所</div>
                        <div class="input">
                        <div class="postal-code">〒{{ resume.post_code }}</div>
                        <pre>{{ resume.address }} {{ resume.address_opt }}</pre>
                        </div>
                    </div>
                    </div>
                    <div data-highlight="タップで編集" class="contact-information-etc">
                    <div class="tel flex">
                        <div class="label">電話</div>
                        <div class="input">{{ resume.phone }}</div>
                    </div>
                    <div class="email flex">
                        <div class="label">Email</div>
                        <div class="input">{{ resume.email }}</div>
                    </div>
                    </div>
                </div>
                <div class="contact-information contact-sub flex">
                    <div class="contact-information-address">
                    <div class="ruby flex">
                        <div class="label">ふりがな</div>
                        <div class="input">{{ resume.address_ruby_add }}</div>
                    </div>
                    <div class="address flex">
                        <div class="label">連絡先</div>
                        <div class="input">
                        <div class="postal-code">〒{{ resume.post_code_add }}</div>
                        <div class="comment">(現住所以外に連絡を希望する場合のみ入力)</div>
                        <pre>{{ resume.address_add }} {{ resume.address_option_add }}</pre>
                        </div>
                    </div>
                    </div>
                    <div class="contact-information-etc">
                    <div class="tel flex">
                        <div class="label">電話</div>
                        <div class="input">{{ resume.phone_add }}</div>
                    </div>
                    <div class="email flex">
                        <div class="label">Email</div>
                        <div class="input">{{ resume.email_add }}</div>
                    </div>
                    </div>
                </div>
                </div>
                <div data-highlight="タップで編集" class="rirekisho-table rirekisho-history-1">
                <table class="">
                    <thead>
                    <tr>
                        <th>年</th>
                        <td>月</td>
                        <td>学歴・職歴</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="education">
                        <th></th>
                        <td></td>
                        <td class="">学歴</td>
                    </tr>
                    <tr v-for="(schoolHistory, index) in schoolHistories" :key="schoolHistory.id">
                        <th>{{ schoolHistory.year }}</th>
                        <td>{{ schoolHistory.month }}</td>
                        <td>{{ schoolHistory.name }}</td>
                    </tr>
                    <tr class="empty">
                        <th></th>
                        <td></td>
                        <td class=""></td>
                    </tr>
                    <tr class="empty">
                        <th></th>
                        <td></td>
                        <td class=""></td>
                    </tr>
                    <tr class="empty">
                        <th></th>
                        <td></td>
                        <td class=""></td>
                    </tr>
                    <tr class="empty">
                        <th></th>
                        <td></td>
                        <td class=""></td>
                    </tr>
                    <tr class="empty">
                        <th></th>
                        <td></td>
                        <td class=""></td>
                    </tr>
                    <tr class="empty">
                        <th></th>
                        <td></td>
                        <td class=""></td>
                    </tr>
                    <tr class="empty">
                        <th></th>
                        <td></td>
                        <td class=""></td>
                    </tr>
                    <tr class="empty">
                        <th></th>
                        <td></td>
                        <td class=""></td>
                    </tr>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    </tbody>
                </table>
                </div>
            </div>
            <div id="preview-page-02" class="doc-paper preview rirekisho">
                <div class="rirekisho-table rirekisho-history-2">
                <table class="">
                    <thead>
                    <div class="work_list work_list_head">
                            <div class="work_year">年</div>
                            <div class="work_month">月</div>
                            <div class="work_title">学歴・職歴</div>
                    </div>
                    </thead>
                    <tbody>
                    <div class="list_empty">
                            <div class="work_year"></div>
                            <div class="work_month"></div>
                            <div class="work_name">職歴</div>
                    </div>
                    <div class="work_wrap" v-for="(workHistory, index) in workHistories" :key="workHistory.id">
                        <div class="work_list">
                            <div class="work_year">{{ workHistory.start_year }}</div>
                            <div class="work_month">{{ workHistory.start_month }}</div>
                            <div class="work_name">{{ workHistory.comp_name }} 入社</div>
                        </div>
                        <div class="work_list" v-if="workHistory.end_year || workHistory.end_month">
                            <div class="work_year" v-if="workHistory.end_year">{{ workHistory.end_year }}</div>
                            <div class="work_month" v-if="workHistory.end_month">{{ workHistory.end_month }}</div>
                            <div class="work_name" v-if="workHistory.end_year && workHistory.end_month">{{ workHistory.comp_name }} 退社</div>
                        </div>
                    </div>
                    <div class="list_empty">
                            <div class="work_year"></div>
                            <div class="work_month"></div>
                            <div class="work_name"></div>
                    </div>
                    <div class="list_empty">
                            <div class="work_year"></div>
                            <div class="work_month"></div>
                            <div class="work_name"></div>
                    </div>
                    <div class="list_empty">
                            <div class="work_year"></div>
                            <div class="work_month"></div>
                            <div class="work_name"></div>
                    </div>
                    <div class="list_empty">
                            <div class="work_year"></div>
                            <div class="work_month"></div>
                            <div class="work_name"></div>
                    </div>
                    <!-- <tr class="empty">
                        <th></th>
                        <td></td>
                        <td class=""></td>
                    </tr> -->
                    <!---->
                    </tbody>
                </table>
                </div>
                <div data-highlight="タップで編集" class="rirekisho-table rirekisho-skill">
                <table class="">
                    <thead>
                    <tr>
                        <th>年</th>
                        <td>月</td>
                        <td>免許・資格</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="none">
                        <th></th>
                        <td></td>
                        <td class="">なし</td>
                    </tr>
                    <tr v-for="(license, index) in licenses" :key="license.id">
                        <th>{{ license.getyear }}</th>
                        <td>{{ license.getmonth }}</td>
                        <td>{{ license.name }}</td>
                    </tr>
                    <tr class="empty">
                        <th></th>
                        <td></td>
                        <td class=""></td>
                    </tr>
                    <tr class="empty">
                        <th></th>
                        <td></td>
                        <td class=""></td>
                    </tr>
                    <tr class="empty">
                        <th></th>
                        <td></td>
                        <td class=""></td>
                    </tr>
                    <tr class="empty">
                        <th></th>
                        <td></td>
                        <td class=""></td>
                    </tr>
                    <tr class="empty">
                        <th></th>
                        <td></td>
                        <td class=""></td>
                    </tr>
                    <tr class="empty">
                        <th></th>
                        <td></td>
                        <td class=""></td>
                    </tr>
                    <!---->
                    </tbody>
                </table>
                </div>
                <div class="rirekisho-pr">
                <div data-highlight="タップで編集" class="rirekisho-pr-reason">
                    <div class="label">志望動機・特技・アピールポイントなど</div>
                    <div class="input">
                    <pre class="">{{ resume.reason }}
                </pre>
                    </div>
                </div>
                <div data-highlight="タップで編集" class="rirekisho-pr-etc">
                    <div class="family">
                    <div class="label">扶養家族数（配偶者を除く）</div>
                    <div class="input">{{ resume.dependent }} 人</div>
                    </div>
                    <div class="partner">
                    <div class="existence">
                        <div class="label">配偶者</div>
                        <div class="input"><span class="yes" :class="{'preview-is-checked': resume.spouse == 'あり' }">有</span> ・ <span class="no" :class="{'preview-is-checked': resume.spouse == 'なし' }">無</span></div>
                    </div>
                    <div class="support">
                        <div class="label">配偶者の扶養義務</div>
                        <div class="input"><span class="yes" :class="{'preview-is-checked': resume.duty == 'あり' }">有</span> ・ <span class="no" :class="{'preview-is-checked': resume.duty == 'なし' }">無</span></div>
                    </div>
                    </div>
                </div>
                </div>
                <div data-highlight="タップで編集" class="rirekisho-hope">
                <div class="label">本人希望欄（特に給料・職種・勤務時間・勤務地・その他について希望があれば記入）</div>
                <div class="input">
                    <pre class="">{{ resume.hope }}</pre>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!---->
        </div>
    <div @click="back" class="back_arrow">
        <span>入力画面に戻る</span>
    </div>
        <div class="preview_btn_wrap back">
            <div @click="back" class="preview_btn">
                <span>入力画面に戻る</span>
            </div>
        </div>
</div>
</template>

<script>
import { mapGetters } from 'vuex'
    export default {
    data() {
        return {
        }
    },
    mounted() {
            this.$store.dispatch('setResume',this.resume)
            this.resume.family_name = localStorage.family_name;
            this.resume.first_name = localStorage.first_name;
            this.resume.family_ruby = localStorage.family_ruby;
            this.resume.first_ruby = localStorage.first_ruby;
            this.resume.birthyear = localStorage.birthyear;
            this.resume.birthmonth = localStorage.birthmonth;
            this.resume.birthday = localStorage.birthday;
            this.$store.getters.resume.age = localStorage.age;
            this.resume.radio1 = localStorage.radio1;
            // resume2
            this.resume.post_code = localStorage.post_code;
            this.resume.address = localStorage.address;
            this.resume.address_option = localStorage.address_option;
            this.resume.address_ruby = localStorage.address_ruby;
            this.resume.post_code_add = localStorage.post_code_add;
            this.resume.address_add = localStorage.address_add;
            this.resume.address_option_add = localStorage.address_option_add;
            this.resume.address_ruby_add = localStorage.address_ruby_add;
            // resume3
            this.resume.phone = localStorage.phone;
            this.resume.email = localStorage.email;
            this.resume.phone_add = localStorage.phone_add;
            this.resume.email_add = localStorage.email_add;
            // resume4(保留)
            this.resume.url = localStorage.url;
            this.resume.image_file = localStorage.image_file;
            // resume7
            this.resume.license = localStorage.licenses;
            // resume8
            this.resume.reason = localStorage.reason;
            // resume9
            this.resume.dependent = localStorage.dependent;
            this.resume.spouse = localStorage.spouse;
            this.resume.duty = localStorage.duty;
            // resume10
            this.resume.hope = localStorage.hope;
            // resume11
            this.resume.date = localStorage.date;
            this.resume.year = localStorage.year;
            this.resume.month = localStorage.month;
            this.resume.day = localStorage.day;
        },
    computed: {
         ...mapGetters([
             'resume',
             'licenses',
             'workHistories',
             'schoolHistories',
             ]),

    },
    watch: {
    },
    methods: {
        back(){
            // 1つ前へ
            this.$router.back()
        },
    },
}
</script>