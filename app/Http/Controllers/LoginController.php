<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        // $credentials = ([
        //     'email' => $request->input('email'),
        //     'password' => $request->input('password')
        // ]);

        if (Auth::attempt($credentials)) {
            return redirect('/home');
        } else {
            dd('Gagal bos');
        }
        // return back()->with('loginError','Login Failed!' )

    }
}
