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

        /* Gallery Section - 3 Grid Layout */
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
            height: 300px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
        }

        .gallery-img:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .gallery-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.4s ease;
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
            background: linear-gradient(45deg, rgba(255, 0, 57, 0.8), rgba(55, 11, 100, 0.8));
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            opacity: 0;
            transition: all 0.4s ease;
        }

        .gallery-img:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-overlay i {
            color: white;
            font-size: 40px;
            margin-bottom: 15px;
            animation: zoomIn 0.6s ease forwards;
        }

        .gallery-overlay h3 {
            color: white;
            font-size: 20px;
            font-weight: 600;
            text-align: center;
            margin: 0;
            transform: translateY(20px);
            animation: slideUp 0.6s ease 0.2s forwards;
        }

        @keyframes zoomIn {
            from {
                transform: scale(0);
            }
            to {
                transform: scale(1);
            }
        }

        @keyframes slideUp {
            to {
                transform: translateY(0);
            }
        }

        /* Gallery Carousel Styles */
        .gallery-carousel-container {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
        }

        .gallery-carousel {
            display: flex;
            transition: transform 0.5s ease-in-out;
            width: 100%;
        }

        .gallery-slide {
            min-width: 33.333%;
            padding: 0 10px;
            box-sizing: border-box;
            display: flex;
        }

        .gallery-slide .gallery-img {
            width: 100%;
            position: relative;
            height: 300px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
        }

        .gallery-slide .gallery-img:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .gallery-slide .gallery-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.4s ease;
        }

        .gallery-slide .gallery-img:hover img {
            transform: scale(1.1);
        }

        .gallery-slide .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(255, 0, 57, 0.8), rgba(55, 11, 100, 0.8));
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            opacity: 0;
            transition: all 0.4s ease;
        }

        .gallery-slide .gallery-img:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-slide .gallery-overlay i {
            color: white;
            font-size: 40px;
            margin-bottom: 15px;
            animation: zoomIn 0.6s ease forwards;
        }

        .gallery-slide .gallery-overlay h3 {
            color: white;
            font-size: 20px;
            font-weight: 600;
            text-align: center;
            margin: 0;
            transform: translateY(20px);
            animation: slideUp 0.6s ease 0.2s forwards;
        }

        /* Navigation Buttons */
        .carousel-nav {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
            pointer-events: none;
        }

        .nav-btn {
            background: rgba(255, 0, 57, 0.8);
            color: white;
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            pointer-events: all;
            font-size: 18px;
            backdrop-filter: blur(10px);
        }

        .nav-btn:hover {
            background: var(--primary-color);
            transform: scale(1.1);
            box-shadow: 0 5px 15px rgba(255, 0, 57, 0.3);
        }

        .prev-btn {
            margin-left: -25px;
        }

        .next-btn {
            margin-right: -25px;
        }

        /* Carousel Indicators */
        .carousel-indicators {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 30px;
        }

        .indicator {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            border: none;
            background: rgba(255, 0, 57, 0.3);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .indicator.active {
            background: var(--primary-color);
            transform: scale(1.2);
        }

        .indicator:hover {
            background: var(--primary-color);
            transform: scale(1.1);
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

            .gallery-img {
                height: 250px;
            }

            .gallery-slide .gallery-img {
                height: 250px;
            }

            .nav-btn {
                width: 40px;
                height: 40px;
                font-size: 16px;
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

            .gallery-img {
                height: 200px;
            }

            .gallery-slide {
                min-width: 50%;
            }

            .gallery-slide .gallery-img {
                height: 200px;
            }

            .nav-btn {
                width: 35px;
                height: 35px;
                font-size: 14px;
            }

            .prev-btn {
                margin-left: -17px;
            }

            .next-btn {
                margin-right: -17px;
            }
        }

        @media (max-width: 575px) {
            .hero-text h1 {
                font-size: 40px;
            }

            .hero-text h2 {
                font-size: 20px;
            }

            .gallery-slide {
                min-width: 100%;
            }

            .gallery-slide .gallery-img {
                height: 250px;
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
                    <h2>Katering Rumahan<br>dengan Sentuhan Istimewa</h2>
                    {{-- <div class="search-box">
                        <input type="text" placeholder="Search for orders, Food">
                        <button class="search-btn">GO</button>
                    </div> --}}
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

    <!-- Gallery Section with Auto Slide -->
    <section class="gallery-section" id="gallery">
        <div class="container">
            <h2>Galeri Makanan</h2>

            @if($galeris->count() <= 3)
                <!-- Static 3 Grid Layout for 3 or fewer items -->
                <div class="row">
                    @foreach ($galeris as $galeri)
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="gallery-img">
                            <img src="{{ asset('storage/' . $galeri->image_galeri) }}" alt="{{$galeri->name_galeri }}">
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus"></i>
                                <h3>{{$galeri->name_galeri }}</h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <!-- Auto Slide Carousel for more than 3 items -->
                <div class="gallery-carousel-container">
                    <div class="gallery-carousel" id="galleryCarousel">
                        @foreach ($galeris as $index => $galeri)
                        <div class="gallery-slide {{ $index < 3 ? 'active' : '' }}">
                            <div class="gallery-img">
                                <img src="{{ asset('storage/' . $galeri->image_galeri) }}" alt="{{$galeri->name_galeri }}">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                    <h3>{{$galeri->name_galeri }}</h3>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Carousel Navigation -->
                    <div class="carousel-nav">
                        <button class="nav-btn prev-btn" onclick="changeSlide(-1)">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="nav-btn next-btn" onclick="changeSlide(1)">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>

                    <!-- Carousel Indicators -->
                    <div class="carousel-indicators">
                        @for($i = 0; $i < ceil($galeris->count() / 3); $i++)
                        <button class="indicator {{ $i == 0 ? 'active' : '' }}" onclick="goToSlide({{ $i }})"></button>
                        @endfor
                    </div>
                </div>
            @endif
        </div>
    </section>

    <!-- Custom JS -->
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

        // Rotating image on scroll
        const rotatingImage = document.querySelector('.rotate-on-scroll');
        window.addEventListener('scroll', () => {
            const scrollY = window.scrollY;
            const rotation = scrollY * 0.3;
            rotatingImage.style.transform = `rotate(${rotation}deg)`;
        });

        // Gallery Carousel Functionality
        let currentSlideIndex = 0;
        const totalSlides = {{ $galeris->count() ?? 0 }};
        let slidesPerView = getSlidesPerView();
        const totalSlideGroups = Math.ceil(totalSlides / slidesPerView);
        let autoSlideInterval;

        function getSlidesPerView() {
            if (window.innerWidth <= 575) return 1;
            if (window.innerWidth <= 767) return 2;
            return 3;
        }

        function updateCarousel() {
            if (totalSlides <= 3) return; // Don't run carousel for 3 or fewer items

            const carousel = document.getElementById('galleryCarousel');
            const slideWidth = 100 / slidesPerView;
            const translateX = -(currentSlideIndex * slideWidth);

            if (carousel) {
                carousel.style.transform = `translateX(${translateX}%)`;
            }

            // Update indicators
            const indicators = document.querySelectorAll('.indicator');
            indicators.forEach((indicator, index) => {
                indicator.classList.toggle('active', index === Math.floor(currentSlideIndex / slidesPerView));
            });
        }

        function changeSlide(direction) {
            if (totalSlides <= 3) return;

            const maxIndex = Math.max(0, totalSlides - slidesPerView);
            currentSlideIndex += direction * slidesPerView;

            if (currentSlideIndex > maxIndex) {
                currentSlideIndex = 0; // Loop to beginning
            } else if (currentSlideIndex < 0) {
                currentSlideIndex = maxIndex; // Loop to end
            }

            updateCarousel();
            resetAutoSlide();
        }

        function goToSlide(slideGroupIndex) {
            if (totalSlides <= 3) return;

            currentSlideIndex = slideGroupIndex * slidesPerView;
            const maxIndex = Math.max(0, totalSlides - slidesPerView);

            if (currentSlideIndex > maxIndex) {
                currentSlideIndex = maxIndex;
            }

            updateCarousel();
            resetAutoSlide();
        }

        function startAutoSlide() {
            if (totalSlides <= 3) return;

            autoSlideInterval = setInterval(() => {
                changeSlide(1);
            }, 4000); // Change slide every 4 seconds
        }

        function resetAutoSlide() {
            clearInterval(autoSlideInterval);
            startAutoSlide();
        }

        // Handle window resize for carousel
        window.addEventListener('resize', () => {
            if (totalSlides > 3) {
                slidesPerView = getSlidesPerView();
                currentSlideIndex = 0;
                updateCarousel();
                resetAutoSlide();
            }
        });

        // Initialize carousel on page load
        document.addEventListener('DOMContentLoaded', () => {
            if (totalSlides > 3) {
                slidesPerView = getSlidesPerView();
                updateCarousel();
                startAutoSlide();

                // Pause auto-slide on hover
                const carouselContainer = document.querySelector('.gallery-carousel-container');
                if (carouselContainer) {
                    carouselContainer.addEventListener('mouseenter', () => {
                        clearInterval(autoSlideInterval);
                    });

                    carouselContainer.addEventListener('mouseleave', () => {
                        startAutoSlide();
                    });
                }
            }
        });
    </script>
</section>
@endsection
