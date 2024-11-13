<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    // for displaying dashboard page
    public function dashboard()
    {
        return view('patient.dashboard');
    }

    // for displaying virtual consultation page
    public function virtualConsultation()
    {
        return view('patient.virtual_consultation');
    }

    // for displaying chatting page
    public function chatting()
    {
        return view('patient.chatting');
    }

    // for displaying book appointment page
    public function bookAppointment()
    {
        return view('patient.book_appointment');
    }

    // for displaying book now page
    public function bookNow()
    {
        return view('patient.book_now');
    }
}
