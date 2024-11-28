@extends('layouts.template')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold text-black"><i class="bi bi-calendar-check"></i> Daftar Donasi</h4>
        <a href="{{ route('donasi.create') }}" class="btn btn-success shadow-sm btn-sm">
            <i class="bi bi-plus-circle"></i> Buat Donasi
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
                <table id="donasiTable" class="table table-striped table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Target</th>
                            <th>Terkumpul</th>
                            <th>Akhir Waktu</th>
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
        $('#donasiTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('donasi.index') }}", // Route untuk AJAX
            columns: [
                {data: null, // Kolom index
                    name: 'index',
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    } },
                { data: 'nama_donasi', name: 'nama_donasi' },
                {
                    data: 'jumlah_donasi',
                    name: 'jumlah_donasi',
                    render: function(data, type, row) {
                        // Konversi ke format rupiah
                        return new Intl.NumberFormat('id-ID', {
                            style: 'currency',
                            currency: 'IDR'
                        }).format(data);
                    }
                },

                {
                 data: 'total_donasi',
                 name: 'total_donasi',
                 render: function(data, type, row) {
                        // Konversi ke format rupiah
                        return new Intl.NumberFormat('id-ID', {
                            style: 'currency',
                            currency: 'IDR'
                        }).format(data);
                    }
             },

                {
                    data: 'akhir_waktu',
                    name: 'akhir_waktu',
                    render: function(data) {
                        const options = { year: 'numeric', month: 'long', day: 'numeric' };
                        const formattedDate = new Date(data).toLocaleDateString('id-ID', options);
                        return formattedDate;
                    }
                },

                { data: 'status', name: 'status' },
                { data: 'action', name: 'action', orderable: false, searchable: false },

            ]
        });
    });
</script>
@endsection
