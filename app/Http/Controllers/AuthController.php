<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // for displaying index page
    public function index()
    {
        return view('index');
    }
}
