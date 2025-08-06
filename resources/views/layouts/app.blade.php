<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Verdant | Company Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg px-5 navbar-dark py-3 sticky-top" style="background: #0b1408">
        <div class="container-fluid px-5">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="img/verdant1.png" alt="Logo Verdant" width="40" height="40"
                    class="d-inline-block align-text-top me-2">VERDANT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#penjelasan">about us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Artikel
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="https://www.instagram.com/dindapatriska/"
                                    target="blank">instagram</a></li>
                            <li><a class="dropdown-item" href="https://shopee.co.id/verdant.id"
                                    target="blank">shopee</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#artikel">Artikel</a></li>
                        </ul>
                    </li>
                </ul>
                @auth
                    <li class="nav-item dropdown text-white">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                            role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @if (Auth::user()->profile_photo_path)
                                <img src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}" alt="Photo"
                                    class="rounded-circle me-2" width="30" height="30" style="object-fit: cover;">
                            @endif
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                Profil Saya
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-light px-3" href="{{ route('login') }}">Login</a>
                    </li>
                @endauth
            </div>
        </div>
    </nav>

    <div class="container px-6 mt-0">
        @yield('content')
    </div>

    <footer class="bg-success bg-opacity-10 text-dark pt-5 pb-3">
        <div class="container">
            <div class="row text-center text-md-start">
                <!-- Logo -->
                <div class="col-md-3 mb-4">
                    <img src="/img/verdant1.png" style="height: 200px;">
                </div>

                <!-- Quick Links -->
                <div class="col-md-3 mb-4">
                    <h6 class="fw-bold">Quick Links</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-dark">Home</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">About</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">Services</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">Projects</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">Contact</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="col-md-3 mb-4">
                    <h6 class="fw-bold">Services</h6>
                    <ul class="list-unstyled">
                        <li>Outdoor Lighting</li>
                        <li>Irrigation System</li>
                        <li>Landscape Architecture</li>
                        <li>Lawn Care & Maintenance</li>
                    </ul>
                </div>

                <!-- Address -->
                <div class="col-md-3 mb-4">
                    <h6 class="fw-bold">Address</h6>
                    <p class="mb-0">Amanusa Regency 1 No. D1 Krajan</p>
                    <p class="mb-0">Wedomartani Ngemplak Sleman</p>
                    <p class="mb-2">Yogyakarta</p>
                    <p><strong>Call Us:</strong> 088888888888</p>
                </div>
            </div>

            <hr>

            <div class="text-center">
                <small>Copyright © 2025 Design by Dinda Patrisca </small>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
