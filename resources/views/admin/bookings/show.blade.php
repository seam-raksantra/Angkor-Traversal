@extends('layouts.app')
    @section('content')
    <div class="container mt-5 mb-5">
        <h1 class="mb-4">Booking Details</h1>
        <div class="card shadow">
            <div class="card-body">
                <p><strong>User:</strong> {{ $booking->user->name }}</p>
                <p><strong>Email:</strong> {{ $booking->user->email }}</p>
                <p><strong>Place:</strong> {{ $booking->place->name }}</p>
                <p><strong>Booking Date:</strong> {{ $booking->booking_date }}</p>
                <p><strong>Status:</strong> {{ ucfirst($booking->status) }}</p>
                <p><strong>Total Price:</strong> ${{ number_format($booking->total_price, 2) }}</p>
                <p><strong>Guests Count:</strong> {{ $booking->guests_count }}</p>
            </div>
            <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary mt-3">Back to Dashboard</a>
        </div>
    </div>
    @endsection