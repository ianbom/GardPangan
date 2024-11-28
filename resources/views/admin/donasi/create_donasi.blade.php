@extends('layouts.template')

@section('content')
<div class="container mt-5">
    <h4 class="mb-4">Buat Donasi Baru</h4>
    <hr>

    <!-- Menampilkan pesan sukses atau error -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <!-- Form untuk membuat donasi baru -->
    <form action="{{ route('donasi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card shadow-sm">
            <div class="card-body">
                <!-- Nama Donasi -->
                <div class="mb-3">
                    <label for="nama_donasi" class="form-label">Nama Donasi</label>
                    <input type="text" class="form-control @error('nama_donasi') is-invalid @enderror" id="nama_donasi" name="nama_donasi" value="{{ old('nama_donasi') }}" required>
                    @error('nama_donasi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" rows="4">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <!-- Jumlah Donasi -->
                <div class="mb-3">
                    <label for="jumlah_donasi" class="form-label">Jumlah Donasi</label>
                    <input type="number" class="form-control @error('jumlah_donasi') is-invalid @enderror" id="jumlah_donasi" name="jumlah_donasi" value="{{ old('jumlah_donasi') }}">
                    @error('jumlah_donasi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Akhir Waktu -->
                <div class="mb-3">
                    <label for="akhir_waktu" class="form-label">Akhir Waktu</label>
                    <input type="date" class="form-control @error('akhir_waktu') is-invalid @enderror" id="akhir_waktu" name="akhir_waktu" value="{{ old('akhir_waktu') }}">
                    @error('akhir_waktu')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Image -->
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar Donasi</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Button Submit -->
                <button type="submit" class="btn btn-primary">Buat Donasi</button>

            </div>
        </div>
    </form>
</div>
@endsection
