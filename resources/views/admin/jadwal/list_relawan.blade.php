@extends('layouts.template')

@section('content')

<!-- Link to DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

<div class="container mt-5">
    <h1 class="mb-4">Daftar Relawan {{ \Carbon\Carbon::parse($jadwal->jadwal)->translatedFormat('l, d M Y, H:i') }}</h1>

    <!-- Success/Error Messages -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Back Button -->
    <a href="{{ route('admin.index.jadwal') }}" class="btn btn-secondary mb-3">
        <i class="bi bi-arrow-left"></i> Kembali ke Jadwal
    </a>

    <!-- Check if there are no relawan -->
    @if($relawan->isEmpty())
        <div class="alert alert-info">
            Tidak ada relawan yang terdaftar untuk jadwal ini.
        </div>
    @else
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table id="relawanTable" class="table table-striped table-hover align-middle">
                    <thead class="table-dark">
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

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endif
</div>

@endsection

<!-- JavaScript links -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#relawanTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.index.relawan', $jadwal->id_jadwal) }}", // Update to correct URL
        columns: [
            { data: null, name: 'index', orderable: false, searchable: false, render: function(data, type, row, meta) {
                return meta.row + meta.settings._iDisplayStart + 1;
            }},
            { data: 'nama_relawan', name: 'nama_relawan' },
            { data: 'email', name: 'email' },
            { data: 'no_telp', name: 'no_telp' },
            { data: 'alamat', name: 'alamat' },
            { data: 'status', name: 'status', orderable: true },
            { data: 'block', name: 'block', orderable: true },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ],
        language: {
            "lengthMenu": "Tampilkan _MENU_ entri per halaman",
            "zeroRecords": "Tidak ada data yang ditemukan",
            "info": "Menampilkan _PAGE_ dari _PAGES_",
            "infoEmpty": "Tidak ada data",
            "infoFiltered": "(difilter dari _MAX_ total entri)"
        },
        pagingType: "simple_numbers",
        responsive: true
    });
});
</script>
