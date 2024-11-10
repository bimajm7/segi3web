<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba untuk login
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Jika login sukses
            $user = Auth::user();

            // Periksa role dan arahkan ke halaman yang sesuai dengan pesan sukses
            if ($user->role == 'admin') {
                return redirect()->route('admin')->with('status', 'Login berhasil sebagai Admin.');
            } elseif ($user->role == 'user') {
                return redirect()->route('index5')->with('status', 'Login berhasil sebagai User.');
            }
        } else {
            // Jika login gagal
            $error = 'Email atau password salah. Silakan coba lagi.';
            
            // Cek jika email tidak terdaftar
            if (!User::where('email', $request->email)->exists()) {
                $error = 'Email tidak terdaftar. Silakan daftar terlebih dahulu.';
            }

            return back()->withErrors([
                'email' => $error,
            ])->withInput($request->only('email'));
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('status', 'Logout berhasil.');
    }
}