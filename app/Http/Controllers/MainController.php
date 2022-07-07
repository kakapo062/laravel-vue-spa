<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function write1(Request $request)
	{
	    $attributes = $request->all();
        // dd($attributes); // これを追加してデバッグ
	    return view('welcome',compact('attributes'));
	}
}
