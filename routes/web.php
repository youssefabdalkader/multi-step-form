<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\step_1_Controller;
use App\Http\Controllers\step_2_Controller;
use App\Http\Controllers\step_3_Controller;
use App\Http\Controllers\summary_Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('step1');
});


Route::get('step1', [step_1_Controller::class, 'index'])->name('step1');
Route::post('step1', [step_1_Controller::class, 'store'])->name('post_step1');

Route::get('step2', [Step_2_Controller::class, 'index'])->name('step2');
Route::post('step2', [Step_2_Controller::class, 'store'])->name('post_step2');

Route::get('step3', [Step_3_Controller::class, 'index'])->name('step3');
Route::post('step3', [Step_3_Controller::class, 'store'])->name('post_step3');

Route::get('summary', [summary_Controller::class, 'summary'])->name('summary');
Route::post('summary', [summary_Controller::class, 'submit'])->name('submit');

