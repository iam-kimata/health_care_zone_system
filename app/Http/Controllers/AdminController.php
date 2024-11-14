<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // for displaying dashboard page
    public function adminDashboard()
    {
        return view('admin.dashboard');
    }

    // for displaying update reviews page
    public function updateReviews()
    {
        return view('admin.update_reviews');
    }

    // for displaying register doctor page
    public function registerDoctor()
    {
        return view('admin.register_doctor');
    }

    // for displaying patients page
    public function patients()
    {
        return view('admin.patients');
    }

    // for displaying update patient page
    public function updatePatient()
    {
        return view('admin.update_patient');
    }

    // for displaying warning patient page
    public function warningPatient()
    {
        return view('admin.warning_patient');
    }

    // for displaying doctors page
    public function doctors()
    {
        return view('admin.doctors');
    }

    // for displaying update doctor page
    public function updateDoctor()
    {
        return view('admin.update_doctor');
    }

    // for displaying warning doctor page
    public function warningDoctor()
    {
        return view('admin.warning_doctor');
    }

    // for displaying suggestion page
    public function suggestion()
    {
        return view('admin.suggestion');
    }

}
