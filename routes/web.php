<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PetaniController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\IsFarmer;
use Illuminate\Support\Facades\Route;

// php artisan storage:link untuk hosting 
Route::get('/create-storage-link', function () {
    $targetFolder = base_path('storage/app/public'); // Folder tujuan
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage'; // Lokasi symbolic link di public_html

    if (file_exists($linkFolder)) {
        return 'Link folder sudah ada.';
    }

    try {
        symlink($targetFolder, $linkFolder); // Membuat symbolic link
        return 'Symlink berhasil dibuat.';
    } catch (Exception $e) {
        return 'Gagal membuat symlink: ' . $e->getMessage();
    }
});

// Home / Landing Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Auth
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');
Route::get('/sign-up', [AuthController::class, 'signup'])->name('auth.signup');
Route::post('/sign-up', [AuthController::class, 'addUser'])->name('auth.addUser');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

// Tani Shop (is_farmer=true)
Route::middleware([IsFarmer::class])->group(function () {
    Route::get('/dashboard-tani', [PetaniController::class, 'index'])->name('petani.index');
    // Fitur Pantau Pertanian 
    // ... 
});

// Products
Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.show');

Route::middleware([IsFarmer::class])->group(function () {
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product-create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product-create', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product-edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product-edit/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product-delete/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
});
