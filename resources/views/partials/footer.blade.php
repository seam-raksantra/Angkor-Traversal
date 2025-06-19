<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
<style>
  footer {
    background-color: #1f2937;
    color: white;
  }

  footer a {
    color: #d1d5db;
    text-decoration: none;
  }

  footer a:hover {
    color: #fbbf24;
  }

  .footer-logo {
    height: auto;
    max-height: 50px; /* Limits the logo's visible height */
    width: auto;
    object-fit: contain;
  }

  .footer-icon {
    color: #d1d5db;
    font-size: 1.2rem;
  }

  .footer-icon:hover {
    color: #fbbf24;
  }
</style>

<footer class="pt-5 pb-3 text-white">
  <div class="container">
    <div class="row gy-4">
      <!-- Logo & Description -->
      <div class="col-md-4">
        <div class="mb-3">
          <img src="{{ asset('storage/Angkor_Traversal_white.png') }}" alt="Angkor Traversal Logo" class="footer-logo" />
        </div>
        <p class="text-secondary">
          Discover the best tours, experiences, and adventures across Cambodia.
          Book your journey with local experts today. With ours agency!
        </p>
      </div>
      <!-- Quick Links -->
      <div class="col-md-4">
        <h5 class="fw-bold text-uppercase mb-3">Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('about') }}">About</a></li>
          <li><a href="{{ route('packages) }}">Packages</a></li>
        </ul>
      </div>
      <!-- Contact Info -->
      <div class="col-md-4">
        <h5 class="fw-bold text-uppercase mb-3">Contact Us</h5>
        <p class="text-secondary mb-2"><i class="fas fa-phone-alt me-2"></i>+855 962145989</p>
        <p class="text-secondary"><i class="fas fa-envelope me-2"></i>angkor.traversal.18@gmail.com</p>
        <div class="mt-3 d-flex gap-3">
          <a href="https://www.facebook.com/share/1GEty1ZS1j/" class="footer-icon"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/seam_raksan?igsh=Y2Nqd3p2cTJnOWk0" class="footer-icon"><i class="fab fa-instagram"></i></a>
          <a href="#" class="footer-icon"><i class="fab fa-twitter"></i></a>
        </div>
      </div>
    </div>
    <hr class="border-secondary my-4" />
    <div class="text-center text-secondary small">
      © <script>document.write(new Date().getFullYear());</script> Angkor_Traversal. All rights reserved.
    </div>
  </div>
</footer>