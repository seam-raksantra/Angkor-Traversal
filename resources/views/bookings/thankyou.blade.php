@extends('layouts.app')
    @section('content')
    <div class="container mt-5 text-center">
        <h2>Thank You for Your Booking!</h2>
        <p>Your booking has been successfully recorded.</p>
        <a href="{{ route('profile.index') }}" class="btn btn-primary mt-3">Back to Profile</a>
    </div>
    @endsection