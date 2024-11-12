<?php

use App\Http\Controllers\AuthController;
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

// for displaying index page
Route::get('index', [AuthController::class, 'index'])->name('index');

// for user registration
Route::post('register', [AuthController::class, 'register'])->name('patient.register');

