<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Api\PlaceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingWebController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\TransportationController;
use App\Http\Controllers\GuiderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/about', [PageController::class, 'about'])->name('about');

// Admin dashboard route — update route name to admin.dashboard and path to /admin/dashboard for consistency
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
    ->middleware('auth')
    ->name('admin.dashboard');

Route::post('/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile/upload-image', [ProfileController::class, 'uploadImage'])->name('profile.uploadImage');

    // Booking thank you page
    Route::get('/user/bookings/history', function () {
        return view('bookings.thankyou'); // Ensure this view exists
    })->name('user.bookings.history');

    // Booking API
    Route::post('/book/{place}', [\App\Http\Controllers\Api\BookingController::class, 'book'])->name('book.place');

    // Delete booking from profile
    Route::delete('/profile/bookings/{booking}', [BookingWebController::class, 'destroy'])->name('profile.booking.delete');
});

// Home controller route (optional duplicate)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Places routes
Route::get('/places/{id}', [PlaceController::class, 'show'])->name('places.show');
Route::get('/places/{place}', [PlaceController::class, 'show'])->name('places.show');

// Packages route
Route::get('/packages', [PackageController::class, 'index'])->name('packages.index');
Route::post('/rate', [RatingController::class, 'store'])->name('rate.store');

// Admin Bookings routes for CRUD actions
Route::middleware(['auth'])->group(function () {
    // Admin dashboard route at /admindashboard
    Route::get('/admindashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Booking CRUD routes under /admin/bookings
    Route::get('/admin/bookings/{booking}', [AdminController::class, 'show'])->name('admin.bookings.view');
    Route::get('/admin/bookings/{booking}/edit', [AdminController::class, 'edit'])->name('admin.bookings.edit');
    Route::put('/admin/bookings/{booking}', [AdminController::class, 'update'])->name('admin.bookings.update');
    Route::delete('/admin/bookings/{booking}', [AdminController::class, 'destroy'])->name('admin.bookings.delete');
});

Route::get('/hotels', [HotelController::class, 'index'])->name('hotels.index');
Route::get('/transportations', [TransportationController::class, 'index'])->name('transportations.index');
Route::get('/guiders', [GuiderController::class, 'index'])->name('guiders.index');