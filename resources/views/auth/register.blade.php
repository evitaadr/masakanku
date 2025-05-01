<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Masakanku</title>
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
    <div class="container py-5" style="min-height: 100dvh;">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="card shadow rounded-4 border-0">
                    <div class="card-header text-center brand-color rounded-top-4">
                        <h4 class="mb-1 p-3">Daftar Akun Baru</h4>
                    </div>
                    <div class="card-body p-4 bg-white rounded-bottom-4">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="username_user" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username_user" name="username_user" value="{{ old('username_user') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="email_user" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email_user" name="email_user" value="{{ old('email_user') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="password_user" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password_user" name="password_user" required>
                            </div>
                            <div class="mb-3">
                                <label for="password_user_confirmation" class="form-label">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="password_user_confirmation" name="password_user_confirmation" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-brand fw-semibold">Register</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center bg-light border-top-0">
                        <p class="mb-0">Sudah punya akun? <a href="{{ route('login') }}" class="text-decoration-none" style="color: #ff0039;">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
