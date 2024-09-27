<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TermController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [IndexController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'tought']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/category', [CategoryController::class, 'category']);

Route::get('/work', [WorkController::class, 'work']);

Route::get('/term', [TermController::class, 'term']);

// Route::get('/about', function () {
//     return view('users.about');
// });

// Route::get('/category', function () {
//     return view('category');
// });

// Route::get('/work', function () {
//     return view('work');
// });
