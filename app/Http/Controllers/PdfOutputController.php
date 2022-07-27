<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;  // ファサードを読み込み

class PdfOutputController extends Controller
{
    public function submit(Request $request) {
        //「送信」を押したとき
        $attributes = $request->all();
        $licenses = json_decode($attributes['licenses']);
        $workHistories = json_decode($attributes['workHistories']);
        $schoolHistories = json_decode($attributes['schoolHistories']);
        $pdf = \PDF::loadView('pdf_output', compact('attributes','licenses', 'workHistories', 'schoolHistories'))
        ->setPaper('A4')
        ->setOption('encoding', 'utf-8');

        Mail::send('emails.text', $attributes, function($attributes){
            $attributes   ->to('test@gmail.com')
            ->subject('履歴書データの送付');
        });
        $pdf->download('履歴書.pdf');  //returnがないとダウンロードされない
        // return $pdf->download('履歴書.pdf');  //ダウンロード
        return redirect('/start/resume/thanks'); //returnは送信処理完了後に表示するページや内容を指定する。
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
