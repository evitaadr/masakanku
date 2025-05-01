<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Restaurant')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Custom CSS -->
    {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}
    {{-- @yield('styles') --}}
    <style>
          /* Navbar Styles */
          .navbar {
            transition: all 0.3s ease;
            padding: 10px 0;
        }

        .navbar-blur {
            backdrop-filter: blur(10px);
            /* background-color: rgba(255, 255, 255, 0.8); */
        }

        .navbar-scrolled {
            background-color: var(--primary-color);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
        }

        .navbar-scrolled .nav-link,
        .navbar-scrolled .navbar-brand {
            color: white !important;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 28px;
            color: var(--primary-color);
        }

        .nav-link {
            font-weight: 600;
            margin: 0 10px;
            color: var(--dark-text);
        }

    </style>
</head>
<body>
    <!-- Navigation -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-blur">
        <div class="container">
            <a class="navbar-brand" href="#">MASAKANKU</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('menu')}}">Menu</a>
                    </li>
                </ul>
                {{-- <div class="d-flex align-items-center ms-4">
                    <img src="/api/placeholder/30/30" alt="User" class="rounded-circle">
                </div> --}}
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <a href="#" class="footer-logo">MASAKANKU</a>
                    <p class="footer-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elementum augue ut ligula pellentesque, at faucibus ex dignissim.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 footer-links">
                    <h4>About Us</h4>
                    <ul>
                        <li><a href="#">Our Story</a></li>
                        <li><a href="#">Benefits</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 footer-links">
                    <h4>Help</h4>
                    <ul>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 footer-links">
                    <h4>Contact Us</h4>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Dsn. Siderejo Ds. Gentong RT 05/RW 05 Kec. Paron Kab. Ngawi</li>
                        <li><i class="fas fa-phone"></i> +6281574900322</li>
                        <li><i class="fas fa-envelope"></i> info@expice.com</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2025 Expice. Politeknik Negeri Madiun.</p>
            </div>
        </div>
    </footer>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>
