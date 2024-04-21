<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryOrderController;
use App\Http\Controllers\JenisPembayaranController;
use App\Http\Controllers\JenisLayananController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TransaksiOrderController;

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

Route::get('/', [MainController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/petugas', [PetugasController::class, 'index']);
Route::get('/history-order', [HistoryOrderController::class, 'index']);
Route::get('/transaksi-order', [TransaksiOrderController::class, 'index']);
Route::get('/transaksi-order/casier', [TransaksiOrderController::class, 'casier']);
Route::get('/jenis-pembayaran', [JenisPembayaranController::class, 'index']);
Route::post('/jenis-pembayaran/store', [JenisPembayaranController::class, 'store'])->name('store');
Route::put('/jenis-pembayaran/update/{id}', [JenisPembayaranController::class, 'update'])->name('update');
Route::delete('/jenis-pembayaran/delete/{id}', [JenisPembayaranController::class, 'destroy'])->name('delete');

Route::resource('/jenis-layanan', JenisLayananController::class, ['expect' => ['show']]);
Route::resource('/konsumen', KonsumenController::class, ['expect' => ['show']]);
Route::get('/petugas', [PetugasController::class, 'index']);
