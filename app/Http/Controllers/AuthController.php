<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    // for user registration
    public function register(Request $request)
    {
        // Validate request data
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'gender' => 'required|string|max:10',
            'phone_number' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // If validation fails, redirect back with errors
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Create and save the new user, the role will default to 'patient'
        User::create([
            'full_name' => $request->full_name,
            'gender' => $request->gender,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Return a success message after registration
        return response()->json(['success' => 'Account created successfully']);
    }

    // for user login
    public function login(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        // Retrieve the user by email
        $user = User::where('email', $validatedData['email'])->first();

        // Check if user exists and if the provided password matches the hashed password in the database
        if (!$user || !Hash::check($validatedData['password'], $user->password)) {
            // Flash the error message into the session
            session()->flash('error', 'Invalid Username or Password');

            // Redirect back to the form with the modal open and retain the form input
            return redirect()->route('index')
                ->withErrors(['login' => 'Invalid Username or Password'])
                ->withInput()
                ->with('modal', true); // Pass a flag to keep the modal open
        }

        // Delete old user tokens
        $user->tokens()->delete();

        // Create new token
        $token = $user->createToken('user_token')->plainTextToken;

        // Store token in session
        session(['user_token' => $token]);

        // Redirect based on the user's role
        switch ($user->role) {
            case 'Patient':
                return redirect()->route('dashboard');
            case 'Doctor':
                return redirect()->route('doctorDashboard');
            case 'Admin':
                return redirect()->route('adminDashboard');
            default:
                session()->flash('error', 'Role not recognized');
                return redirect()->route('index');
        }
    }
}
