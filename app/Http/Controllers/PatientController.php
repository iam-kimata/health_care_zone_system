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

    // for displaying chatting page
    public function chatting()
    {
        return view('patient.chatting');
    }

    // for displaying book now page
    public function bookNow()
    {
        return view('patient.book_now');
    }

    // for displaying feedback page
    public function feedback()
    {
        return view('patient.feedback');
    }

    // for displaying warning page
    public function warningPatientPage()
    {
        return view('patient.warning');
    }

    // for displaying suggestion page
    public function patientSuggestion()
    {
        return view('patient.suggestion');
    }

      // for displaying change password page
      public function changePassword()
      {
          return view('patient.change_password');
      }
}
