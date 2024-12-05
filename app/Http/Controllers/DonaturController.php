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


    public function __construct()
        {
            \Midtrans\Config::$serverKey    = config('services.midtrans.serverKey');
            \Midtrans\Config::$isProduction = config('services.midtrans.isProduction');
            \Midtrans\Config::$isSanitized  = config('services.midtrans.isSanitized');
            \Midtrans\Config::$is3ds        = config('services.midtrans.is3ds');
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
                'nominal_donasi' => 'required',
            ]);

            $donatur = Donatur::create([
                'id_donasi' => $donasi->id_donasi,
                'code' => 'Donasi-' . mt_rand(100000, 999999),
                'nama' => $request->nama ?? 'Orang Baik',
                'email' => $request->email,
                'no_telp' => $request->no_telp,
                'pesan' => $request->pesan,
                'nominal_donasi' => $request->nominal_donasi,
                'is_paid' => false,
                'status' => 'pending'
            ]);

            $payload = [
                'transaction_details' => [
                    'order_id'     => $donatur->code,
                    'gross_amount' => $donatur->nominal_donasi,
                ],

                'customer_details' => [
                    'first_name' => $donatur->nama,
                    'email'      => $donatur->email,
                ],

                'item_details' => [
                    [
                        'id'            => $donatur->code,
                        'price'         => $donatur->nominal_donasi,
                        'quantity'      => 1,
                        'name'          => 'Donation to ' . config('app.name'),
                        'brand'         => 'Donation',
                        'category'      => 'Donation',
                        'merchant_name' => config('app.name'),
                    ],
                ],
            ];

            $snapToken = \Midtrans\Snap::getSnapToken($payload);
            $donatur->snap_token = $snapToken;
            $donatur->save();


            return response()->json([
                'status'     => 'success',
                'snap_token' => $snapToken,
            ]);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()]);
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
