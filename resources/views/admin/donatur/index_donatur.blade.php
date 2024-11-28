@extends('layouts.template')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold text-black"><i class="bi bi-calendar-check"></i> Daftar Donatur</h4>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle"></i> {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-circle"></i> {{ session('error') }}
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table id="donaturTable" class="table table-striped table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No Telp</th>
                            <th>Jumlah</th>
                            <th>Donasi</th>

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
    $('#donaturTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('admin.donatur.index') }}',
        columns: [
            {data: null, // Kolom index
                    name: 'index',
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
            },
            {
                data: 'nama',
                name: 'nama',
                render: function(data, type, row) {
                    return data ? data : 'anonymous';
                }
            },
            {
                data: 'email',
                name: 'email',
                render: function(data, type, row) {
                    return data ? data : 'anonymous';
                }
            },
            {
                data: 'no_telp',
                name: 'no_telp',
                render: function(data, type, row) {
                    return data ? data : 'anonymous';
                }
            },
            {
                    data: 'nominal_donasi',
                    name: 'nominal_donasi',
                    render: function(data, type, row) {
                        // Konversi ke format rupiah
                        return new Intl.NumberFormat('id-ID', {
                            style: 'currency',
                            currency: 'IDR'
                        }).format(data);
                    }
                },
            {
                data: 'donasi.nama_donasi',
                name: 'donasi.nama_donasi',
                orderable: true,
                searchable: true
            },
        ],
    });
});
    </script>

@endsection
