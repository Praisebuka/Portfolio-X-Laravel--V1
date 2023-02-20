<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        # Calling the Contact page of my portfolio with this function
        return view('contact');
    }
}
