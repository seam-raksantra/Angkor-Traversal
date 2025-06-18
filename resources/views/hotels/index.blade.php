@extends('layouts.app')

@section('content')
<div class="container py-5">
  <a href="{{ url()->previous() }}" 
     class="btn btn-outline-danger mb-4 text-uppercase fw-semibold" 
     style="letter-spacing: 1px;">
    &larr; Back
  </a>

  <h2 class="mb-5 text-uppercase fw-bold" style="letter-spacing: 1.5px;">Hotels & Resort</h2>
  <h5 class="mb-5 fw-light text-danger"><del>Each resort was located in each provices so after you booked a places with our services, you'll get a places to saty no need to spend more!</del></h5>

  <div class="row g-4">
    @foreach ($hotels as $hotel)
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card h-100 shadow-sm rounded-3 overflow-hidden hover-scale">
        <div class="hotel-image-wrapper" style="height: 230px; overflow: hidden;">
          <img src="{{ asset('storage/' . $hotel->image) }}" 
               alt="{{ $hotel->name }}" 
               class="card-img-top w-100 h-100" 
               style="object-fit: cover;"
               loading="lazy">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title fw-semibold text-uppercase">{{ $hotel->name }}</h5>
          <p class="card-text text-muted flex-grow-1">{{ $hotel->description }}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

<style>
  .hover-scale {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
  }
  .hover-scale:hover {
    transform: translateY(-6px);
    box-shadow: 0 14px 30px rgba(0, 0, 0, 0.12);
  }
  @media (max-width: 767.98px) {
    h2 {
      font-size: 1.9rem;
    }
  }
</style>
@endsection