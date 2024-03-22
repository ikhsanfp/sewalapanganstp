<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }
    public function store(Request $request)
    {
        // return $request->all();
        $validatedData = $request->validate([
            'namapemain' => 'required',
            'email' => 'required|email',
            'nohp' => 'required|min:10|max:255',
            'password' => 'required|min:5|max:255',
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);

        $validatedData['pasword'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        // $request->session()->flash('succes', 'Registration succesfull! Please login');

        return redirect('/login');
    }
}
