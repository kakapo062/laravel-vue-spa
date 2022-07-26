<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PdfOutputController extends Controller
{
    public function output(Request $request) {
        $attributes = $request->all();
        $licenses = json_decode($attributes['licenses']);
        $workHistories = json_decode($attributes['workHistories']);
        $schoolHistories = json_decode($attributes['schoolHistories']);
        $pdf = \PDF::loadView('pdf_output', compact('attributes','licenses', 'workHistories', 'schoolHistories'))
        ->setPaper('A4')
        ->setOption('encoding', 'utf-8');
        return $pdf->download('履歴書.pdf');  //ブラウザ上で開ける
        // return $pdf->download('履歴書.pdf');  //ダウンロード
    }
}
