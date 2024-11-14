<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
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

// for displaying doctor dashboard page
Route::get('doctorDashboard', [DoctorController::class, 'doctorDashboard'])->name('doctorDashboard');

// for displaying reject page
Route::get('reject', [DoctorController::class, 'reject'])->name('reject');

// for displaying doctor chatting page
Route::get('doctorChatting', [DoctorController::class, 'doctorChatting'])->name('doctorChatting');

// for displaying accepted booking page
Route::get('acceptedBooking', [DoctorController::class, 'acceptedBooking'])->name('acceptedBooking');

// for displaying warning doctor page
Route::get('warningDoctorPage', [DoctorController::class, 'warningDoctorPage'])->name('warningDoctorPage');

// for displaying doctor suggestion page
Route::get('doctorSuggestion', [DoctorController::class, 'doctorSuggestion'])->name('doctorSuggestion');

// for displaying doctor change password page
Route::get('doctorChangePassword', [DoctorController::class, 'doctorChangePassword'])->name('doctorChangePassword');

// for displaying admin dashboard page
Route::get('adminDashboard', [AdminController::class, 'adminDashboard'])->name('adminDashboard');

// for displaying update reviews page
Route::get('updateReviews', [AdminController::class, 'updateReviews'])->name('updateReviews');

// for displaying register doctor page
Route::get('registerDoctor', [AdminController::class, 'registerDoctor'])->name('registerDoctor');

// for displaying patients page
Route::get('patients', [AdminController::class, 'patients'])->name('patients');

// for displaying update patient page
Route::get('updatePatient', [AdminController::class, 'updatePatient'])->name('updatePatient');

// for displaying warning patient page
Route::get('warningPatient', [AdminController::class, 'warningPatient'])->name('warningPatient');

// for displaying doctors page
Route::get('doctors', [AdminController::class, 'doctors'])->name('doctors');

// for displaying update doctor page
Route::get('updateDoctor', [AdminController::class, 'updateDoctor'])->name('updateDoctor');

// for displaying warning doctor page
Route::get('warningDoctor', [AdminController::class, 'warningDoctor'])->name('warningDoctor');

// for displaying suggestion page
Route::get('suggestion', [AdminController::class, 'suggestion'])->name('suggestion');
