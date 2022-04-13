<template>
<div class="wrap">
    <div class="resume_wrap">
        <div class="step_nav_wrap">
            <ul class="step_nav_list">
                <li>
                <span>1</span>
                </li>
                <li>
                <span>2</span>
                </li>
                <li>
                <span>3</span>
                </li>
                <li>
                <span>4</span>
                </li>
                <li>
                <span>5</span>
                </li>
                <li>
                <span>6</span>
                </li>
                <li class="active">
                <span>7</span>
                </li>
                <li>
                <span>8</span>
                </li>
                <li>
                <span>9</span>
                </li>
                <li>
                <span>10</span>
                </li>
            </ul>
        </div>
        <h3 class="resume_step_title">免許・資格</h3>
        <div class="resume_step_note_wrap">
            <p class="resume_step_note">※不明な点がありましたら未記入のまま次の項目へお進みください。</p>
        </div>
        <div class="resume_form_wrap">
            <div class="form_inner">
                <div class="normal_text_wrap">
                    <p class="normal_text">「▲上へ」「▼下へ」ボタンをクリックして並び替え、古いものが上にくるようにしてください。</p>
                </div>
                <div class="navy_btn_wrap">
                        <div class="navy_btn">資格を追加</div>
                </div>
            </div>
        </div>
        <div class="pager_wrap">
            <div class="pager_inner">
                <router-link v-bind:to="{name: 'resume8'}" class="next_step_btn"><span>次へ</span></router-link>
                <router-link v-bind:to="{name: 'resume6'}" class="back_step_btn"><span>戻る</span></router-link>
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