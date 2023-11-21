<?php

use App\Http\Controllers\detailTiket;
use App\Http\Controllers\ListModelController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\ScanController;
use App\Http\Controllers\SendEmail;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [ListModelController::class, 'index']);

Route::post('checkout', [PembeliController::class, 'checkout'])->name('checkout.checkout');

Route::get('sendmail', [SendEmail::class, 'SendEmail']);

Route::get('cek', function() {
    return view('cek');
});

Route::get('detail/{trx}', [detailTiket::class, 'detail'])->name('detail');

Route::get('scan', [ScanController::class, 'index']);

Route::post('process', [ScanController::class, 'update'])->name('process.scan');