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

    public function getRegister()
    {
        return view('Backend.Auth.register');
    }
    public function getIndex()
    {
        return view('Backend.Dashboard.dashboard');
    }
}