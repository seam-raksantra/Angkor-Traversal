<style>
  .discount-section {
    background-color: #fdf9f2;
  }
  .discount-heading span {
    color: #c76b25;
    font-weight: bold;
  }

  @media (max-width: 767.98px) {
    .discount-heading {
      font-size: 1.5rem;
      text-align: center;
    }
    .discount-section .btn {
      display: block;
      margin: 1rem auto;
    }
  }
</style>

<section class="discount-section py-5 px-3 px-md-5">
  <div class="container">
    <div class="row align-items-center g-4">
      <!-- Text Column -->
      <div class="col-md-6 text-center text-md-start">
        <h2 class="discount-heading text-uppercase fw-bold mb-4">
          Get <span>25%</span> Discount off<br>
          for your first<br>
          Booking.
        </h2>
        <a href="{{ route('packages.index') }}" class="btn btn-warning text-uppercase fw-bold">
          Book Now
        </a>
      </div>

      <!-- Image Column -->
      <div class="col-md-6 text-center">
        <img
          src="{{ asset('storage/physical-map-of-cambodia.png') }}"
          alt="Cambodia Map"
          class="img-fluid rounded"
          style="max-width: 100%; height: auto;"
        />
      </div>
    </div>
  </div>
</section>