<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepages()
    {
        return view('home.homepages', [
            'title' => 'homepages'
        ]);
    }
    public function home()
    {
        return view('home.home', [
            'title' => 'home'
        ]);
    }
}
