<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class PagesController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function login()
    {
        return view('layouts.login');
    }
    public function register()
    {
        return view('layouts.register');
    }
    public function dashboard()
    {
        return view('layout.dashboard');
    }
}