<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\UserAccountController;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('o-nas', [IndexController::class, 'about'])->name('o-nas');
Route::get('program-pre-mladych', [IndexController::class, 'program_pre_mladych'])->name('program-pre-mladych');
Route::get('program-pre-dospelych', [IndexController::class, 'program_pre_dospelych'])->name('program-pre-dospelych');
Route::get('clanky', [IndexController::class, 'blog'])->name('clanky');

Route::get('contact', [ContactController::class, 'index'])->name('contact');

Route::get('admin/login', [AuthController::class, 'create'])->name('login');
Route::post('admin/login.store', [AuthController::class, 'store'])->name('login.store');
Route::delete('logout', [AuthController::class, 'destroy'])->name('logout');

Route::get('admin/dashboard', [AuthController::class, 'index'])->name('dashboard')->middleware('auth');

Route::resource('blog', BlogController::class)->only(['create','store', 'edit', 'update', 'destroy','index'])->middleware('auth');
Route::resource('blog', BlogController::class)->only(['show']);

Route::resource('category', CategoryController::class)->only(['index','create','store', 'edit', 'update', 'destroy'])->middleware('auth');
Route::resource('course', CourseController::class)->only(['index','create','store', 'edit', 'update', 'destroy'])->middleware('auth');
Route::resource('reference', ReferenceController::class)->only(['index','create','store', 'edit', 'update', 'destroy'])->middleware('auth');
Route::resource('author', AuthorController::class)->only(['index','create','store', 'edit', 'update', 'destroy'])->middleware('auth');  
Route::resource('user', UserAccountController::class)->only(['index','create','store', 'edit', 'update', 'destroy'])->middleware('auth');
Route::resource('podcast', PodcastController::class)->only(['index','create','store', 'edit', 'update', 'destroy'])->middleware('auth');
Route::resource('podcast', PodcastController::class)->only(['show']);

