<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $req)
    {
        if (Auth::attempt([
            'username' => $req->username,
            'password' => $req->password
        ])) {
            //di sini jika username dan password sesuai
            return redirect('/beranda');
        } else {
            //di sini jika username dan password tidak sesuai
            return back();
        }
    }
}
