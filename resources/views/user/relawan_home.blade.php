@extends('layouts.user')

@section('content')


    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="" alt="Garda Pangan" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Mitra</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Penerima</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Relawan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Merchandise</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="bg-light text-center py-5"
    style="background-image: url('{{ asset('image/mesmerizing-shot-beautiful-mountainous-landscape-azores-portugal.jpg') }}');
    background-size: cover;
    background-position: center;
    height: 400px;
    filter:brightness(80%);
    ">
    <div class="container">
        <h1 class="text-white bold">Relawan</h1>
        <p class="text-white">Home / Relawan</p>
    </div>
</div>



    <!-- Content Section -->
    <div class="container py-4" style="margin-top: 7rem;">

        <div class="row justify-content-center">
            <div class="col-md-8">

                <h2 class="text-success text-md-start text-center" style="font-weight: bold;">Mari Menjadi Food Heroes!</h2>



                <p class="text-md-start text-center">Dapatkan pengalaman berharga turun tangan langsung menjadi Food Heroes Garda Pangan untuk mengantarkan makanan kepada masyarakat pra-sejahtera di Surabaya.</p>

                <ul class="list-group list-group-flush" style="border: none;">
                    <li class="list-group-item" style="border: none;">1. Mengasah kepekaan sosial dengan berinteraksi langsung dengan warga pra-sejahtera.</li>
                    <li class="list-group-item" style="border: none;">2. Belajar mengenai seluk-beluk sampah makanan.</li>
                    <li class="list-group-item" style="border: none;">3. Berkontribusi memerangi sampah makanan.</li>
                </ul>

                <div class="mt-4 text-center">
                    <!-- Thumbnail -->
                    <div id="youtube-thumbnail" style="cursor: pointer;">
                        <img class="img-fluid"
                             src="https://img.youtube.com/vi/J77q728bfeI/hqdefault.jpg"
                             alt="YouTube Thumbnail">
                    </div>

                    <!-- YouTube Player (Initially Hidden) -->
                    <div id="youtube-player" style="display: none;">
                        <iframe class="w-100"
                                height="315"
                                src="https://www.youtube.com/embed/J77q728bfeI?si=pGW5sLJpXOxzpI4l"
                                frameborder="0"
                                allow="autoplay; encrypted-media"
                                allowfullscreen>
                        </iframe>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <div class="container py-4" style="margin-top: 5rem;">

        <div class="row justify-content-center">
            <div class="col-md-8">

                <h3 class="text-success mb-5" style="font-weight: bold;">Penting! Mohon Dibaca!</h3>

                <p>Selamat datang di pendaftaran Food Heroes Garda Pangan! Baca syarat dan ketentuan kami di bawah ini:</p>

                <ul style="list-style: none; padding-left: 1;">
                    <p style="margin-bottom: 0.5rem;">1. Pendaftaran relawan dibuka setiap hari Sabtu pukul 15:00.</p>
                    <p style="margin-bottom: 0.5rem;">2. Food rescue Senin-Rabu-Jum'at berkisar 4 jam, sementara food rescue Minggu (Dapur Umum) berkisar 8 jam. Durasi ini bisa berubah sesuai kondisi di lapangan.</p>
                    <p style="margin-bottom: 0.5rem;">3. Food Rescue akan didampingi oleh 1 Koordinator dari Garda Pangan dan slot untuk Food Heroes setiap harinya. Jika slot sudah penuh, maka opsi di hari tersebut akan dinon-aktifkan.</p>
                    <p style="margin-bottom: 0.5rem;">4. Food Heroes boleh berasal dari mana saja: individu, keluarga, atau institusi/komunitas. Anak minimal berumur 7 tahun dan wajib didampingi orangtua.</p>
                    <p style="margin-bottom: 0.5rem;">5. Food Heroes maksimal bisa mengikuti 1 kali Food Rescue setiap minggunya.</p>
                    <p style="margin-bottom: 0.5rem;">6. Kontribusi transportasi per food heroes sebesar minimal Rp 10rb, dibayarkan saat hari-H dengan mengisi kenclengan resmi di basecamp Garda Pangan.</p>
                    <p style="margin-bottom: 0.5rem;">7. Food Heroes akan dihubungi oleh Koordinator H-1 untuk koordinasi selanjutnya. Harap datang tepat waktu dan gunakan pakaian yang nyaman.</p>
                    <p style="margin-bottom: 0.5rem;">8. Semua Food Heroes diwajibkan menaati petunjuk dan SOP yang diberikan oleh Koordinator. Hal ini untuk memastikan keamanan makanan dan kenyamanan penerima donasi.</p>
                    <p style="margin-bottom: 0.5rem;">9. Pembatalan kedatangan sebanyak 2x tanpa alasan yang urgent akan di-black-list, mengingat akan mengganggu operasional harian di lapangan.</p>
                </ul>

                <p>Selamat berbagi dan jangan lupa berikan kami saran dan masukan ya! :)</p>
            </div>
        </div>
    </div>


    <!-- Schedule Section -->
    <style>
        .schedule-header {
            background-color: #0f8f44;
            color: white;
            padding: 8px;
            border-radius: 4px;
            margin-bottom: 15px;
        }
        .card {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .selesai-btn {
            background-color: #0f8f44;
            color: white;
            border: none;
            padding: 4px 20px;
            border-radius: 4px;
        }
        .border-section {
            border-top: 1px solid #e0e0e0;
            border-bottom: 1px solid #e0e0e0;
            padding: 10px 0;
            margin: 10px 0;
        }
    </style>
    <div class="container py-5" style="margin-top: 5rem;">
        <!-- Header Section -->
        <div class="text-center mb-4">
            <h4 class="mb-2">
                <strong><i class="bi bi-calendar"></i> 18 Nov 2024 - 22 Nov 2024 </strong>
            </h4>
            <p class="text">Kuota 5 slot di hari Senin-Jumat, dan 0 slot di hari Minggu</p>
        </div>

        <!-- Schedule Cards -->
        <!-- Schedule Cards -->
<div class="row justify-content-center">
    <!-- Card 1 -->
    <div class="col-12 col-md-3 mb-4">
        <div class="card h-100">
            <div class="card-body text-center">
                <div class="schedule-header">
                    <strong>Wed, 20 Nov, 04:00 PM</strong>
                </div>
                <p class="mb-0">1 Koordinator</p>
                <div class="border-section">
                    4 Relawan
                </div>
                <button class="selesai-btn">Selesai</button>
            </div>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="col-12 col-md-3 mb-4">
        <div class="card h-100">
            <div class="card-body text-center">
                <div class="schedule-header">
                    <strong>Wed, 20 Nov, 04:00 PM</strong>
                </div>
                <p class="mb-0">1 Koordinator</p>
                <div class="border-section">
                    4 Relawan
                </div>
                <button class="selesai-btn">Selesai</button>
            </div>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="col-12 col-md-3 mb-4">
        <div class="card h-100">
            <div class="card-body text-center">
                <div class="schedule-header">
                    <strong>Wed, 20 Nov, 04:00 PM</strong>
                </div>
                <p class="mb-0">1 Koordinator</p>
                <div class="border-section">
                    4 Relawan
                </div>
                <button class="selesai-btn">Selesai</button>
            </div>
        </div>
    </div>
</div>


        <div class="text-center py-5 " style="margin-top: 3rem;">
            <p style="font-size: 18px;">
                Dimohon mengisi satu slot saja. Pendaftaran dibuka lagi hari Sabtu jam 15.00 WIB. Food rescue Senin-Rabu-Jum'at berkisar 4 jam,
                sementara food rescue Minggu (Dapur Umum) berkisar 8 jam. Durasi ini bisa berubah sesuai kondisi di lapangan.
            </p>
        </div>
    </div>


    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>© Copyright 2024 Garda Pangan</p>
                </div>
                <div class="col-md-6 text-end">
                    <a href="#" class="text-white me-2">Facebook</a>
                    <a href="#" class="text-white">Instagram</a>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.getElementById('youtube-thumbnail').addEventListener('click', function () {
        // Replace the iframe src with the YouTube embed link
        document.getElementById('youtube-player').querySelector('iframe').src = "https://www.youtube.com/embed/J77q728bfeI?si=pGW5sLJpXOxzpI4l";
        // Hide the thumbnail and show the player
        document.getElementById('youtube-thumbnail').style.display = 'none';
        document.getElementById('youtube-player').style.display = 'block';
    });
</script>

@endsection
