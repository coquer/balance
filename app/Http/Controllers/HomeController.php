<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Auth::check() ? $tasks = Auth::user()->task() : $tasks = null;

        return view('home', compact('tasks'));
    }
}
