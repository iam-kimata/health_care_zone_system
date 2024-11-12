<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // for displaying index page
    public function index()
    {
        return view('index');
    }

    public function register(Request $request)
    {
        // Validate request data
        $validator = Validator::make($request->all(), [
            'fullName' => 'required|string|max:255',
            'gender' => 'required|string|max:10',
            'phoneNumber' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:patients',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // If validation fails, redirect back with errors
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Create and save the new patient, the role will default to 'patient'
        Patient::create([
            'full_name' => $request->full_name,
            'gender' => $request->gender,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Return a success message after registration
        return response()->json(['success' => 'Account created successfully']);
    }

}
