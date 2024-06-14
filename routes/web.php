<?php

use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('upload');
});

Route::prefix('api')->group(function () {
    Route::post('/upload', [UploadController::class, 'upload'])->name('file.upload');
});
