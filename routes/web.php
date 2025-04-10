<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('testPDF');
});

Route::get('/formulario', function(){
    return view('formulario');
});
