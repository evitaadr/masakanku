@extends('layouts.layout')

@section('title', 'Home')

@section('content')
<section>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #ff0039;
            --dark-text: #333;
            --light-bg: #fff5f2;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
            background-color: var(--light-bg);
        }


        /* Hero Section */
        .hero-section {
            padding: 70px 0 50px;
            position: relative;
            background-color: var(--light-bg);
        }

        .hero-text h1 {
            font-size: 75px;
            font-weight: 800;
            margin-bottom: 0;
            color: var(--primary-color);
            /* color: #5aeef3; */
            line-height: 1;
        }

        .hero-text h2 {
            font-size: 36px;
            font-weight: 700;
            color: #370b64;
            line-height: 0.75;
            margin-top: -20px;
            margin-bottom: 20px;
        }

        .hero-image {
            position: relative;
        }

        .hero-image img {
            width: 100%;
            max-width: 500px;
            border-radius: 50%;
        }

        .search-box {
            position: relative;
            max-width: 400px;
            margin: 20px 0;
        }

        .search-box input {
            width: 100%;
            padding: 15px 20px;
            border-radius: 50px;
            border: none;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .search-btn {
            position: absolute;
            right: 5px;
            top: 5px;
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 10px 30px;
            border-radius: 50px;
            font-weight: 600;
        }

        .location-badge {
            display: inline-block;
            background-color: var(--primary-color);
            color: white;
            padding: 8px 20px;
            border-radius: 50px;
            font-weight: 600;
            margin-top: 20px;
        }

        .location-badge i {
            margin-right: 5px;
        }

        /* Restaurant Section */
        .restaurant-section {
            padding: 80px 0;
        }

        .section-title {
            position: relative;
            margin-bottom: 40px;
        }

        .section-title h2 {
            font-weight: 700;
            color: var(--dark-text);
            margin-bottom: 20px;
            padding-left: 20px;
            border-left: 5px solid var(--primary-color);
        }

        .restaurant-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            background-color: white;
            height: 100%;
        }

        .restaurant-img {
            height: 250px;
            overflow: hidden;
        }

        .restaurant-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .restaurant-card:hover .restaurant-img img {
            transform: scale(1.05);
        }

        .restaurant-info {
            padding: 20px;
            position: relative;
            background-color: var(--primary-color);
            color: white;
        }

        .restaurant-info h3 {
            font-weight: 700;
            font-size: 22px;
            margin-bottom: 10px;
        }

        .restaurant-info p {
            margin-bottom: 15px;
            opacity: 0.9;
            font-size: 14px;
        }

        .location-info {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .location-info i {
            margin-right: 10px;
        }

        .btn-book {
            background-color: white;
            color: var(--primary-color);
            border: none;
            padding: 8px 20px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .btn-book:hover {
            background-color: #f8f8f8;
            transform: translateY(-2px);
        }

        /* Food Menu Section */
        .menu-section {
            padding: 80px 0;
            background-color: white;
        }

        .menu-section h2 {
            text-align: center;
            font-weight: 700;
            margin-bottom: 50px;
            color: var(--dark-text);
        }

        .food-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            padding: 20px;
            transition: all 0.3s ease;
        }

        .food-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .food-img {
            height: 180px;
            width: 100%;
            margin-bottom: 15px;
            border-radius: 8px;
            overflow: hidden;
        }

        .food-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .food-info h3 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 5px;
            color: var(--dark-text);
        }

        .food-info p {
            font-size: 13px;
            color: #777;
            margin-bottom: 10px;
        }

        .food-price {
            color: var(--primary-color);
            font-weight: 700;
            font-size: 18px;
        }

        /* Gallery Section */
        .gallery-section {
            padding: 80px 0;
            background-color: var(--light-bg);
        }

        .gallery-section h2 {
            text-align: center;
            font-weight: 700;
            margin-bottom: 50px;
            color: var(--dark-text);
        }

        .gallery-img {
            position: relative;
            height: 250px;
            margin-bottom: 30px;
            border-radius: 10px;
            overflow: hidden;
        }

        .gallery-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.3s ease;
        }

        .gallery-img:hover img {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 0, 57, 0.6);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .gallery-img:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-overlay i {
            color: white;
            font-size: 40px;
        }

        /* Footer */
        footer {
            background-color: #222;
            color: white;
            padding: 80px 0 30px;
        }

        .footer-logo {
            font-size: 32px;
            font-weight: 700;
            color: white;
            margin-bottom: 20px;
            display: inline-block;
        }

        .footer-text {
            margin-bottom: 30px;
            color: #ccc;
        }

        .footer-links h4 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 20px;
            color: white;
        }

        .footer-links ul {
            list-style: none;
            padding-left: 0;
        }

        .footer-links ul li {
            margin-bottom: 10px;
        }

        .footer-links ul li a {
            color: #ccc;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-links ul li a:hover {
            color: var(--primary-color);
            text-decoration: none;
        }

        .social-links {
            margin-top: 30px;
        }

        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: #333;
            border-radius: 50%;
            margin-right: 10px;
            color: white;
            text-align: center;
            line-height: 40px;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background-color: var(--primary-color);
            transform: translateY(-3px);
        }

        .copyright {
            margin-top: 50px;
            padding-top: 20px;
            border-top: 1px solid #444;
            text-align: center;
            color: #aaa;
            font-size: 14px;
        }

        /* Responsive Styles */
        @media (max-width: 991px) {
            .hero-text h1 {
                font-size: 60px;
            }

            .hero-text h2 {
                font-size: 30px;
            }

            .hero-image img {
                max-width: 100%;
            }
        }

        @media (max-width: 767px) {
            .hero-section {
                text-align: center;
                padding: 80px 0 40px;
            }

            .hero-text h1 {
                font-size: 50px;
            }

            .hero-text h2 {
                font-size: 24px;
                margin-top: -10px;
            }

            .search-box {
                margin: 20px auto;
            }

            .location-badge {
                margin: 10px auto;
            }

            .hero-image {
                margin-top: 40px;
            }

            .section-title {
                text-align: center;
            }

            .section-title h2 {
                border-left: none;
                padding-left: 0;
                border-bottom: 3px solid var(--primary-color);
                padding-bottom: 10px;
                display: inline-block;
            }
        }

        @media (max-width: 575px) {
            .hero-text h1 {
                font-size: 40px;
            }

            .hero-text h2 {
                font-size: 20px;
            }
        }

        .rotate-on-scroll {
            transition: transform 0.3s ease;
        }
    </style>
