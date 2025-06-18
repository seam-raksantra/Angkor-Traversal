<!-- FontAwesome for stars and icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
  .image-container {
    height: 250px;
    overflow: hidden;
    border-radius: 0.5rem 0.5rem 0 0;
  }

  .image-container img {
    height: 100%;
    width: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
  }

  .hover-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
    cursor: pointer;
    border-radius: 0.5rem;
  }

  .hover-card:hover {
    background-color: #fdf9f2 !important;
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
  }

  .star {
    font-size: 1.8rem;
    color: #ccc;
    cursor: pointer;
    user-select: none;
  }

  .star.selected {
    color: #ffc107;
  }
</style>

<section class="container py-5">
  <h2 class="text-uppercase fw-bold mb-4">Top Tour Destinations</h2>
  <div class="row g-4">
    @foreach ($places as $place)
      @php
        $userRating = $place->ratings->where('user_id', auth()->id())->first();
      @endphp
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm hover-card">
          <div class="image-container">
            <img src="{{ asset('storage/' . $place->image) }}" class="card-img-top" alt="{{ $place->name }}">
          </div>
          <div class="card-body d-flex flex-column">
            <h5 class="card-title fw-semibold text-uppercase">{{ $place->name }}</h5>
            <p class="card-text mb-1">
              <strong><i class="fa-solid fa-location-dot text-danger me-1"></i>Location:</strong> {{ $place->location }}
            </p>
            <p class="card-text mb-1">
              <strong><i class="fa-solid fa-dollar-sign text-success me-1"></i>Price:</strong> ${{ number_format($place->price, 2) }}/Person
            </p>
            <p class="card-text mb-3">
              <strong><i class="fa-solid fa-clock text-primary me-1"></i>Duration:</strong> {{ $place->duration }}
            </p>
            <div class="mt-auto d-flex justify-content-between align-items-center">
              @auth
                <button type="button" 
                  class="btn btn-sm {{ $userRating ? 'btn-warning text-white' : 'btn-outline-warning' }} rate-button"
                  data-place="{{ $place->id }}">
                  ⭐ {{ $userRating ? $userRating->stars . '/5' : 'Rate' }}
                </button>
              @else
                <a href="{{ route('login') }}" class="btn btn-outline-warning btn-sm">⭐ Rate</a>
              @endauth
              <a href="{{ route('places.show', $place->id) }}" class="btn btn-info btn-sm text-uppercase fw-semibold">
                View Details
              </a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  <div class="text-center text-uppercase fw-bold my-4">
    <a href="{{ route('packages.index') }}" class="btn btn-warning btn-sm px-4">
      View More..
    </a>
  </div>
</section>

<!-- ⭐ Rating Modal -->
<div class="modal fade" id="rateModal" tabindex="-1" aria-labelledby="rateModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <form id="rateForm" class="modal-content">
      @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="rateModalLabel">Rate this Place</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <input type="hidden" name="place_id" id="placeId">
        <div id="stars" class="mb-3">
          @for ($i = 1; $i <= 5; $i++)
            <i class="fa fa-star star" data-value="{{ $i }}"></i>
          @endfor
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-warning w-100">Submit Rating</button>
      </div>
    </form>
  </div>
</div>

<script>
  let selectedStars = 0;

  document.querySelectorAll('.rate-button').forEach(button => {
    button.addEventListener('click', function () {
      const stars = document.querySelectorAll('#stars .star');
      document.getElementById('placeId').value = this.dataset.place;
      selectedStars = 0;
      stars.forEach(s => s.classList.remove('selected'));
      new bootstrap.Modal(document.getElementById('rateModal')).show();
    });
  });

  document.querySelectorAll('#stars .star').forEach(star => {
    star.addEventListener('click', function () {
      selectedStars = parseInt(this.dataset.value);
      document.querySelectorAll('#stars .star').forEach(s => {
        s.classList.toggle('selected', s.dataset.value <= selectedStars);
      });
    });
  });

  document.getElementById('rateForm').addEventListener('submit', function (e) {
    e.preventDefault();
    const form = this;
    const placeId = form.place_id.value;

    if (selectedStars === 0) {
      alert('Please select a star rating before submitting.');
      return;
    }

    fetch("{{ route('rate.store') }}", {
      method: "POST",
      headers: {
        'X-CSRF-TOKEN': form.querySelector('[name="_token"]').value,
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({
        place_id: placeId,
        stars: selectedStars
      })
    })
    .then(res => res.json())
    .then(data => {
      alert(data.message || 'Rating submitted!');
      bootstrap.Modal.getInstance(document.getElementById('rateModal')).hide();
      window.location.reload();
    })
    .catch(() => alert('Something went wrong. Please try again.'));
  });
</script>