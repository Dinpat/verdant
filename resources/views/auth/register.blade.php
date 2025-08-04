<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register | Verdant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .register-container {
            min-height: 100vh;
        }

        .register-img {
            background: url('/img/hero.png') center center no-repeat;
            background-size: cover;
        }

        .btn-custom {
            background-color: #28a745;
            /* Hijau */
            color: white;
            border: none;
        }

        .btn-custom:hover {
            background-color: #218838;
            /* Warna saat hover */
        }
    </style>
</head>

<body>
    <div class="container-fluid register-container d-flex">
        <div class="col-md-6 d-flex align-items-center justify-content-center">
            <div class="w-75">
                <h2 class="mb-4">Daftar Akun</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        {{ $errors->first() }}
                    </div>
                @endif
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" name="name" class="form-control" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div>
                    <button class="btn btn-custom w-100">Register</button>
                </form>
                <div class="text-center mt-3">
                    <small>Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a></small>
                </div>
            </div>
        </div>
        <div class="col-md-6 register-img d-none d-md-block">
            <!-- Gambar di sisi kanan -->
        </div>
    </div>
</body>

</html>
