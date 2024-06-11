<?php

// app/Http/Controllers/PaymentController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function showPaymentPage()
    {
        return view('payment'); // resources/views/payment.blade.php
    }

    public function showWelcomePage()
    {
        return view('welcome'); // resources/views/welcome.blade.php
    }
}
