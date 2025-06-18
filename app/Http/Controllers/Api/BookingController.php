<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    // Store a new booking
    public function book(Request $request, $placeId)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to book.');
        }
    
        // Validate the booking request including guests_count
        $request->validate([
            'type' => 'required|in:individual,family,group',
            'payment_method' => 'required',
            'payment_action' => 'required|in:now,later',
            'guests_count' => 'required|integer|min:1',
        ]);
    
        $place = Place::findOrFail($placeId);
    
        $guestsCount = $request->guests_count;
    
        // Create the booking
        $booking = new Booking();
        $booking->user_id = Auth::id();
        $booking->place_id = $place->id;
        $booking->booking_date = now();
        $booking->guests_count = $guestsCount;
        $booking->price = $place->price;
        $booking->total_price = $place->price * $guestsCount;
        $booking->status = $request->payment_action == 'now' ? 'paid' : 'pending';
        $booking->save();
    
        // Redirect to profile with message
        return redirect()->route('profile.index')->with('success', 'Booking successful! Thank you.');
    }    

    // View all bookings for the authenticated user
    public function index()
    {
        $bookings = Booking::where('user_id', Auth::id())->get();
        return response()->json(['bookings' => $bookings]);
    }

    // Update the booking status
    public function updateStatus(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);
        $booking->status = $request->status;
        $booking->save();

        return response()->json(['message' => 'Booking status updated successfully', 'booking' => $booking]);
    }

    // Cancel the booking
    public function cancel($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->status = 'cancelled';
        $booking->save();

        return response()->json(['message' => 'Booking cancelled successfully', 'booking' => $booking]);
    }
}