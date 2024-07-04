<?php

namespace App\Http\Controllers;

use App\Models\FormData;
use Illuminate\Http\Request;

class summary_Controller extends Controller
{
    public function summary(Request $request)
    {
        $data = $request->session()->get('step1');
        return view('summary', compact('data'));
    }

    public function submit(Request $request)
    {
        $validatedData = $request->session()->get('step1');

        // Store data in database
        $FormData = new FormData();
        $FormData->name = $validatedData['name'];
        $FormData->email = $validatedData['email'];
        $FormData->age = $validatedData['age'];
        $FormData->job_title = $validatedData['job_title'];
        $FormData->city = $validatedData['city'];
        $FormData->save();

        // Clear session data
        $request->session()->forget('step1');

        return redirect()->route('step1')->with('success_message', 'Form submitted successfully!');
}}
