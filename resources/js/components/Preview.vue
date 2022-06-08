<template>
<div class="wrap">
    <div class="resume_wrap">
        <h3 class="resume_step_title">プレビュー</h3>
        <div class="resume_step_note_wrap">
            <p class="resume_step_note">※レイアウト崩れがないかご確認ください。ダウンロード後もデータ上で編集することが可能です。</p>
        </div>
    </div>
    <p>苗字：{{ resume.family_name }}</p>
    <p>名前：{{ resume.first_name }}</p>
    <p>苗字(ふりがな)：{{ resume.family_ruby }}</p>
    <p>名前(ふりがな)：{{ resume.first_ruby }}</p>
    <p>生年月日：{{ resume.birthyear }}年{{ resume.birthmonth }}月{{ resume.birthday }}日</p>
    <p>年齢：{{ resume.age }}</p>
    <p>性別：{{ resume.radio1 }}</p>
    <div class="preview_btn_wrap">
        <div @click="back" class="preview_btn">
            <span>入力画面に戻る</span>
        </div>
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
    computed: {
        resume(){
                return this.$store.state.resume;
            },
    },
    methods: {
        active(){
            this.isActive = !this.isActive;
            this.isDisplay = !this.isDisplay;
        },
        back(){
            // 1つ前へ
            this.$router.back()
        },
    }
}
</script>