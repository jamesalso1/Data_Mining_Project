<?php

use App\Http\Controllers\ImportController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/import', [ImportController::class, 'index'])->name('admin.import');
    Route::get('/report', [ReportController::class, 'index'])->name('admin.report');
    Route::post('/import', [ImportController::class, 'post'])->name('admin.import.post');
    Route::get('/read-file-excel/{file}', [ImportController::class, 'readFileExcel'])->name('admin.read-file-excel');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('product')->group(function () {
    Route::get('/{type?}', [ProductController::class, 'index'])->name('product.index');
});
