<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    /*account*/
    Route::get('/account', [App\Http\Controllers\DashboardController::class, 'account'])->name('account');
});


Route::get('/transactions', function () {
    return view('dashboard.transactions');
})->name('transactions');

Route::get('/account/notification', function () {
    return view('dashboard.notification');
})->name('notification');

Route::resource('atmCardDetails', App\Http\Controllers\AtmCardDetailController::class)->middleware('auth');
Route::resource('cryptocurrencyWalletDetails', App\Http\Controllers\CryptocurrencyWalletDetailController::class)->middleware('auth');

/*payment-methods*/
Route::get('/payment-methods', function () {
    return view('dashboard.payment-methods');
})->name('payment-methods');
