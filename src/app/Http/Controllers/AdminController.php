<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function showAdminDashboard()
    {
        return view('dashboard_admin_page');
    }
}
