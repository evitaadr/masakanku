<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Menu & Paket - Masakanku</title>
    <style>
        body { font-family: sans-serif; margin: 0; padding: 0; }
        header, section { padding: 60px 20px; text-align: center; }
        header { background-color: #d35400; color: white; position: relative; }
        nav {
            position: absolute;
            top: 20px;
            right: 30px;
        }
        nav a {
            color: white;
            margin-left: 20px;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        h2 {
            color: #d35400;
        }
        .menu-section {
            padding: 40px 20px;
        }
        .menu-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .card {
            width: 300px;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            background-color: #fdf3e7;
            text-align: left;
        }
        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .card h3 {
            margin-top: 0;
            color: #d35400;
        }
        .card p {
            font-size: 14px;
            margin: 0;
        }
        @media (max-width: 768px) {
            .card { width: 100%; }
            nav {
                position: static;
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>

<header>
    <nav>
        <a href="/">Home</a>
        <a href="#nasi-kotak">Nasi Kotak</a>
        <a href="#tumpeng">Tumpeng</a>
        <a href="#aqiqah">Aqiqah</a>
    </nav>
    <h1>Menu & Paket Masakanku</h1>
</header>

<section id="nasi-kotak" class="menu-section">
    <h2>Nasi Kotak</h2>
    <div class="menu-grid">
        <div class="card">
            <img src="https://via.placeholder.com/300x180" alt="Nasi Kotak A">
            <h3>Paket A</h3>
            <p>Nasi, ayam goreng, mie goreng, kerupuk, buah</p>
        </div>
        <div class="card">
            <img src="https://via.placeholder.com/300x180" alt="Nasi Kotak B">
            <h3>Paket B</h3>
            <p>Nasi, ayam bakar, sambal, sayur, puding</p>
        </div>
        <div class="card">
            <img src="https://via.placeholder.com/300x180" alt="Nasi Kotak C">
            <h3>Paket C</h3>
            <p>Nasi kuning, telur dadar, perkedel, kerupuk udang</p>
        </div>
    </div>
</section>

<section id="tumpeng" class="menu-section">
    <h2>Tumpeng</h2>
    <div class="menu-grid">
        <div class="card">
            <img src="https://via.placeholder.com/300x180" alt="Nasi Tumpeng">
            <h3>Nasi Tumpeng Tradisional</h3>
            <p>Nasi kuning dengan aneka lauk tradisional, cocok untuk perayaan dan acara spesial</p>
        </div>
    </div>
</section>

<section id="aqiqah" class="menu-section">
    <h2>Aqiqah</h2>
    <div class="menu-grid">
        <div class="card">
            <img src="https://via.placeholder.com/300x180" alt="Aqiqah A">
            <h3>Paket A</h3>
            <p>Nasi box, gulai kambing, sate, acar, kerupuk</p>
        </div>
        <div class="card">
            <img src="https://via.placeholder.com/300x180" alt="Aqiqah B">
            <h3>Paket B</h3>
            <p>Nasi box, rendang kambing, sambal goreng, kerupuk, buah</p>
        </div>
    </div>
</section>

</body>
</html>
