<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Relawan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
{
    $jadwal = Jadwal::orderBy('jadwal', 'asc')->get();

    foreach ($jadwal as $item) {
        if (Carbon::parse($item->jadwal)->lessThan(Carbon::now())) {
            $item->is_active = false;
            $item->save();
        }
        $item->koor = Relawan::where('id_jadwal', $item->id_jadwal)->where('is_block', false)->where('is_koor', true)->count();
        $item->relawan = Relawan::where('id_jadwal', $item->id_jadwal)->where('is_block', false)->where('is_koor', false)->count();
    }

    return view('admin.jadwal.index_jadwal', ['jadwal' => $jadwal]);
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

            Relawan::create([
                'id_jadwal' => $jadwal->id_jadwal,
                'nama_relawan' => $request->nama_relawan,
                'email' => $request->email,
                'no_telp' => $request->no_telp,
                'alamat' => $request->alamat,
                'is_koor' => $request->has('is_koor'),
                'is_block' => false,
            ]);
            return redirect()->back()->with('success', 'Relawan telah dibuat');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function indexRelawan($id){
        $jadwal = Jadwal::findOrFail($id);
        $relawan = Relawan::where('id_jadwal', $jadwal->id_jadwal)->get();
        return view('admin.jadwal.list_relawan', ['relawan' => $relawan, 'jadwal' => $jadwal]);

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
