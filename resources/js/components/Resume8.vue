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
                <li class="active">
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
        <h3 class="resume_step_title">志望動機</h3>
        <div class="resume_step_note_wrap">
            <p class="resume_step_note">※不明な点がありましたら未記入のまま次の項目へお進みください。</p>
        </div>
        <div class="resume_form_wrap">
            <div class="form_inner">
                <p class="small_note_text">応募先企業の理解度や入社意欲の高さをアピールしましょう</p>
                <div class="card_wrap">
                    <div class="card_inner">
                        <textarea
                        name=""
                        id=""
                        class="text_area reason_text_area"
                        placeholder="私は賃貸仲介営業の仕事を通じて飲食店が抱える課題解決に貢献したいと考えています。前職では飲食チェーン店のスーパーバイザーとして、一都三県に展開される店舗の経営管理をしてきた結果、店舗が利益を出すには何よりも立地が重要だと感じました。飲食店舗物件を中心に賃貸仲介事業を行う貴社は、希少性の高い店舗物件を独自に仕入れるルートを確立しており、出店計画のあるお客様との的確なマッチングを可能にしている商材力・提案力が魅力だと感じています。営業職は未経験ですが、これまで培ってきた店舗運営の経験を活かし、お客様に信頼して頂けるような関係を築いていきたいと考えています。"
                        ></textarea>
                    </div>
                </div>
                <div  @click="show" class="navy_btn_wrap">
                    <div class="navy_btn">例文を追加</div>
                </div>
                <motivation-modal />
            </div>
        </div>
        <div class="pager_wrap">
            <div class="pager_inner">
                <router-link v-bind:to="{name: 'resume9'}" class="next_step_btn"><span>次へ</span></router-link>
                <router-link v-bind:to="{name: 'resume7'}" class="back_step_btn"><span>戻る</span></router-link>
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

<script>import { functionExpression } from "@babel/types";

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
        show(){
        this.$modal.show('motivation-modal');
        },
        hide(){
        this.$modal.hide('motivation-modal');
        }
    }
}
</script>