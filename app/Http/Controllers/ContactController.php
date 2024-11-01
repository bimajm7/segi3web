<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');  // Ini akan mengarahkan ke view contact.blade.php
    }
    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'motor_type' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        // Data email yang dikirim
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'motor_type' => $request->motor_type,
            'phone' => $request->phone,
            'message' => $request->message,
        ];

        // Kirim email menggunakan view 'emails.contact'
        Mail::send('contact', $details, function($message) use ($request) {
            $message->to('luthfidika31@gmail.com')  // Ganti dengan email tujuan
                    ->subject('New Contact Message from ' . $request->name);
        });

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
