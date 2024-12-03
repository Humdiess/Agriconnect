<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PetaniController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TaniController;
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

// For Umum
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/agri-kontak', [HomeController::class, 'contact'])->name('agri.contact');
Route::get('/agri-berita', [HomeController::class, 'blog'])->name('agri.berita');

// Agrishop
Route::get('/agri-shop', [HomeController::class, 'agrishop'])->name('agri.shop');
Route::get('/agri-shop/{product}', [ProductController::class, 'agrishop_show'])->name('product.agrishop_show');
Route::get('/filter/products', [ProductController::class, 'filterProducts']);

// Tani Ai
Route::get('/tani-ai', [TaniController::class, 'index'])->name('tani')->middleware('req_auth');
Route::post('/tani-ai', [TaniController::class, 'chat'])->name('tani.chat')->middleware('req_auth');


// Daftar Petani
Route::get('/daftar-tani', [TaniController::class, 'pendaftaran'])->name('tani.pendaftaran')->middleware('req_auth');
Route::post('/daftar-tani', [TaniController::class, 'submit'])->name('tani.submit')->middleware('req_auth');

// Auth
Route::middleware('guest')->group(function () {
    Route::get('/req-auth', [AuthController::class, 'reqAuth'])->name('auth.reqAuth');
    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');
    Route::get('/sign-up', [AuthController::class, 'signup'])->name('auth.signup');
    Route::post('/sign-up', [AuthController::class, 'addUser'])->name('auth.addUser');
});
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout')->middleware('auth');

Route::post('/dashboard-tani/update-ip', [PetaniController::class, 'updateIp'])->name('dashboard.update-ip');

// Petani Fiturs (is_farmer=true)
Route::middleware([IsFarmer::class])->group(function () {
    Route::get('/dashboard-tani', [PetaniController::class, 'index'])->name('petani.index');
    Route::post('/dashboard-tani', [PetaniController::class, 'generateRecommendation'])->name('dashboard.generate');
    Route::prefix('pantau')->group(function () {
        Route::get('/air', function () {
            $active = 'pantau-air';
            return view('frontend.pantau.air', compact('active'));
        })->name('pantau.air');

        Route::get('/suhu', function () {
            $active = 'pantau-suhu';
            return view('frontend.pantau.suhu', compact('active'));
        })->name('pantau.suhu');

        Route::get('/kelembaban', function () {
            $active = 'pantau-kelembaban';
            return view('frontend.pantau.kelembaban', compact('active'));
        })->name('pantau.kelembapan');

        Route::get('/nutrisi', function () {
            $active = 'pantau-nutrisi';
            return view('frontend.pantau.nutrisi', compact('active'));
        })->name('pantau.nutrisi');

        Route::get('/curah-hujan', function () {
            $active = 'pantau-curah-hujan';
            return view('frontend.pantau.curah-hujan', compact('active'));
        })->name('pantau.curah-hujan');
        Route::get('/tanggal-tanam', function () {
            $active = 'pantau-curah-hujan';
            return view('frontend.pantau.tanggal', compact('active'));
        })->name('pantau.tanggal');
    });

    Route::get('/dashboard-tani/scan', function () {
        $active = 'scan';
        return view('petani.scan', compact('active'));
    })->name('petani.scan');

    Route::delete('/dashboard/hapus-alat', [PetaniController::class, 'deleteDevice'])->name('delete-device');
});


// Products
Route::middleware([IsFarmer::class])->group(function () {
    Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.show');
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product-create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product-create', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product-edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product-edit/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product-delete/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
});
