<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        # Calling the Home page of my portfolio with this function
        return view('index');
    }
}
