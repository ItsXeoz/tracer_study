<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function showUserDashboard()
    {
        return view('dashboard_user_page');
    }
}
