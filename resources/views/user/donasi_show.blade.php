@extends('layouts.user')

@section('content')

<div class="container mt-5 mb-5">
    <div class="row">
        <!-- Detail Donasi -->
        <div class="col-md-12">
            <h1 class="text-center mb-4">{{ $donasi->nama_donasi }}</h1>
        </div>
        <div class="col-md-6">
            @if ($donasi->image)
                <img src="{{ asset('/storage/donasi/' . $donasi->image) }}" alt="{{ $donasi->nama_donasi }}" class="img-fluid rounded">
            @else
                <img src="https://via.placeholder.com/500" alt="Placeholder" class="img-fluid rounded">
            @endif
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <h5>Deskripsi</h5>
                <p>{{ $donasi->deskripsi }}</p>
            </div>
            <div class="mb-3">
                <h5>Jumlah Donasi</h5>
                <p>Rp {{ number_format($donasi->jumlah_donasi, 0, ',', '.') }}</p>
                <h5>Terkumpul</h5>
                <p>Rp {{ number_format($totalDonasi ?? 0, 0, ',', '.') }}</p>
            </div>
            <div class="mb-3">
                <h5>Batas Akhir Waktu</h5>
                <p>{{ \Carbon\Carbon::parse($donasi->akhir_waktu)->translatedFormat('d F Y') }}</p>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <!-- Form Donasi -->
        <div class="col-md-12">
            <h2 class="text-center mb-4">Form Donasi</h2>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form id="donation-form" method="POST">
                @csrf
                <input type="hidden" name="id_donasi" value="{{ $donasi->id_donasi }}">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="no_telp" class="form-label">No. Telepon</label>
                    <input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" name="no_telp" value="{{ old('no_telp') }}" required>
                    @error('no_telp')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan</label>
                    <textarea class="form-control @error('pesan') is-invalid @enderror" id="pesan" name="pesan" rows="3">{{ old('pesan') }}</textarea>
                    @error('pesan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nominal_donasi" class="form-label">Nominal Donasi</label>
                    <input type="number" class="form-control @error('nominal_donasi') is-invalid @enderror" id="nominal_donasi" name="nominal_donasi" value="{{ old('nominal_donasi') }}" min="10000" required>
                    @error('nominal_donasi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" id="pay-button" class="btn btn-primary">Lanjutkan Donasi</button>
            </form>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('services.midtrans.client_key') }}"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#donation-form').on('submit', function(event) {
        event.preventDefault();

        // Validasi form
        if (this.checkValidity() === false) {
            event.stopPropagation();
            $(this).addClass('was-validated');
            return;
        }

        // Kirim data donasi untuk mendapatkan Snap Token
        $.ajax({
            url: "{{ route('donatur.store', $donasi->id_donasi) }}",
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                if (response.status === 'success') {
                    // Panggil Midtrans Snap
                    snap.pay(response.snap_token, {
                        onSuccess: function(result) {
                            // Redirect atau refresh halaman setelah pembayaran berhasil
                            window.location.reload();
                        },
                        onPending: function(result) {
                            // Tampilkan pesan pending
                            alert('Pembayaran sedang diproses');
                            window.location.reload();
                        },
                        onError: function(result) {
                            // Tampilkan pesan error
                            alert('Pembayaran gagal: ' + result.status_message);
                            window.location.reload();
                        },
                        onClose: function() {
                            // Optional: Tambahkan logika jika popup ditutup
                            alert('Anda menutup pembayaran sebelum menyelesaikan');
                        }
                    });
                } else {
                    // Tangani error dari server
                    alert('Gagal membuat token pembayaran: ' + response.message);
                }
            },
            error: function(xhr) {
                // Tangani error AJAX
                alert('Terjadi kesalahan: ' + xhr.responseJSON.message);
            }
        });
    });
});
</script>

@endsection
