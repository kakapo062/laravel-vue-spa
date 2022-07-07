<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfOutputController extends Controller
{
    public function output() {
        $sushiTable = [
            'たまご' => '100円',
            'いくら' => '200円',
        ];
        $pdf = \PDF::loadView('pdf_output', ['sushiTable' => $sushiTable]);
        //第1引数にbladeの名前、第2引数に渡したい値を連想配列
        $pdf->setPaper('A4');
        return $pdf->stream(); 
        //プレビュー表示
        // return $pdf->download(); 
        //ダウンロード
    }
}
