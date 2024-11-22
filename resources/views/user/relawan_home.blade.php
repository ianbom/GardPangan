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
        <h1 class="text-white">Relawan</h1>
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

        <div class="row justify-content-center">
            @foreach ($jadwal as $item)
            <div class="col-12 col-md-3 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="schedule-header">
                            <strong>{{ \Carbon\Carbon::parse($item->jadwal)->translatedFormat('D, d M, H:i A') }}</strong>
                        </div>
                        <p class="mb-0">{{ $item->kuota_koordinator }} / {{ $item->koor }} Koordinator</p>
                        <div class="border-section">
                            {{ $item->kuota_relawan }} / {{ $item->relawan }} Relawan
                        </div>
                        <button class="btn btn-primary selesai-btn"
                                data-bs-toggle="modal"
                                data-bs-target="#daftarModal"
                                data-jadwal="{{ \Carbon\Carbon::parse($item->jadwal)->translatedFormat('D, d M, H:i A') }}"
                                data-id="{{ $item->id_jadwal }}">
                            Daftar
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>



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
                    <div class="mb-3">
                        <label for="is_koor" class="form-label">Apakah anda ingin menjadi koordinator</label>
                        <input type="checkbox" id="is_koor" name="is_koor" value="1" {{ old('is_koor') ? 'checked' : '' }}>
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
            const jadwalText = this.getAttribute('data-jadwal');

            // Update form action with correct URL format
            form.action = `/store/relawan/${jadwalId}`;

            document.getElementById('id_jadwal').value = jadwalId;
            document.getElementById('jadwalText').textContent = jadwalText;
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

