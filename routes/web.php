<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\OrganizationStructureController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\PublicPrestasiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AppController::class, 'index']);


Route::get('/berita', [AppController::class, 'berita']);

Route::get('/detail/{slug}', [AppController::class, 'detail']);

Route::get('/profile', [AppController::class, 'profile'])->name('profile');

Route::get('/prestasi', function () {
    return view('prestasi');
});

Route::get('/login', function () {
    return view('auth.login');
});

// Route untuk autentikasi (bisa diakses oleh semua orang)
Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

// Route untuk dashboard (hanya bisa diakses oleh yang sudah login)
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/blog', [BlogController::class, 'index'])->name('blog')->middleware('auth');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create')->middleware('auth');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store')->middleware('auth');
Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit')->middleware('auth');
Route::put('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update')->middleware('auth');
Route::delete('/blog/destroy/{id}', [BlogController::class, 'destroy'])->name('blog.destroy')->middleware('auth');


// Route untuk mengelola Prestasi (CRUD)
Route::resource('/dashboard/prestasi', PrestasiController::class)->middleware('auth');
Route::middleware('auth')->group(function () {
    // ... (rute dasbor yang sudah ada)
    Route::resource('/dashboard/galleries', GalleryController::class)->except('show', 'edit', 'update');
});

Route::middleware('auth')->prefix('dashboard')->name('dashboard.')->group(function () {
    // ... rute lain yang sudah ada
    Route::resource('organization', OrganizationStructureController::class)->except(['show']);
});


// Route untuk halaman prestasi publik
Route::get('/prestasi', [PublicPrestasiController::class, 'index'])->name('prestasi.public');

// Rute untuk Halaman Galeri Publik
Route::get('/gallery', [GalleryController::class, 'publicIndex']);