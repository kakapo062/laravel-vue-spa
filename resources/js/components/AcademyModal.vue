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
            <el-select v-model="resume.birthyear" @change="setResume()" placeholder="1996" class="input_year">
                <el-option
                v-for="item in resume.birthyears"
                :key="item.value"
                :label="item.label"
                :value="item.value">
                </el-option>
            </el-select>
            </div>
            <span>年</span>
            <div class="input_wrap">
            <el-select v-model="resume.birthmonth" @change="setResume()" placeholder="1" class="input_month">
                <el-option
                v-for="item in resume.birthmonths"
                :key="item.value"
                :label="item.label"
                :value="item.value">
                </el-option>
            </el-select>
            </div>
            <span>月</span>
            <div class="input_wrap">
            <el-select v-model="resume.birthday" @change="setResume()" placeholder="1" class="input_day">
                <el-option
                v-for="item in resume.birthdays"
                :key="item.value"
                :label="item.label"
                :value="item.value">
                </el-option>
            </el-select>
            </div>
            <span>日</span>
        </div>
    </div>
    <div class="item_wrap">
        <p class="item_name">最終学歴</p>
        <div class="item_body">
            <div class="input_wrap final_input">
                <el-select v-model="resume.final_education" @change="setResume()" placeholder="選択してください" class="">
                    <el-option
                    v-for="item in resume.final_educations"
                    :key="item.value"
                    :label="item.label"
                    :value="item.value">
                    </el-option>
                </el-select>
            </div>
        </div>
    </div>
    <div class="education_auto_wrap">
      <div class="education_form_item">
        <p class="education_form_title">高等学校</p>
            <el-input
            v-model="resume.highscool_name"
            @input="setResume()"
            autocomplete="off"
            placeholder="例）〇〇高等学校 普通科"
            title="高等学校"
            class="input_inner">
            </el-input>
            <div class="item_body flex">
            <div class="input_year">
            <el-select v-model="resume.highschool_period" @change="setResume()" placeholder="3" class="select_period">
                <el-option
                v-for="item in resume.highschool_periods"
                :key="item.value"
                :label="item.label"
                :value="item.value">
                </el-option>
            </el-select>
            </div>
            <span class="edu_span">年間在籍</span>
            <div class="input_wrap">
            <el-select v-model="resume.highschool_state" @change="setResume()" placeholder="卒業" class="select_state">
                <el-option
                v-for="item in resume.highschool_states"
                :key="item.value"
                :label="item.label"
                :value="item.value">
                </el-option>
            </el-select>
            </div>
        </div>
      </div>
      <div class="education_form_item">
        <p class="education_form_title">高校卒業後（予備校・浪人期間 等）</p>
            <div class="item_body flex">
            <div class="input_year">
            <el-select v-model="resume.free_time" @change="setResume()" placeholder="0" class="select_period">
                <el-option
                v-for="item in resume.free_times"
                :key="item.value"
                :label="item.label"
                :value="item.value">
                </el-option>
            </el-select>
            </div>
            <span>年間</span>
        </div>
      </div>
      <div class="education_form_item">
        <p class="education_form_title">大学</p>
        <el-input
        v-model="resume.highscool_name"
        @input="setResume()"
        autocomplete="off"
        placeholder="例）〇〇大学 〇〇学部 〇〇学科"
        title="大学"
        class="input_inner edu_name">
        </el-input>
        <div class="item_body flex">
          <div class="input_year">
          <el-select v-model="resume.univ_period" @change="setResume()" placeholder="4" class="select_period">
              <el-option
              v-for="item in resume.univ_periods"
              :key="item.value"
              :label="item.label"
              :value="item.value">
              </el-option>
          </el-select>
          </div>
          <span class="edu_span">年間在籍</span>
          <div class="input_wrap">
          <el-select v-model="resume.univ_state" @change="setResume()" placeholder="卒業" class="select_state">
              <el-option
              v-for="item in resume.univ_states"
              :key="item.value"
              :label="item.label"
              :value="item.value">
              </el-option>
          </el-select>
          </div>
        </div>
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
  data() {
    return {
        isActive1: false,
        isActive2: false,
        isActive3: false,
        resume: {
            birthyear: '',
            birthmonth: '',
            birthday: '',
            final_education: '',
            birthyears: [
                {
                value: '2010',
                label: '2010'
                },
                {
                value: '2009',
                label: '2009'
                },
                {
                value: '2008',
                label: '2008'
                },
                {
                value: '2007',
                label: '2007'
                },
                {
                value: '2006',
                label: '2006'
                },
                {
                value: '2005',
                label: '2005'
                },
                {
                value: '2004',
                label: '2004'
                },
                {
                value: '2003',
                label: '2003'
                },
                {
                value: '2002',
                label: '2002'
                },
                {
                value: '2001',
                label: '2001'
                },
                {
                value: '2000',
                label: '2000'
                },
                {
                value: '1999',
                label: '1999'
                },
                {
                value: '1998',
                label: '1998'
                },
                {
                value: '1997',
                label: '1997'
                },
                {
                value: '1996',
                label: '1996'
                },
                {
                value: '1995',
                label: '1995'
                },
                {
                value: '1994',
                label: '1994'
                },
                {
                value: '1993',
                label: '1993'
                },
                {
                value: '1992',
                label: '1992'
                },
                {
                value: '1991',
                label: '1991'
                },
                {
                value: '1990',
                label: '1990'
                },
                {
                value: '1989',
                label: '1989'
                },
                {
                value: '1988',
                label: '1988'
                },
                {
                value: '1987',
                label: '1987'
                },
                {
                value: '1986',
                label: '1986'
                },
                {
                value: '1985',
                label: '1985'
                },
                {
                value: '1984',
                label: '1984'
                },
                {
                value: '1983',
                label: '1983'
                },
                {
                value: '1982',
                label: '1982'
                },
                {
                value: '1981',
                label: '1981'
                },
                {
                value: '1980',
                label: '1980'
                },
                {
                value: '1979',
                label: '1979'
                },
                {
                value: '1978',
                label: '1978'
                },
                {
                value: '1977',
                label: '1977'
                },
                {
                value: '1976',
                label: '1976'
                },
                {
                value: '1975',
                label: '1975'
                },
                {
                value: '1974',
                label: '1974'
                },
                {
                value: '1973',
                label: '1973'
                },
                {
                value: '1972',
                label: '1972'
                },
                {
                value: '1971',
                label: '1971'
                },
                {
                value: '1970',
                label: '1970'
                },
                {
                value: '1969',
                label: '1969'
                },
                {
                value: '1968',
                label: '1968'
                },
                {
                value: '1967',
                label: '1967'
                },
                {
                value: '1966',
                label: '1966'
                },
                {
                value: '1965',
                label: '1965'
                },
                {
                value: '1964',
                label: '1964'
                },
                {
                value: '1963',
                label: '1963'
                },
                {
                value: '1962',
                label: '1962'
                },
                {
                value: '1961',
                label: '1961'
                },
                {
                value: '1960',
                label: '1960'
                },
                {
                value: '1959',
                label: '1959'
                },
                {
                value: '1958',
                label: '1958'
                },
                {
                value: '1957',
                label: '1957'
                },
                {
                value: '1956',
                label: '1956'
                },
                {
                value: '1955',
                label: '1955'
                },
                {
                value: '1954',
                label: '1954'
                },
                {
                value: '1953',
                label: '1953'
                },
                {
                value: '1952',
                label: '1952'
                },
                {
                value: '1951',
                label: '1951'
                },
                {
                value: '1950',
                label: '1950'
                },
                {
                value: '1949',
                label: '1949'
                }
            ],
            birthmonths: [
            {
                value: '1',
                label: '1'
            },
            {
                value: '2',
                label: '2'
            },
            {
                value: '3',
                label: '3'
            },
            {
                value: '4',
                label: '4'
            },
            {
                value: '5',
                label: '5'
            },
            {
                value: '6',
                label: '6'
            },
            {
                value: '7',
                label: '7'
            },
            {
                value: '8',
                label: '8'
            },
            {
                value: '9',
                label: '9'
            },
            {
                value: '10',
                label: '10'
            },
            {
                value: '11',
                label: '11'
            },
            {
                value: '12',
                label: '12'
            },
            ],
            birthdays: [
            {
                value: '1',
                label: '1'
            },
            {
                value: '2',
                label: '2'
            },
            {
                value: '3',
                label: '3'
            },
            {
                value: '4',
                label: '4'
            },
            {
                value: '5',
                label: '5'
            },
            {
                value: '6',
                label: '6'
            },
            {
                value: '7',
                label: '7'
            },
            {
                value: '8',
                label: '8'
            },
            {
                value: '9',
                label: '9'
            },
            {
                value: '10',
                label: '10'
            },
            {
                value: '11',
                label: '11'
            },
            {
                value: '12',
                label: '12'
            },
            {
                value: '13',
                label: '13'
            },
            {
                value: '14',
                label: '14'
            },
            {
                value: '15',
                label: '15'
            },
            {
                value: '16',
                label: '16'
            },
            {
                value: '17',
                label: '17'
            },
            {
                value: '18',
                label: '18'
            },
            {
                value: '19',
                label: '19'
            },
            {
                value: '20',
                label: '20'
            },
            {
                value: '21',
                label: '21'
            },
            {
                value: '22',
                label: '22'
            },
            {
                value: '23',
                label: '23'
            },
            {
                value: '24',
                label: '24'
            },
            {
                value: '25',
                label: '25'
            },
            {
                value: '26',
                label: '26'
            },
            {
                value: '27',
                label: '27'
            },
            {
                value: '28',
                label: '28'
            },
            {
                value: '29',
                label: '29'
            },
            {
                value: '30',
                label: '30'
            },
            {
                value: '31',
                label: '31'
            },
            ],
            final_educations: [
              {
                value: '中学校',
                label: '中学校'
              },
              {
                value: '高等学校',
                label: '高等学校'
              },
              {
                value: '高等専門学校',
                label: '高等専門学校'
              },
              {
                value: '専門学校',
                label: '専門学校'
              },
              {
                value: '短期大学',
                label: '短期大学'
              },
              {
                value: '大学',
                label: '大学'
              },
              {
                value: '大学院(修士)',
                label: '大学院(修士)'
              },
              {
                value: '大学院(博士)',
                label: '大学院(博士)'
              },
            ],
            highschool_name: '',
            highschool_period: '',
            highschool_periods: [
              {
                  value: '1',
                  label: '1'
              },
              {
                  value: '2',
                  label: '2'
              },
              {
                  value: '3',
                  label: '3'
              },
              {
                  value: '4',
                  label: '4'
              },
              {
                  value: '5',
                  label: '5'
              },
              {
                  value: '6',
                  label: '6'
              },
              {
                  value: '7',
                  label: '7'
              },
              {
                  value: '8',
                  label: '8'
              },
              {
                  value: '9',
                  label: '9'
              },
              {
                  value: '10',
                  label: '10'
              },
            ],
            highschool_state: '',
            highschool_states: [
               {
                value: '卒業',
                label: '卒業'
              },
               {
                value: '在学中',
                label: '在学中'
              },
               {
                value: '卒業見込み',
                label: '卒業見込み'
              },
               {
                value: '修了',
                label: '修了'
              },
               {
                value: '中退',
                label: '中退'
              },
            ],
            free_time: '',
            free_times: [
              {
                  value: '1',
                  label: '1'
              },
              {
                  value: '2',
                  label: '2'
              },
              {
                  value: '3',
                  label: '3'
              },
              {
                  value: '4',
                  label: '4'
              },
              {
                  value: '5',
                  label: '5'
              },
              {
                  value: '6',
                  label: '6'
              },
              {
                  value: '7',
                  label: '7'
              },
              {
                  value: '8',
                  label: '8'
              },
              {
                  value: '9',
                  label: '9'
              },
              {
                  value: '10',
                  label: '10'
              },
            ],
            univ_name: '',
            univ_period: '',
            univ_periods: [
              {
                  value: '1',
                  label: '1'
              },
              {
                  value: '2',
                  label: '2'
              },
              {
                  value: '3',
                  label: '3'
              },
              {
                  value: '4',
                  label: '4'
              },
              {
                  value: '5',
                  label: '5'
              },
              {
                  value: '6',
                  label: '6'
              },
              {
                  value: '7',
                  label: '7'
              },
              {
                  value: '8',
                  label: '8'
              },
              {
                  value: '9',
                  label: '9'
              },
              {
                  value: '10',
                  label: '10'
              },
            ],
            univ_state: '',
            univ_states: [
               {
                value: '卒業',
                label: '卒業'
              },
               {
                value: '在学中',
                label: '在学中'
              },
               {
                value: '卒業見込み',
                label: '卒業見込み'
              },
               {
                value: '修了',
                label: '修了'
              },
               {
                value: '中退',
                label: '中退'
              },
            ],
        }
    }
  },
    computed: {
        getBirthyear() {
            return this.$store.getters.resume.birthyear
        },
        getBirthmonth() {
            return this.$store.getters.resume.birthmonth
        },
        getBirthday() {
            return this.$store.getters.resume.birthday
        },
    },
    watch: {
        getBirthyear(val, old) {
            this.resume.birthyear = val
        },
        getBirthmonth(val, old) {
            this.resume.birthmonth = val
        },
        getBirthday(val, old) {
            this.resume.birthday = val
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
        setResume() {
            this.$store.dispatch('setResume',this.resume)
        },
  }
}
</script>