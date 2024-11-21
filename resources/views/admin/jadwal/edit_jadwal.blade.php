@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1>Edit Jadwal</h1>
    <hr>

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

    <form action="{{ route('admin.update.jadwal', $jadwal->id_jadwal) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="jadwal" class="form-label">Tanggal dan Waktu Jadwal</label>
            <input
                type="datetime-local"
                class="form-control @error('jadwal') is-invalid @enderror"
                id="jadwal"
                name="jadwal"
                value="{{ old('jadwal', \Carbon\Carbon::parse($jadwal->jadwal)->format('Y-m-d\TH:i')) }}"
                required
            >
            @error('jadwal')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="kuota_koordinator" class="form-label">Kuota Koordinator</label>
            <input
                type="number"
                class="form-control @error('kuota_koordinator') is-invalid @enderror"
                id="kuota_koordinator"
                name="kuota_koordinator"
                value="{{ old('kuota_koordinator', $jadwal->kuota_koordinator) }}"
                required
            >
            @error('kuota_koordinator')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="kuota_relawan" class="form-label">Kuota Relawan</label>
            <input
                type="number"
                class="form-control @error('kuota_relawan') is-invalid @enderror"
                id="kuota_relawan"
                name="kuota_relawan"
                value="{{ old('kuota_relawan', $jadwal->kuota_relawan) }}"
                required
            >
            @error('kuota_relawan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 form-check">
            <input
                type="checkbox"
                class="form-check-input @error('is_active') is-invalid @enderror"
                id="is_active"
                name="is_active"
                value="1"
                {{ old('is_active', $jadwal->is_active) ? 'checked' : '' }}
            >
            <label class="form-check-label" for="is_active">Status Aktif</label>
            @error('is_active')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="bi bi-save"></i> Simpan Perubahan
        </button>
        <a href="{{ route('admin.index.jadwal') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </form>
</div>
@endsection
