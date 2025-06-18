<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .navbar {
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  }

  .carousel-item::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* dark overlay */
    z-index: 1;
  }

  .carousel-caption {
    z-index: 2;
    padding: 1rem;
  }

  .carousel-inner img {
    object-fit: cover;
    width: 100%;
    height: 90vh;
  }

  /* Responsive text */
  .carousel-caption h1 {
    font-size: 2.5rem;
  }

  .carousel-caption p {
    font-size: 1.2rem;
  }

  @media (max-width: 768px) {
    .carousel-caption {
      bottom: 40px;
    }
    .carousel-caption h1 {
      font-size: 1.5rem;
    }

    .carousel-caption p {
      font-size: 1rem;
    }

    .carousel-inner img {
      height: 60vh;
    }
  }

  @media (max-width: 480px) {
    .carousel-caption {
      bottom: 20px;
    }

    .carousel-caption h1 {
      font-size: 1.2rem;
    }

    .carousel-caption p {
      font-size: 0.95rem;
    }
  }
</style>

<div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <!-- Slide 1 -->
    <div class="carousel-item active position-relative">
      <img src="{{ asset('storage/angkor_sunset.jpg') }}" class="d-block w-100" alt="Explore Angkor Wat">
      <div class="carousel-caption text-center">
        <h1 class="fw-bold text-white">Explore Angkor Wat</h1>
        <p class="lead text-white">Discover Cambodia's wonders and ancient temples.</p>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item position-relative">
      <img src="{{ asset('storage/koh_kong_views.jpg') }}" class="d-block w-100" alt="Relax on Koh Rong">
      <div class="carousel-caption text-center">
        <h1 class="fw-bold text-white">Relax on Koh Rong</h1>
        <p class="lead text-white">Find peace on Cambodia’s pristine beaches.</p>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item position-relative">
      <img src="{{ asset('storage/phnompenh_sideviews.jpg') }}" class="d-block w-100" alt="Explore Phnom Penh">
      <div class="carousel-caption text-center">
        <h1 class="fw-bold text-white">Explore New Things in Phnom Penh</h1>
        <p class="lead text-white">Market, Royal Palace, and Go for a walk!</p>
      </div>
    </div>
  </div>

  <!-- Carousel controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </button>

  <!-- Carousel indicators -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
  </div>
</div>