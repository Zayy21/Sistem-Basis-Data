<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'stick_billiard' => 'required|integer|min:1',
                'sarung_tangan' => 'required|integer|min:0',
                'jam' => 'required|integer|min:1',
            ]);
    
                Payment::create([
                'nama' => $request['name'],
                'meja' => $request['meja'],
                'stick' => $request['stick_billiard'],
                'gloves' => $request['sarung_tangan'],
                'jam' => $request['jam'],
            ]);
    
            return redirect()->route('welcome.page')->with('success', 'Payment successful!');
        }
}