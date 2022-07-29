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
                <li class="active">
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
        <h3 class="resume_step_title">証明写真</h3>
        <div class="resume_step_note_wrap">
            <p class="resume_step_note">※不明な点がありましたら未記入のまま次の項目へお進みください。</p>
        </div>
        <div class="resume_form_wrap">
            <div class="form_inner">
                <div class="item_wrap">
                    <div class="item_body">
                        <div class="photo_upload_wrap">
                            <div class="photo_upload_image preview_box">
                                <img class="image_preview" :src="resume.url" @error="noImage" alt="証明写真">
                            </div>
                            <label class="navy_btn_wrap upload_label hover_up" v-show="resume.url == ''">
                                <input type="file" accept="image/*" name="avatar" class="none" ref="preview" @change="upFile()">写真を登録する
                            </label>
                            <div class="navy_btn_wrap hover_up" v-if="resume.url !== ''" @click="resetFile()">
                                <div class="navy_btn delete">写真を削除する</div>
                            </div>
                        </div>
                    </div>
                </div>
                <el-collapse v-model="activeNames" @change="handleChange" class="accordion">
                    <el-collapse-item title="使用する写真について" name="1" class="accordion_title">
                        <ul class="accordion_content_list">
                            <li class="accordion_content_item">・撮影から3カ月以内の写真を使用してください。</li>
                            <li class="accordion_content_item">・胸から上の画像を使用してください。</li>
                            <li class="accordion_content_item">・写真の背景は白、青、グレーを選択してください。</li>
                            <li class="accordion_content_item">・縦40mm / 横30mmのサイズで撮影、またはトリミングしてください。</li>
                        </ul>
                        <p class="content_normal_text">▼良い例</p>
                        <div class="photo_img_wrap flex">
                            <div class="photo_img">
                                <img src="/images/man_images@2x.png" alt="男性写真">
                            </div>
                            <div class="photo_img">
                                <img src="/images/woman_images@2x.png" alt="女性写真">
                            </div>
                        </div>
                    </el-collapse-item>
                    <el-collapse-item title="スマホアプリで履歴書写真を撮影する場合" name="2" class="accordion_title">
                        <p class="content_normal_text">スマートフォンのアプリ「履歴書カメラ」で履歴書写真を撮影いただけます。<br>無料でご利用いただけますのでご活用ください。</p>
                        <div class="app_img_wrap flex">
                            <div class="photo_app">
                                <a href="https://apps.apple.com/us/app/%E5%B1%A5%E6%AD%B4%E6%9B%B8%E3%82%AB%E3%83%A1%E3%83%A9/id919409463?itsct=apps_box_badge&amp;itscg=30200" target="_blank" class="apple_link">
                                    <img src="https://tools.applemediaservices.com/api/badges/download-on-the-app-store/black/en-us?size=250x83&amp;releaseDate=1421712000&h=98213d52eb3e8fbcbb8e7c311203c350" alt="Download on the App Store">
                                </a>
                            </div>
                            <div class="photo_app">
                                <a href='https://play.google.com/store/apps/details?id=jp.gr.java_conf.siranet.idphoto&hl=ja&gl=US&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1' target="_blank" class="google_link">
                                    <img src='https://play.google.com/intl/ja/badges/static/images/badges/ja_badge_web_generic.png' alt='Google Play で手に入れよう'>
                                </a>
                            </div>
                        </div>
                    </el-collapse-item>
                </el-collapse>
            </div>
        </div>
        <div class="pager_wrap">
            <div class="pager_inner">
                <router-link v-bind:to="{name: 'resume5'}" class="next_step_btn"><span>次へ</span></router-link>
                <router-link v-bind:to="{name: 'resume3'}" class="back_step_btn"><span>戻る</span></router-link>
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
            activeNames: [''],
            resume: {
                url: '',
                image_file: ''
            },
        }
    },
    mounted() {
        this.$store.dispatch('setResume',this.resume);
    },
    methods: {
        active() {
            this.isActive = !this.isActive;
            this.isDisplay = !this.isDisplay;
        },
        noImage(element) {
          element.target.src = '/images/profile_sample.jpeg'
        },
         handleChange(val) {//アコーディオン
            console.log(val);
        },
        upFile() {
            const file = this.$refs.preview.files[0];
            this.resume.image_file = this.$refs.preview.files; //そのままfilesプロパティを入れ込む
            this.resume.url = URL.createObjectURL(file);
            this.$store.dispatch('setResume',this.resume);
        },

        resetFile() {
            const input = this.$refs.preview;
            input.type = 'text';
            input.type = 'file';
            this.resume.url = '';
            this.$store.dispatch('setResume',this.resume);
        },
    },
}
</script>