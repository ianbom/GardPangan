@extends('layouts.template')

@section('content')
<div class="container mt-5">
    <h1>Tambah Relawan</h1>
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

    <!-- Form untuk menambahkan relawan -->
    <form action="{{ route('store.relawan', $jadwal->id_jadwal) }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="id_jadwal" class="form-label">Jadwal</label>
            <input
                type="text"
                class="form-control"
                id="id_jadwal"
                name="id_jadwal"
                value="{{ \Carbon\Carbon::parse($jadwal->jadwal)->translatedFormat('l, d M Y, H:i') }}"
                readonly
            >
            <input type="text" name="id_jadwal" id="id_jadwal" value="{{ $jadwal->id_jadwal }}" hidden>
        </div>

        <div class="mb-3">
            <label for="nama_relawan" class="form-label">Nama Relawan</label>
            <input
                type="text"
                class="form-control @error('nama_relawan') is-invalid @enderror"
                id="nama_relawan"
                name="nama_relawan"
                value="{{ old('nama_relawan') }}"
                required
            >
            @error('nama_relawan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input
                type="email"
                class="form-control @error('email') is-invalid @enderror"
                id="email"
                name="email"
                value="{{ old('email') }}"
                required
            >
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="no_telp" class="form-label">Nomor Telepon</label>
            <input
                type="text"
                class="form-control @error('no_telp') is-invalid @enderror"
                id="no_telp"
                name="no_telp"
                value="{{ old('no_telp') }}"
                required
            >
            @error('no_telp')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea
                class="form-control @error('alamat') is-invalid @enderror"
                id="alamat"
                name="alamat"
                rows="3"
                required
            >{{ old('alamat') }}</textarea>
            @error('alamat')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 form-check">
            <input
                type="checkbox"
                class="form-check-input"
                id="is_koor"
                name="is_koor"
                value="1"
                {{ old('is_koor') ? 'checked' : '' }}
            >
            <label class="form-check-label" for="is_koor">Apakah relawan ini adalah koordinator?</label>
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Tambah Relawan
        </button>
        <a href="{{ route('admin.index.jadwal') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </form>
</div>
@endsection
