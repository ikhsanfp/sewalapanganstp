<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;

class PesanController extends Controller
{
    public function pesan()
    {
        return view('pesan.pesan', [
            'title' => 'pesan'
        ]);
    }
    public function tambah()
    {
        $time = Carbon::now();
        return view('pesan.tambah', [
            'title' => 'tambah',
            'time' => $time
        ]);
    }
    public function store(Request $request)
    {
        // return $request->all();
        $validatedData = $request->validate([
            'jenislap' => 'required',
            'date' => 'required',
            'time' => 'required',
            'durasi' => 'required',
        ]);

        Pesan::create($validatedData);
        dd('Selamat berhasil');
        // return redirect('/');
    }
}
