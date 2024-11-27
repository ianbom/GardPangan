<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Relawan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RelawanController extends Controller
{
    public function index(){

        return view('admin.relawan.index_relawan');
    }

    public function getRelawanData()
    {
        $relawan = Relawan::with('jadwal')->select('relawan.*');

        return datatables($relawan)
            ->addColumn('jadwal', function ($r) {
                return \Carbon\Carbon::parse($r->jadwal->jadwal)->translatedFormat('l, d M Y, H:i');
            })
            ->addColumn('koordinator', function ($r) {
                // Return the raw boolean value for sorting
                return $r->is_koor
                    ? '<span class="badge bg-primary">Koor</span>'
                    : '<span class="badge bg-success">Relawan</span>';
            })
            ->addColumn('status', function ($r) {
                // Return the raw boolean value for sorting
                return $r->is_block
                    ? '<span class="badge bg-danger">Block</span>'
                    : '<span class="badge bg-success">Aman</span>';
            })
            ->addColumn('action', function ($r) {
                return view('admin.relawan.partials.action', compact('r'))->render();
            })
            ->rawColumns(['koordinator', 'status', 'action'])
            ->make(true);
    }




    public function create(){
        $jadwal = Jadwal::where('is_active', true)->get();

        return view('admin.relawan.create_relawan', ['jadwal' => $jadwal]);
    }

    public function store(Request $request){

        try {
            $request->validate([
                'id_jadwal' => 'required',
                'nama_relawan' => 'required',
                'email' => 'required|email',
                'no_telp' => 'required',
                'alamat' => 'required',
                'is_koor' => 'boolean'
            ]);

            Relawan::create($request->all());

            return redirect()->back()->with('success', 'Relawan telah dibuat');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }

    }

    public function delete($id){
        $relawan = Relawan::findOrFail($id);
        $relawan->delete();

        return redirect()->back()->with('success', 'Relawan telah dihapus');
    }


    public function homeUser(){
        $jadwal = Jadwal::where('is_active', true)->get();
        $jadwalTerbaru = Jadwal::orderBy('jadwal', 'asc')->where('is_active', true)->first();
        $jadwalTerlama = Jadwal::orderBy('jadwal', 'desc')->where('is_active', true)->first();

        foreach ($jadwal as $item) {
            if (Carbon::parse($item->jadwal)->lessThan(Carbon::now())) {
                $item->is_active = false;
                $item->save();
            }
            $item->koor = Relawan::where('id_jadwal', $item->id_jadwal)->where('is_block', false)->where('is_koor', true)->count();
            $item->relawan = Relawan::where('id_jadwal', $item->id_jadwal)->where('is_block', false)->where('is_koor', false)->count();
        }
        return view('user.relawan_home', ['jadwal' => $jadwal, 'jadwalTerbaru' => $jadwalTerbaru, 'jadwalTerlama' => $jadwalTerlama]);
    }
}
