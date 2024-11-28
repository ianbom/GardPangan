@extends('layouts.template')

@section('content')
<div class="container mt-5">
    <h4>Edit Donasi</h4>
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

    <!-- Form untuk mengedit Donasi -->
    <form action="{{ route('donasi.update', $donasi->id_donasi) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card shadow-sm">
            <div class="card-body">

                <!-- Nama Donasi -->
                <div class="form-group mb-3">
                    <label for="nama_donasi">Nama Donasi</label>
                    <input type="text" class="form-control @error('nama_donasi') is-invalid @enderror" id="nama_donasi" name="nama_donasi" value="{{ old('nama_donasi', $donasi->nama_donasi) }}">
                    @error('nama_donasi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Jumlah Donasi -->
                <div class="form-group mb-3">
                    <label for="jumlah_donasi">Jumlah Donasi</label>
                    <input type="number" class="form-control @error('jumlah_donasi') is-invalid @enderror" id="jumlah_donasi" name="jumlah_donasi" value="{{ old('jumlah_donasi', $donasi->jumlah_donasi) }}">
                    @error('jumlah_donasi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" rows="4">{{ old('deskripsi', $donasi->deskripsi) }}</textarea>
                    @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <!-- Tanggal Akhir Waktu -->
                <div class="form-group mb-3">
                    <label for="akhir_waktu">Akhir Waktu</label>
                    <input type="date" class="form-control @error('akhir_waktu') is-invalid @enderror" id="akhir_waktu" name="akhir_waktu" value="{{ old('akhir_waktu', $donasi->akhir_waktu) }}">
                    @error('akhir_waktu')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Preview Image -->
                @if($donasi->image)
                    <div class="form-group mb-3">
                        <label for="current_image">Current Image</label><br>
                        <img src="{{ asset('storage/donasi/' . $donasi->image) }}" alt="Current Image" width="200" class="img-thumbnail">
                    </div>
                @endif

                <!-- Upload Image -->
                <div class="form-group mb-3">
                    <label for="image">Gambar Donasi</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Status -->
                <div class="form-group mb-3">
                    <label for="status">Status</label>
                    <select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
                        <option value="1" {{ old('status', $donasi->status) == 1 ? 'selected' : '' }}>Aktif</option>
                        <option value="0" {{ old('status', $donasi->status) == 0 ? 'selected' : '' }}>Tidak Aktif</option>
                    </select>
                    @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Update Donasi</button>

            </div>
        </div>
    </form>
</div>
@endsection
