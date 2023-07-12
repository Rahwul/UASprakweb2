<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AboutController;
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

Route::group(['middleware' => 'auth', 'peran:admin-manager'], function () {
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
        Route::get('/pesanan/create', [PesananController::class, 'create']);
        Route::post('/pesanan/store', [PesananController::class, 'store']);
        Route::get('/pesanan/edit/{id}', [PesananController::class, 'edit']);
        Route::post('/pesanan/update/{id}', [PesananController::class, 'update']);
        Route::get('/pesanan/delete/{id}', [PesananController::class, 'destroy']);
        Route::get('/pesanan/detail/{id}', [PesananController::class, 'show']);
    });
});

Route::prefix('frontend')->group(function () {
    Route::get('/dashboard', [FrontendController::class, 'index']);
    Route::get('/detail/{id}', [FrontendController::class, 'show']);
    Route::get('/about', [AboutController::class, 'index']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
