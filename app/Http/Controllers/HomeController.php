<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        
        $totalMahasiswa = 15;
        $totalDosen = 10;
        $totalMatkul = 8;

        return view('home', compact('totalMahasiswa', 'totalDosen', 'totalMatkul'));
    }
}