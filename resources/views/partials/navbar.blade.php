<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
<style>
  .navbar-logo {
    max-height: 50px;
    width: auto;
    object-fit: contain;
  }

  .modal-content {
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
    padding: 1.5rem 2rem;
  }

  .modal-header {
    border-bottom: none;
    justify-content: center;
    position: relative;
    padding-bottom: 1rem;
  }
  .modal-header .btn-close {
    position: absolute;
    right: 0;
    top: 0.75rem;
  }

  .modal-logo {
    display: block;
    margin: 0 auto 1rem auto;
    max-height: 80px;
    object-fit: contain;
  }

  .form-control {
    border-radius: 8px;
    box-shadow: inset 0 2px 6px rgba(0,0,0,0.1);
    transition: border-color 0.3s ease;
  }
  .form-control:focus {
    border-color: #008080;
    box-shadow: 0 0 8px #40cfcf;
  }

  .btn-info {
    background-color: #008080;
    border-color: #008080;
    font-weight: 600;
    border-radius: 8px;
    padding: 0.6rem 1.5rem;
    transition: background-color 0.3s ease;
  }
  .btn-info:hover {
    background-color: #006666;
    border-color: #006666;
  }
  .btn-outline-info {
    border-radius: 8px;
    font-weight: 600;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('storage/Angkor_Traversal.png') }}" class="navbar-logo" alt="Angkor Traversal Logo" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <a class="nav-link" href="{{ route('home') }}">Home</a>
        <li class="nav-item mx-2"><a class="nav-link" href="{{ route('about') }}">About</a></li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="{{ route('packages.index') }}">Packages</a>
        </li>
      </ul>
    </div>
    <div class="d-flex">
      @auth
      <a href="{{ route('profile.index') }}"
        class="btn me-2 d-flex align-items-center justify-content-center"
        style="width: 40px; height: 40px; border: 2px solid #008080; border-radius: 50%; color: #008080;">
        <i class="fas fa-user"></i>
      </a>
      @else
      <button class="btn btn-outline-info text-dark text-capitalize fw-semibold me-2" data-bs-toggle="modal"
        data-bs-target="#signupModal">Sign Up</button>
      <button class="btn btn-info text-capitalize fw-semibold" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
      @endauth
    </div>
  </div>
</nav>
<!-- Sign Up Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <form method="POST" action="{{ route('signup') }}" class="modal-content">
      @csrf
      <div class="modal-header">
        <img src="{{ asset('storage/Angkor_Traversal.png') }}" alt="Angkor Traversal Logo" class="modal-logo" />
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="text" name="name" class="form-control mb-3" placeholder="Name" required autofocus />
        <input type="email" name="email" class="form-control mb-3" placeholder="Email" required />
        <input type="password" name="password" class="form-control mb-3" placeholder="Password" required />
        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required />
      </div>
      <div class="modal-footer justify-content-center border-0 pt-0">
        <button type="submit" class="btn btn-info w-100">Sign Up</button>
      </div>
    </form>
  </div>
</div>
<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <form method="POST" action="{{ route('login') }}" class="modal-content">
      @csrf
      <div class="modal-header">
        <img src="{{ asset('storage/Angkor_Traversal.png') }}" alt="Angkor Traversal Logo" class="modal-logo" />
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="email" name="email" class="form-control mb-3" placeholder="Email" required autofocus />
        <input type="password" name="password" class="form-control" placeholder="Password" required />
      </div>
      <div class="modal-footer justify-content-center border-0 pt-0">
        <button type="submit" class="btn btn-info w-100">Login</button>
      </div>
    </form>
  </div>
</div>
@if($errors->any())
<div class="alert alert-danger mt-3 container">
  <ul class="mb-0">
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif