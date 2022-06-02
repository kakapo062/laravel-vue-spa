<template>
<div class="wrap">
    <div class="resume_wrap">
        <h3 class="resume_step_title">プレビュー</h3>
        <div class="resume_step_note_wrap">
            <p class="resume_step_note">※レイアウト崩れがないかご確認ください。ダウンロード後もデータ上で編集することが可能です。</p>
        </div>
        <div class="resume_form_wrap">
            <div class="form_inner">
                <p class="small_note_text">給与・勤務時間・勤務地など希望があれば入力しましょう</p>
            </div>
        </div>
    </div>
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