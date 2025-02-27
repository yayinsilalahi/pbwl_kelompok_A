<?php

use App\Http\Controllers\donatController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('landing');
// });

// Route::get('/home', function () {
//     return view('home');

Route::resource('/', donatController::class)->only('index');

Route::get('/home', [donatController::class, 'home'])->name('home');
Route::get('/about', [donatController::class, 'about'])->name('about');
Route::get('/feedback', [donatController::class, 'create'])->name('feedback.create');
Route::post('/feedback', [donatController::class, 'store'])->name('feedback.store');
Route::get('/admin', [donatController::class, 'admin'])->name('admin');
