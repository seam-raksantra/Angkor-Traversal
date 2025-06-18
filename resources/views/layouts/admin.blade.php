<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      overflow-x: hidden;
    }
    #sidebar {
      min-height: 100vh;
    }
  </style>
</head>
<body>
  <div class="d-flex">
    <!-- Sidebar -->
    <nav id="sidebar" class="bg-dark text-white p-3">
      <h4>Admin Panel</h4>
      <ul class="nav flex-column">
        <li class="nav-item"><a href="{{ route('admin.dashboard') }}" class="nav-link text-white">Dashboard</a></li>
        <li class="nav-item"><a href="{{ route('admin.users') }}" class="nav-link text-white">Users</a></li>
        <li class="nav-item"><a href="{{ route('admin.bookings') }}" class="nav-link text-white">Bookings</a></li>
        <li class="nav-item">
          <form action="{{ route('logout') }}" method="POST">@csrf
            <button class="btn btn-outline-light btn-sm mt-2">Logout</button>
          </form>
        </li>
      </ul>
    </nav>
    <!-- Main content -->
    <div class="flex-grow-1">
      <nav class="navbar navbar-expand navbar-light bg-light border-bottom">
        <div class="container-fluid">
          <span class="navbar-text">Admin Dashboard</span>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><span class="nav-link">👤 {{ auth()->user()->name }}</span></li>
          </ul>
        </div>
      </nav>
      <div class="container-fluid p-4">
        @yield('content')
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>