<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function showBookingForm()
    {
        // Pastikan pengguna telah login
        if (!Auth::check()) {
            return redirect()->route('login')->withErrors('You must be logged in to make a booking.');
        }

        return view('booking'); // Pastikan Anda memiliki view booking.blade.php
    }

    public function book(Request $request)
    {
        // Validasi input
        $request->validate([
            'ltn__name' => 'required|string|max:255',        // Plat Nomor
            'ltn__lastname' => 'required|string|max:255',    // Merk Motor
            'ltn__email' => 'required|string|max:255',       // Tipe Motor
            'service_type' => 'required|string|max:255',     // Tipe Servis
            'booking_date' => 'required|date',               // Tanggal Booking
            'booking_time' => 'required|string',             // Waktu Booking
            'phone' => 'required|string|max:255',            // Nomor Telepon
            'ltn__message' => 'nullable|string',             // Catatan (Opsional)
        ]);

        // Ambil user_id dari sesi
        $user_id = Auth::id();

        // Pengecekan booking pada waktu dan tanggal yang sama
        $booking_count = DB::table('bookings')
            ->where('booking_date', $request->booking_date)
            ->where('booking_time', $request->booking_time)
            ->count();

        // Jika sudah ada 5 booking pada waktu dan tanggal yang sama, booking ditolak
        if ($booking_count >= 5) {
            return back()->withErrors('Booking not available at this time. Please choose another time.');
        }

        // Buat booking baru
        Booking::create([
            'user_id' => $user_id,
            'plat_no' => $request->ltn__name,
            'motor_brand' => $request->ltn__lastname,
            'motor_type' => $request->ltn__email,
            'service_type' => $request->service_type,
            'phone' => $request->phone,
            'booking_date' => $request->booking_date,
            'booking_time' => $request->booking_time,
            'notes' => $request->ltn__message,
            'status' => 'pending' // status default
        ]);

        // Kembalikan ke halaman sebelumnya dengan pesan sukses
        return back()->with('success', 'Booking successful!');
    }

}
