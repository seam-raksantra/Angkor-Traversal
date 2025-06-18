<?php

namespace App\Http\Controllers;

use App\Models\Transportation;

class TransportationController extends Controller
{
    public function index()
    {
        $transportations = Transportation::all();
        return view('transportations.index', compact('transportations'));
    }
}