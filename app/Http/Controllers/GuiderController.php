<?php

namespace App\Http\Controllers;

use App\Models\Guider;

class GuiderController extends Controller
{
    public function index()
    {
        $guiders = Guider::all();
        return view('guiders.index', compact('guiders'));
    }
}