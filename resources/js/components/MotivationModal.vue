<template>
  <modal
  name="motivation-modal"
  :resizable="false"
  :scrollable="true"
  width="100%"
  height="auto"
  >
    <div class="close_btn_wrap">
      <div @click="hide" class="close_btn">
        <img src="/images/close_btn.svg" alt="閉じる">
      </div>
    </div>
    <h3 class="modal_header">例文を選択</h3>
    <div class="modal_note_wrap">
        <p class="modal_desc">選択した例文が追加されます。</p>
        <p class="red modal_head_note">※例文を選択すると現在入力中の文章は上書きされます。</p>
    </div>
    <ul class="modal_sample_list">
      <li @click="active1" :class="{border_red: isActive1}" class="modal_sample_content">現在は〇〇業界で販売業に従事しています。同じ販売でも、高額商材を扱い、難易度の高い営業活動を行うことで、営業スキルを磨きたいと考え転職活動を始めました。物件の購入はお客様の人生においての一大イベントになるため、最適な提案やサポートによって、より良い選択をするためのお手伝いがしたいと考えて不動産販売を志望しています。お客さまにご満足いただける対応を心がけ、信頼関係を築くことによって貴社の売上に貢献していきたいと考えています。</li>
      <li  @click="active2" :class="{border_red: isActive2}" class="modal_sample_content">現職では賃貸仲介営業に従事していますが、より営業としてのキャリアアップを目指すため、転職を決断しました。営業として成長するため、店舗運営に挑戦したいと感じ、貴社を志望しています。これまでは個人の目標に対し取り組んでいたところを、店舗全体の目標を達成するために社員をマネジメントする仕事に魅力を感じています。同じ賃貸仲介営業として、お客様に最適な物件を紹介してきた提案力を活かし、契約を獲得していくことで貴社の売上に貢献したいと考えています。また、店舗の営業担当に営業スキルを広めていくことで、店舗の目標達成にも繋げていきます。</li>
      <li  @click="active3" :class="{border_red: isActive3}" class="modal_sample_content">自分の〇〇という経験・スキルを活かして貴社に貢献できると考え、この度応募いたしました。今までの経験を活かしながら新しい業務にもチャレンジし、貴社の事業や組織の成長に貢献しならがら自分も成長したいと考えております。</li>
    </ul>
      <div class="modal_footer">
          <div :class="{active: isActive1 || isActive2 || isActive3}" class="modal_add_btn"><span>例文を追加</span></div>
          <div @click="hide" class="modal_close_btn">閉じる</div>
      </div>
  </modal>
</template>
<script>
export default {
  created() {
  },
  computed: {
  },
  props: {
  },
  data() {
    return {
        isActive1: false,
        isActive2: false,
        isActive3: false,
    }
  },
  methods: {
        hide () {
          this.$modal.hide('motivation-modal');
        },
        active1 () {
          this.isActive1 = !this.isActive1;
          this.isActive2 = false;
          this.isActive3 = false;
        },
        active2 () {
          this.isActive1 = false;
          this.isActive2 = !this.isActive2;
          this.isActive3 = false;
        },
        active3 () {
          this.isActive1 = false;
          this.isActive2 = false;
          this.isActive3 = !this.isActive3;
        }
  }
}
</script>