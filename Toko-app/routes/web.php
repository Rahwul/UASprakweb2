<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\PesananController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth', 'peran:admin-manager']], function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index']);
        Route::get('/produk', [ProdukController::class, 'index']);
        Route::get('/produk/create', [ProdukController::class, 'create']);
        Route::post('/produk/store', [ProdukController::class, 'store']);
        Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
        Route::post('/produk/update/{id}', [ProdukController::class, 'update']);
        Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);
        Route::get('/produk/detail/{id}', [ProdukController::class, 'show']);
        Route::get('/pesanan', [PesananController::class, 'index']);
        // Route::get('/pesanan/create', [PesananController::class, 'create']);
        // Route::post('/pesanan/store', [PesananController::class, 'store']);
        Route::get('/pesanan/edit/{id}', [PesananController::class, 'edit']);
        Route::post('/pesanan/update/{id}', [PesananController::class, 'update']);
        Route::get('/pesanan/delete/{id}', [PesananController::class, 'destroy']);
        Route::get('/pesanan/detail/{id}', [PesananController::class, 'show']);
        Route::get('/kategori_produk', [KategoriProdukController::class, 'index']);
        Route::get('/kategori_produk/create', [KategoriProdukController::class, 'create']);
        Route::post('/kategori_produk/store', [KategoriProdukController::class, 'store']);
        Route::post('/kategori_produk/edit/{id}', [KategoriProdukController::class, 'edit']);
        Route::post('/kategori_produk/update/{id}', [KategoriProdukController::class, 'update']);
        Route::post('/kategori_produk/delete/{id}', [KategoriProdukController::class, 'destroy']);
    });
});

Route::prefix('user')->group(function () {
    Route::get('/dashboard', [FrontendController::class, 'index']);
    Route::get('/produk', [FrontendController::class, 'product']);
    Route::get('/detail/{id}', [FrontendController::class, 'show']);
    Route::get('/beli', [FrontendController::class, 'create']);
    Route::post('/store', [FrontendController::class, 'store']);
    Route::get('/transaksi', [FrontendController::class, 'orders']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
