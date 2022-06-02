<template>
<div class="wrap">
    <div class="resume_wrap">
        <h3 class="resume_step_title">作成日</h3>
        <div class="resume_step_note_wrap">
        </div>
        <div class="resume_form_wrap">
            <div class="form_inner">
            <el-date-picker
                v-model="date"
                type="date"
                placeholder="作成日を選択します"
                class="date_input"
            >
            </el-date-picker>
            </div>
        </div>
        <div class="pager_wrap">
            <div class="pager_inner">
                <router-link v-bind:to="{name: 'resume12'}" class="next_step_btn"><span>データを保存する</span></router-link>
                <router-link v-bind:to="{name: 'resume10'}" class="back_step_btn"><span>戻る</span></router-link>
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
            date: '',
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