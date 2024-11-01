<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register'); // Pastikan Anda memiliki view register.blade.php
    }

    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed', // Menggunakan konfirmasi password
        ]);

        // Buat user baru
        User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash password
        ]);

        return redirect()->route('login')->with('success', 'Registration successful!'); // Arahkan ke halaman login setelah registrasi
    }
}
