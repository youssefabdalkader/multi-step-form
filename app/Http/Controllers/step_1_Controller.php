<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class step_1_Controller extends Controller
{

    public function index()
    {
        return view('step1');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255'
        ]);

        // Store validated data in session or database
        $request->session()->put('step1', $validatedData);

        return redirect()->route('step2');
    }
}
