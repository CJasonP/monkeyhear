<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/how-to-practice', function(){
    return view('how-to-practice');
});
