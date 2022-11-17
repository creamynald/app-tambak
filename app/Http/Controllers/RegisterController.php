<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.regis');
    }

    public function regis(Request $request){
        $verifikasi = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:3',
        ]);

        $verifikasi['password'] = bcrypt($verifikasi['password']);

        User::create($verifikasi);

        $request->session()->flash('success', 'Registrasi telah berhasil, silahkan login.');
        
        return redirect('/login');
    }
}
