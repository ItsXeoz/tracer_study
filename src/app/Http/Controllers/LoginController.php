<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login_page');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'nim' => 'required|exists:users,nim',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['nim' => $request->nim, 'password' => $request->password])) {

            if(Auth::user()-> role == 'admin'){
                return redirect()->intended('/admin');
            }
            return redirect()->intended('/user');
        }

        return back()->withErrors(['nim' => 'NIM atau password salah.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
