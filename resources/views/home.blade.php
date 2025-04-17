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
      transition: color 0.3s ease;
    }

    nav a:hover {
      color: rgba(255, 255, 255, 0.7);
    }

    section {
      padding: 60px 20px;
      text-align: center;
    }

    section h2 {
      color: #d35400;
      margin-bottom: 30px;
      font-size: 2rem;
    }

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

    section img {
      width: 90%;
      max-width: 500px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    section img:hover {
      transform: scale(1.1);
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }

    section p {
      text-align: justify;
      font-size: 16px;
      line-height: 1.6;
      color: #884c2a;
    }

    html {
      scroll-behavior: smooth;
    }

    /* Responsive tambahan */
    @media (max-width: 768px) {
      header {
        height: auto;
        flex-direction: column;
        padding: 40px 10px;
        text-align: center;
      }

      .header-content h1 {
        font-size: 24px;
      }

      .header-content p {
        font-size: 16px;
      }

      nav {
        position: static;
        margin-bottom: 10px;
        background: rgba(0, 0, 0, 0.3);
        padding: 5px 0;
        border-radius: 5px;
        width: 90%;
        text-align: center;
      }

      nav a {
        display: inline-block;
        margin: 8px;
        font-size: 13px;
      }

      .menu {
        flex-wrap: wrap;
      }

      .card {
        width: 45%;
        margin-bottom: 15px;
      }

      section#tentang {
        flex-direction: column;
        text-align: center;
      }

      section#tentang img {
        max-width: 90%;
        margin-bottom: 20px;
      }

      section#tentang div {
        padding: 0 10px;
      }

      section#tentang h2 {
        font-size: 20px;
      }

      section#tentang p {
        font-size: 14px;
        text-align: justify;
      }

      section#galeri .galeri-grid img {
        width: 45%;
        height: auto;
      }

      section:last-of-type {
        flex-direction: column;
        text-align: center;
      }

      section:last-of-type div {
        width: 100%;
        padding: 10px;
      }

      section:last-of-type iframe {
        height: 200px;
      }
    }
  </style>
</head>
<body>

  <header>
    <nav>
      <a href="#tentang">Tentang Masakanku</a>
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
      <div class="card" style="background-image: url('assets/img/AQ1.jfif');">
        <h3><a href="/menu#aqiqah">Aqiqah</a></h3>
      </div>
    </div>
  </section>

  <section id="tentang" style="display: flex; align-items: center; justify-content: center; flex-wrap: wrap; padding: 60px 20px;">
    <div style="flex: 1; min-width: 300px; text-align: center;">
      <img src="assets/img/TK.jpg" alt="Makanan Sedang Disajikan">
    </div>
    <div style="flex: 1; min-width: 300px; padding: 20px;">
      <h2 style="color: #a0522d;">Tentang Masakanku</h2>
      <p>
        Masakanku adalah layanan catering rumahan yang menghadirkan hidangan lezat, higienis, dan terjangkau untuk berbagai kebutuhan Anda. Kami melayani pesanan harian, acara keluarga, perkantoran, hingga momen spesial seperti syukuran dan aqiqah. Dengan bahan berkualitas, cita rasa rumahan, dan pelayanan yang tepat waktu, kami berkomitmen memberikan pengalaman terbaik untuk setiap pelanggan. Kami juga memberikan garansi 100% uang kembali jika pesanan terlambat, karena kepuasan Anda adalah prioritas kami. Masakanku bukan sekadar catering, kami adalah teman setia dalam setiap momen makan Anda.
      </p>
    </div>
  </section>

  <section id="galeri">
    <h2>Galeri</h2>
    <div class="galeri-grid">
      <img src="assets/img/g1.jfif" alt="Galeri 1">
      <img src="assets/img/g2.jfif" alt="Galeri 2">
      <img src="assets/img/g3.jfif" alt="Galeri 3">
      <img src="assets/img/g4.jfif" alt="Galeri 4">
      <img src="assets/img/g5.jpg" alt="Galeri 5">
      <img src="assets/img/g6.jpg" alt="Galeri 6">
      <img src="assets/img/g7.jpg" alt="Galeri 7">
      <img src="assets/img/g8.jpg" alt="Galeri 8">
      <img src="assets/img/g9.jpg" alt="Galeri 9">
      <img src="assets/img/g10.jpg" alt="Galeri 10">
      <img src="assets/img/g11.jpg" alt="Galeri 11">
      <img src="assets/img/g12.jpg" alt="Galeri 12">
      <img src="assets/img/g13.jpg" alt="Galeri 13">
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
