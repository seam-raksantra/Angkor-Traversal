<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PlaceResource;
use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    // Get all places
    public function index(Request $request)
{
    $places = Place::query();

    // Filter by province
    if ($request->has('province_id')) {
        $places->where('province_id', $request->province_id);
    }

    // Filter by name
    if ($request->has('name')) {
        $places->where('name', 'like', '%' . $request->name . '%');
    }

    // Paginate the results
    $places = $places->paginate(10);

    // Return paginated data along with pagination links
    return response()->json([
        'data' => PlaceResource::collection($places),
        'pagination' => [
            'total' => $places->total(),
            'count' => $places->count(),
            'per_page' => $places->perPage(),
            'current_page' => $places->currentPage(),
            'total_pages' => $places->lastPage(),
        ]
    ]);
}

    // Get a single place by ID
    public function show($id)
{
    $place = Place::findOrFail($id);

    // Related places by same province
    $relatedPlaces = Place::where('province_id', $place->province_id)
                          ->where('id', '!=', $place->id)
                          ->limit(3)
                          ->get();

    // Fallback: Same first letter if province has only one place
    if ($relatedPlaces->isEmpty()) {
        $relatedPlaces = Place::where('name', 'LIKE', $place->name[0] . '%')
                              ->where('id', '!=', $place->id)
                              ->limit(3)
                              ->get();
    }

    return view('places.show', compact('place', 'relatedPlaces'));
}

    // Create a new place
    public function store(Request $request)
    {
        // Validate input data
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'duration' => 'required|string',
            'location' => 'required|string',
            'image' => 'required|string',
            'details' => 'required|string',
            'province_id' => 'required|exists:provinces,id',
        ]);

        // Create new place
        $place = Place::create($request->all());

        // Return the newly created place
        return new PlaceResource($place);
    }

    // Update a place by ID
    public function update(Request $request, $id)
    {
        // Validate input data
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'duration' => 'required|string',
            'location' => 'required|string',
            'image' => 'required|string',
            'details' => 'required|string',
            'province_id' => 'required|exists:provinces,id',
        ]);

        // Find the place by ID and update
        $place = Place::findOrFail($id);
        $place->update($request->all());

        // Return updated place
        return new PlaceResource($place);
    }

    // Delete a place by ID
    public function destroy($id)
    {
        // Find the place by ID and delete
        $place = Place::findOrFail($id);
        $place->delete();

        // Return a response indicating success
        return response()->json(['message' => 'Place deleted successfully']);
    }
}