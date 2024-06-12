<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RouteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/payment', function () {
    return view('payment');
});


Route::get('/payment', [RouteController::class, 'showPaymentPage'])->name('payment.page');
Route::get('/welcome', [RouteController::class, 'showWelcomePage'])->name('welcome.page');
Route::post('/payments', [PaymentController::class, 'store'])->name('payments.store');
