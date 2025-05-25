<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Auth Demo')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
<body class="min-h-screen bg-gray-100 flex flex-col">
    <nav class="bg-white shadow">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-xl font-bold">Auth Demo</a>

            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="text-red-600 hover:underline">Logout</button>
                </form>
            @else
                <div class="space-x-4">
                    <a href="{{ route('login') }}"  class="hover:underline">Login</a>
                    {{-- <a href="{{ route('register') }}" class="hover:underline">Register</a> --}}
                </div>
            @endauth
        </div>
    </nav>

    <main class="flex-1 flex items-center justify-center">
        @yield('content')
    </main>
</body>
</html>