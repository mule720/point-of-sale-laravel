<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['about','home']);
    }

    public function about()
    {
        return view('about');
    }

    public function home()
    {
        return view('home');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
