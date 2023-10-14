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

    /*payment-methods*/
    Route::get('/payment-methods', [App\Http\Controllers\DashboardController::class, 'paymentMethods'])->name('payment-methods');
});


Route::get('/transactions', function () {
    return view('dashboard.transactions');
})->name('transactions');

Route::get('/account/notification', function () {
    return view('dashboard.notification');
})->name('notification');

Route::resource('atmCardDetails', App\Http\Controllers\AtmCardDetailController::class)->middleware('auth');
Route::resource('cryptocurrencyWalletDetails', App\Http\Controllers\CryptocurrencyWalletDetailController::class)->middleware('auth');

// generate a route that will display a page that contains methods a user can use to receive funds, like user account details, add with card or add through crypto currency

Route::get('/deposit-methods', [App\Http\Controllers\DepositMethodController::class, 'index'])->name('deposit-methods');
