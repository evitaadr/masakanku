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

        /* Footer Styles */
        footer {
            background-color: #ba052c;
            padding: 30px 0 20px;
            margin-top: 50px;
        }

        .footer-logo {
            font-weight: 700;
            font-size: 24px;
            color: #ffffff;
            text-decoration: none;
            display: block;
            margin-bottom: 15px;
        }

        .footer-text {
            color: #ffffff;
            margin-bottom: 20px;
            text-align: justify;
        }

        .social-links a {
            display: inline-block;
            width: 36px;
            height: 36px;
            background-color: #ffffff; /* Changed from #333 to white */
            color: #ba052c; /* Changed from #fff to match primary red color */
            border-radius: 50%;
            text-align: center;
            line-height: 36px;
            margin-right: 10px;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background-color: #f8d7dc; /* Light version of the primary red color */
            transform: translateY(-3px); /* Adding a slight hover effect */
        }

        .social-links a i {
            color: #ba052c !important; /* Force the color with !important */
        }

        .footer-links h4 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
        }

        .footer-links ul li {
            margin-bottom: 10px;
        }

        .footer-links ul li a {
            color: #ffffff;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-links ul li a:hover {
            color: #0056b3;
            padding-left: 5px;
        }

        .footer-links ul li i {
            margin-right: 10px;
            color: #ffffff;
        }

        .copyright {
            border-top: 1px solid #ddd;
            padding-top: 20px;
            padding-bottom: 2px;     /* tambah ini */
            margin-top: 10px;        /* kurangi dari 30px jika perlu */
            margin-bottom: 0;        /* pastikan tidak ada jarak ekstra */
            text-align: center;
        }

        .copyright p {
            margin-bottom: 0;  /* Mengurangi jarak bawah dalam elemen p */
        }

        /* Map container */
        .map-container {
            height: 350px;
            width: 100%;
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 8px; /* lebih rapat dari sebelumnya */
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            border: 2px solid #ddd;
        }

        /* Location section */
        .location-section {
            margin-bottom: 10px;
        }

        .location-section h4 {
            margin-bottom: 15px;
        }
        .fa-solid, .fas {
            color: #fff;
        }
    </style>
</head>
<body>
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
                <div class="col-lg-6 col-md-6 location-section">
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3955.842591880243!2d111.32910207500188!3d-7.482627592529346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMjgnNTcuNSJTIDExMcKwMTknNTQuMCJF!5e0!3m2!1sen!2sid!4v1746689270574!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="footer-logo">MASAKANKU</a>
                    <ul class="contact-info" style="list-style: none; padding-left: 0;">
                        <li>
                            <div class="d-flex">
                                <div class="contact-icon" style="min-width: 25px; margin-right: 10px;">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-text text-white">
                                    Dsn. Siderejo Ds. Gentong RT 05/RW 05 Kec. Paron Kab. Ngawi
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <div class="contact-icon" style="min-width: 25px; margin-right: 10px;">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="contact-text text-white">
                                    +6281574900322
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <div class="contact-icon" style="min-width: 25px; margin-right: 10px;">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-text text-white">
                                    info@masakanku.com
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="social-links">
                        <a href="https://www.facebook.com/profile.php?id=61575699736736&mibextid=2e7NQZZ42y80dCLz" target="_blank" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/masakanku_ngawi?igsh=MTh0MnNnZWhhdXFyNQ==" target="_blank" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>

                </div>
                <div class="col-lg-2 col-md-6 text-white footer-links">
                    <h4>About Us</h4>
                    <ul>
                        <li><a href="#">Our Story</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright text-white">
                <p>&copy; 2025 Expice. Masakanku.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Navigation scroll effect -->
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });
    </script>
    @yield('scripts')
</body>
</html>
