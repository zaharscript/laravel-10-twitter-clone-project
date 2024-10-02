<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ToughtController;
use App\Http\Controllers\TermController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::post('/tought', [ToughtController::class, 'store'])->name('thought.create');

// Route::post('/dashboard', [DashboardController::class, 'tought'])->name('think.create');

// Route::post('/tought', [DashboardController::class, 'store']);


Route::get('/term', [TermController::class, 'term']);
