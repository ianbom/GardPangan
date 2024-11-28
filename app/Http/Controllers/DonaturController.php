<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use App\Models\Donatur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonaturController extends Controller
{
    public function homeDonatur()
{
    // Mendapatkan data donasi yang aktif
    $donasi = Donasi::where('status', true)->get();

    // Menghitung total donasi per id_donasi
    $totalDonasiPerDonasi = Donatur::where('is_paid', true)
        ->select('id_donasi', DB::raw('SUM(nominal_donasi) as total_donasi'))
        ->groupBy('id_donasi')
        ->pluck('total_donasi', 'id_donasi'); // Menggunakan pluck untuk menghasilkan array [id_donasi => total_donasi]

    return view('user.donasi_home', [
        'donasi' => $donasi,
        'totalDonasiPerDonasi' => $totalDonasiPerDonasi, // Mengirim data total donasi per donasi ke view
    ]);
}



    public function donaturStore(Request $request, $id){

        try {
            $donasi = Donasi::findOrFail($id);

            $request->validate([
                'id_donasi' => 'required',
                'nama' => 'nullable|string',
                'email' => 'nullable|email',
                'no_telp' => 'nullable|string',
                'pesan' => 'nullable|string',
                'nominal_donasi' => 'required|numeric|min:1',
            ]);

            Donatur::create([
                'id_donasi' => $donasi->id_donasi,
                'nama' => $request->nama,
                'email' => $request->email,
                'no_telp' => $request->no_telp,
                'pesan' => $request->pesan,
                'nominal_donasi' => $request->nominal_donasi,
                'is_paid' => true
            ]);


            return redirect()->back()->with('success', 'Donasi telah terkirim');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function donasiShow($id)
{
    $donasi = Donasi::findOrFail($id);
    $totalDonasi = Donatur::where('is_paid', true)
        ->where('id_donasi', $donasi->id_donasi)
        ->sum('nominal_donasi');

    return view('user.donasi_show', [
        'donasi' => $donasi,
        'totalDonasi' => $totalDonasi,
    ]);
}

public function indexDonatur(Request $request)
{
    if ($request->ajax()) {
        $donatur = Donatur::with('donasi')
            ->select('donatur.*')
            ->leftJoin('donasi', 'donatur.id_donasi', '=', 'donasi.id_donasi'); // Tambahkan join

        return datatables()->of($donatur)
            ->addColumn('nama_donasi', function ($d) {
                return $d->donasi ? $d->donasi->nama_donasi : '-';
            })
            ->filterColumn('nama_donasi', function($query, $keyword) {
                $query->whereHas('donasi', function($q) use ($keyword) {
                    $q->where('nama_donasi', 'like', "%{$keyword}%");
                });
            })
            ->make(true);
    }

    return view('admin.donatur.index_donatur');
}




}
