<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('o-nas', [IndexController::class, 'about'])->name('o-nas');

Route::get('contact', [ContactController::class, 'index'])->name('contact');

Route::get('admin/login', [AuthController::class, 'create'])->name('login');
Route::post('admin/login.store', [AuthController::class, 'store'])->name('login.store');
Route::delete('logout', [AuthController::class, 'destroy'])->name('logout');

Route::get('admin/dashboard', [AuthController::class, 'index'])->name('dashboard')->middleware('auth');

Route::resource('blog', BlogController::class)->only(['create','store', 'edit', 'update', 'destroy','index'])->middleware('auth');
Route::resource('blog', BlogController::class)->only(['show']);

Route::resource('category', CategoryController::class)->only(['index','create','store', 'edit', 'update', 'destroy'])->middleware('auth');

