<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
         <!-- Styles -->
     {{-- <link href="{{ mix('/css/app.css') }}" rel="stylesheet"> --}}
     <link href="{{ mix('css/app.css') }}" rel="stylesheet">
     <link rel="stylesheet" href="/css/reset.css" rel="stylesheet">
     <link rel="stylesheet" href="/css/style.css" rel="stylesheet">
     <link rel="stylesheet" href="/css/rirekisho.css" rel="stylesheet">
</head>
<body>
    <p>送信ボタン押下後、フォームの値をPOSTするページ</p>
    <p>トークンの値：{{$attributes['csrf-token']}}</p>
        <div class="wrap preview_wrap">
                <div id="preview-viewer" class="preview-viewer tab-content">
                    <div class="is-preview">
                    <div id="preview-page-01" class="doc-paper preview rirekisho">
                        <div class="flex">
                        <div class="rirekisho-box1">
                            <div class="rirekisho-header">
                            <div class="title">履歴書</div>
                            <div class="date"><span>年 月 日</span> 現在 </div>
                            </div>
                            <div data-highlight="タップで編集" class="rirekisho-profile">
                            <div class="ruby flex">
                                <div class="label">ふりがな</div>
                                <div class="input"></div>
                            </div>
                            <div class="name flex">
                                <div class="label">名前</div>
                                <div class="input"></div>
                            </div>
                            <div class="etc flex">
                                <div class="birthday"><span class="year"></span>年 <span class="month"></span>月 <span class="day"></span>日生（満 <span class="age"></span> 歳） </div>
                                <div class="gender"><span class="male" :class="{'preview-is-checked': resume.radio1 == '男性' }">男</span><span>・</span><span class="female" :class="{'preview-is-checked': resume.radio1 == '女性' }">女</span></div>
                            </div>
                            </div>
                        </div>
                        <div data-highlight="タップで編集" class="rirekisho-photo">
                            <div>
                            <div class="rirekisho-photo-inner">
                                <img :src="resume.url" alt="">
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="rirekisho-box2">
                        <div class="contact-information contact-main flex">
                            <div data-highlight="タップで編集" class="contact-information-address">
                            <div class="ruby flex">
                                <div class="label">ふりがな</div>
                                <div class="input"></div>
                            </div>
                            <div class="address flex">
                                <div class="label">現住所</div>
                                <div class="input">
                                <div class="postal-code">〒</div>
                                <pre></pre>
                                </div>
                            </div>
                            </div>
                            <div data-highlight="タップで編集" class="contact-information-etc">
                            <div class="tel flex">
                                <div class="label">電話</div>
                                <div class="input"></div>
                            </div>
                            <div class="email flex">
                                <div class="label">Email</div>
                                <div class="input"></div>
                            </div>
                            </div>
                        </div>
                        <div class="contact-information contact-sub flex">
                            <div class="contact-information-address">
                            <div class="ruby flex">
                                <div class="label">ふりがな</div>
                                <div class="input"></div>
                            </div>
                            <div class="address flex">
                                <div class="label">連絡先</div>
                                <div class="input">
                                <div class="postal-code">〒</div>
                                <div class="comment">(現住所以外に連絡を希望する場合のみ入力)</div>
                                <pre></pre>
                                </div>
                            </div>
                            </div>
                            <div class="contact-information-etc">
                            <div class="tel flex">
                                <div class="label">電話</div>
                                <div class="input"></div>
                            </div>
                            <div class="email flex">
                                <div class="label">Email</div>
                                <div class="input"></div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div data-highlight="タップで編集" class="rirekisho-table rirekisho-history-1">
                        <table class="">
                            <thead>
                            <tr>
                                <th>年</th>
                                <td>月</td>
                                <td>学歴・職歴</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="education">
                                <th></th>
                                <td></td>
                                <td class="">学歴</td>
                            </tr>
                            <tr class="empty">
                                <th></th>
                                <td></td>
                                <td class=""></td>
                            </tr>
                            <tr class="empty">
                                <th></th>
                                <td></td>
                                <td class=""></td>
                            </tr>
                            <tr class="empty">
                                <th></th>
                                <td></td>
                                <td class=""></td>
                            </tr>
                            <tr class="empty">
                                <th></th>
                                <td></td>
                                <td class=""></td>
                            </tr>
                            <tr class="empty">
                                <th></th>
                                <td></td>
                                <td class=""></td>
                            </tr>
                            <tr class="empty">
                                <th></th>
                                <td></td>
                                <td class=""></td>
                            </tr>
                            <tr class="empty">
                                <th></th>
                                <td></td>
                                <td class=""></td>
                            </tr>
                            <tr class="empty">
                                <th></th>
                                <td></td>
                                <td class=""></td>
                            </tr>
                            <tr class="empty">
                                <th></th>
                                <td></td>
                                <td class=""></td>
                            </tr>
                            <tr class="empty">
                                <th></th>
                                <td></td>
                                <td class=""></td>
                            </tr>
                            <tr class="empty">
                                <th></th>
                                <td></td>
                                <td class=""></td>
                            </tr>
                            <tr class="empty">
                                <th></th>
                                <td></td>
                                <td class=""></td>
                            </tr>
                            <tr class="empty">
                                <th></th>
                                <td></td>
                                <td class=""></td>
                            </tr>
                            <tr class="empty">
                                <th></th>
                                <td></td>
                                <td class=""></td>
                            </tr>
                            <tr class="empty">
                                <th></th>
                                <td></td>
                                <td class=""></td>
                            </tr>
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <div id="preview-page-02" class="doc-paper preview rirekisho">
                        <div class="rirekisho-table rirekisho-history-2">
                        <table class="">
                            <thead>
                            <tr>
                                <th>年</th>
                                <td>月</td>
                                <td>学歴・職歴</td>
                            </tr>
                            </thead>
                            <tbody>
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <tr class="empty">
                                <th></th>
                                <td></td>
                                <td class=""></td>
                            </tr>
                            <tr class="empty">
                                <th></th>
                                <td></td>
                                <td class=""></td>
                            </tr>
                            <tr class="empty">
                                <th></th>
                                <td></td>
                                <td class=""></td>
                            </tr>
                            <tr class="empty">
                                <th></th>
                                <td></td>
                                <td class=""></td>
                            </tr>
                            <tr class="empty">
                                <th></th>
                                <td></td>
                                <td class=""></td>
                            </tr>
                            <tr class="empty">
                                <th></th>
                                <td></td>
                                <td class=""></td>
                            </tr>
                            <!---->
                            </tbody>
                        </table>
                        </div>
                        <div data-highlight="タップで編集" class="rirekisho-table rirekisho-skill">
                            <tr v-for="(license, index) in licenses" v-bind:key="license.id">
                                <td></td>
                                <td></td>
                            </tr>
                        <table class="">
                            <thead>
                            <tr>
                                <th>年</th>
                                <td>月</td>
                                <td>免許・資格</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="none">
                                <th></th>
                                <td></td>
                                <td class="">なし</td>
                            </tr>
                            <tr class="empty">
                                <th></th>
                                <td></td>
                                <td class=""></td>
                            </tr>
                            <tr class="empty">
                                <th></th>
                                <td></td>
                                <td class=""></td>
                            </tr>
                            <tr class="empty">
                                <th></th>
                                <td></td>
                                <td class=""></td>
                            </tr>
                            <tr class="empty">
                                <th></th>
                                <td></td>
                                <td class=""></td>
                            </tr>
                            <tr class="empty">
                                <th></th>
                                <td></td>
                                <td class=""></td>
                            </tr>
                            <!---->
                            </tbody>
                        </table>
                        </div>
                        <div class="rirekisho-pr">
                        <div data-highlight="タップで編集" class="rirekisho-pr-reason">
                            <div class="label">志望動機・特技・アピールポイントなど</div>
                            <div class="input">
                            <pre class="">
                        </pre>
                            </div>
                        </div>
                        <div data-highlight="タップで編集" class="rirekisho-pr-etc">
                            <div class="family">
                            <div class="label">扶養家族数（配偶者を除く）</div>
                            <div class="input"> 人</div>
                            </div>
                            <div class="partner">
                            <div class="existence">
                                <div class="label">配偶者</div>
                                <div class="input"><span class="yes" :class="{'preview-is-checked': resume.spouse == 'あり' }">有</span> ・ <span class="no" :class="{'preview-is-checked': resume.spouse == 'なし' }">無</span></div>
                            </div>
                            <div class="support">
                                <div class="label">配偶者の扶養義務</div>
                                <div class="input"><span class="yes" :class="{'preview-is-checked': resume.duty == 'あり' }">有</span> ・ <span class="no" :class="{'preview-is-checked': resume.duty == 'なし' }">無</span></div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div data-highlight="タップで編集" class="rirekisho-hope">
                        <div class="label">本人希望欄（特に給料・職種・勤務時間・勤務地・その他について希望があれば記入）</div>
                        <div class="input">
                            <pre class=""></pre>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!---->
                </div>
        </div>
    
</body>
</html>