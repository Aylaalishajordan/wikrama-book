<?php

namespace App\Http\Controllers;

use illuminate\support\facades\Auth;
use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public function index(){
        return view('login.login');
    }

    public function auth(Request $request){
        $login = $request-> validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attemph ($login)){
            $request->session()->regenerate();

            return redirect()->intended('index');
        }
        return back();

    }

    public function logout (Request $request){
        Auth::logout();
        request()-> session()-> invalidate();
        request()-> session()-> regenerateToken();
        return redirect ('/login');
    }
}
