<?php

namespace App\Http\Controllers;
use App\Models\Place;
use App\Models\Province;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index(Request $request)
    {
        $provinces = Province::all();
        // Filter by province if selected
        $provinceId = $request->query('province');
        $search = $request->query('search');
        $places = Place::query();

        if ($provinceId) {
            $places->where('province_id', $provinceId);
        }

        if ($search) {
            $places->where('name', 'LIKE', '%' . $search . '%');
        }
        $places = $places->get();
        return view('packages.index', compact('provinces', 'places'));
    }
}