<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProdukJasaController;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::get('/', [HomeController::class, 'index']);
Route::get('/order', [HomeController::class, 'order'])->middleware(['auth', 'verified']);
Route::get('/artikel', [HomeController::class, 'artikel']);
Route::get('/artikel/{slug}', [HomeController::class, 'bacaArtikel']);
Route::get('/logout', function () {
    Auth::logout();
    session()->flash('success', 'Anda telah keluar.');
    return redirect('/');
})->name('logout');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/sertifikat', [AdminController::class, 'sertifikat'])->name('sertifikat');
    Route::post('/sertifikat', [AdminController::class, 'kirim_sertifikat'])->name('kirim-sertifikat');
    Route::resource('produk', ProdukJasaController::class);
    Route::resource('artikel', ArtikelController::class);
    Route::resource('order', OrderController::class);
    Route::post('sertif/{order}', [AdminController::class, 'generateCertificate'])->name('sertif');
});

