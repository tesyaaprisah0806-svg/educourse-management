<?php

namespace App\Http\Controllers; // Pastikan baris ini ada dan benar

use Illuminate\Http\Request;

class ProfileController extends Controller // Nama class harus sama dengan nama file
{
    public function index()
    {
        $profile = [
            'nama' => 'Nama Kamu',
            'nim' => 'NPM Kamu',
            'jurusan' => 'Manajemen Informatika',
        ];
        return view('profile.index', compact('profile'));
    }
}