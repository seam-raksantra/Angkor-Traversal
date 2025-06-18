<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProvinceResource;
use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    // Get all provinces with places
    public function index()
    {
        // Eager load the places for each province
        $provinces = Province::with('places')->get();
        
        // Return the provinces with the PlaceResource for each place
        return ProvinceResource::collection($provinces);
    }

    // Get a single province by ID with places
    public function show($id)
    {
        // Find the province by ID and load related places
        $province = Province::with('places')->findOrFail($id);
        
        // Return the province resource
        return new ProvinceResource($province);
    }
}