@extends('layouts.admin')

@section('content')


<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Daftar Jadwal</h1>
        <a href="{{ route('admin.create.jadwal') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i> Tambah Jadwal
        </a>
    </div>

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

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Tanggal & Waktu</th>
                    <th>Kuota Koordinator</th>
                    <th>Kuota Relawan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($jadwal as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->jadwal)->translatedFormat('l, d M Y, H:i') }}</td>
                        <td>{{ $item->kuota_koordinator }} / {{ $item->koor }}</td>
                        <td>{{ $item->kuota_relawan }} / {{ $item->relawan }}</td>
                        <td>
                            <span class="badge {{ $item->is_active ? 'bg-success' : 'bg-secondary' }}">
                                {{ $item->is_active ? 'Aktif' : 'Non-Aktif' }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('admin.edit.jadwal', $item->id_jadwal) }}" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil-fill"></i> Edit
                            </a>
                            <a href="{{ route('admin.create.relawan', $item->id_jadwal) }}" class="btn btn-warning btn-sm">
                                <i class="bi bi-plus-fill"></i>+ Relawan
                            </a>
                            <a href="{{ route('admin.index.relawan', $item->id_jadwal) }}" class="btn btn-warning btn-sm">
                                <i class="bi bi-plus-fill"></i>List
                            </a>
                            <form action="{{ route('admin.delete.jadwal', $item->id_jadwal) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus jadwal ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash-fill"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Tidak ada jadwal tersedia.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
