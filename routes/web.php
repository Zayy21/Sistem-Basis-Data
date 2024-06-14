<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RouteController;
use PhpParser\Node\Expr\PostDec;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/', [PaymentController::class, 'index'])->name('welcome.page');
Route::get('/payment', [RouteController::class, 'showPaymentPage'])->name('payment.page');
// Route::get('/welcome', [RouteController::class, 'showWelcomePage'])->name('welcome.page');
Route::post('/payments', [PaymentController::class, 'store'])->name('payments.store');
