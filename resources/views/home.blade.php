<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Masakanku - Catering Lezat & Terjangkau</title>

  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      padding: 0;
    }

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
      background-color: rgba(255, 255, 255, 0.3);
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
      text-decoration: underline;
    }

    /* Bagian Section Umum */
    section {
      padding: 60px 20px;
      text-align: center;
    }

    section h2 {
      color: #d35400;
      margin-bottom: 30px;
      font-size: 2rem;
    }

    /* Menu */
    .menu {
      display: flex;
      justify-content: center;
      gap: 15px;
      flex-wrap: wrap;
    }

    .card {
      width: 150px;
      height: 120px;
      border-radius: 10px;
      background-size: cover;
      background-position: center;
      position: relative;
      overflow: hidden;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      transition: transform 0.2s;
    }

    .card:hover {
      transform: scale(1.03);
    }

    .card h3 {
      position: absolute;
      bottom: 0;
      width: 100%;
      margin: 0;
      background-color: rgba(255, 255, 255, 0.7);
      color: #d35400;
      font-size: 14px;
      padding: 5px 0;
    }

    .card h3 a {
      color: #d35400;
      text-decoration: none;
    }

    /* Galeri */
    #galeri {
      background-color: #f9f9f9;
      padding-bottom: 80px;
    }

    .galeri-grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 15px;
      margin-top: 20px;
    }

    .galeri-grid img {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }

    .galeri-grid img:hover {
      transform: scale(1.05);
    }

    /* Responsive */
    @media (max-width: 768px) {
      .menu {
        flex-wrap: wrap;
      }

      .card {
        width: 45%;
        margin-bottom: 15px;
      }

      nav {
        position: static;
        text-align: center;
        margin-top: 10px;
      }

      nav a {
        display: inline-block;
        margin: 10px;
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
        <div class="header-content">
          <h1>Selamat Datang di Masakanku</h1>
          <p>Catering Rumahan Lezat & Terjangkau</p>
        </div>
      </header>

<section id="menu">
  <h2>Menu & Paket</h2>
  <div class="menu">
    <div class="card" style="background-image: url('assets/img/NK1.jpeg');">
      <h3><a href="/menu#nasi-kotak">Nasi Kotak</a></h3>
    </div>
    <div class="card" style="background-image: url('assets/img/NK3.jpeg');">
      <h3><a href="/menu#nasi-kotak">Nasi Kuning</a></h3>
    </div>
    <div class="card" style="background-image: url('assets/img/geprek1.jpeg');">
      <h3><a href="/menu#geprek">Nasi Geprek</a></h3>
    </div>
    <div class="card" style="background-image: url('assets/img/TP1.jpeg');">
      <h3><a href="/menu#tumpeng">Tumpeng</a></h3>
    </div>

    <div class="card" style="background-image: url('assets/img/aqiqah.jpg');">

    <div class="card" style="background-image: url('assets/img/AQ1.jfif');">
      <h3><a href="/menu#aqiqah">Aqiqah</a></h3>
    </div>
  </div>
</section>

<section id="tentang">
  <h2>Tentang Kami</h2>
  <p>Masakanku adalah layanan catering rumahan yang mengutamakan cita rasa, kebersihan, dan kepuasan pelanggan. Cocok untuk acara keluarga, kantor, dan harian.</p>
</section>

<section id="galeri">
    <h2>Galeri</h2>
    <div class="galeri-grid">
      <img src="assets/img/g1.jfif" alt="Galeri 1">
      <img src="assets/img/g2.jfif" alt="Galeri 2">
      <img src="assets/img/g3.jfif" alt="Galeri 3">
      <img src="assets/img/g4.jfif" alt="Galeri 4">
    </div>
  </section>

</body>
</html>
