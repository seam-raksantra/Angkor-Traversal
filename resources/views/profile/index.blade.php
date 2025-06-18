@extends('layouts.app')
@section('content')
<div class="container mt-5 mb-5"> {{-- added mb-5 for spacing from footer --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-uppercase">User Profile</h2>
        <form action="{{ route('logout') }}" method="POST" class="mb-0">
            @csrf
            <button type="submit" class="btn btn-danger px-4 fw-semibold text-capitalize">Log out</button>
        </form>
    </div>
    <div class="row justify-content-center">
        {{-- Left: Profile Image + Upload --}}
        <div class="col-md-4 text-center mb-4">
            <div class="card shadow-sm p-3">
                @if ($user->profile_image)
                    <img src="{{ asset('storage/' . $user->profile_image) }}" alt="Profile Image" class="img-fluid rounded mb-3" style="max-height: 300px; object-fit: cover;">
                @else
                    <img src="{{ asset('default-avatar.png') }}" alt="Default Avatar" class="rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
                @endif
                <form action="{{ route('profile.uploadImage') }}" method="POST" enctype="multipart/form-data" class="d-flex flex-column align-items-center">
                    @csrf
                    <input type="file" name="image" class="form-control mb-3" required>
                    <button type="submit" class="btn btn-primary w-100 fw-semibold">Upload Photo</button>
                </form>
                @if (session('success'))
                    <div class="alert alert-success mt-3 mb-0">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </div>

        {{-- Right: User Info + Bookings --}}
        <div class="col-md-7">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h3 class="mb-3 fw-semibold border-bottom pb-2">Account Information</h3>

                    <p class="mb-2"><strong>Name:</strong> <span class="text-primary">{{ $user->name }}</span></p>
                    <p class="mb-2"><strong>Email:</strong> {{ $user->email }}</p>

                    {{-- Optional new section: Member Since --}}
                    <p class="mb-0 text-muted"><small>Member Since: {{ $user->created_at->format('F Y') }}</small></p>
                </div>
            </div>
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white fw-semibold">
                    Booking History
                </div>
                <div class="card-body">
                    @if ($bookings->isEmpty())
                        <p class="text-muted">No bookings yet.</p>
                    @else
                    <ul class="list-group">
                    @foreach ($bookings as $booking)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <strong>{{ $booking->package->name }}</strong><br>
                                <small class="text-muted">Booked on: {{ $booking->created_at->format('M d, Y') }}</small>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="badge bg-success rounded-pill me-3">Confirmed</span>
                                <form action="{{ route('profile.booking.delete', $booking->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to cancel this booking?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" title="Remove Booking">
                                        <i class="bi bi-trash"></i> {{-- Bootstrap icon for trash --}}
                                    </button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                    </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection