<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // for displaying dashboard functionality
    public function adminDashboard()
    {
        // Count total patients
        $totalPatients = User::where('role', 'Patient')->count();

        // Count total doctors
        $totalDoctors = User::where('role', 'Doctor')->count();

        // Count total accepted bookings
        $totalAcceptedBookings = Booking::where('status', 'Accepted')->count();

        // Count total rejected bookings
        $totalRejectedBookings = Booking::where('status', 'Rejected')->count();

        // Fetch all bookings with patient and doctor information
        $data = Booking::with(['patient', 'doctor'])->orderBy('created_at', 'desc')->get();

        return view('admin.dashboard', compact('data', 'totalPatients', 'totalDoctors', 'totalAcceptedBookings', 'totalRejectedBookings'));

    }

    // for displaying register doctor page
    public function registerDoctorPage()
    {
        return view('admin.register_doctor');
    }

    // for admin to register doctor
    public function registerDoctor(Request $request)
    {
        // Validate request data
        $validator = Validator::make($request->all(), [
            'fullName' => 'required|string|max:255',
            'phoneNumber' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:users',
            'rating' => 'required|string|max:15',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // If validation fails, redirect back with errors
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/uploaded'), $imageName);
            $imagePath = 'assets/images/uploaded/' . $imageName;
        } else {
            $imagePath = null;
        }

        // Create and save the new user
        User::create([
            'full_name' => $request->fullName,
            'phone_number' => $request->phoneNumber,
            'email' => $request->email,
            'rating' => $request->rating,
            'image' => $imagePath,
            'password' => Hash::make($request->password),
        ]);

        // Return a success message after registration
        return response()->json(['success' => 'Account created successfully']);
    }

    // for displaying patients
    public function patients(Request $request)
    {
        // Define the query to fetch patients
        $query = User::where('role', 'Patient');

         // Fetch the patients
        $patients = $query->orderBy('created_at', 'desc')->get();

        // Pass the correct variable to the view
        return view('admin.patients', compact('patients'));
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
    public function doctors(Request $request)
    {
        // Define the query to fetch doctors
        $query = User::where('role', 'Doctor');

        // Fetch the doctors
        $doctors = $query->orderBy('created_at', 'desc')->get();

        // Pass the correct variable to the view
        return view('admin.doctors', compact('doctors'));
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
