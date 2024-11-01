<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Display the bookings and users management page
    public function index(Request $request)
    {
        // Check if the user is logged in and is an admin
        if (!Auth::check() || Auth::user()->role != 'admin') {
            return redirect()->route('home')->with('error', 'Access denied. Only admins can access this page.');
        }

        $page = $request->get('page', 'bookings');

        $bookings = Booking::with('user')->orderBy('booking_date')->orderBy('booking_time')->get();
        $users = User::orderBy('firstname')->get();

        return view('admin', compact('bookings', 'users', 'page'));
    }

    // Delete a booking
    public function deleteBooking(Request $request)
    {
        $booking = Booking::find($request->booking_id);

        if ($booking) {
            $booking->delete();
            return back()->with('success', 'Booking deleted successfully!');
        }

        return back()->with('error', 'Booking not found.');
    }

    // Update booking status
    public function updateBookingStatus(Request $request)
    {
        $booking = Booking::find($request->booking_id);

        if ($booking) {
            $booking->status = $request->status;
            $booking->save();
            return back()->with('success', 'Status updated successfully!');
        }

        return back()->with('error', 'Booking not found.');
    }

    // Delete a user
    public function deleteUser(Request $request)
    {
        $user = User::find($request->user_id);

        if ($user) {
            if ($user->id == Auth::id()) {
                return back()->with('error', 'You cannot delete yourself!');
            }

            $user->delete();
            return back()->with('success', 'User deleted successfully!');
        }

        return back()->with('error', 'User not found.');
    }
}
