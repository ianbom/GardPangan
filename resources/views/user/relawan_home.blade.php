@extends('layouts.user')

@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


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


<!-- Hero Section -->

<div class="bg-light text-center image-hero"
    style="background-image: url('{{ asset('image/mesmerizing-shot-beautiful-mountainous-landscape-azores-portugal.jpg') }}');
    background-size: cover;
    background-position: center;
    height: 41rem;
    position: relative;">
    <div class="container" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 2;">
        <h1 class="text-white">Relawan</h1>
        <p class="text-white">Home / Relawan</p>
    </div>
</div>

<!-- Content Section -->
<div class="container py-4" style="margin-top: 7rem;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-md-start text-center" style="font-weight: bold; color: #006f3d; ">Mari Menjadi Food Heroes!</h1>
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
                         alt="YouTube Thumbnail"
                         style="width: 55rem; height: 30rem;">
                </div>
                <!-- YouTube Player (Initially Hidden) -->
                <div id="youtube-player" style="display: none;">
                    <iframe class="w-100"
                            style="max-width: 800px; height: 450px;"
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

                <h1 class=" mb-5" style="color: #006f3d; font-weight: bold;">Penting! Mohon Dibaca!</h1>

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
            <strong>
                <i class="bi bi-calendar"></i>
                {{ \Carbon\Carbon::parse($jadwalTerbaru->jadwal)->translatedFormat(' d F Y') }}
                -
                {{ \Carbon\Carbon::parse($jadwalTerlama->jadwal)->translatedFormat(' d F Y') }}
            </strong>

        </h4>
    </div>

    <!-- Schedule Cards -->
    <div class="row justify-content-center">
        @forelse ($jadwal as $item)
            <div class="col-12 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">

                        @if ($item->koor >= $item->kuota_koordinator && $item->relawan >= $item->kuota_relawan)
                        <div class="schedule-header mb-3" style="background-color: rgba(240, 37, 37, 0.879);">
                            <strong class="d-block">
                                {{ \Carbon\Carbon::parse($item->jadwal)->translatedFormat('D, d M, H:i A') }}
                            </strong>
                        </div>
                    @else
                    <div class="schedule-header mb-3">
                        <strong class="d-block">
                            {{ \Carbon\Carbon::parse($item->jadwal)->translatedFormat('D, d M, H:i A') }}
                        </strong>
                    </div>
                    @endif

                        <!-- Koordinator Slot -->
                        @if ($item->koor >= $item->kuota_koordinator)
                            <p class="text-danger mb-2">Koordinator: Penuh</p>
                        @else
                            <p class="mb-2">
                                 {{ $item->koor }} / {{ $item->kuota_koordinator }} Koordinator
                            </p>
                        @endif

                        <!-- Relawan Slot -->
                        @if ($item->relawan >= $item->kuota_relawan)
                            <p class="text-danger mb-3">Relawan: Penuh</p>
                        @else
                            <p class="mb-3">
                                 {{ $item->relawan }} / {{ $item->kuota_relawan }} Relawan
                            </p>
                        @endif

                        <!-- Button Daftar -->
                        @if ($item->koor >= $item->kuota_koordinator && $item->relawan >= $item->kuota_relawan)
                            <p class="btn btn-danger ">Penuh</p>
                        @else

                        <button class="btn btn-primary selesai-btn"
                        data-bs-toggle="modal"
                        data-bs-target="#daftarModal"
                        data-jadwal="{{ \Carbon\Carbon::parse($item->jadwal)->translatedFormat('D, d M, H:i A') }}"
                        data-id="{{ $item->id_jadwal }}"
                        data-koor = "{{ $item->koor }}"
                        data-kuota-koordinator = "{{ $item->kuota_koordinator }}"
                        data-relawan = "{{ $item->relawan }}"
                        data_kuota_relawan = "{{ $item->kuota_relawan }}"
                        >
                        Daftar </button>

                        @endif
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p class="text-muted">Tidak ada jadwal tersedia.</p>
            </div>
        @endforelse
    </div>


    <div class="text-center py-5" style="margin-top: 3rem;">
        <p style="font-size: 18px;">
            Dimohon mengisi satu slot saja. Pendaftaran dibuka lagi hari Sabtu jam 15.00 WIB. Food rescue Senin-Rabu-Jumat berkisar 4 jam,
            sementara food rescue Minggu (Dapur Umum) berkisar 8 jam. Durasi ini bisa berubah sesuai kondisi di lapangan.
        </p>
    </div>
