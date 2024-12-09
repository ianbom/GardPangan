@extends('layouts.user')

@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">
<script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>


<!-- Hero Section -->

<div class="bg-light text-center image-hero"
    style="background-image: url('{{ asset('image/bggarda.png') }}');
    background-size: cover;
    background-position: center;
    height: 580px;
    position: relative;">
   <div
   style="position: absolute;
          top: 60%;
          left: 50%;
          transform: translate(-50%, -50%);
          z-index: 2;
          text-align: center;"
>
   <p
       style="font-family: 'Poppins', sans-serif;
              font-weight: 500;
              font-size: 16px;
              color: #ffffff;
              margin-bottom: 24px;"
   >
       Home / Relawan
   </p>

   <h1
       style="font-family: 'Poppins', sans-serif;
              font-weight: 700;
              font-size: 88px;
              color: #ffffff;
              padding-bottom: 24px;
              margin: 0;"
   >
       RELAWAN
   </h1>

   <button
       style="font-family: 'Poppins', sans-serif;
              font-weight: 500;
              font-size: 16px;
              background-color: #006F3C;
              color: #ffffff;
              border: none;
              border-radius: 100px;
              padding: 10px 50px;
              cursor: pointer;
              transition: background-color 0.3s ease;"
       onmouseover="this.style.backgroundColor='#F0BA31';"
       onmouseout="this.style.backgroundColor='#006F3C';"
   >
   <a href="#food-heroes" class="text-white text-decoration-none" style="display: block; color: inherit; text-align: center;">
    Jelajahi
</a>
   </button>
</div>
</div>

<!-- Content Section -->
<div class="container py-4" style="margin-top: 7rem;">
    <div style="display: flex; flex-wrap: wrap; max-width: 1200px; gap: 20px; align-items: center; width: 100%; padding: 20px;">

        <!-- Text Content -->
        <div style="flex: 1; max-width: 50%;">
            <h1 style="font-size: 32px;   font-weight: 600; color: #A1883D; margin-bottom: 10px;">MARI MENJADI</h1>
            <h2 style="font-size: 32px;   font-weight: 600; color: #006F3C; margin: 0 0 20px;">FOOD HEROES!</h2>
            <p style="font-size: 15px; line-height: 1.6; color: ##34392D; margin-bottom: 20px;">
                Dapatkan <b>pengalaman berharga</b> turun tangan langsung menjadi Food Heroes Garda Pangan
                untuk mengantarkan makanan kepada masyarakat pra-sejahtera di Surabaya.
            </p>
            <div style="display: flex; align-items: center; margin-bottom: 10px; color: #34392D;">
                <span class="iconify" data-icon="mdi:food-apple" data-width="24" data-height="24" style="color: #0E6038; margin-right: 10px;"></span>
                <span>Mengasah kepekaan sosial dengan berinteraksi langsung dengan warga pra-sejahtera.</span>
            </div>
            <div style="display: flex; align-items: center; margin-bottom: 10px; color: #34392D;">
                <span class="iconify" data-icon="mdi:food-apple" data-width="20" data-height="20" style="color: #0E6038; margin-right: 10px;"></span>
                <span>Belajar mengenai seluk-beluk sampah makanan.</span>
            </div>
            <div style="display: flex; align-items: center; margin-bottom: 10px; color: #34392D;">
                <span class="iconify" data-icon="mdi:food-apple" data-width="20" data-height="20" style="color: #0E6038; margin-right: 10px;"></span>
                <span>Berkontribusi memerangi sampah makanan.</span>
            </div>

        </div>

        <!-- Image Content -->
        <div style="flex: 1; max-width: 50%; display: flex; flex-direction: column; gap: 10px;">
            <div style="background-image: url('{{ asset('image/section1.png') }}'); background-size: cover; background-position: center; width: 100%; height: 300px; border-radius: 8px;"></div>
        </div>
    </div>
</div>




<div style="background-color: #006F3C; padding: 30px; color: white; margin-top:100px;" id="food-heroes">
    <p style="text-align: center; font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 18px; margin-top: 20px;">
        Ketentuan
    </p>
    <h1 style="text-align: center; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 32px;">Food Heroes Garda Pangan</h1>
</div>
<div class="container py-4" style="margin-top: 50px;">

