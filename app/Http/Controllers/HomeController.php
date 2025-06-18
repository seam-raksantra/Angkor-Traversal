<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $places = Place::whereIn('name', [
            'Phnom Penh City',
            'Koh Trong Island',
            'Kampot Province',
            'Angkor Wat',
            'Kirirom National Park',
            'Preah Vihear Temple',
        ])->get();

        return view('home', compact('places'));
    }
}
