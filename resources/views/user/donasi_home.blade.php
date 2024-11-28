@extends('layouts.user')

@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">



<div class="container py-5">
    <h1 class="text-center mb-4">Daftar Donasi</h1>

    <div class="row">
        @foreach($donasi as $item)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->nama_donasi }}</h5>

                    <div class="form-group mb-3">
                        <img src="{{ asset('storage/donasi/' . $item->image) }}" alt="Current Image" width="200" class="img-thumbnail">
                    </div>

                    <p class="card-text"><strong>Target: </strong>Rp{{ number_format($item->jumlah_donasi, 0, ',', '.') }}</p>
                    <p class="card-text">
                        <strong>Total Donasi: </strong>
                        Rp {{ number_format($totalDonasiPerDonasi[$item->id_donasi] ?? 0, 0, ',', '.') }}
                    </p>
                    <p class="card-text"><strong>Akhir Waktu: </strong>{{ $item->akhir_waktu }}</p>
                    <a href="{{ route('donatur.show', $item->id_donasi) }}" class="btn btn-success btn-sm">
                        Donasi
                    </a>
                </div>
            </div>
        </div>


        @endforeach
    </div>
</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection

