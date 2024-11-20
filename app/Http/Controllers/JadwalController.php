<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index(){
        $jadwal = Jadwal::all();
        return view('admin.jadwal.index_jadwal', ['jadwal' => $jadwal]);
    }

    public function create(){
        return view('admin.jadwal.create_jadwal');
    }

    public function edit($id){
        $jadwal = Jadwal::findOrFail($id);
        return view('admin.jadwal.edit_jadwal', ['jadwal' => $jadwal]);
    }
}
