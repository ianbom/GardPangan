<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Relawan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RelawanController extends Controller
{
    public function index(){
        $relawan = Relawan::all();
        return view('admin.relawan.index_relawan', ['relawan' => $relawan]);
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

        foreach ($jadwal as $item) {
            if (Carbon::parse($item->jadwal)->lessThan(Carbon::now())) {
                $item->is_active = false;
                $item->save();
            }
            $item->koor = Relawan::where('id_jadwal', $item->id_jadwal)->where('is_block', false)->where('is_koor', true)->count();
            $item->relawan = Relawan::where('id_jadwal', $item->id_jadwal)->where('is_block', false)->where('is_koor', false)->count();
        }
        return view('user.relawan_home', ['jadwal' => $jadwal]);
    }
}
