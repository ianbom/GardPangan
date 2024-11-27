@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1 class="mb-4">Profil Admin</h1>

            <!-- Form untuk Update Profil -->
            <form action="{{ route('update.profile') }}" method="POST" class="bg-white p-4 rounded shadow-sm">
                @csrf
                @method('PUT')

                <!-- Input Nama Lengkap -->
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input
                        type="text"
                        class="form-control @error('name') is-invalid @enderror"
                        id="name"
                        name="name"
                        value="{{ old('name', $admin->name) }}"
                    >
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Input Email -->
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input
                        type="email"
                        class="form-control @error('email') is-invalid @enderror"
                        id="email"
                        name="email"
                        value="{{ old('email', $admin->email) }}"
                    >
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Input Password Baru -->
                <div class="form-group mb-3">
                    <label for="password" class="form-label">Password Baru</label>
                    <input
                        type="password"
                        class="form-control @error('password') is-invalid @enderror"
                        id="password"
                        name="password"
                        placeholder="Kosongkan jika tidak ingin mengubah password"
                    >
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <small class="form-text text-muted">
                        Kosongkan jika tidak ingin mengubah password
                    </small>
                </div>

                <!-- Input Password Konfirmasi -->
                <div class="form-group mb-3">
                    <label for="password_confirmation" class="form-label">Konfirmasi Password Baru</label>
                    <input
                        type="password"
                        class="form-control"
                        id="password_confirmation"
                        name="password_confirmation"
                        placeholder="Ulangi password baru"
                    >
                </div>

                <!-- Input Password Saat Ini -->
                <div class="form-group mb-3">
                    <label for="current_password" class="form-label">Password Saat Ini</label>
                    <input
                        type="password"
                        class="form-control @error('current_password') is-invalid @enderror"
                        id="current_password"
                        name="current_password"
                        placeholder="Masukkan password saat ini untuk konfirmasi"
                        required
                    >
                    @error('current_password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Tombol Submit -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">
                        Perbarui Profil
                    </button>
                </div>
            </form>

            <!-- Tampilkan Pesan Sukses -->
            @if (session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
