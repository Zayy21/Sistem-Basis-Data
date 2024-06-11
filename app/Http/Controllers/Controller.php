<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
abstract class Controller
{
    //
}

class YourController extends Controller
{
    public function targetPage()
    {
        return view('welcome');
    }
}
