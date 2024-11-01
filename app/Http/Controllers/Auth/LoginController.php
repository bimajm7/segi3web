<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller; // Memperbaiki kesalahan pengetikan di sini
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
            $user = Auth::user(); // Ambil user yang sedang login

            // Periksa role
            if ($user->role == 'admin') {
                return redirect()->route('admin'); // Arahkan ke halaman admin
            } elseif ($user->role == 'user') { // Menggunakan elseif untuk konsistensi
                return redirect()->route('index5'); // Arahkan ke halaman index5
            }
        } else {
            // Jika login gagal
            return back()->withErrors([
                'email' => 'Email atau password salah',
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login'); // Menghapus duplikasi pengalihan
    }
}
