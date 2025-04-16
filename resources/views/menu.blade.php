<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
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
                text-align: center;
            }
            nav a {
                display: inline-block;
                margin: 10px;
            }
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
    content: "💸";
}

    </style>
</head>
<body>

<header>
    <nav>
        <a href="/">Home</a>
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
