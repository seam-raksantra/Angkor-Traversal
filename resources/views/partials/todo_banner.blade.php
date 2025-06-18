<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

<style>
  .thing-card {
    position: relative;
    overflow: hidden;
    border-radius: 1rem;
    height: 320px;
    cursor: pointer;
    transition: box-shadow 0.3s ease;
  }
  .thing-card:hover {
    box-shadow: 0 8px 16px rgba(0,0,0,0.3);
  }
  .thing-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
  }
  .thing-card:hover img {
    transform: scale(1.05);
  }
  .thing-title {
    position: absolute;
    bottom: 10px;
    left: 10px;
    color: white;
    font-size: 1.2rem;
    font-weight: 500;
    text-shadow: 0 1px 4px rgba(0, 0, 0, 0.7);
  }

  /* Responsive grid */
  .custom-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
    grid-auto-rows: 320px;
  }
  @media (min-width: 768px) {
    .custom-grid {
      grid-template-columns: repeat(3, 1fr);
    }
  }
  @media (min-width: 992px) {
    .custom-grid {
      grid-template-columns: repeat(4, 1fr);
    }
  }

  /* For the bigger card spanning 2 columns on large screens */
  @media (min-width: 992px) {
    .col-span-2-lg {
      grid-column: span 2;
    }
  }
</style>

<section class="py-5 px-3 bg-white">
  <div class="container">
    <h2 class="text-uppercase fw-bold mb-4">Things to do</h2>
    <div class="custom-grid">
      <div class="thing-card" tabindex="0">
        <img src="{{ asset('storage/museim_tour.jpg') }}" alt="Museum tour" />
        <div class="thing-title fw-bold text-uppercase">Museum tour</div>
      </div>
      <div class="thing-card" tabindex="0">
        <img src="{{ asset('storage/beach_tour.jpg') }}" alt="Beach tour" />
        <div class="thing-title fw-bold text-uppercase">Beach tour</div>
      </div>
      <div class="thing-card col-span-2-lg" tabindex="0">
        <img src="{{ asset('storage/angkor_wat_tour.jpg') }}" alt="Angkor tour" />
        <div class="thing-title fw-bold text-uppercase">Angkor tour</div>
      </div>
      <div class="thing-card" tabindex="0">
        <img src="{{ asset('storage/city_tour.jpg') }}" alt="City tour" />
        <div class="thing-title fw-bold text-uppercase">City tour</div>
      </div>
      <div class="thing-card" tabindex="0">
        <img src="{{ asset('storage/cruises.webp') }}" alt="Cruises" />
        <div class="thing-title fw-bold text-uppercase">Cruises</div>
      </div>
      <div class="thing-card" tabindex="0">
        <img src="{{ asset('storage/restaurant.jpg') }}" alt="Food" />
        <div class="thing-title fw-bold text-uppercase">Food</div>
      </div>
      <div class="thing-card" tabindex="0">
        <img src="{{ asset('storage/hiking.jpg') }}" alt="Hiking" />
        <div class="thing-title fw-bold text-uppercase">Hiking</div>
      </div>
    </div>
  </div>
</section>