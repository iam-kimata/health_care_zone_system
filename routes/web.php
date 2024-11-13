<?php

use App\Http\Controllers\PatientController;
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
Route::get('/', [AuthController::class, 'index'])->name('index');

// for user registration
Route::post('register', [AuthController::class, 'register'])->name('patient.register');

// for displaying dashboard page
Route::get('dashboard', [PatientController::class, 'dashboard'])->name('dashboard');

// for displaying virtual consultation page
Route::get('virtualConsultation', [PatientController::class, 'virtualConsultation'])->name('virtualConsultation');

// for displaying chatting page
Route::get('chatting', [PatientController::class, 'chatting'])->name('chatting');

// for displaying book appointment page
Route::get('bookAppointment', [PatientController::class, 'bookAppointment'])->name('bookAppointment');

// for displaying book now page
Route::get('bookNow', [PatientController::class, 'bookNow'])->name('bookNow');

// for displaying feedback page
Route::get('feedback', [PatientController::class, 'feedback'])->name('feedback');

// for displaying warning patient  page
Route::get('warningPatientPage', [PatientController::class, 'warningPatientPage'])->name('warningPatientPage');

// for displaying patient suggestion page
Route::get('patientSuggestion', [PatientController::class, 'patientSuggestion'])->name('patientSuggestion');

// for displaying change password page
Route::get('changePassword', [PatientController::class, 'changePassword'])->name('changePassword');
