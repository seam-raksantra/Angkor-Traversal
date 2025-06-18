<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
</head>
    <body>
    @extends('layouts.app')
        @section('content')
        <div class="container mt-5 mb-5">
            <h1 class="mb-4 text-dark fw-bold text-uppercase">Admin Dashboard</h1>
            <div class="card shadow">
                <div class="card-header bg-info text-uppercase text-white fw-semibold">
                    <h5 class="mb-0">All User Bookings</h5>
                </div>
                <div class="card-body">
                    @if ($bookings->isEmpty())
                        <p class="text-center text-muted">No bookings yet.</p>
                    @else
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>User</th>
                                        <th>Email</th>
                                        <th>Place</th>
                                        <th>Booking Date</th>
                                        <th>Status</th>
                                        <th>Total Price</th>
                                        <th>Guests</th>
                                        <th class="text-center">Actions</th> <!-- Added Actions column -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bookings as $index => $booking)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $booking->user->name }}</td>
                                            <td>{{ $booking->user->email }}</td>
                                            <td>{{ $booking->place->name }}</td>
                                            <td>{{ $booking->created_at->format('M d, Y H:i') }}</td>
                                            <td>
                                                <span class="badge bg-{{ $booking->status == 'paid' ? 'success' : 'warning' }}">
                                                    {{ ucfirst($booking->status) }}
                                                </span>
                                            </td>
                                            <td>${{ number_format($booking->place->price * $booking->guests_count, 2) }}</td>
                                            <td>{{ $booking->guests_count }}</td>
                                            <td class="text-center">
                                                {{-- View Button --}}
                                                <a href="{{ route('admin.bookings.view', $booking->id) }}" class="btn btn-sm btn-info me-1" title="View Booking">
                                                    <i class="bi bi-eye"></i>
                                                </a>
                                                {{-- Edit Button --}}
                                                <a href="{{ route('admin.bookings.edit', $booking->id) }}" class="btn btn-sm btn-primary me-1" title="Edit Booking">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                                {{-- Delete Button --}}
                                                <form action="{{ route('admin.bookings.delete', $booking->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this booking?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" title="Delete Booking">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div> 
        </div>
        @endsection
    </body>
</html>