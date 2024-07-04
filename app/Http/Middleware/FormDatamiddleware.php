<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\FormData;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FormDatamiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next) 
    {
        if (auth()->check()) {
            $formData = session('formData', new FormData());

            FormData::updateOrCreate(
                ['user_id' => auth()->id()],
                [
                    'name' => $formData->name,
                    'email' => $formData->email,
                    'age' => $formData->age,
                    'city' => $formData->city,
                    'job_title' => $formData->job_title,
                ]
            );    }
            return $next($request);

        }} 
