<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\PdfOutputController;

Route::get('/start/{any}', function () {
    return view('index');
})->where('any', '.*');

Route::get('/', function () {
    return view('index');
 });

// Route::get('/start', function () {
//     return view('index');
//  });

Route::post('/submit', [PdfOutputController::class, 'submit']);
// 送信ボタンを押したとき

Route::post('/download', [PdfOutputController::class, 'download']);
// 送信ボタンを押したとき