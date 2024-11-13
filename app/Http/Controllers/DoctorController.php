<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    // for displaying dashboard page
    public function doctorDashboard()
    {
        return view('doctor.dashboard');
    }

    //for displaying reject page
    public function reject()
    {
        return view('doctor.reject');
    }

    //for displaying chatting page
    public function doctorChatting()
    {
        return view('doctor.chatting');
    }

    // for displaying accepted booking page
    public function acceptedBooking()
    {
        return view('doctor.accepted_booking');
    }

    // for displaying warning page
    public function warningDoctorPage()
    {
        return view('doctor.warning');
    }

    // for displaying suggestion page
    public function doctorSuggestion()
    {
        return view('doctor.suggestion');
    }

    // for displaying change password page
    public function doctorChangePassword()
    {
        return view('doctor.change_password');
    }
}
