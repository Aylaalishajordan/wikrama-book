<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class RegisterController extends Controller
{
    public function index(){
        return view ('register.register');
    }
    public function storeRegister(Request $request)
    {
        $request->validate([
        'nama' => 'required',
        'email'=> 'required|email',
        'password'=> 'required',
        'alamat'=> 'required',
        ]);

        User::create([
            'nama'=>$request->nama,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'alamat'=>$request->alamat,
        ]);
        
        // $credentials ['password'] = bcrypt($credentials['password']);
        // User::create($credentials);
        


        return redirect('/login')->with('success', 'Registrasi berhasil, silahkan Login!');
    }
}
