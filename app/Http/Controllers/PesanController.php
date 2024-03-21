<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('pesan.tambah', [
            'title' => 'tambah'
        ]);
    }
}
