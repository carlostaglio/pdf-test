<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test-pdf', [PDFController::class, 'testPDF']);

Route::post('/visita-pdf', [PDFController::class, 'visitaPDF']);


