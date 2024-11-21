@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1 class="mb-4">Tambah Relawan</h1>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('admin.relawan.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="id_jadwal" class="form-label">Pilih Jadwal</label>
                    <select name="id_jadwal" id="id_jadwal" class="form-select @error('id_jadwal') is-invalid @enderror" required>
                        <option value="" selected disabled>Pilih Jadwal</option>
                        @foreach ($jadwal as $j)
                            <option value="{{ $j->id_jadwal }}">{{ \Carbon\Carbon::parse($j->jadwal)->translatedFormat('l, d M Y, H:i') }}</option>
                        @endforeach
                    </select>
                    @error('id_jadwal')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="nama_relawan" class="form-label">Nama Relawan</label>
                    <input type="text" name="nama_relawan" id="nama_relawan" class="form-control @error('nama_relawan') is-invalid @enderror" value="{{ old('nama_relawan') }}" required>
                    @error('nama_relawan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="no_telp" class="form-label">No. Telepon</label>
                    <input type="text" name="no_telp" id="no_telp" class="form-control @error('no_telp') is-invalid @enderror" value="{{ old('no_telp') }}" required>
                    @error('no_telp')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea name="alamat" id="alamat" rows="3" class="form-control @error('alamat') is-invalid @enderror" required>{{ old('alamat') }}</textarea>
                    @error('alamat')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-check mb-3">
                    <input type="checkbox" name="is_koor" id="is_koor" class="form-check-input" value="1" {{ old('is_koor') ? 'checked' : '' }}>
                    <label for="is_koor" class="form-check-label">Apakah Anda Ingin Menjadi Koordinator?</label>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('admin.relawan.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
