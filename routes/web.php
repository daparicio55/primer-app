<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('index');
});
Route::get('/disenio',function(){
    return view('disenio');
});