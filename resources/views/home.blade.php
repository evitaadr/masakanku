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
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .location-badge:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transition: all 0.4s ease;
            z-index: -1;
        }

        .location-badge:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(255, 0, 57, 0.3);
        }

        .location-badge:hover:before {
            left: 100%;
        }

        .location-badge:hover i {
            animation: bounce 0.8s ease infinite;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-5px);
            }
        }

        .location-badge i {
            margin-right: 5px;
            transition: all 0.3s ease;
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
                    {{-- <h2>Discover Restaurant<br>& Delicious Food</h2> --}}
                    <h2>Homestyle Catering<br>with a Special Touch</h2>
                    <div class="search-box">
                        <input type="text" placeholder="Search for orders, Food">
                        <button class="search-btn">GO</button>
                    </div>
                    <div class="location-badge">
                        <a class="text-decoration-none text-white" href="https://www.google.com/maps?q=-7.4826275,111.3291020" target="_blank">
                            <i class="fas fa-map-marker-alt"></i> Lokasi
                        </a>
                    </div>
                </div>
                <div class="col-md-6 hero-image">
                    <img src="{{ asset('assets/img/imagehero.png') }}" alt="Delicious Food" class="img-fluid rotate-on-scroll">
                </div>
            </div>
        </div>
    </section>

    <!-- Food Menu Section -->
    <section class="menu-section" id="menu">
        <div class="container">
            <h2>Menu Favorit</h2>
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
