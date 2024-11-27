@extends('layouts.template')

@section('content')


<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold text-black"><i class="bi bi-calendar-check"></i> Daftar Jadwal</h4>
        <a href="{{ route('admin.create.jadwal') }}" class="btn btn-success shadow-sm btn-sm">
            <i class="bi bi-plus-circle"></i> Tambah Jadwal
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
                <table id="jadwalTable" class="table table-striped table-hover align-middle">
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
                </table>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#jadwalTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.jadwal.data') }}",
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
            { data: 'jadwal', name: 'jadwal' },
            { data: 'kuota_koordinator', name: 'kuota_koordinator', className: 'text-center' },
            { data: 'kuota_relawan', name:'kuota_relawan', className: 'text-center' },
            { data: 'status', name: 'status', orderable: true, searchable: false, className: 'text-center' },
            { data: 'action', name: 'action', orderable: false, searchable: false, className: 'text-center' },
        ]
    });
});
</script>
@endsection
