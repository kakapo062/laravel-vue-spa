<template>
<div class="wrap">
    <div class="resume_wrap">
        <div class="thanks_wrap">
            <h3 class="thanks_header">書類の送信が完了しました</h3>
            <p class="thanks_text">ご入力いただいたメールアドレスに書類データを送信しました。<br>メールアドレスをお持ちでない方は、宅建Jobエージェントの公式LINEよりデータをお送りすることも可能です。<br>ご希望の場合はLINEよりご連絡ください。</p>
        </div>
        <div class="pager_wrap">
            <div class="pager_inner">
                <router-link v-bind:to="{name: 'index'}" class="back_step_btn top_back_btn"><span>トップページに戻る</span></router-link>
            </div>
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
        active: function(){
            this.isActive = !this.isActive;
            this.isDisplay = !this.isDisplay;
    }
    }
}
</script>