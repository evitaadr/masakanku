<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu & Paket - Masakanku</title>
    <style>
        body { font-family: sans-serif; margin: 0; padding: 0; }

        header {
            background-image: url('assets/img/bg2.jfif');
            background-size: cover;
            background-position: center;
            color: white;
            position: relative;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        header::before {
            content: "";
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .header-content {
            position: relative;
            z-index: 2;
        }

        nav {
            position: absolute;
            top: 10px;
            right: 30px;
            padding: 5px 10px;
            border-radius: 5px;
            z-index: 2;
        }

        nav a {
            color: white;
            margin-left: 15px;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
        }

        nav a:hover {
            color: rgba(255, 255, 255, 0.7);
        }

        .section-buttons {
            margin-top: 20px;
        }

        .section-buttons a {
            background-color: #e67e22;
            color: white;
            padding: 10px 20px;
            margin: 5px;
            border-radius: 5px;
            text-decoration: none;
        }

        .section-buttons a:hover {
            background-color: rgba(230, 126, 34, 0.7);
            transition: background-color 0.3s ease;
        }

        html {
            scroll-behavior: smooth;
        }

        h2 {
            color: #d35400;
        }

        .menu-section {
            padding: 40px 20px;
            text-align: center;
        }

        .menu-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .card {
            flex: 1 1 300px;
            max-width: 320px;
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

        .harga {
            font-size: 13px;
            color: #555;
            font-style: italic;
            margin-top: 5px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .harga::before {
            content: "\1F4B8";
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

            .menu-grid {
                flex-direction: column;
                align-items: center;
            }

            .card {
                max-width: 90%;
            }
        }

        @media (max-width: 480px) {
            .section-buttons a {
                display: block;
                margin: 10px auto;
                width: 80%;
                text-align: center;
            }
        }
    </style>
</head>
<body>

<header>
    <nav>
        <a href="/">Home</a>
        {{-- <a href="/menu">Menu/Paket</a>
        <a href="#galeri">Galeri</a> --}}
        <a href="/menu#nasi-kotak">Nasi Kotak</a>
        <a href="/menu#tumpeng">Tumpeng</a>
        <a href="/menu#aqiqah">Aqiqah</a>
    </nav>
    <div class="header-content">
        <h1>Menu & Paket Masakanku</h1>
        <div class="section-buttons">
            <a href="#nasi-kotak">Nasi Kotak</a>
            <a href="#tumpeng">Tumpeng</a>
            <a href="#aqiqah">Aqiqah</a>
        </div>
    </div>
</header>

<section id="nasi-kotak" class="menu-section">
    <h2>Nasi Kotak</h2>
    <div class="menu-grid">
        <div class="card">
            <img src='assets/img/PA.jpeg' alt="Nasi Kotak A">
            <h3>Paket A</h3>
            <p>Nasi, ayam goreng, Tahu & Tempe, lalapan, sambal</p>
            <p class="harga">Rp 20.000</p>

        </div>
        <div class="card">
            <img src='assets/img/PB.jpeg' alt="Nasi Kotak B">
            <h3>Paket B</h3>
            <p>Nasi, ayam bakar pedas, sambal kentang, mie, timun</p>
            <p class="harga">Rp 20.000</p>

        </div>
        <div class="card">
            <img src='assets/img/PC.jpeg' alt="Nasi Kotak C">
            <h3>Paket C</h3>
            <p>Nasi, ayam bakar, sambal kentang, urap</p>
            <p class="harga">Rp 20.000</p>

        </div>
        <div class="card">
            <img src='assets/img/PD.jpeg' alt="Nasi Kotak D">
            <h3>Paket D</h3>
            <p>Nasi, gurame goreng, urap, lalapan</p>
            <p class="harga">Rp 25.000</p>

        </div>
        <div class="card">
            <img src='assets/img/geprek1.jpeg' alt="Nasi Geprek">
            <h3>Paket E</h3>
            <p>Nasi, ayam geprek, sambal, timun</p>
            <p class="harga">Rp 15.000</p>

        </div>

        <div class="card">
            <img src='assets/img/NK3.jpeg' alt="Nasi Kuning">
            <h3>Paket F</h3>
            <p>Nasi, ayam goreng, sambal, timun, kering & mie, lalapan</p>
            <p class="harga">Rp 20.000</p>

        </div>

    </div>
</section>

<section id="tumpeng" class="menu-section">
    <h2>Tumpeng</h2>
    <div class="menu-grid">

        <div class="card">
            <img src='assets/img/NT1.jfif' alt="Tumpeng Mini">
            <h3>Tumpeng Mini</h3>
            <p>Tumpeng personal dengan nasi kuning, ayam goreng, telur balado, dan orek tempe.</p>
            <p class="harga">Rp 25.000</p>
        </div>

        <div class="card">
            <img src='assets/img/NT2.jfif' alt="Tumpeng Hemat">
            <h3>Paket Hemat</h3>
            <p>Tumpeng untuk 5 orang. Nasi kuning, ayam goreng, urap, telur, sambal goreng kentang, dan kerupuk.</p>
            <p class="harga">Rp 125.000</p>
        </div>

        <div class="card">
            <img src='assets/img/NT3.jfif' alt="Tumpeng Spesial">
            <h3>Paket Spesial</h3>
            <p>Tumpeng untuk 10 orang. Lengkap dengan ayam bakar, telur pindang, perkedel, bihun, dan sambal.</p>
            <p class="harga">Rp 250.000</p>
        </div>

        <div class="card">
            <img src='assets/img/NT4.jfif' alt="Tumpeng Premium">
            <h3>Paket Premium</h3>
            <p>Tumpeng untuk 20 orang. Lauk lengkap premium: ayam, daging rendang, sambal goreng ati, dan lainnya.</p>
            <p class="harga">Rp 500.000</p>
        </div>

    </div>
</section>

<section id="aqiqah" class="menu-section">
    <h2>Aqiqah</h2>
    <div class="menu-grid">
        <div class="card">
            <img src='assets/img/AQ2.jfif' alt="Aqiqah A">
            <h3>Paket A</h3>
            <p>Nasi, sate, acar, mie, telur, oseng-oseng buncis, buah</p>
            <p class="harga">Rp 40.000</p>
        </div>
        <div class="card">
            <img src='assets/img/AQ1.jfif' alt="Aqiqah B">
            <h3>Paket B</h3>
            <p>Nasi box, gulai kambing, sate, rica rica kulit, sambel kentang</p>
            <p class="harga">Rp 45.000</p>
        </div>
        <div class="card">
            <img src='assets/img/AQ3.jfif' alt="Aqiqah C">
            <h3>Paket C</h3>
            <p>Nasi, daging, gulai, sambal, puding, krupuk, buah </p>
            <p class="harga">Rp 50.000</p>
        </div>
    </div>
</section>

<section style="background-color: #7B2F1B; color: white; display: flex; flex-wrap: wrap; justify-content: center; padding: 40px 20px;">
    <div style="flex: 1; min-width: 300px; max-width: 600px;">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3955.842591880243!2d111.32910207500188!3d-7.482627592529346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMjgnNTcuNSJTIDExMcKwMTknNTQuMCJF!5e0!3m2!1sen!2sid!4v1744877729468!5m2!1sen!2sid"
        width="100%" height="300" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
    <div style="flex: 1; min-width: 300px; padding: 20px; color: white;">
      <img src="assets/img/logo_pangeran.png" alt="Logo Masakanku" style="height: 60px; margin-bottom: 15px;">
      <p style="line-height: 1.6; color: white;">
        Dsn. Siderejo Ds. Gentong RT 05/RW 05,<br/>
        Kecamatan Paron, Kabupaten Ngawi<br/>
      </p>
      <p style="margin: 15px 0; font-weight: bold; color: white;">
        +6281574900322
      </p>
      <div style="display: flex; gap: 15px; margin-top: 15px;">
        <a href="#"><img src="assets/img/ig.png" alt="Instagram" style="width: 32px;"></a>
        <a href="#"><img src="assets/img/fb.png" alt="Facebook" style="width: 32px;"></a>
        <a href="#"><img src="assets/img/tiktok.png" alt="TikTok" style="width: 32px;"></a>
      </div>
      <p style="margin-top: 20px; font-size: 14px; color: white;">© 2025 by Masakanku</p>
    </div>
  </section>

</body>
</html>
