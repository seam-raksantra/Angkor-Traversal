<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\ProvinceController;
use App\Http\Controllers\Api\PlaceController;
use App\Http\Controllers\Api\BookingController;
use Illuminate\Support\Facades\Route;

// Publicly accessible route for all places
Route::get('/places', [PlaceController::class, 'index']);

// Publicly accessible route for a single place by ID
Route::get('/places/{id}', [PlaceController::class, 'show']);

// Protected route for creating a place (authentication required)
Route::post('/places', [PlaceController::class, 'store'])->middleware('auth:sanctum');

// Protected route for updating a place (authentication required)
Route::put('/places/{id}', [PlaceController::class, 'update'])->middleware('auth:sanctum');

// Protected route for deleting a place (authentication required)
Route::delete('/places/{id}', [PlaceController::class, 'destroy'])->middleware('auth:sanctum');

// Publicly accessible route for all provinces
Route::get('/provinces', [ProvinceController::class, 'index']);

// Publicly accessible route for a single province by ID
Route::get('/provinces/{id}', [ProvinceController::class, 'show']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/places', [PlaceController::class, 'store']);
    Route::put('/places/{id}', [PlaceController::class, 'update']);
    Route::delete('/places/{id}', [PlaceController::class, 'destroy']);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/bookings', [BookingController::class, 'store']); // Create booking
    Route::get('/bookings', [BookingController::class, 'index']); // View all bookings
    Route::put('/bookings/{id}/status', [BookingController::class, 'updateStatus']); // Update booking status
    Route::delete('/bookings/{id}', [BookingController::class, 'cancel']); // Cancel booking
});