<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\PdfOutputController;

Route::get('/start/{any}', function () {
    return view('index');
})->where('any', '.*');

// Route::get('/start', function () {
//     return view('index');
//  });
 

Route::get('/output', [PdfOutputController::class, 'output']);
// 送信ボタンを押したとき

Route::get('/mailsend', 'App\Http\Controllers\mailController@send');