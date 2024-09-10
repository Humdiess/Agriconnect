<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');

// Auth
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');
Route::get('/sign-up', [AuthController::class, 'signup'])->name('auth.signup');
Route::post('/sign-up', [AuthController::class, 'addUser'])->name('auth.addUser');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
