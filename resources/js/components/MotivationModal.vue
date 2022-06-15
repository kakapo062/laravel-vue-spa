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
      <li
        v-for="(text, index) in resumes"
        :key="index"
        :class="{border_red: activeIndex === index}"
        class="modal_sample_content"
        @click="activeIndex = index">{{ text }}</li>
    </ul>
      <div class="modal_footer">
          <div @click="add" :class="{active: activeIndex !== undefined}" class="modal_add_btn"><span>例文を追加</span></div>
          <div @click="hide" class="modal_close_btn">閉じる</div>
      </div>
  </modal>
</template>
<script>
export default {
  data() {
    return {
      resumes: [
        '現在は〇〇業界で販売業に従事しています。\n同じ販売でも、高額商材を扱い、難易度の高い営業活動を行うことで、営業スキルを磨きたいと考え転職活動を始めました。\n物件の購入はお客様の人生においての一大イベントになるため、最適な提案やサポートによって、より良い選択をするためのお手伝いがしたいと考えて不動産販売を志望しています。\nお客さまにご満足いただける対応を心がけ、信頼関係を築くことによって貴社の売上に貢献していきたいと考えています。',
        '現職では賃貸仲介営業に従事していますが、より営業としてのキャリアアップを目指すため、転職を決断しました。営業として成長するため、店舗運営に挑戦したいと感じ、貴社を志望しています。これまでは個人の目標に対し取り組んでいたところを、店舗全体の目標を達成するために社員をマネジメントする仕事に魅力を感じています。同じ賃貸仲介営業として、お客様に最適な物件を紹介してきた提案力を活かし、契約を獲得していくことで貴社の売上に貢献したいと考えています。また、店舗の営業担当に営業スキルを広めていくことで、店舗の目標達成にも繋げていきます。',
        '自分の〇〇という経験・スキルを活かして貴社に貢献できると考え、この度応募いたしました。\n今までの経験を活かしながら新しい業務にもチャレンジし、貴社の事業や組織の成長に貢献しならがら自分も成長したいと考えております。',
      ],
      activeIndex: undefined,
    }
  },
  computed: {
  },
  methods: {
        hide () {
          this.$modal.hide('motivation-modal');
        },
        add() {
          this.$store.dispatch('setResume',{
            reason: this.resumes[this.activeIndex],
          });
          this.hide();
        },
  }
}
</script>