<div style="background-image: url('{{ asset('image/plant.png') }}');  padding: 60px; border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
    <h2 style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 50px; color: white; text-align: justify;">
        SELAMAT DATANG
    </h2>
    <p style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 30px; text-align: justify; color:white; font-style: italic;">
        DI PENDDAFTARAN <strong style="color: #A1883D;">FOOD HEROES GARDA PANGAN</strong>
    </p>
    <p style="font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 16px; margin-top: 20px; text-align: justify; color:white;">
        Baca syarat dan ketentuan kami di bawah ini:
    </p>
    <ol style="font-family: 'Poppins', sans-serif; font-weight: 300; font-size: 16px; margin-top: 20px; color:white;">
        <li>Pendaftaran relawan dibuka setiap hari Sabtu pukul 15:00.</li>
        <li>Food rescue Senin-Rabu-Jumat berlangsung 4 jam, sementara food rescue Minggu (Dapur Umum) berlangsung 8 jam. Durasi ini bisa berubah sesuai kondisi di lapangan.</li>
        <li>Food Rescue akan didampingi oleh 1 Koordinator dari Garda Pangan dan slot untuk Food Heroes setiap harinya. Jika slot sudah penuh, maka opsi di hari tersebut akan dinon-aktifkan.</li>
        <li>Food Heroes boleh berasal dari mana saja: individu, keluarga, atau institusi/komunitas. Anak minimal berumur 7 tahun dan wajib didampingi orangtua.</li>
        <li>Food Heroes maksimal bisa mengikuti 1 kali Food Rescue setiap minggunya.</li>
        <li>Kontribusi transportasi per Food Heroes sebesar minimal Rp 10rb, dibayarkan saat hari-H dengan mengisi kenclelangan resmi di basecamp Garda Pangan.</li>
        <li>Food Heroes akan dihubungi oleh Koordinator H-1 untuk koordinasi selanjutnya. Harap datang tepat waktu dan gunakan pakaian yang nyaman.</li>
        <li>Semua Food Heroes diwajibkan menaati petunjuk dan SOP yang diberikan oleh Koordinator. Hal ini untuk memastikan keamanan makanan dan kenyamanan penerima donasi.</li>
        <li>Pembatalan kedatangan sebanyak 2x tanpa alasan yang urgent akan di-black-list, mengingat akan mengganggu perjalanan di lapangan.</li>
    </ol>

    <p style="font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 14px; margin-top: 30px; text-align: center; color:#A1883D;">
    Selamat Datang
</p>

    <div style="text-align: center; margin-top: 10px;">
        <button
        style="font-family: 'Poppins', sans-serif;
               font-weight: 500;
               font-size: 16px;
               background-color: #A1883D;
               color: #ffffff;
               border: none;
               border-radius: 8px;
               padding: 10px 50px;
               cursor: pointer;
               transition: background-color 0.3s ease;"
        onmouseover="this.style.backgroundColor='#F0BA31';"
        onmouseout="this.style.backgroundColor='#A1883D';"
    >
        Bagikan
    </button>

    </div>
</div> </div>



    <!-- Schedule Section -->
    <style>
        ol {
            list-style-type: none;
            counter-reset: list-counter;
        }

        ol li {
            counter-increment: list-counter;
            position: relative;
            padding-left: 30px;
        }

        ol li::before {
            content: counter(list-counter) ". ";
            position: absolute;
            left: 0;
            color: white;
        }
    </style>

