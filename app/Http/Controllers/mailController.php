<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;  // ファサードを読み込み

class mailController extends Controller
{   

    public function index()   //コンタクトフォームを表示
    {
        return view('contact.index');
    }

    public function send(Request $request)  //メールの自動送信設定
    {
        $data = $request->all();   //送信されてきたすべてのデータ
        Mail::send('emails.text', $data, function($data){
                $data   ->to('koki062va@gmail.com')
                        ->subject('送信メールの表題');
        });

        return back()->withInput($request->only(['name']))
                     ->with('sent', '送信完了しました。');  //送信完了を表示
    }

}
