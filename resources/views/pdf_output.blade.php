<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>履歴書</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{public_path('css/pdf.css')}}" rel="stylesheet">
        <style>
            th,td,tr {
                height: 45px !important;
            }
          </style>
    </head>
    <body>
            <div class="preview-tabs">
              <div id="preview-viewer" class="preview-viewer tab-content">
                <div class="is-preview">
                  <div id="preview-page-01" class="doc-paper preview rirekisho">
                    <div class="flex">
                      <div class="rirekisho-box1">
                        <div class="rirekisho-header">
                          <div class="title">履歴書</div>
                          <div class="date"><span>{{$attributes['year']}}年{{$attributes['month']}}月{{$attributes['day']}}日 </span> 現在 </div>
                        </div>
                        <div data-highlight="タップで編集" class="rirekisho-profile">
                          <div class="ruby flex">
                            <div class="label">ふりがな</div>
                            <div class="input">{{$attributes['family_ruby']}} {{$attributes['first_ruby']}}</div>
                          </div>
                          <div class="name flex">
                            <div class="label">名前</div>
                            <div class="input">{{$attributes['family_name']}} {{$attributes['first_name']}}</div>
                          </div>
                          <div class="etc flex">
                            <div class="birthday"><span class="year">{{$attributes['birthyear']}}</span>年 <span class="month">{{$attributes['birthmonth']}}</span>月 <span class="day">{{$attributes['birthday']}}</span>日生（満 <span class="age">{{$attributes['age']}}</span> 歳） </div>
                            @if($attributes['radio1']=='男性')
                            <div class="gender"><span class="male preview-is-checked">男</span><span>・</span><span class="female">女</span></div>
                            @elseif($attributes['radio1']=='女性')
                            <div class="gender"><span class="male">男</span><span>・</span><span class="female preview-is-checked">女</span></div>
                            @else
                            <div class="gender"><span class="gender"><span class="male">男</span><span>・</span><span class="female">女</span></div>
                            @endif
                          </div>
                        </div>
                      </div>
                      <div data-highlight="タップで編集" class="rirekisho-photo">
                        <div>
                          <div class="rirekisho-photo-inner"><img src="{{$attributes['url']}}" alt="">{{$attributes['birthyear']}}</div>
                        </div>
                      </div>
                    </div>
                    <div class="rirekisho-box2">
                      <div class="contact-information contact-main flex">
                        <div data-highlight="タップで編集" class="contact-information-address">
                          <div class="ruby flex">
                            <div class="label">ふりがな</div>
                            <div class="label">{{$attributes['address_ruby']}}</div>
                          </div>
                          <div class="address flex">
                            <div class="label">現住所</div>
                            <div class="input">
                              <div class="postal-code">〒{{$attributes['post_code']}}</div>
                              <pre>{{$attributes['address']}}{{$attributes['address_option']}}</pre>
                            </div>
                          </div>
                        </div>
                        <div data-highlight="タップで編集" class="contact-information-etc">
                          <div class="tel flex">
                            <div class="label">電話</div>
                            <div class="input">{{$attributes['phone']}}</div>
                          </div>
                          <div class="email flex">
                            <div class="label">Email</div>
                            <div class="input">{{$attributes['email']}}</div>
                          </div>
                        </div>
                      </div>
                      <div class="contact-information contact-sub flex">
                        <div class="contact-information-address">
                          <div class="ruby flex">
                            <div class="label">ふりがな</div>
                            <div class="input">{{$attributes['address_ruby_add']}}</div>
                          </div>
                          <div class="address flex">
                            <div class="label">連絡先</div>
                            <div class="input">
                              <div class="postal-code">〒{{$attributes['post_code_add']}}</div>
                              <div class="comment">(現住所以外に連絡を希望する場合のみ入力)</div>
                              <pre>{{$attributes['address_add']}}{{$attributes['address_option_add']}}</pre>
                            </div>
                          </div>
                        </div>
                        <div class="contact-information-etc">
                          <div class="tel flex">
                            <div class="label">電話</div>
                            <div class="input">{{$attributes['phone_add']}}</div>
                          </div>
                          <div class="email flex">
                            <div class="label">Email</div>
                            <div class="input">{{$attributes['email_add']}}</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div data-highlight="タップで編集" class="rirekisho-table rirekisho-history-1">
                      <table>
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
                            <td>学歴</td>
                          </tr>
                          <tr class="empty">
                            <th></th>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr class="empty">
                            <th></th>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr class="empty">
                            <th></th>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr class="empty">
                            <th></th>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr class="empty">
                            <th></th>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr class="empty">
                            <th></th>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr class="empty">
                            <th></th>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr class="empty">
                            <th></th>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr class="empty">
                            <th></th>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr class="empty">
                            <th></th>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr class="empty">
                            <th></th>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr class="empty">
                            <th></th>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr class="empty">
                            <th></th>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr class="empty">
                            <th></th>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div id="preview-page-02" class="doc-paper preview rirekisho">
                    <div class="rirekisho-table rirekisho-history-2">
                      <table>
                        <thead>
                          <tr>
                            <th>年</th>
                            <td>月</td>
                            <td>学歴・職歴</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="empty">
                            <th></th>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr class="empty">
                            <th></th>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr class="empty">
                            <th></th>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr class="empty">
                            <th></th>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr class="empty">
                            <th></th>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr class="empty">
                            <th></th>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div data-highlight="タップで編集" class="rirekisho-table rirekisho-skill">
                      <table>
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
                            <td></td>
                          </tr>
                          <tr class="empty">
                            <th></th>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr class="empty">
                            <th></th>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr class="empty">
                            <th></th>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr class="empty">
                            <th></th>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr class="empty">
                            <th></th>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="rirekisho-pr">
                      <div data-highlight="タップで編集" class="rirekisho-pr-reason">
                        <div class="label">志望動機・特技・アピールポイントなど</div>
                        <div class="input">
                          <pre>{{$attributes['reason']}}
                          </pre>
                        </div>
                      </div>
                      <div data-highlight="タップで編集" class="rirekisho-pr-etc">
                        <div class="family">
                          <div class="label">扶養家族数（配偶者を除く）</div>
                          <div class="input">{{$attributes['dependent']}} 人</div>
                        </div>
                        <div class="partner">
                          <div class="existence">
                            <div class="label">配偶者</div>
                            @if($attributes['spouse']=='あり')
                            <div class="input"><span class="yes preview-is-checked">有</span> ・ <span class="no">無</span></div>
                            @elseif($attributes['spouse']=='なし')
                            <div class="input"><span class="yes">有</span> ・ <span class="no preview-is-checked">無</span></div>
                            @else
                            <div class="input"><span class="yes">有</span> ・ <span class="no">無</span></div>
                            @endif
                          </div>
                          <div class="support">
                            <div class="label">配偶者の扶養義務</div>
                            @if($attributes['duty']=='あり')
                            <div class="input"><span class="yes preview-is-checked">有</span> ・ <span class="no">無</span></div>
                            @elseif($attributes['duty']=='なし')
                            <div class="input"><span class="yes">有</span> ・ <span class="no preview-is-checked">無</span></div>
                            @else
                            <div class="input"><span class="yes">有</span> ・ <span class="no">無</span></div>
                            @endif
                        </div>
                        </div>
                      </div>
                    </div>
                    <div data-highlight="タップで編集" class="rirekisho-hope">
                      <div class="label">本人希望欄（特に給料・職種・勤務時間・勤務地・その他について希望があれば記入）</div>
                      <div class="input">
                        <pre>{{$attributes['hope']}}</pre>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    </body>
</html>