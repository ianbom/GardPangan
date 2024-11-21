@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1>Daftar Relawan {{ \Carbon\Carbon::parse($jadwal->jadwal)->translatedFormat('l, d M Y, H:i') }}</h1>
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
    <a href="{{ route('admin.index.jadwal') }}" class="btn btn-secondary mb-3">
        <i class="bi bi-arrow-left"></i> Kembali ke Jadwal
    </a>

    @if($relawan->isEmpty())
        <div class="alert alert-info">
            Tidak ada relawan yang terdaftar untuk jadwal ini.
        </div>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Relawan</th>
                    <th>Email</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    <th>Block</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($relawan as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->nama_relawan }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->no_telp }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>
                        @if($item->is_koor)
                            <span class="badge bg-primary">Koordinator</span>
                        @else
                            <span class="badge bg-success">Relawan</span>
                        @endif
                    </td>
                    <td>@if($item->is_block)
                        <span class="badge bg-danger">Block</span>
                    @else
                        <span class="badge bg-success">Aman</span>
                    @endif</td>
                    <td>
                        @if($item->is_block)
                        <form action="{{ route('admin.block.relawan', $item->id_relawan) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success btn-sm"> Unblock</button>
                        </form>
                    @else
                    <form action="{{ route('admin.block.relawan', $item->id_relawan) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-danger btn-sm"> Block</button>
                    </form>
                    @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
