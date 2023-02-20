<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FallbackController extends Controller
{
    public function __invoke()
    {
        # The Fallback method for any route that doesn't exist on my application
        return view('fallback.index');
    }
}
