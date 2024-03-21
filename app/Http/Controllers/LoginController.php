<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'email' => ''
        ]);
    }
    public function store(Request $request)
    {
        $credentials = ([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/');
        } else {
            dd('Gagal bos');
        }
    }
}
