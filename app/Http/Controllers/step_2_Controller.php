<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class step_2_Controller extends Controller
{
    public function index()
    {
        return view('step2');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'age' => 'required|numeric|max:255',
            'job_title' => 'required|string|max:255'
        ]);

        // Store validated data in session or database
        $data = session()->get('step1');
        $data['age'] = $validatedData['age'];
        $data['job_title'] = $validatedData['job_title'];
        session()->put('step1', $data);

        return redirect()->route('step3');
    }
}
