@extends('layouts.app')

@section('content')
<div class="container py-5">
  <!-- Back Button -->
  <a href="{{ url()->previous() }}" class="btn btn-outline-danger mb-4 text-uppercase fw-semibold">
    &larr; Back
  </a>

  <!-- Page Title -->
  <h2 class="mb-5 text-uppercase fw-bold text-center text-md-start">Transportation</h2>

  <!-- Transportation Cards Grid -->
  <div class="row g-4">
    @foreach ($transportations as $transportation)
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card h-100 shadow-sm hover-shadow rounded-3 overflow-hidden">
        <div class="transport-image-wrapper">
          <img src="{{ asset('storage/' . $transportation->image) }}" 
               class="card-img-top" 
               alt="{{ $transportation->name }}"
               loading="lazy"
               style="object-fit: cover; height: 220px; width: 100%;">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title fw-semibold text-uppercase">{{ $transportation->name }}</h5>
          <p class="card-text text-muted flex-grow-1">{{ $transportation->description }}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

<style>
  /* Hover shadow effect */
  .hover-shadow:hover {
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    transform: translateY(-5px);
    transition: all 0.3s ease;
  }

  /* Make images nicely cropped */
  .transport-image-wrapper {
    overflow: hidden;
  }

  /* Responsive adjustments */
  @media (max-width: 767.98px) {
    h2 {
      font-size: 1.8rem;
    }
  }
</style>
@endsection