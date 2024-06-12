<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'stick' => 'required|integer|min:1',
            'gloves' => 'required|integer|min:0',
            'jam' => 'required|integer|min:1',
        ]);

            Payment::create([
            'nama' => $validatedData['nama'],
            'stick' => $validatedData['stick'],
            'gloves' => $validatedData['gloves'],
            'jam' => $validatedData['jam'],
        ]);

        return redirect()->route('welcome')->with('success', 'Payment successful!');
    }
}