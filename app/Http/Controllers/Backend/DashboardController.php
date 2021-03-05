<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function login()
    {
        return view('Backend.Auth.login');
    }
    public function register()
    {
        return view('Backend.Auth.register');
    }
    public function index()
    {
        return view('Backend.Dashboard.dashboard');
    }
}