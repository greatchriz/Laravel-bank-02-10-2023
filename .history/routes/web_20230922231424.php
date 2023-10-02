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
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/account', function () {
    return view('dashboard.account');
})->name('account');

Route::get('/transactions', function () {
    return view('dashboard.transactions');
})->name('transactions');

Route::get('/account/notification', function () {
    return view('dashboard.notification');
})->name('notification');

Route::resource('atmCardDetails', App\Http\Controllers\AtmCardDetailController::class);
Route::resource('cryptocurrencyWalletDetails', App\Http\Controllers\CryptocurrencyWalletDetailController::class);
