<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
        }
        .main-content {
            margin-left: 16.6667%; /* offset sidebar width (col-2) */
        }

        @media (max-width: 768px) {
            .sidebar {
                position: static;
                height: auto;
                margin-bottom: 1rem;
            }

            .main-content {
                margin-left: 0;
            }
        }
    </style>
    @yield('styles')
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-2 d-md-block bg-dark sidebar text-white p-3">
                <div class="text-center mb-4">
                    <h4 class="text-white">Restaurant Admin</h4>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('dashboard') }}">
                            <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('categories.index') }}">
                            <i class="fas fa-tags me-2"></i> Categories
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('menus.index') }}">
                            <i class="fas fa-utensils me-2"></i> Menus
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('galeris.index') }}">
                            <i class="fas fa-images me-2"></i> Gallery
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('users.index') }}">
                            <i class="fas fa-users me-2"></i> Users
                        </a>
                    </li>
                    <li class="nav-item mt-5">
                        <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger w-100">
                                <i class="fas fa-sign-out-alt me-2"></i> Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </nav>

            <!-- Main Content -->
            <main class="col-md-10 ms-auto px-md-4 py-4 min-vh-100">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">@yield('header', 'Dashboard')</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        @yield('actions')
                    </div>
                </div>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    document.getElementById('logoutForm').addEventListener('submit', function(e) {
        const confirmLogout = confirm('Konfirmasi logout?');
        if (!confirmLogout) {
            e.preventDefault();
        }
    });
    </script>
    @yield('scripts')
</body>
</html>
