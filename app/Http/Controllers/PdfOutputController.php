<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;  // ファサードを読み込み
use Illuminate\Support\Facades\Storage;

class PdfOutputController extends Controller
{
    public function submit(Request $request) {
        //「送信」を押したとき
        $attributes = $request->all();
        $licenses = json_decode($attributes['licenses']);
        $workHistories = json_decode($attributes['workHistories']);
        $schoolHistories = json_decode($attributes['schoolHistories']);
        $email = $attributes['submit_email'];
        $pdf = \PDF::loadView('pdf_output', compact('attributes','licenses', 'workHistories', 'schoolHistories'))
        ->setPaper('A4')
        ->setOption('encoding', 'utf-8')
        ->save(storage_path('app/pdf/履歴書.pdf'));

        Mail::send('emails.text',$attributes, function($attributes) use ($email) {
            $attributes
                ->to($email)
                ->attach(storage_path('app/pdf/履歴書.pdf'))
                ->subject('履歴書データの送付');
        });
        Storage::delete('pdf/履歴書.pdf');
        return redirect('/start/resume/thanks'); //returnは送信処理完了後に表示するページや内容を指定する。

        // return $pdf->download('履歴書.pdf');  //ダウンロード
    }

    public function download(Request $request) {
        //「ダウンロード」を押したとき
        $attributes = $request->all();
        $licenses = json_decode($attributes['licenses']);
        $workHistories = json_decode($attributes['workHistories']);
        $schoolHistories = json_decode($attributes['schoolHistories']);
        $pdf = \PDF::loadView('pdf_output', compact('attributes','licenses', 'workHistories', 'schoolHistories'))
        ->setPaper('A4')
        ->setOption('encoding', 'utf-8');
        return $pdf->inline('履歴書.pdf');  //returnがないとダウンロードされない
        // return $pdf->download('履歴書.pdf');  //ダウンロード
    }
}