</div>



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


    <!-- Modal Form -->
<div class="modal fade" id="daftarModal" tabindex="-1" aria-labelledby="daftarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="daftarModalLabel">Form Pendaftaran Relawan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="daftarForm" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <strong>Jadwal yang dipilih: <span id="jadwalText"></span></strong>
                    </div>

                    <div class="mb-3">
                        <label for="nama_relawan" class="form-label">Nama Relawan</label>
                        <input type="text" class="form-control" id="nama_relawan" name="nama_relawan" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="no_telp" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" id="no_telp" name="no_telp" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>

                    <div id="is_koor_container" class="mb-3">
                        <!-- Konten akan diperbarui oleh JavaScript -->
                    </div>


                    <input type="hidden" id="id_jadwal" name="id_jadwal">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </div>
            </form>
        </div>
    </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.getElementById('youtube-thumbnail').addEventListener('click', function () {

        document.getElementById('youtube-player').querySelector('iframe').src = "https://www.youtube.com/embed/J77q728bfeI?si=pGW5sLJpXOxzpI4l";

        document.getElementById('youtube-thumbnail').style.display = 'none';
        document.getElementById('youtube-player').style.display = 'block';
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('daftarModal');
    const form = document.getElementById('daftarForm');

    document.querySelectorAll('.selesai-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const jadwalId = this.getAttribute('data-id');

            const koor = this.getAttribute('data-koor');
            const kuota_koordinator = this.getAttribute('data-kuota-koordinator');
            const relawan = this.getAttribute('data-relawan');
            const kuota_relawan = this.getAttribute('data_kuota_relawan');

            const jadwalText = this.getAttribute('data-jadwal');

            console.log('koor : '+koor);
            console.log('kuota_koordinator : '+kuota_koordinator);
            console.log('relawan : '+relawan);
            console.log('kuota_relawan : '+kuota_relawan);

            // Update form action with correct URL format
            form.action = `/store/relawan/${jadwalId}`;

            document.getElementById('id_jadwal').value = jadwalId;
            document.getElementById('jadwalText').textContent = jadwalText;

        const isKoorContainer = document.getElementById('is_koor_container');
        isKoorContainer.innerHTML = ''; // Clear existing options

        if (koor >= kuota_koordinator ) {
            isKoorContainer.innerHTML = `
                <label for="is_koor" class="form-label">Kuota yang tersisa hanya relawan</label>
                <input type="hidden" name="is_koor" value="0">
            `;
        } else if (relawan >= kuota_relawan ) {
            isKoorContainer.innerHTML = `
                <label for="is_koor" class="form-label">Kuota yang tersisa hanya koordinator</label>
                <input type="hidden" name="is_koor" value="1">
            `;
        } else {
            isKoorContainer.innerHTML = `
                <label for="is_koor" class="form-label">Apakah anda ingin menjadi koordinator</label>
                <input type="checkbox" id="is_koor" name="is_koor" value="1">
            `;
        }
        });
    });

    form.addEventListener('submit', async function(e) {
        e.preventDefault();

        try {
            const formData = new FormData(this);
            const response = await fetch(this.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                credentials: 'same-origin'
            });

            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }

            const result = await response.json();

            if (result.success) {
                alert(result.message || 'Pendaftaran berhasil!');
                const modalInstance = bootstrap.Modal.getInstance(modal);
                modalInstance.hide();
                window.location.reload();
            } else {
                alert(result.message);
            }
        } catch (error) {
            console.error('Error:', error);
            alert(error.message);
        }
    });
});
    </script>



@endsection

