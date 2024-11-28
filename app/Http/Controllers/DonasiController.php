<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use App\Models\Donatur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class DonasiController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            // Gunakan query builder untuk menggabungkan data donasi dengan total donasi
            $donasi = Donasi::leftJoin('donatur', function($join) {
                $join->on('donasi.id_donasi', '=', 'donatur.id_donasi')
                     ->where('donatur.is_paid', true);
            })
            ->select(
                'donasi.*',
                DB::raw('SUM(donatur.nominal_donasi) as total_donasi')
            )
            ->groupBy(
                'donasi.id_donasi',
                'donasi.nama_donasi',
                'donasi.deskripsi',
                'donasi.jumlah_donasi',
                'donasi.akhir_waktu',
                'donasi.image',
                'donasi.status',
                'donasi.created_at',
                'donasi.updated_at'
            )
            ->orderBy('donasi.created_at', 'desc')
            ->get();

            return DataTables::of($donasi)
                ->addColumn('totalDonasi', function ($d) {
                    // Format total donasi dengan titik sebagai pemisah ribuan
                    return 'Rp ' . number_format($d->total_donasi ?? 0, 0, ',', '.');
                })
                ->addColumn('progress', function ($d) {
                    // Hitung persentase donasi
                    $jumlahDonasi = $d->jumlah_donasi ?? 0;
                    $totalTerkumpul = $d->total_donasi ?? 0;

                    $persentase = $jumlahDonasi > 0
                        ? number_format(($totalTerkumpul / $jumlahDonasi) * 100, 2, ',', '.')
                        : 0;

                    // Format total terkumpul dalam Rupiah
                    $totalTerkumpulRp = 'Rp ' . number_format($totalTerkumpul, 2, ',', '.');

                    return "
                        <div class='d-flex flex-column'>
                            <div class='progress mb-2'>
                                <div class='progress-bar' role='progressbar' style='width: {$persentase}%' aria-valuenow='{$persentase}' aria-valuemin='0' aria-valuemax='100'>
                                    {$persentase}%
                                </div>
                            </div>
                            <small class='text-muted'>{$totalTerkumpulRp} dari Rp " . number_format($jumlahDonasi, 2, ',', '.') . "</small>
                        </div>
                    ";
                })
                ->addColumn('status', function ($d) {
                    return $d->status
                        ? '<span class="badge bg-success text-white">Aktif</span>'
                        : '<span class="badge bg-secondary text-white">Non-Aktif</span>';
                })
                ->addColumn('action', function ($d) {
                    return view('admin.donasi.partials.action', compact('d'))->render();
                })
                ->rawColumns(['action', 'status', 'progress'])
                ->make(true);
        }

        return view('admin.donasi.index_donasi');
    }



    public function create(){
        return view('admin.donasi.create_donasi');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([

                'nama_donasi' => 'required|string',
                'jumlah_donasi' => 'nullable|numeric',
                'akhir_waktu' => 'nullable|date',
                'deskripsi' => 'nullable|string',
                'image' => 'nullable|file|mimes:jpg,jpeg,png,bmp|max:10240',
            ]);

            $data = $request->except('image');
            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('donasi', 'public');
                $data['image'] = basename($path);
            }

            Donasi::create($data);

            return redirect()->back()->with('success', 'Donasi telah dibuat');
        } catch (\Throwable $th) {

            return redirect()->back()->with('error', $th->getMessage());
        }
    }


    public function edit($id){
        $donasi = Donasi::findOrFail($id);
        return view('admin.donasi.edit_donasi', ['donasi' => $donasi]);
    }

    public function update(Request $request, $id)
    {
        // Cari donasi berdasarkan ID
        $donasi = Donasi::findOrFail($id);

        // Validasi input dari user
        $request->validate([
            'nama_donasi' => 'required|string',
            'jumlah_donasi' => 'nullable|numeric',
            'akhir_waktu' => 'nullable|date',
            'deskripsi' => 'nullable|string',
            'image' => 'nullable|file|mimes:jpg,jpeg,png,bmp|max:10240', // Pastikan tipe file yang diterima valid
            'status' => 'sometimes|boolean'
        ]);


        $data = $request->except('image');
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('donasi', 'public');
            $data['image'] = basename($path);
        }


        $donasi->update($data);

        return redirect()->back()->with('success', 'Sukses update donasi');
    }


    public function destroy($id){

        $donasi = Donasi::findOrFail($id);
        $donasi->delete();
        return redirect()->back()->with('success', 'Donasi telah dihapus');
    }


}
