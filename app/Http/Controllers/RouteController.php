<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RouteController extends Controller
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
