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
      background-color: #d35400;
      color: white;
      padding: 60px 20px;
      text-align: center;
      position: relative;
    }
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
    </nav>
    <h1>@yield('header_title')</h1>
    <p>@yield('header_subtitle')</p>
  </header>

  @yield('content')
</body>
</html>