</section>


    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 hero-text">
                    <h1>MASAKANKU</h1>
                    <h2>Discover Restaurant<br>& Delicious Food</h2>
                    <div class="search-box">
                        <input type="text" placeholder="Search Restaurant, Food">
                        <button class="search-btn">GO</button>
                    </div>
                    <div class="location-badge">
                        <i class="fas fa-map-marker-alt"></i> Lokasi
                    </div>
                </div>
                <div class="col-md-6 hero-image">
                    <img src="{{ asset('assets/img/imagehero.png') }}" alt="Delicious Food" class="img-fluid rotate-on-scroll">
                </div>
            </div>
        </div>
    </section>

    <!-- Restaurant Section -->
    <section class="restaurant-section">
        <div class="container">
            <div class="section-title">
                <h2>Some Top Restaurant For<br>Dining In Or Take Away!</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="restaurant-card">
                        <div class="restaurant-img">
                            <img src="/api/placeholder/500/300" alt="Fire Water">
                        </div>
                        <div class="restaurant-info">
                            <h3>Fire Water</h3>
                            <p>We Are All About Our Food Quality In The Most Careful Details of Preparation Using The Best Ingredients Out There</p>
                            <div class="location-info">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Green Road</span>
                            </div>
                            <button class="btn-book">Book Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="restaurant-card">
                        <div class="restaurant-img">
                            <img src="/api/placeholder/500/300" alt="The Wonton">
                        </div>
                        <div class="restaurant-info">
                            <h3>The Wonton</h3>
                            <p>We Are All About Our Food Quality In The Most Careful Details of Preparation Using The Best Ingredients Out There</p>
                            <div class="location-info">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Gulshan Road</span>
                            </div>
                            <button class="btn-book">Book Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Food Menu Section -->
    <section class="menu-section" id="menu">
        <div class="container">
            <h2>Explore Our Foods</h2>
            <div class="row">
                @foreach($menus as $menu)
                <div class="col-md-4 col-sm-6">
                    <div class="food-card">
                        <div class="food-img">
                            <img src="{{ asset('storage/' . $menu->image_menu) }}" alt="Hand Sandwich">
                        </div>
                        <div class="food-info">
                            <h3>{{$menu->name_menu}}</h3>
                            <p>{{$menu->description_menu}}</p>
                            <div class="food-price">{{$menu->price_menu}}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

   <!-- Gallery Section -->
   <section class="gallery-section" id="gallery">
    <div class="container">
        <h2>Our Food Gallery</h2>
        <div class="row">
            @foreach($galeris as $galeri)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="gallery-img position-relative">
                        <!-- Fancybox aktif saat klik gambar -->
                        <a href="{{ asset('storage/' . $galeri->image_galeri) }}" data-fancybox="gallery" data-caption="{{ $galeri->name_galeri }} - {{ $galeri->description_galeri }}">
                            <img src="{{ asset('storage/' . $galeri->image_galeri) }}" alt="{{ $galeri->name_galeri }}" class="img-fluid" style="height: 200px; object-fit: cover; width: 100%;">
                        </a>
                        <!-- Overlay efek -->
                        <div class="gallery-overlay position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center"
                             style="background-color: rgba(0,0,0,0.5); opacity: 0; transition: 0.3s;">
                            <i class="fas fa-search-plus text-white fa-2x"></i>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

    <!-- Custom JS for Navbar -->
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 0) {
                navbar.classList.add('navbar-scrolled');
                navbar.classList.remove('navbar-blur');
            } else {
                navbar.classList.remove('navbar-scrolled');
                navbar.classList.add('navbar-blur');
            }
        });

        const rotatingImage = document.querySelector('.rotate-on-scroll');

        window.addEventListener('scroll', () => {
        const scrollY = window.scrollY;
        // Rotasi sesuai seberapa jauh halaman discroll
        const rotation = scrollY * 0.3; // bisa ubah 0.1 untuk kecepatan rotasi

        rotatingImage.style.transform = `rotate(${rotation}deg)`;
        });
    </script>
    </section>
@endsection
