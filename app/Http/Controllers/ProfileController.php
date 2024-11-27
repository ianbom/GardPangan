<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){

        $admin = Auth::user();
        return view('admin.profile.profile', ['admin' => $admin]);
    }

    public function update(Request $request){
        $admin = Auth::user();

        $request->validate([
            'name' => 'nullable',
            'email' => 'nullable|email',
            'password' => 'nullable|min:8|confirmed'
        ]);

        if ($request->password) {
            $admin->password = bcrypt($request->password);
        }

        if ($request->name) {
            $admin->name = $request->name;
        }

        if($request->email){
            $admin->email = $request->email;
        }

        $admin->save();

        return redirect()->back()->with('success', 'Sukses mengubah profile');

    }
}
