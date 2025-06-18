<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
use App\Models\Place;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return response()->json(['redirect' => route('login')], 401);
        }

        $request->validate([
            'place_id' => 'required|exists:places,id',
            'stars' => 'required|integer|min:1|max:5',
        ]);

        Rating::updateOrCreate(
            ['user_id' => Auth::id(), 'place_id' => $request->place_id],
            ['stars' => $request->stars]
        );

        return response()->json(['message' => 'Thank you for your rating!']);
    }
}