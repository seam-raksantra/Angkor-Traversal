@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Booking History</h2>
    {{-- Show user info --}}
    <div class="card mb-4">
        <div class="card-body">
            <h5><strong>Name:</strong> {{ $user->name }}</h5>
            <h5><strong>Email:</strong> {{ $user->email }}</h5>
        </div>
    </div>
    {{-- Booking list --}}
    <div class="card">
        <div class="card-header bg-primary text-white">
            Your Bookings
        </div>
        <div class="card-body">
            @if ($bookings->isEmpty())
                <p>No bookings yet.</p>
            @else
                <ul class="list-group">
                    @foreach ($bookings as $booking)
                        <li class="list-group-item">
                            <strong>Place:</strong> {{ $booking->place->name ?? 'Unknown Place' }} <br>
                            <strong>Booked on:</strong> {{ $booking->created_at->format('M d, Y') }} <br>
                            <strong>Status:</strong> {{ ucfirst($booking->status) }} <br>
                            <strong>Total Price:</strong> ${{ number_format($booking->total_price, 2) }}
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</div>
@endsection