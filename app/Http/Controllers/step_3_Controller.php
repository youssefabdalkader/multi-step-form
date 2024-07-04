<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class step_3_Controller extends Controller
{
    public function index()
    {
        return view('step3');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'city' => 'required|string|max:255',
        ]);

        // Store validated data in session or database
        $data = session()->get('step1');
        $data['city'] = $validatedData['city'];
        session()->put('step1', $data);

        return redirect()->route('summary');
    }
}

