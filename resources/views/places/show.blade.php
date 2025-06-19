@extends('layouts.app')
@section('content')

<section class="container py-5">
  <div class="row g-4 align-items-center">

    <!-- Left Column: Image + Back Button -->
    <div class="col-md-6">
      @php
        $backUrl = route('packages.index');
        if (request()->has('from')) {
          switch (request()->get('from')) {
            case 'packages': $backUrl = route('packages.index'); break;
            case 'home': $backUrl = route('home'); break;
            case 'search': $backUrl = route('search.results'); break;
          }
        }
      @endphp

      <a href="{{ $backUrl }}" 
         class="btn btn-outline-danger mb-4 fw-semibold text-uppercase" 
         style="letter-spacing: 1px;">
         &larr; Back
      </a>

      <img src="{{ asset('storage/' . $place->image) }}" 
           class="img-fluid rounded shadow-sm w-100" 
           style="max-height: 420px; object-fit: cover;" 
           alt="{{ $place->name }}">
    </div>

    <!-- Right Column: Place Details -->
    <div class="col-md-6">
      <h2 class="fw-bold text-uppercase mb-4" style="letter-spacing: 1.5px;">{{ $place->name }}</h2>

      <p class="mb-3 fs-5">
        <i class="fa-solid fa-location-dot text-danger me-2"></i>
        <strong>Location:</strong> {{ $place->location }}
      </p>
      <p class="mb-3 fs-5">
        <i class="fa-solid fa-dollar-sign text-success me-2"></i>
        <strong>Price:</strong> ${{ number_format($place->price, 2) }}/Person
      </p>
      <p class="mb-3 fs-5">
        <i class="fa-solid fa-clock text-primary me-2"></i>
        <strong>Duration:</strong> {{ $place->duration }}
      </p>
      <p class="mb-4 fs-6 text-muted" style="line-height: 1.6;">
        <i class="fa-solid fa-pen-to-square text-info me-2"></i>
        <strong>Description:</strong> {{ $place->details }}
      </p>

      <a href="#" 
         class="btn btn-warning text-uppercase fw-semibold px-4 py-2 shadow-sm" 
         data-bs-toggle="modal" 
         data-bs-target="#bookingModal" 
         style="letter-spacing: 1px;">
         Book Now
      </a>
    </div>
  </div>

  <!-- Related Places -->
  <hr class="my-5">

  <h3 class="text-center text-uppercase fw-bold mb-4" style="letter-spacing: 1.5px;">Related Places</h3>

  <style>
    .image-container {
      height: 250px;
      overflow: hidden;
      border-radius: 0.5rem 0.5rem 0 0;
    }

    .image-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s ease;
    }

    .hover-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: pointer;
      border-radius: 0.5rem;
    }

    .hover-card:hover {
      background-color: #fff8f0 !important;
      transform: translateY(-5px);
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
    }

    .card-body h5 {
      letter-spacing: 1.2px;
    }

    /* Responsive spacing */
    @media (max-width: 767px) {
      .image-container {
        height: 200px;
      }
    }
  </style>

  <div class="row g-4">
    @forelse($relatedPlaces as $related)
      <div class="col-sm-6 col-lg-4">
        <div class="card h-100 shadow-sm hover-card">
          <div class="image-container">
            <img src="{{ asset('storage/' . $related->image) }}" 
                 alt="{{ $related->name }}" 
                 class="card-img-top">
          </div>
          <div class="card-body d-flex flex-column">
            <h5 class="card-title fw-semibold text-uppercase">{{ $related->name }}</h5>
            <p class="mb-1 fs-6">
              <i class="fa-solid fa-location-dot text-danger me-2"></i>
              {{ $related->location }}
            </p>
            <p class="mb-1 fs-6 text-success">
              <i class="fa-solid fa-dollar-sign me-2"></i>
              ${{ number_format($related->price, 2) }}/Person
            </p>
            <p class="mb-3 fs-6 text-primary">
              <i class="fa-solid fa-clock me-2"></i>
              {{ $related->duration }}
            </p>
            <div class="mt-auto text-end">
              <a href="{{ route('places.show', ['place' => $related->id, 'from' => request('from', 'packages')]) }}" 
                 class="btn btn-info btn-sm text-uppercase fw-semibold" 
                 style="letter-spacing: 1px;">
                 View Details
              </a>
            </div>
          </div>
        </div>
      </div>
    @empty
      <p class="text-center text-muted fs-5">No related places found.</p>
    @endforelse
  </div>
</section>

<!-- Booking Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <form method="POST" action="{{ route('book.place', $place->id) }}">
      @csrf
      <div class="modal-content rounded-3 shadow">
        <div class="modal-header border-0">
          <h5 class="modal-title fw-bold" id="bookingModalLabel">Booking for {{ $place->name }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <input type="hidden" name="place_id" value="{{ $place->id }}">

          <div class="mb-3">
            <label for="guests_count" class="form-label fw-semibold">Number of Guests</label>
            <input type="number" id="guests_count" name="guests_count" value="{{ old('guests_count', 1) }}" min="1" required class="form-control">
            @error('guests_count')
              <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
          </div>

          <label for="bookingType" class="form-label fw-semibold">Booking Type</label>
          <select name="type" id="bookingType" class="form-select mb-3" required>
            <option value="" disabled selected>Select booking type</option>
            <option value="individual">Individual</option>
            <option value="family">Family</option>
            <option value="group">Group</option>
          </select>

          <div id="paymentSection" style="display: none;">
            <div class="mb-3">
              <label for="paymentMethod" class="form-label fw-semibold">Payment Method</label>
              <select name="payment_method" id="paymentMethod" class="form-select" required>
                <option value="" disabled selected>Select payment method</option>
                <option value="credit_card">Credit Card</option>
                <option value="paypal">PayPal</option>
                <option value="aba">ABA</option>
              </select>
            </div>

            <input type="hidden" name="payment_status" id="payment_status" value="pending">

            <div class="d-flex justify-content-between">
              <button type="submit" name="payment_action" value="later" class="btn btn-secondary px-4" onclick="return validateBookingForm()">Pay Later</button>
              <button type="submit" name="payment_action" value="now" class="btn btn-success px-4" onclick="return validateBookingForm()">Pay Now</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

<script>
  document.getElementById('bookingType').addEventListener('change', function () {
    document.getElementById('paymentSection').style.display = this.value ? 'block' : 'none';
  });

  function validateBookingForm() {
    const type = document.getElementById('bookingType').value;
    const method = document.getElementById('paymentMethod').value;

    if (!type) {
      alert("Please select a booking type.");
      return false;
    }
    if (!method) {
      alert("Please select a payment method.");
      return false;
    }
    return true;
  }
</script>

@endsection