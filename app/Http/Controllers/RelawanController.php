<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Relawan;
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
                'is_koor' => 'sometimes|boolean'
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
}
