<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Masakanku - @yield('title')</title>
  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-image: url('/assets/img/bg2.jpeg');
      background-size: cover;
      background-position: center;
      color: white;
      height: 300px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      position: relative;
    }

    header::before {
      content: "";
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background-color: rgba(0, 0, 0, 0.4); /* efek gelap */
      z-index: 1;
    }

    header * {
      position: relative;
      z-index: 2;
    }

    nav {
      position: absolute;
      top: 20px;
      right: 30px;
      z-index: 2;
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

    section {
      padding: 60px 20px;
      max-width: 1000px;
      margin: auto;
    }

    h2 {
      color: #d35400;
    }

    img {
      width: 100%;
      max-height: 300px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 10px;
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
    }
  </style>
</head>
<body>
  <header>
    <nav>
      <a href="{{ url('/') }}">Beranda</a>
      <a href="{{ url('/menu') }}">Menu/Paket</a>
      <a href="{{ url('/#tentang') }}">Tentang Kami</a>
      <a href="{{ url('/#galeri') }}">Galeri</a>
    </nav>
    <h1>@yield('header_title')</h1>
    <p>@yield('header_subtitle')</p>
  </header>

  @yield('content')
</body>
</html>
