<style>
    .place-card:hover {
      background-color:  #fdf9f2 !important;
      transform: translateY(-5px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
    }

    .place-card:hover .card-title,
    .place-card:hover .card-text {
      color: #212529;
    }

    .place-card:hover .btn-info {
      background-color: #17a2b8;
      border-color: #17a2b8;
    }

    .place-card:hover .btn-outline-warning {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .carousel-item::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 1;
    }
    .carousel-caption {
      z-index: 2;
    }
    .carousel-inner img {
      object-fit: cover;
      height: 90vh;
    }

    .input-group .form-control:focus {
      box-shadow: none;
      border-color: #17a2b8;
    }

    .input-group i.bi-search {
      font-size: 1rem;
    }

    /* Star rating styles */
    .star-rating {
      font-size: 1.2rem;
      color: #ffc107;
      cursor: pointer;
      user-select: none;
    }
    .star-rating .bi-star-fill {
      color: #ffc107;
    }
    .star-rating .bi-star {
      color: #ddd;
    }

    /* Our Cooperate Section styles */
    .cooperate-icon {
      font-size: 3rem;
      color: #17a2b8;
      margin-bottom: 0.5rem;
    }
    .cooperate-card {
      background-color: #f8f9fa;
      border-radius: 0.5rem;
      padding: 1.5rem 1rem;
      text-align: center;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      transition: box-shadow 0.3s ease;
      cursor: default;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    .cooperate-card:hover {
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
      background-color: #e9f7ff;
    }
    .cooperate-title {
      font-weight: 600;
      text-transform: uppercase;
      font-size: 1.1rem;
      color: #212529;
    }
 
    .hover-shadow:hover {
      box-shadow: 0 8px 16px rgba(0,0,0,0.15);
      transform: translateY(-5px);
      transition: all 0.3s ease;
    }

  </style>
@extends('layouts.app')
  @section('content')
  {{-- Hero Carousel --}}
  <div id="heroCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('storage/angkor_views.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h1 class="fw-bold text-white">Explore Cambodia</h1>
          <h4 class="text-light">Discover ancient temples, rich culture, and natural beauty</h4>
          <p class="lead text-white">Find your next unforgettable journey through our curated tour packages.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('storage/phnompenh_views.jpeg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="fw-bold text-white">Phnom Penh City Life</h1>
          <h4 class="text-light">A blend of tradition and modernity</h4>
          <p class="lead text-white">Experience the heart of Cambodia with vibrant streets and royal landmarks.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
    <div class="carousel-indicators">
      <button data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
      <button data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
    </div>
  </div>

  {{-- Search Banner with Category Dropdown --}}
  <section class="container mb-5">
    <div class="row align-items-center g-3">
      {{-- Search Input --}}
      <form method="GET" action="{{ route('packages.index') }}" class="col-md-9">
        <div class="input-group input-group-md position-relative">
          <input type="text" name="search" class="form-control ps-5 py-2 rounded fw-secondary" placeholder="Search for a package..." value="{{ request('search') }}" style="height: 45px;">
          <span class="position-absolute top-50 start-0 translate-middle-y ps-3 text-muted">
            <i class="bi bi-search"></i>
          </span>
        </div>
      </form>
      {{-- Category Dropdown Next to Search --}}
      <div class="col-md-2">
        <div class="dropdown w-100">
          <button class="btn btn-outline-dark dropdown-toggle d-flex align-items-center w-100 justify-content-center gap-2 py-2" type="button" id="provinceDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ asset('storage/category.png') }}" alt="Categories" width="24" height="24">
            <span class="text-uppercase fw-semibold">Provinces</span>
          </button>
          <ul class="dropdown-menu w-100" aria-labelledby="provinceDropdown" style="max-height: 300px; overflow-y: auto;">
            {{-- All option --}}
            <li>
              <a class="dropdown-item" href="{{ route('packages.index') }}">All</a>
            </li>
            {{-- Provinces --}}
            @foreach($provinces as $province)
              <li>
                <a class="dropdown-item" href="{{ route('packages.index', ['province' => $province->id]) }}">
                  {{ $province->name }}
                </a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>

    <section class="container py-5">
      <h2 class="text-uppercase fw-bold mb-4">Our Cooperate</h2>
      <div class="row g-4">
        <div class="col-md-4 text-center">
          <a href="{{ route('hotels.index') }}" class="text-decoration-none text-dark d-block py-4 border rounded hover-shadow">
            <i class="bi bi-building fs-1 mb-3"></i>
            <h5 class="fw-bold">Hotel</h5>
          </a>
        </div>
        <div class="col-md-4 text-center">
          <a href="{{ route('transportations.index') }}" class="text-decoration-none text-dark d-block py-4 border rounded hover-shadow">
            <i class="bi bi-truck fs-1 mb-3"></i>
            <h5 class="fw-bold">Transportation</h5>
          </a>
        </div>
        <div class="col-md-4 text-center">
          <a href="{{ route('guiders.index') }}" class="text-decoration-none text-dark d-block py-4 border rounded hover-shadow">
            <i class="bi bi-person-badge fs-1 mb-3"></i>
            <h5 class="fw-bold">Guider</h5>
          </a>
        </div>
      </div>
    </section>

  {{-- All Places --}}
  <section class="container py-5">
    <h2 class="text-uppercase fw-bold mb-4">All Tour Packages</h2>
    <div class="row">
      @foreach ($places as $place)
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm border-0 place-card" style="transition: all 0.3s ease;">
            <img src="{{ asset('storage/' . $place->image) }}" class="card-img-top object-fit-cover" alt="{{ $place->name }}" style="height: 230px; object-fit: cover;">
            <div class="card-body d-flex flex-column">
            <h5 class="card-title fw-semibold text-uppercase">{{ $place->name }}</h5>
              <p class="card-text"><strong><i class="fa-solid fa-location-dot text-danger me-1"></i>Location:</strong> {{ $place->location }}</p>
              <p class="card-text"><strong><i class="fa-solid fa-dollar-sign text-success me-1"></i>Price:</strong> ${{ number_format($place->price, 2) }}/Persion</p>
              <p class="card-text"><strong><i class="fa-solid fa-clock text-primary me-1"></i>Duration:</strong> {{ $place->duration }}</p>
              <div class="mt-auto d-flex justify-content-between align-items-center">
                @auth
                  @php
                    $userRating = $place->ratings->where('user_id', auth()->id())->first();
                  @endphp
                  <button class="btn btn-outline-warning btn-sm rate-button" data-place="{{ $place->id }}">
                    ⭐ {{ $userRating ? $userRating->stars . '/5' : 'Rate' }}
                  </button>
                @else
                  <a href="{{ route('login') }}" class="btn btn-outline-warning btn-sm">⭐ Rate</a>
                @endauth
                <a href="{{ route('places.show', $place->id) }}" class="btn btn-info btn-sm text-uppercase fw-semibold">View Details</a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </section>

  {{-- Rating Modal --}}
  <div class="modal fade" id="ratingModal" tabindex="-1" aria-labelledby="ratingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <form id="ratingForm" class="modal-content">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="ratingModalLabel">Rate this place</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
          <input type="hidden" name="place_id" id="modalPlaceId" />
          <div class="star-rating">
            <i class="bi bi-star" data-value="1"></i>
            <i class="bi bi-star" data-value="2"></i>
            <i class="bi bi-star" data-value="3"></i>
            <i class="bi bi-star" data-value="4"></i>
            <i class="bi bi-star" data-value="5"></i>
          </div>
        </div>
        <div class="modal-footer justify-content-center">
          <button type="submit" class="btn btn-warning px-4">Submit</button>
        </div>
      </form>
    </div>
  </div>
  @endsection
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const ratingModal = new bootstrap.Modal(document.getElementById('ratingModal'));
      const ratingForm = document.getElementById('ratingForm');
      const modalPlaceId = document.getElementById('modalPlaceId');
      const stars = document.querySelectorAll('.star-rating i');
      let selectedRating = 0;
      // Handle star hover and click
      stars.forEach(star => {
        star.addEventListener('mouseenter', () => {
          const val = parseInt(star.getAttribute('data-value'));
          highlightStars(val);
        });
        star.addEventListener('mouseleave', () => {
          highlightStars(selectedRating);
        });
        star.addEventListener('click', () => {
          selectedRating = parseInt(star.getAttribute('data-value'));
          highlightStars(selectedRating);
        });
      });
      function highlightStars(rating) {
        stars.forEach(star => {
          if (parseInt(star.getAttribute('data-value')) <= rating) {
            star.classList.remove('bi-star');
            star.classList.add('bi-star-fill');
          } else {
            star.classList.remove('bi-star-fill');
            star.classList.add('bi-star');
          }
        });
      }
      // Show modal on clicking rate button
      document.querySelectorAll('.rate-button').forEach(btn => {
        btn.addEventListener('click', () => {
          selectedRating = 0;
          highlightStars(0);
          modalPlaceId.value = btn.getAttribute('data-place');
          ratingModal.show();
        });
      });
      // Handle form submission
      ratingForm.addEventListener('submit', e => {
        e.preventDefault();
        const placeId = modalPlaceId.value;
        if(selectedRating === 0){
          alert('Please select a rating!');
          return;
        }
        // TODO: AJAX submit the rating here
        console.log(`Place ID: ${placeId}, Stars: ${selectedRating}`);
        // For demo: close modal and update button text
        ratingModal.hide();
        const rateBtn = document.querySelector(`.rate-button[data-place="${placeId}"]`);
        if(rateBtn){
          rateBtn.textContent = `⭐ ${selectedRating}/5`;
        }
      });
    });
  </script>