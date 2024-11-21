@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h1 class="mb-4">Daftar Relawan</h1>
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
            <a href="{{ route('admin.relawan.create') }}" class="btn btn-primary mb-3">
                <i class="bi bi-plus-circle"></i> Tambah Relawan
            </a>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Jadwal</th>
                            <th>Email</th>
                            <th>No. Telepon</th>
                            <th>Alamat</th>
                            <th>Koordinator</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($relawan as $index => $r)
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>{{ $r->nama_relawan }}</td>
                            <td>{{ \Carbon\Carbon::parse($r->jadwal->jadwal)->translatedFormat('l, d M Y, H:i')}}</td>
                            <td>{{ $r->email }}</td>
                            <td>{{ $r->no_telp }}</td>
                            <td>{{ $r->alamat }}</td>
                            <td>
                                @if($r->is_koor)
                                    <span class="badge bg-primary">Koor</span>
                                @else
                                    <span class="badge bg-success">Relawan</span>
                                @endif
                            </td>
                            <td>
                                @if($r->is_block)
                                    <span class="badge bg-danger">Block</span>
                                @else
                                    <span class="badge bg-success">Aman</span>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Tombol Block/Unblock -->
                                    <form action="{{ route('admin.block.relawan', $r->id_relawan) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="badge border border-none bg-{{ $r->is_block ? 'success' : 'danger' }}">
                                            {{ $r->is_block ? 'Unblock' : 'Block' }}
                                        </button>
                                    </form>

                                    <!-- Tombol Hapus -->
                                    <form action="{{ route('admin.relawan.delete', $r->id_relawan) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus jadwal ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="badge bg-danger border border-none">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>

                        </tr>
                        @empty
                        <tr>
                            <td colspan="9" class="text-center">Tidak ada data relawan.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
