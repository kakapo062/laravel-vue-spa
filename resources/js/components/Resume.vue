<template>
<div class="wrap">
    <div class="resume_wrap">
        <div class="step_nav_wrap">
            <ul class="step_nav_list">
                <li class="active">
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
                <li>
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
        <h3 class="resume_step_title">プロフィール</h3>
        <div class="resume_step_note_wrap">
            <p class="resume_step_note">※不明な点がありましたら未記入のまま次の項目へお進みください。</p>
        </div>
        <div class="resume_form_wrap">
            <div class="form_inner">
                <div class="item_wrap">
                    <p class="item_name">氏名</p>
                    <div class="item_body flex">
                        <div class="input_wrap">
                            <el-input v-model="family_name" type="text" autocomplete="off" placeholder="山田" title="姓" class="input_inner">
                                </el-input>
                        </div>
                        <div class="input_wrap">
                            <el-input v-model="first_name" type="text" autocomplete="off" placeholder="太郎" title="名" class="input_inner">
                                </el-input>
                        </div>
                    </div>
                </div>
                <div class="item_wrap">
                    <p class="item_name">ふりがな</p>
                    <div class="item_body flex">
                        <div class="input_wrap">
                            <el-input v-model="family_ruby" autocomplete="off" placeholder="やまだ" title="せい" class="input_inner">
                            </el-input>
                        </div>
                        <div class="input_wrap">
                            <el-input v-model="first_ruby" type="text" autocomplete="off" placeholder="たろう" title="め" class="input_inner">
                                </el-input>
                        </div>
                    </div>
                </div>
                <div class="item_wrap">
                    <p class="item_name">生年月日</p>
                    <div class="item_body flex">
                        <div class="input_wrap input_year">
                        <el-select v-model="birthyear" placeholder="1996" class="input_year">
                            <el-option
                            v-for="item in birthyears"
                            :key="item.value"
                            :label="item.label"
                            :value="item.value">
                            </el-option>
                        </el-select>
                        </div>
                        <span>年</span>
                        <div class="input_wrap">
                        <el-select v-model="birthmonth" placeholder="1" class="input_month">
                            <el-option
                            v-for="item in birthmonths"
                            :key="item.value"
                            :label="item.label"
                            :value="item.value">
                            </el-option>
                        </el-select>
                        </div>
                        <span>月</span>
                        <div class="input_wrap">
                        <el-select v-model="birtyday" placeholder="1" class="input_day">
                            <el-option
                            v-for="item in birthdays"
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
                    <p class="item_name">年齢</p>
                    <div class="item_body flex">
                        <div class="input_wrap input_age">
                            <el-input v-model="age" autocomplete="off" placeholder="25" title="年齢" class="input_inner">
                            </el-input>
                        </div>
                        <span>歳</span>
                    </div>
                </div>
                <div class="item_wrap">
                    <p class="item_name">性別</p>
                    <div class="item_body flex flex_column_2">
                        <el-radio v-model="radio1" label="男性" border>男性</el-radio>
                        <el-radio v-model="radio1" label="女性" border>女性</el-radio>
                        <el-radio v-model="radio1" label="記入しない" border>記入しない</el-radio>
                    </div>
                </div>
            </div>
        </div>
        <div class="pager_wrap">
            <div class="pager_inner">
                <router-link v-bind:to="{name: 'resume2'}" class="next_step_btn"><span>次へ</span></router-link>
                <router-link v-bind:to="{name: 'index'}" class="back_step_btn"><span>戻る</span></router-link>
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

<script>
    export default {
        data() {
            return {
                family_name: '',
                first_name: '',
                family_ruby: '',
                first_ruby: '',
                age: '',
                birthyears: [
                    {
                    value: '010',
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
                birthyear: '',
                birhtmonth: '',
                birhtday: '',
                radio1: '男性',
                radio2: '女性',
                radio3: '記入しない',
            }
        },
        mounted() {
        },
    }
</script>
