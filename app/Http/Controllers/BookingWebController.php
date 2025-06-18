<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingWebController extends Controller
{
    public function userBookingHistory()
    {
        $user = Auth::user();

        // Directly query Booking model
        $bookings = Booking::where('user_id', $user->id)
            ->with('place')
            ->latest()
            ->get();

        return view('user.booking-history', compact('user', 'bookings'));
    }

    // New method to delete a booking
    public function destroy($bookingId)
    {
        $user = Auth::user();

        $booking = Booking::where('id', $bookingId)
            ->where('user_id', $user->id)
            ->first();

        if (!$booking) {
            return redirect()->back()->with('error', 'Booking not found or unauthorized.');
        }

        $booking->delete();

        return redirect()->back()->with('success', 'Booking removed successfully.');
    }
}