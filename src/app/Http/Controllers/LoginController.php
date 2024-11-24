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

        // Cek apakah autentikasi berhasil
        if (Auth::attempt(['nim' => $request->nim, 'password' => $request->password])) {
            // Jika berhasil, redirect ke halaman dashboard atau halaman yang diinginkan
            return redirect()->intended('/profile');
        }

        // Jika gagal, kembali ke form login dengan pesan error
        return back()->withErrors(['nim' => 'NIM atau password salah.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
