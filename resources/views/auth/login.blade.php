<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Masakanku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fff4f6;
            font-family: 'Segoe UI', sans-serif;
        }
        .brand-color {
            background-color: #ff0039;
            color: white;
        }
        .btn-brand {
            background-color: #ff0039;
            color: white;
        }
        .btn-brand:hover {
            background-color: #e60033;
        }
    </style>
</head>
<body>
    <div class="container py-5" style="min-height: 100vh;">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="card shadow rounded-4 border-0">
                    <div class="card-header text-center brand-color rounded-top-4">
                        <h4 class="mb-1 p-3">Selamat Datang</h4>
                    </div>
                    <div class="card-body p-4 bg-white rounded-bottom-4">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email_user" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email_user" name="email_user" value="{{ old('email_user') }}" required>
                                @error('email_user')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password_user" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password_user" name="password_user" required>
                                @error('password_user')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Ingat saya</label>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-brand fw-semibold">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center bg-light border-top-0">
                        {{-- <p class="mb-0">Belum punya akun? <a href="{{ route('register') }}" class="text-decoration-none" style="color: #ff0039;">Daftar</a></p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
