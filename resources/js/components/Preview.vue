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
                <div class="card_wrap">
                    <div class="card_inner">
                        <textarea
                        name=""
                        id=""
                        class="text_area reason_text_area"
                        placeholder="入力例：貴社の規定に従います。現在就業中のため、平日は17時以降にお電話頂けると幸いです。"
                        ></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="pager_wrap">
            <div class="pager_inner">
                <router-link v-bind:to="{name: 'resume11'}" class="next_step_btn"><span>次へ</span></router-link>
                <router-link v-bind:to="{name: 'resume9'}" class="back_step_btn"><span>戻る</span></router-link>
            </div>
        </div>
    </div>
    <div class="preview_btn_wrap">
        <router-link v-bind:to="{name: 'index'}" class="preview_btn">
            <span>入力画面に戻る</span>
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