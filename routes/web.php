<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('itklab');
});

Route::get('/welcome', function () {
    return view('welcome');
});
