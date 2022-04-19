<template>
  <modal
  name="academy-modal"
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
    <h3 class="modal_header">学歴を入力</h3>
    <div class="modal_note_wrap">
        <p class="modal_desc">生年月日と在籍年数を元に、入学・卒業年を自動計算します。</p>
    </div>
    <div class="item_wrap">
        <p class="item_name">生年月日</p>
        <div class="item_body flex">
            <div class="input_wrap input_year">
                <select name="" id="">
                    <option value="2000">2000</option>
                </select>
            </div>
            <span>年</span>
            <div class="input_wrap">
                <select name="" id="">
                    <option value="1">1</option>
                </select>
            </div>
            <span>月</span>
            <div class="input_wrap">
                <select name="" id="">
                    <option value="1">1</option>
                </select>
            </div>
            <span>日</span>
        </div>
    </div>
    <div class="item_wrap">
        <p class="item_name">最終学歴</p>
        <div class="item_body">
            <div class="input_wrap input_age">
                <select name="" id="">
                    <option value="30">30</option>
                </select>
            </div>
            <span>歳</span>
        </div>
    </div>
      <div class="modal_footer">
          <div @click="add" class="modal_add_btn active"><span>この内容で追加</span></div>
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
          this.$modal.hide('academy-modal');
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
        },
        add() {
              this.$modal.hide('academy-modal');
        },
  }
}
</script>