<style>
    /* General Styling */
    .card {
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border: none;
        display: flex; /* Enable Flexbox */
        flex-direction: row; /* Align children horizontally */
        height: 100%;
    }

    .schedule-header {
        width: 30%; /* Adjust width of the left section */
        text-align: center;
        padding: 20px;
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center; /* Vertically center the content */
        align-items: center;
    }

    .card-body {
        width: 70%; /* Adjust width of the right section */
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin-left:10px;
        align-items: flex-start; /* Align content to the left */
    }

    .text-date-day, .text-date-number, .text-date-month {
        margin: 0;
    }

    .text-date-number {
        font-size: 40px;
        font-weight: bold;
        margin: 5px 0;
    }

    .slot-text {
        font-size: 18px;
        font-weight: 600;
        color: #006F3C;
        margin: 10px 0;
        margin-bottom: 10px;
    }

    .btn-status {
    position: absolute;
    bottom: 16px;
    right: 16px;
    border-radius: 20px;
    padding: 8px 16px;
    font-size: 14px;
    font-weight: bold;
    text-transform: uppercase;
    color: white;

}
    .btn-full {
        background-color: #A1883D;
        color: white;
        cursor: not-allowed;
        border:none;
    }

    .btn-available {
        background-color: #006F3C;
        color: white;
        border: none;
        transition: background-color 0.3s ease;
    }

    .btn-available:hover {
        background-color: #F0BA31;
        color: white;
    }

    /* Responsive Styling */
    @media (max-width: 768px) {
        .card {
            flex-direction: column; /* Stack vertically on small screens */
        }

        .schedule-header {
            width: 100%; /* Full width for small screens */
            border-radius: 16px 16px 0 0;
        }

        .card-body {
            width: 100%; /* Full width for small screens */
            border-radius: 0 0 16px 16px;
        }
    }
    </style>


    <!-- Schedule Cards -->
    <div style="background-image: url('{{ asset('image/plant2.png') }}'); color: white; margin-top:100px;">
        <div style=" padding: 180px;  border-radius: 12px; ">

        <h2 style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 50px; color: white; text-align: justify;">
            SLOT PENDAFTARAN         </p>
        </h2>
        <h2 style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 50px; color: white; text-align: justify;">
            FOOD HEROES        </h2>
        <div style="width: 500px; height: 10px; background-color: #A1883D; margin-bottom: 10px;  margin-top: 10px; text-align: justify;"></div>
        <ul style="font-family: 'Poppins', sans-serif; font-weight: 300; font-size: 16px; margin-top: 20px; margin-bottom:50px; color:white;">
            <li>Dimohon mengisi satu slot saja. </li>
            <li>Food rescue Senin-Rabu-Jum'at berkisar 4 jam, sementara food rescue Minggu (Dapur Umum) berkisar 8 jam.</li>
            <li>Pendaftaran dibuka lagi hari Sabtu jam 15.00 WIB.  Durasi ini bisa berubah sesuai kondisi di lapangan.</li>
              </ul>
              <div class="row">
                @forelse ($jadwal as $item)
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card h-100 d-flex flex-row">
                        <!-- Left Section -->
                        <div class="schedule-header"
                        style="background-color: {{ ($item->koor >= $item->kuota_koordinator && $item->relawan >= $item->kuota_relawan) ? '#A1883D' : '#006F3C' }};
                               border-top-right-radius: 100px;
                               border-bottom-right-radius: 100px;">
                        <p class="text-date-day">{{ \Carbon\Carbon::parse($item->jadwal)->translatedFormat('D') }}</p>
                        <p class="text-date-number">{{ \Carbon\Carbon::parse($item->jadwal)->translatedFormat('d') }}</p>
                        <p class="text-date-month">{{ \Carbon\Carbon::parse($item->jadwal)->translatedFormat('M') }}</p>
                    </div>

                        <!-- Right Section -->
                        <div class="card-body">
                            <p class="slot-text">{{ $item->koor }} Koordinator</p>
                            <p class="slot-text">{{ $item->relawan }} Relawan</p>
                            <p class="slot-text">-- </p>

                            @if ($item->koor >= $item->kuota_koordinator && $item->relawan >= $item->kuota_relawan)
                                <p class="btn btn-status btn-full">Penuh</p>
                            @else
                                <button class="btn btn-status btn-available selesai-btn"
                                        data-bs-toggle="modal"
                                        data-bs-target="#daftarModal"
                                        data-jadwal="{{ \Carbon\Carbon::parse($item->jadwal)->translatedFormat('D, d M, H:i A') }}"
                                        data-id="{{ $item->id_jadwal }}"
                                        data-koor="{{ $item->koor }}"
                                        data-kuota-koordinator="{{ $item->kuota_koordinator }}"
                                        data-relawan="{{ $item->relawan }}"
                                        data-kuota-relawan="{{ $item->kuota_relawan }}">
                                    Daftar
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center mb-5 mt-5">
                    <h1 class="bold">Tidak ada jadwal tersedia.</h1>
                </div>
                @endforelse
            </div>


</div>




    <!-- Modal Form -->
<!-- Modal Form -->
<div class="modal fade" id="daftarModal" tabindex="-1" aria-labelledby="daftarModalLabel" aria-hidden="true" style="border: none; " >
    <div class="modal-dialog" style="background-color: #043c21; padding:20px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
        <div class="modal-content" style="background-image: url('{{ asset('image/bglagi.png') }}'); background-size: cover; background-position: center; color: white;">
            <div class="modal-header" >
                <h5 class="modal-title" id="daftarModalLabel" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-sixe: 28px; color: #F0BA31;">Form Pendaftaran Relawan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="color: rgb(255, 255, 255);"></button>
            </div>
            <form id="daftarForm" method="POST">
                @csrf
                <div class="modal-body" style=" border-radius: 10px; padding: 20px;">
                    <div class="mb-3">
                        <strong style="font-size: 18px; font-family: 'Poppins', sans-serif; font-weight: 500; ">Jadwal yang dipilih: <span id="jadwalText"></span></strong>
                    </div>

                    <div class="mb-3">
                        <label for="nama_relawan" class="form-label">Nama Relawan</label>
                        <input type="text" class="form-control" id="nama_relawan" name="nama_relawan" required style="background-color: rgba(255, 255, 255, 0.9); color: #34392D;">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required style="background-color: rgba(255, 255, 255, 0.9); color: #34392D;">
                    </div>
                    <div class="mb-3">
                        <label for="no_telp" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" id="no_telp" name="no_telp" required style="background-color: rgba(255, 255, 255, 0.9); color: #34392D;">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required style="background-color: rgba(255, 255, 255, 0.9); color: #34392D;">
                    </div>

                    <div id="is_koor_container" class="mb-3">
                        <!-- Konten akan diperbarui oleh JavaScript -->
                    </div>

                    <input type="hidden" id="id_jadwal" name="id_jadwal">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-weight: bold; color: white; background-color: #A1883D; border:none;">TUTUP</button>
                    <button type="submit" class="btn btn-primary" style="font-weight: bold; background-color: #006F3C; border: none;">DAFTAR</button>
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

