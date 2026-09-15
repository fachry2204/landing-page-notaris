<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminContentController;
use App\Http\Controllers\SiteContentController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::get('/api/site-content', [SiteContentController::class, 'show'])->name('site.content');

Route::middleware('guest')->prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'create'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'store'])->name('admin.login.store');
});

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::view('/', 'admin')->name('admin.dashboard');
    Route::get('/content', [AdminContentController::class, 'show'])->name('admin.content');
    Route::put('/content', [AdminContentController::class, 'update'])->name('admin.content.update');
    Route::post('/upload', [AdminContentController::class, 'upload'])->name('admin.upload');
    Route::post('/logout', [AdminAuthController::class, 'destroy'])->name('admin.logout');
});
