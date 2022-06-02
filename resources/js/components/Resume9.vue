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
                            <select name="" id="">
                                <option value="1">1</option>
                            </select>
                        </div>
                        <span>人</span>
                    </div>
                </div>
                <div class="item_wrap">
                    <p class="item_name">配偶者</p>
                    <div class="item_body flex flex_column_2">
                        <label for="partner_yes" class="form_label mr_12 mb_8">
                            <input type="radio" name="partner" value="配偶者あり" id="partner_yes" class="input_radio">
                            <span class="radio_text">あり</span>
                        </label>
                        <label for="partner_no" class="form_label">
                            <input type="radio" name="partner" value="配偶者なし" id="partner_no" class="input_radio">
                            <span class="radio_text">なし</span>
                        </label>
                    </div>
                </div>
                <div class="item_wrap">
                    <p class="item_name">配偶者の扶養義務</p>
                    <div class="item_body flex flex_column_2">
                        <label for="duty_on" class="form_label mr_12 mb_8">
                            <input type="radio" name="duty" value="扶養義務あり" id="duty_on" class="input_radio">
                            <span class="radio_text">あり</span>
                        </label>
                        <label for="duty_no" class="form_label">
                            <input type="radio" name="duty" value="扶養義務なし" id="duty_no" class="input_radio">
                            <span class="radio_text">なし</span>
                        </label>
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
        }
    },
    methods: {
        active: function(){
            this.isActive = !this.isActive;
            this.isDisplay = !this.isDisplay;
    }
    }
}
</script>