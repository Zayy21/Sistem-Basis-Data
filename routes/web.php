<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/payment', function () {
    return view('payment');
});


Route::get('/payment', [PaymentController::class, 'showPaymentPage'])->name('payment.page');
Route::get('/welcome', [PaymentController::class, 'showWelcomePage'])->name('welcome.page');
