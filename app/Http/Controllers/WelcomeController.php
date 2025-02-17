<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function showGreeting()
    {
        echo "Showing greeting page";
    }

    public function redirectGreeting()
    {
        return redirect()->route('greeting');
    }

    //other methods
}
