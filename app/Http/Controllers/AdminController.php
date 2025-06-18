<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Show admin dashboard with all bookings
    public function dashboard()
    {
        $bookings = Booking::with(['user', 'place'])->latest()->get();

        return view('admin.dashboard', compact('bookings'));
    }

    // Show detailed info for a single booking
    public function show($id)
    {
        $booking = Booking::with(['user', 'place'])->findOrFail($id);

        return view('admin.bookings.show', compact('booking'));
    }

    // Show form to edit a booking
    public function edit($id)
    {
        $booking = Booking::findOrFail($id);

        return view('admin.bookings.edit', compact('booking'));
    }

    // Update booking with new data from form
    public function update(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);

        $request->validate([
            'status' => 'required|in:pending,paid,cancelled',
            // Add more validations here if you want to allow updating other fields
        ]);

        $booking->status = $request->status;
        // Update other fields if necessary

        $booking->save();

        return redirect()->route('admin.dashboard')->with('success', 'Booking updated successfully.');
    }

    // Delete a booking
    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Booking deleted successfully.');
    }
}