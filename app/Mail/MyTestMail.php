<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MyTestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    // 引数で受け取る変数
    protected $content;
    //コンストラクタ設定
    public function __construct($content)
    {
        // 引数で受け取ったデータを変数にセット
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('view.name');
        return $this
                ->from('koki062va@gmail.com') // 送信元
                ->subject('テスト送信') //メールタイトル
                ->view('emails.myTestMail') //メール本文のテンプレートとなるviewを設定
                ->with(['content' => $this->content]);  // withでセットしたデータをviewへ渡す
    }
}
