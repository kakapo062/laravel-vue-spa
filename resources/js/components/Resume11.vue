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
                <router-link v-bind:to="{name: 'resume12'}" class="next_step_btn"><span>次へ</span></router-link>
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
    export default {
    data() {
        return {
            resume: {
                date: '',
                year: '',
                month: '',
                day: '',
            },
        }
    },
    mounted() {
        if (localStorage.date) {
            this.resume.date = localStorage.date;
            this.$store.dispatch('setResume',this.resume)
        }
        if (localStorage.year) {
            this.resume.year = localStorage.year;
            this.$store.dispatch('setResume',this.resume)
        }
        if (localStorage.month) {
            this.resume.month = localStorage.month;
            this.$store.dispatch('setResume',this.resume)
        }
        if (localStorage.day) {
            this.resume.day = localStorage.day;
            this.$store.dispatch('setResume',this.resume)
        }
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
                localStorage.date = this.resume.date;
                localStorage.year = this.resume.year;
                localStorage.month = this.resume.month;
                localStorage.day = this.resume.day;
            }
        },
    },
      computed:{
  }
}
</script>