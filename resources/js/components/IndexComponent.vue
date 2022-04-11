<template>
    <div class="">
            <div class="fv">
                <div class="fv_inner">
                    <div class="fv_text_wrap">
                        <p class="fv_small_title"><span class="red">スマホ・パソコン</span>で簡単作成！</p>
                        <h2 class="fv_main_title">履歴書<br>職務経歴書</h2>
                        <p class="fv_sub_title"><span class="red">オンライン作成</span>ツール</p>
                    </div>
                    <div class="fv_btn_wrap">
                        <a href="#top_form" class="fv_btn"><span>履歴書・職務経歴書を作る</span></a>
                    </div>
                </div>
            </div>
       
            <div  id="top_form" class="main_body">
                <div class="main_body_inner">
                    <h3 class="main_body_title">
                        <span class="red">ガイド</span>に沿ってフォームに
                        <br><span class="red">入力するだけ</span>
                    </h3>
                    <p class="main_desc">履歴書・職務経歴書のPDF/Wordデータを
                        <br>スマホやパソコンで簡単に作成することができます。
                   </p>
                   <div class="top_form_wrap">
                       <div class="top_form_item">
                           <p class="top_form_title">履歴書（JIS規格）</p>
                           <div class="top_form_img_wrap">
                               <img src="/images/document01@2x.png" alt="履歴書（JIS規格）" class="top_form_img">
                           </div>
                           <router-link v-bind:to="{name: 'resume'}" class="top_form_btn"><span>履歴書を作る</span></router-link>
                       </div>
                       <div class="top_form_item">
                           <p class="top_form_title">職務経歴書</p>
                           <div class="top_form_img_wrap">
                               <img src="/images/document02@2x.png" alt="職務経歴書" class="top_form_img">
                           </div>
                           <a href="#" class="top_form_btn"><span>職務経歴書を作る</span></a>
                       </div>
                   </div>
                   <div class="guide">
                       <h3 class="guide_title">使い方ガイド</h3>
                       <div class="guide_item">
                           <div class="guide_img_wrap guide_img_wrap01">
                               <img src="/images/step01_images@2x.png" alt="step1イメージ画像" class="guide_img">
                           </div>
                           <div class="step_text_img/wrap">
                               <img src="/images/step_01@2x.png" alt="step01" class="step_text_img">
                           </div>
                           <p class="guide_item_head">作成する履歴書を選択</p>
                           <p class="guide_item_content">まずは作成したい書類を選びましょう。
                           <br>選択した種類によって、フォームの項目や書類のレイアウトが変わります。
                           <br>パソコンがなくても、スマホさえあれば今すぐ作成が可能です。
                           </p>
                       </div>
                       <div class="guide_item">
                           <div class="guide_img_wrap guide_img_wrap02">
                               <img src="/images/step02_images@2x.png" alt="step2イメージ画像" class="guide_img">
                           </div>
                           <div class="step_text_img/wrap">
                               <img src="/images/step_02@2x.png" alt="step02" class="step_text_img">
                           </div>
                           <p class="guide_item_head">フォームに入力</p>
                           <p class="guide_item_content">ガイドに沿って、フォームに入力してください。不明な点がありましたら、未記入のまま次の項目へお進みください。
                           <br>画面下の「プレビュー」ボタンをクリックすると、
                           <br>作成途中の書類を確認することができます。
                           </p>
                           <p class="guide_note">※入力した情報は端末のブラウザ(Safari・Chrome等)の履歴に保存されます。ブラウザを閉じてもサイトに再度アクセスした際に続きを入力できます。</p>
                       </div>
                       <div class="guide_item">
                           <div class="guide_img_wrap guide_img_wrap03">
                               <img src="/images/step03_images@2x.png" alt="step3イメージ画像" class="guide_img">
                           </div>
                           <div class="step_text_img/wrap">
                               <img src="/images/step_03@2x.png" alt="step03" class="step_text_img">
                           </div>
                           <p class="guide_item_head">メールアドレス宛にデータ送信</p>
                           <p class="guide_item_content">データ送信画面でメールアドレスを入力すると、作成した書類（PDF/Wordデータ）を自分のメールアドレス宛に送信することができます。
                           <br>メールアドレスをお持ちでない方は、宅建Jobエージェントの公式LINEからデータをお送りすることも可能です。
                           </p>
                       </div>
                   </div>
                </div>
            </div>
            <div class="top_form_wrap second_form_wrap">
               <div class="top_form_item">
                   <p class="top_form_title">履歴書（JIS規格）</p>
                   <div class="top_form_img_wrap">
                       <img src="/images/document01@2x.png" alt="履歴書（JIS規格）" class="top_form_img">
                   </div>
                   <router-link v-bind:to="{name: 'resume'}" class="top_form_btn"><span>履歴書を作る</span></router-link>
               </div>
               <div class="top_form_item">
                   <p class="top_form_title">職務経歴書</p>
                   <div class="top_form_img_wrap">
                       <img src="/images/document02@2x.png" alt="職務経歴書" class="top_form_img">
                   </div>
                   <a href="#" class="top_form_btn"><span>職務経歴書を作る</span></a>
               </div>
           </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
