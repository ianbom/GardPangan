<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Relawan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class JadwalController extends Controller
{
    public function index()
    {
        return view('admin.jadwal.index_jadwal');
    }

    public function getData()
    {
        $jadwal = Jadwal::orderBy('jadwal', 'asc')->get();

        foreach ($jadwal as $item) {
            if (Carbon::parse($item->jadwal)->lessThan(Carbon::now())) {
                $item->is_active = false;
                $item->save();
            }
            $item->koor = Relawan::where('id_jadwal', $item->id_jadwal)
                ->where('is_block', false)
                ->where('is_koor', true)
                ->count();
            $item->relawan = Relawan::where('id_jadwal', $item->id_jadwal)
                ->where('is_block', false)
                ->where('is_koor', false)
                ->count();
        }

        return DataTables::of($jadwal)
        ->editColumn('jadwal', function ($item) {
            return Carbon::parse($item->jadwal)
                ->translatedFormat('l, d M Y, h:i A'); // Format Hari, Tanggal, Waktu (AM/PM)
        })
            ->addColumn('status', function ($item) {
                return $item->is_active
                    ? '<span class="badge bg-success text-white">Aktif</span>'
                    : '<span class="badge bg-secondary text-white">Non-Aktif</span>';
            })
            ->addColumn('action', function ($item) {
                return view('admin.jadwal.partials.action', ['item' => $item])->render();
            })
            ->rawColumns(['status', 'action'])
            ->make(true);
    }



    public function create(){
        return view('admin.jadwal.create_jadwal');
    }

    public function store(Request $request){
        try {
            $request->validate([
                'jadwal' => 'required|',
                'kuota_koordinator' => 'required|integer',
                'kuota_relawan' => 'required|integer',

            ]);

            Jadwal::create([
                'jadwal' => $request->jadwal,
                'kuota_koordinator' => $request->kuota_koordinator,
                'kuota_relawan' => $request->kuota_relawan,
                'is_active' => true,
            ]);

            return redirect()->back()->with('success', 'Jadwal telah dibuat');

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function edit($id){
        $jadwal = Jadwal::findOrFail($id);
        return view('admin.jadwal.edit_jadwal', ['jadwal' => $jadwal]);
    }

    public function update(Request $request, $id){

        $jadwal = Jadwal::findOrFail($id);

        try {
            $request->validate([
                'jadwal' => 'required|',
                'kuota_koordinator' => 'required|integer',
                'kuota_relawan' => 'required|integer',
                'is_active' => 'sometimes|boolean',
            ]);

            $jadwal->update([
                'jadwal' => $request->jadwal,
                'kuota_koordinator' => $request->kuota_koordinator,
                'kuota_relawan' => $request->kuota_relawan,
                'is_active' => $request->has('is_active'),
            ]);
            return redirect()->back()->with('success', 'Jadwal telah dibuat');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function delete($id){
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->delete();
        return redirect()->back()->with('success', 'Jadwal telah dihapus');
    }

    public function createRelawan($id){
        $jadwal = Jadwal::findOrFail($id);
        return view('admin.jadwal.add_relawan', ['jadwal' => $jadwal]);
    }

    public function storeRelawan(Request $request, $id){

        try {
            $jadwal = Jadwal::findOrFail($id);

            $request->validate([
               'id_jadwal' => 'required',
               'nama_relawan' => 'required',
               'email' => 'required|email',
               'no_telp' => 'required',
               'alamat' => 'required',
               'is_koor' => 'boolean'
            ]);

            $relawan = Relawan::create([
                'id_jadwal' => $jadwal->id_jadwal,
                'nama_relawan' => $request->nama_relawan,
                'email' => $request->email,
                'no_telp' => $request->no_telp,
                'alamat' => $request->alamat,
                'is_koor' => $request->has('is_koor') ? $request->is_koor : false,
                'is_block' => false,
            ]);

            if(Auth::user()){
                return redirect()->back()->with('success', 'Berhasil menambahkan relawan');
            }else{
                return response()->json(['success' => true]);
             }



        } catch (\Throwable $e) {
            return response()->json(['success' => false, 'message' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);

        }
    }

    public function indexRelawan($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $relawan = Relawan::where('id_jadwal', $jadwal->id_jadwal)->get();

        if (request()->ajax()) {
            return DataTables::of($relawan)
                ->addColumn('status', function ($row) {
                    return $row->is_koor
                        ? '<span class="badge bg-primary text-white">Koordinator</span>'
                        : '<span class="badge bg-success text-white">Relawan</span>';
                })
                ->addColumn('block', function ($row) {
                    return $row->is_block
                        ? '<span class="badge bg-danger text-white">Block</span>'
                        : '<span class="badge bg-success text-white">Aman</span>';
                })
                ->addColumn('action', function ($r) {
                    return view('admin.relawan.partials.action', compact('r'))->render();
                })
                ->rawColumns(['status', 'block', 'action'])
                ->make(true);
        }

        return view('admin.jadwal.list_relawan', compact('jadwal', 'relawan'));
    }

    public function blockRelawan($id)
{
    $relawan = Relawan::findOrFail($id);

    $relawanSama = Relawan::where('no_telp', $relawan->no_telp)->get();

    if($relawan->is_block == false){
        foreach ($relawanSama as $r) {
            $r->is_block = true;
            $r->save();
        }
    } else{
        $relawan->is_block = false;
        $relawan->save();
    }

    return redirect()->back()->with('success', 'Status Blokir Relawan Telah Diubah');
}

}
