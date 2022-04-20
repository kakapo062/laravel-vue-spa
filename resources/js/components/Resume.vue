<template>
<div class="wrap">
    <div class="resume_wrap">
        <div class="step_nav_wrap">
            <ul class="step_nav_list">
                <li class="active">
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
        <h3 class="resume_step_title">プロフィール</h3>
        <div class="resume_step_note_wrap">
            <p class="resume_step_note">※不明な点がありましたら未記入のまま次の項目へお進みください。</p>
        </div>
        <div class="resume_form_wrap">
            <div class="form_inner">
                <div class="item_wrap">
                    <p class="item_name">氏名</p>
                    <div class="item_body flex">
                        <div class="input_wrap">
                            <input type="text" autocomplete="off" placeholder="山田" title="姓" class="input_inner">
                        </div>
                        <div class="input_wrap">
                            <input type="text" autocomplete="off" placeholder="太郎" title="名" class="input_inner">
                        </div>
                    </div>
                </div>
                <div class="item_wrap">
                    <p class="item_name">ふりがな</p>
                    <div class="item_body flex">
                        <div class="input_wrap">
                            <el-input v-model="ruby" autocomplete="off" placeholder="やまだ" title="せい" class="input_inner">
                            </el-input>
                        </div>
                        <div class="input_wrap">
                            <input type="text" autocomplete="off" placeholder="たろう" title="め" class="input_inner">
                        </div>
                    </div>
                </div>
                <div class="item_wrap">
                    <p class="item_name">生年月日</p>
                    <div class="item_body flex">
                        <div class="input_wrap input_year">
                            <select name="" id="">
                                <option value="2000">2000</option>
                            </select>
                        </div>
                        <span>年</span>
                        <div class="input_wrap">
                            <select name="" id="">
                                <option value="1">1</option>
                            </select>
                        </div>
                        <span>月</span>
                        <div class="input_wrap">
                            <select name="" id="">
                                <option value="1">1</option>
                            </select>
                        </div>
                        <span>日</span>
                    </div>
                </div>
                <div class="item_wrap">
                    <p class="item_name">年齢</p>
                    <div class="item_body flex">
                        <div class="input_wrap input_age">
                            <select name="" id="">
                                <option value="30">30</option>
                            </select>
                        </div>
                        <span>歳</span>
                    </div>
                </div>
                <div class="item_wrap">
                    <p class="item_name">性別</p>
                    <div class="item_body flex flex_column_2">
                        <label for="gender_male" class="form_label mr_12 mb_8">
                            <input type="radio" name="gender" value="男性" id="gender_male" class="input_radio">
                            <span class="radio_text">男性</span>
                        </label>
                        <label for="gender_female" class="form_label">
                            <input type="radio" name="gender" value="女性" id="gender_female" class="input_radio">
                            <span class="radio_text">女性</span>
                        </label>
                        <label for="gender_no_answer" class="form_label">
                            <input type="radio" name="gender" value="記入しない" id="gender_no_answer" class="input_radio">
                            <span class="radio_text">記入しない</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="pager_wrap">
            <div class="pager_inner">
                <router-link v-bind:to="{name: 'resume2'}" class="next_step_btn"><span>次へ</span></router-link>
                <router-link v-bind:to="{name: 'index'}" class="back_step_btn"><span>戻る</span></router-link>
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
                ruby: '',
            }
        },
        mounted() {
        },
    }
</script>
