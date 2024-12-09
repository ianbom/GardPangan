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
.header {
    position: absolute; /* Membuat header di atas konten */
    width: 100%;
    background-color: rgba(14, 96, 56, 0.5); /* Transparansi hijau */
    backdrop-filter: blur(5px); /* Efek blur */
    z-index: 10; /* Memastikan header di atas konten lainnya */
}

.navbar-brand img {
    height: 80px;
    padding: 10px;
}

.navbar-nav .nav-link {
    font-size: 14px;
    font-weight: 400;
    font-family: 'Poppins', sans-serif;
    transition: color 0.3s ease;
    font-size: 16px;
}

.navbar-nav .nav-link:hover {
    color: #F0BA31; /* Warna kuning saat hover */
}

.navbar-nav .nav-link.text-warning {
    font-weight: 700; /* Kuning dengan tebal lebih besar */
}

.navbar-toggler {
    border: none;
}

.navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=UTF8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba%28255, 255, 255, 0.7%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

/* Responsive Design */
@media (max-width: 768px) {
    nav.navbar .navbar-nav {
        flex-direction: column;
        gap: 1rem;
        text-align: center;
    }
}


    </style>

    <style>
        footer {
    background-color: #0E6038;
    color: white;
    padding: 2rem 0;
}

footer h5 {
    font-weight: 600;
    font-size: 20px;
    margin-bottom: 16px;
}

footer p {
    font-size: 16px;
    line-height: 2;
}

footer ul {
    padding: 0;
}

footer ul li {
    margin-bottom: 0.5rem;
}

footer ul li a {
    font-size: 14px;
    text-decoration: none;
    color: white;
    transition: color 0.3s ease;
}

footer ul li a:hover {
    color: #F0BA31; /* Warna saat hover */
}

footer hr {
    border-color: rgba(255, 255, 255, 0.2);
}

footer .fab {
    font-size: 1.5rem;
    transition: color 0.3s ease;
}

footer .fab:hover {
    color: #F0BA31;
}

@media (max-width: 768px) {
    footer .row > div {
        margin-bottom: 1.5rem;
    }
}

    </style>
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container d-flex align-items-center">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('image/lgogardpa.png') }}" alt="Garda Pangan" height="100">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-4 align-items-center">
                    <li class="nav-item"><a class="nav-link text-white " href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white " href="#">Program</a></li>
                    <li class="nav-item"><a class="nav-link text-white  " href="#">Products</a></li>
                    <li class="nav-item"><a class="nav-link text-white " href="#">Relawan</a></li>
                    <li class="nav-item"><a class="nav-link text-white " href="#">Event</a></li>
                    <li class="nav-item"><a class="nav-link text-white " href="#">Kontak</a></li>
                    <li class="nav-item">
                        <div class="nav-link text-white" style="padding: 0;">
                            <a href="https://www.instagram.com/gardapangan/" class="text-decoration-none" style="background-color: white; padding-right: 4px; padding-left: 4px; border-radius: 3px; display: inline-block;">
                                <i class="fab fa-instagram" style="font-size: 16px; color: #0E6038;"></i>
                            </a>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
                            {{-- INi Main Content --}}

    <main>
        @yield('content')
    </main>

    <footer class="text-white py-5" style="background-color: #005F3C;">
        <div class="container">
            <div class="row">
                <!-- Garda Pangan Section -->
                <div class="col-md-3">
                    <h5 class="fw-bold">Garda Pangan</h5>
                    <p>
                        Garda Pangan merupakan sebuah food bank yang bertujuan menjadi pusat koordinasi makanan surplus dan berpotensi terbuang, untuk disalurkan kepada masyarakat pra-sejahtera.
                    </p>
                </div>

                <!-- Our Services Section -->
                <div class="col-md-3">
                    <h5 class="fw-bold">Our Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">Home</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Program</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Products</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Relawan</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Event</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Kontak</a></li>
                    </ul>
                </div>

                <!-- Jam Buka Section -->
                <div class="col-md-3">
                    <h5 class="fw-bold">Jam Buka</h5>
                    <p>Senin-Jumat 08.00–16.00</p>
                    <p>Sabtu-Minggu 09.00–15.00</p>
                </div>

                <!-- Lokasi Kami Section -->
                <div class="col-md-3">
                    <h5 class="fw-bold">Lokasi Kami</h5>
                    <p>
                        Jl. Semolowaru Indah I No J4, Semolowaru, Kec. Sukolilo, Surabaya, Jawa Timur 60119
                    </p>
                </div>
            </div>

            <hr class="border-white mt-4">
            <div class="row">
                <div class="col-6">
                    <p class="mb-0">Copyright © 2024 Garda Pangan</p>
                </div>
                <div class="col-6 text-end">
                    <a href="https://www.instagram.com/gardapangan/" class="instagram-icon text-decoration-none">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>

            </div>
        </div>
    </footer>

<style>.instagram-icon {
    background-color: white; /* Latar belakang putih */
    padding-top:2px;
    padding-left:2px;
    padding-right:2px;
border-radius: 3px;

    display: inline-block; /* Menjadikan elemen inline-block untuk ukuran konten */
}

.instagram-icon i {
    color: #0E6038; /* Mengubah warna ikon menjadi hijau */
    font-size: 20px; /* Ukuran ikon */
}
</style>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>
