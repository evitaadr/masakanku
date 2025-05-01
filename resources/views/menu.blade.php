@extends('layouts.layout')

@section('title', 'Home')

@section('content')
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


        /* Hero Menu Section */
        .hero-menu {
            background-color: var(--primary-color);
            padding: 120px 0 80px;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero-menu::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            width: 300px;
            height: 300px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transform: translate(100px, -150px);
        }

        .hero-menu::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 200px;
            height: 200px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transform: translate(-100px, 100px);
        }

        .hero-menu h1 {
            font-size: 50px;
            font-weight: 800;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        .hero-menu p {
            font-size: 18px;
            max-width: a600px;
            margin: 0 auto 30px;
            opacity: 0.9;
            position: relative;
            z-index: 1;
        }

        /* Categories Section */
        .categories-section {
            padding: 50px 0;
            background-color: white;
        }

        .category-pills {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .category-pill {
            padding: 10px 25px;
            margin: 5px;
            background-color: #f5f5f5;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 600;
            text-decoration: none;
            color: var(--dark-text);
        }

        .category-pill:hover, .category-pill.active {
            background-color: var(--primary-color);
            color: white;
            transform: translateY(-3px);
        }

        /* Menu Items Section */
        .menu-section {
            padding: 50px 0 80px;
            background-color: var(--light-bg);
        }

        .menu-section h2 {
            text-align: center;
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--dark-text);
            position: relative;
            display: inline-block;
        }

        .menu-section h2::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background-color: var(--primary-color);
        }

        .section-description {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 50px;
            color: #777;
        }

        .food-card {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            overflow: hidden;
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .food-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .food-img {
            height: 220px;
            overflow: hidden;
            position: relative;
        }

        .food-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .food-card:hover .food-img img {
            transform: scale(1.1);
        }

        .food-category {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: var(--primary-color);
            color: white;
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 12px;
            font-weight: 600;
        }

        .food-info {
            padding: 20px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .food-info h3 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--dark-text);
        }

        .food-price {
            color: var(--primary-color);
            font-weight: 700;
            font-size: 22px;
            margin-bottom: 15px;
        }

        .food-description {
            color: #777;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .btn-order {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-align: center;
            text-decoration: none;
            display: block;
        }

        .btn-order:hover {
            background-color: #e6002e;
            transform: translateY(-2px);
            color: white;
        }

        /* Newsletter Section */
        .newsletter-section {
            padding: 80px 0;
            background-color: var(--primary-color);
            color: white;
            text-align: center;
        }

        .newsletter-section h2 {
            font-weight: 700;
            margin-bottom: 20px;
        }

        .newsletter-section p {
            max-width: 600px;
            margin: 0 auto 30px;
            opacity: 0.9;
        }

        .newsletter-form {
            max-width: 500px;
            margin: 0 auto;
            position: relative;
        }

        .newsletter-form input {
            width: 100%;
            padding: 15px 20px;
            border-radius: 50px;
            border: none;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .newsletter-btn {
            position: absolute;
            right: 5px;
            top: 5px;
            background-color: var(--dark-text);
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .newsletter-btn:hover {
            background-color: #222;
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

        /* Animation for cards */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .food-card {
            animation: fadeIn 0.5s ease forwards;
        }

        .food-card:nth-child(2) {
            animation-delay: 0.1s;
        }

        .food-card:nth-child(3) {
            animation-delay: 0.2s;
        }

        .food-card:nth-child(4) {
            animation-delay: 0.3s;
        }

        /* Responsive Styles */
        @media (max-width: 991px) {
            .hero-menu h1 {
                font-size: 40px;
            }

            .hero-menu p {
                font-size: 16px;
            }
        }

        @media (max-width: 767px) {
            .hero-menu {
                padding: 100px 0 60px;
                text-align: center;
            }

            .category-pills {
                justify-content: center;
            }

            .food-img {
                height: 180px;
            }
        }

        @media (max-width: 575px) {
            .hero-menu h1 {
                font-size: 32px;
            }

            .hero-menu p {
                font-size: 14px;
            }

            .category-pill {
                padding: 8px 20px;
                font-size: 14px;
            }
        }
    </style>

<section>
    <!-- Hero Menu Section -->
    <section class="hero-menu text-center">
        <div class="container">
            <h1>Our Delicious Menu</h1>
            <p>Discover our wide variety of mouth-watering dishes prepared by our expert chefs using only the freshest ingredients. From traditional favorites to innovative creations, we have something for everyone.</p>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="categories-section">
        <div class="container">
            <div class="category-pills">
                <a href="#all" class="category-pill active">All Menu</a>
                @foreach ($categories as $category)
                <a href="#{{ strtolower($category->name_categories) }}" class="category-pill">{{ $category->name_categories }}</a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Menu Items Section -->
    <section class="menu-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Our Specialties</h2>
                <p class="section-description">Experience the best of Indonesian cuisine with our carefully crafted menu items, featuring both traditional favorites and innovative creations.</p>
            </div>

            <div class="row">
                @foreach ( $menus as $menu)

                <!-- Menu Item -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="food-card">
                        <div class="food-img">
                            <img src="{{ asset('storage/' . $menu->image_menu) }}" alt="{{ $menu->name_menu }}">
                            <div class="food-category">{{ $menu->category->name_categories }}</div>
                        </div>
                        <div class="food-info">
                            <h3>{{ $menu->name_menu }}</h3>
                            <div class="food-price">{{ $menu->price_menu }}</div>
                            <p class="food-description">{{ $menu->description_menu }}</p>
                            <a href="#" class="btn-order">Order Now</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-4">
                <button class="btn-order px-4 py-3">Load More</button>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

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

        // Category filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            const categoryPills = document.querySelectorAll('.category-pill');

            categoryPills.forEach(pill => {
                pill.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Remove active class from all pills
                    categoryPills.forEach(p => p.classList.remove('active'));

                    // Add active class to clicked pill
                    this.classList.add('active');

                    // Get selected category from href attribute
                    const selectedCategory = this.getAttribute('href').substring(1);

                    // Get all food cards
                    const foodCards = document.querySelectorAll('.food-card');

                    // Filter the food cards based on category
                    foodCards.forEach(card => {
                        // Get the category of the current card
                        const cardCategory = card.querySelector('.food-category').textContent;

                        // Parent element (col-*) that contains the food card
                        const cardContainer = card.closest('.col-lg-4.col-md-6');

                        // Show all cards if "All Menu" is selected
                        if (selectedCategory === 'all') {
                            cardContainer.style.display = 'block';
                        } else {
                            // Show the card if its category matches the selected category,
                            // otherwise hide it
                            if (cardCategory.toLowerCase() === selectedCategory.toLowerCase()) {
                                cardContainer.style.display = 'block';
                            } else {
                                cardContainer.style.display = 'none';
                            }
                        }

                        // Reset and apply animation for visible cards
                        if (cardContainer.style.display === 'block') {
                            card.style.animation = 'none';
                            setTimeout(() => {
                                card.style.animation = 'fadeIn 0.5s ease forwards';
                            }, 10);
                        }
                    });
                });
            });
        });
    </script>
</section>

@endsection
