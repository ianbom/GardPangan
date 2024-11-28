<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    {{-- <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}
    <link href="https://fonts.bunny.net/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body style="font-family: 'Poppins', sans-serif;">

    <style>
        .bg-green {
            background-color: #006f3d;
        }

        .nav-link {
            font-weight: bold;
            color: #000;
        }

        .nav-link:hover {
            color: #006f3d;
        }

        .header-icons a {
            margin-left: 10px;
        }

        .header {
            width: 74%;
            margin: 0 auto;
            z-index: 2; /* Higher z-index to ensure it is in front of the image */
            position: relative; /* Ensure it's in a new stacking context */
        }

        .image-hero {
            margin-top: -110px;
            z-index: 1; /* Lower z-index for the hero image */
            position: relative;
        }

        .top-header{
            height: 40px;
        }

        .top-navbar{
            height: 70px;
        }



    </style>

    <header class="header">
        <div class="bg-green py-2 text-white top-header">
            <div class="container d-flex justify-content-end gap-4 align-items-center">
                <span>
                    <i class="fas fa-envelope"></i>   gardapanganid@gmail.com
                </span>
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>

        <!-- Main Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm top-navbar">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="#">
                    <img src="logo.png" alt="Garda Pangan" height="50">
                </a>
                <!-- Toggle Button for Mobile -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Menu Links -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto gap-3"> <!-- Add ms-auto here -->
                        <li class="nav-item"><a class="nav-link text-uppercase" href="#" style="font-weight: 510;">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link text-uppercase" href="#" style="font-weight: 510;">Tentang Kami</a></li>
                        <li class="nav-item"><a class="nav-link text-uppercase" href="#" style="font-weight: 510;">Mitra</a></li>
                        <li class="nav-item"><a class="nav-link text-uppercase" href="#" style="font-weight: 510;">Penerima</a></li>
                        <li class="nav-item"><a class="nav-link text-uppercase" href="#" style="font-weight: 510;">Relawan</a></li>
                        <li class="nav-item"><a class="nav-link text-uppercase" href="#" style="font-weight: 510;">Merchandise</a></li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

                            {{-- INi Main Content --}}

    <main>
        @yield('content')
    </main>

    <footer class="text-white py-5" style="background-color: #262e3b">
        <div class="container">
            <div class="row">
                <!-- About Section -->
                <div class="col-md-4">
                    <p>
                        Garda Pangan merupakan sebuah food bank yang bertujuan menjadi pusat koordinasi
                        makanan surplus dan berpotensi terbuang, untuk disalurkan kepada masyarakat pra-sejahtera.
                    </p>
                </div>

                <!-- Navigation Links -->
                <div class="col-md-4">
                    <ul class="list-unstyled">
                        <li style="margin-bottom: 0.5rem;"><a href="#" class="text-white text-decoration-none">Tentang Kami</a></li>
                        <li style="margin-bottom: 0.5rem;"><a href="#" class="text-white text-decoration-none">Program</a></li>
                        <li style="margin-bottom: 0.5rem;"><a href="#" class="text-white text-decoration-none">Mitra</a></li>
                        <li style="margin-bottom: 0.5rem;"><a href="#" class="text-white text-decoration-none">Penerima</a></li>
                        <li style="margin-bottom: 0.5rem;"><a href="#" class="text-white text-decoration-none">Relawan</a></li>
                        <li style="margin-bottom: 0.5rem;"><a href="#" class="text-white text-decoration-none">Merchandise</a></li>
                    </ul>
                </div>

                <!-- Contact Section -->
                <div class="col-md-4">
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-home text-danger me-2"></i>
                            Jl Semolowaru Indah J4 Surabaya 60119
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-phone-alt text-success me-2"></i>
                            0895337847614
                        </li>
                        <li>
                            <i class="fas fa-envelope text-primary me-2"></i>
                            gardapanganid@gmail.com
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="border-white">
            <div class="row">
                <div class="col-12">
                    <p class="mb-0">© Copyright 2024 Garda Pangan - All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>
