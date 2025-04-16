<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masakanku - Catering Lezat & Terjangkau</title>
    <style>

        @media (max-width: 600px) {
            header, section {
                padding: 40px 10px;
            }
            .card {
                width: 90%;
            }
            nav {
                position: static;
                margin-top: 10px;
            }
            nav a {
                display: block;
                margin: 10px 0;
            }
        }

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
        .menu, .galeri {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }
        .card {
            width: 300px;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            background-color: #fdf3e7;
            text-align: left;
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.02);
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
        img.galeri {
            width: 300px;
            border-radius: 10px;
        }
        h2 {
            color: #d35400;
        }
        h3.subjudul {
            width: 100%;
            text-align: center;
            color: #d35400;
        }
        @media (max-width: 768px) {
            nav {
                position: static;
                text-align: center;
                margin-top: 10px;
            }
            nav a {
                display: inline-block;
                margin: 10px;
            }
            .menu, .galeri {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>

<header>
    <nav>
        <a href="#tentang">Tentang Kami</a>
        <a href="/menu">Menu/Paket</a>
        <a href="#galeri">Galeri</a>
    </nav>
    <h1>Selamat Datang di Masakanku</h1>
    <p>Catering Rumahan Lezat & Terjangkau</p>
</header>

<section id="tentang">
    <h2>Tentang Kami</h2>
    <p>Masakanku adalah layanan catering rumahan yang mengutamakan cita rasa, kebersihan, dan kepuasan pelanggan. Cocok untuk acara keluarga, kantor, dan harian.</p>
</section>

<section id="menu">
    <h2>Menu & Paket</h2>
    <div class="menu">
        <div class="card">
            <img src="assets/img/nasi-kotak.jpg" alt="Nasi Kotak">
            <h3><a href="/menu#nasi-kotak" style="color: #d35400; text-decoration: none;">Nasi Kotak</a></h3>
            <p>Paket nasi kotak praktis dan lezat untuk segala acara.</p>
        </div>
        <div class="card">
            <img src="assets/img/tumpeng.jpg" alt="Tumpeng">
            <h3><a href="/menu#tumpeng" style="color: #d35400; text-decoration: none;">Tumpeng</a></h3>
            <p>Tumpeng tradisional untuk perayaan spesial Anda.</p>
        </div>
        <div class="card">
            <img src="assets/img/aqiqah.jpg" alt="Aqiqah">
            <h3><a href="/menu#aqiqah" style="color: #d35400; text-decoration: none;">Aqiqah</a></h3>
            <p>Paket aqiqah siap santap lengkap dan higienis.</p>
        </div>
    </div>
</section>

<section id="galeri">
    <h2>Galeri</h2>
    <div class="galeri">
        <img class="galeri" src="https://via.placeholder.com/300x200" alt="Galeri 1">
        <img class="galeri" src="https://via.placeholder.com/300x200" alt="Galeri 2">
        <img class="galeri" src="https://via.placeholder.com/300x200" alt="Galeri 3">
    </div>
</section>

</body>
</html>
