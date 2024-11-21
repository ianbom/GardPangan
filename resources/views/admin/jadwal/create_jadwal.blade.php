@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h4 class="mb-4">Buat Jadwal Baru</h4>

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

    <form action="{{ route('admin.store.jadwal') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="jadwal" class="form-label">Tanggal dan Waktu Jadwal</label>
            <input type="datetime-local" class="form-control @error('jadwal') is-invalid @enderror" id="jadwal" name="jadwal" value="{{ old('jadwal') }}" required>
            @error('jadwal')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="kuota_koordinator" class="form-label">Kuota Koordinator</label>
            <input type="number" class="form-control @error('kuota_koordinator') is-invalid @enderror" id="kuota_koordinator" name="kuota_koordinator" value="{{ old('kuota_koordinator') }}" required>
            @error('kuota_koordinator')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="kuota_relawan" class="form-label">Kuota Relawan</label>
            <input type="number" class="form-control @error('kuota_relawan') is-invalid @enderror" id="kuota_relawan" name="kuota_relawan" value="{{ old('kuota_relawan') }}" required>
            @error('kuota_relawan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="d-flex justify-content-end gap-4">
            <a href="{{ route('admin.index.jadwal') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
            <button type="submit" class="btn btn-primary">Simpan Jadwal</button>
        </div>





    </form>
</div>
@endsection
