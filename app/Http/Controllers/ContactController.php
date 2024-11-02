<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');  
    }

    public function send(Request $request)
    {
        // Validasi input form
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'motor_type' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        // Set up the email content with all the required fields
        $emailContent = "
        Name : {$validated['name']}
        Email : {$validated['email']}
        Motorcycle Type : {$validated['motor_type']}
        Phone : {$validated['phone']}

        Message:
        {$validated['message']}
        ";


        // Send email
        Mail::raw($emailContent, function($message) use ($validated) {
            $message->to('luthfidika31@gmail.com')
                    ->subject('SEGITIGA MOTOR')
                    ->from($validated['email'], $validated['name']);
        });

        // Redirect or return response
        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
