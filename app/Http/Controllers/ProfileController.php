<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Booking;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form (Default from Laravel).
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Show full user profile: image, name, email, history.
     */
    public function index(Request $request): View
    {
        $user = $request->user();

        // Load booking history with package info
        $bookings = $user->bookings()->with('package')->latest()->get();

        return view('profile.index', compact('user', 'bookings'));
    }

    /**
     * Handle profile image upload.
     */
    public function uploadImage(Request $request): RedirectResponse
    {
        $request->validate([
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
        ]);

        $imagePath = $request->file('image')->store('profile_images', 'public');

        $user = $request->user();
        $user->profile_image = $imagePath;
        $user->save();

        return back()->with('success', 'Profile image updated successfully.');
    }

    /**
     * Update the user's profile information (default).
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
