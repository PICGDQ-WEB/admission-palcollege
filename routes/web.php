<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.home');
});

Route::get('/home',function(){
  return view('front.home');
});