@extends('layouts.template')

@section('content')

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold text-black"><i class="bi bi-people-fill"></i> Daftar Relawan</h4>
        <a href="{{ route('admin.relawan.create') }}" class="btn btn-success btn-sm bg-success shadow-sm">
            <i class="bi bi-plus-circle"></i> Tambah Relawan
        </a>
    </div>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle"></i> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="bi bi-exclamation-circle"></i> {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table id="relawanTable" class="table table-striped table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Jadwal</th>
                            <th>Email</th>
                            <th>No. Telepon</th>
                            <th>Alamat</th>
                            <th>Koor</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#relawanTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.relawan.data') }}",
        columns: [
            {
                data: null, // Kolom index
                name: 'index',
                orderable: false,
                searchable: false,
                render: function(data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            { data: 'nama_relawan', name: 'nama_relawan' },
            {
                data: 'jadwal',
                name: 'jadwal',
                render: function(data) {
                    return `<span class="badge text-black">${data}</span>`;
                }
            },
            { data: 'email', name: 'email' },
            { data: 'no_telp', name: 'no_telp' },
            { data: 'alamat', name: 'alamat' },
            {
                data: 'is_koor',
                name: 'is_koor',
                render: function(data) {
                    return data
                        ? '<span class="badge bg-secondary text-white">Koor</span>'
                        : '<span class="badge bg-success text-white">Relawan</span>';
                }
            },
            {
                data: 'is_block',
                name: 'is_block',
                render: function(data) {
                    return data
                        ? '<span class="badge bg-danger text-white">Block</span>'
                        : '<span class="badge bg-success text-white">Aman</span>';
                }
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false,
                className: 'text-center'
            },
        ]
    });
});
</script>
