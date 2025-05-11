<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('product')->group(function () {
    Route::get('/{type?}', [ProductController::class, 'index'])->name('product.index');
    Route::post('/post', [ProductController::class, 'post'])->name('product.post');
    Route::post('/read-file-excel', [ProductController::class, 'readFileExcel'])->name('product.read-file-excel');
});
