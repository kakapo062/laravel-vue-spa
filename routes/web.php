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
 

Route::post('/output', [PdfOutputController::class, 'output']);
// 送信ボタンを押したとき

Route::get('contact', 'mailController@index');
///mailsendにアクセスしたとき

Route::post('contact', 'mailController@send');
///contactページでpostメソッドが使われたとき

Route::post('contact', 'mailController@send');
///contactページでpostメソッドが使われたとき

Route::post('welcome', 'MainController@write1');