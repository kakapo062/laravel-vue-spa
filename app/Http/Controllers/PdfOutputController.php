<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class PdfOutputController extends Controller
{
    public function output(Request $request) {
        $attributes = $request->all();
        $pdf = \PDF::loadView('pdf_output', compact('attributes'))
        ->setPaper('A4')
        ->setOption('encoding', 'utf-8');
        return $pdf->inline('thisis.pdf');  //ブラウザ上で開ける
        // return $pdf->download('履歴書.pdf');  //ダウンロード
    }
}
