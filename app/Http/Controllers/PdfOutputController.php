<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class PdfOutputController extends Controller
{
    public function output(Request $request) {
        $attributes = $request->all();
        // $pdf = \PDF::loadView('pdf_output', compact('attributes'));
        // //第1引数にbladeの名前、第2引数に渡したい値を連想配列
        // $pdf->setPaper('A4');
        // return $pdf->stream(); 
        // //プレビュー表示
        // // return $pdf->download(); 
        // //ダウンロード
        // return PDF::loadView('pdf_output', compact('attributes'))
        //     ->setOption('encoding', 'utf-8')
        //     ->inline(); // ダウンロードしたい場合はdownload()に変
  // sampleディレクトリに画像を保存
   // ディレクトリ名
   $dir = 'sample';
    $request->file('avatar')->store('public/' . $dir);

        $pdf = \PDF::loadView('pdf_output', compact('attributes'))
        ->setPaper('A4')
        ->setOption('encoding', 'utf-8');
        return $pdf->inline('thisis.pdf');  //ブラウザ上で開ける
        // return $pdf->download('履歴書.pdf');  //ダウンロード

    }
}
