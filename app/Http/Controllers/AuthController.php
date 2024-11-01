<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        // Validasi form
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cari user berdasarkan email
        $user = User::where('email', $request->email)->first();

        if ($user) {
            // Verifikasi password
            if (Hash::check($request->password, $user->password)) {
                // Buat session
                Auth::login($user);
                Session::put('user_id', $user->id);

                return redirect()->route('dashboard')->with('success', 'Login successful!');
            } else {
                return back()->withErrors(['password' => 'Password incorrect!']);
            }
        } else {
            return back()->withErrors(['email' => 'No account found with that email!']);
        }
    }

    public function logout()
    {
        Auth::logout();
        Session::forget('user_id');
        return redirect()->route('login')->with('success', 'You have been logged out!');
    }
}
