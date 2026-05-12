<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = [
            'nama' => 'Tesya Aprisah', 
            'nim'  => '25781024',          
            'kelas' => 'MI 2A',
            'skills' => [
                ['name' => 'Laravel', 'level' => 85, 'color' => 'bg-danger'],
                ['name' => 'PHP', 'level' => 80, 'color' => 'bg-primary'],
                ['name' => 'Bootstrap', 'level' => 90, 'color' => 'bg-info'],
                ['name' => 'JavaScript', 'level' => 75, 'color' => 'bg-warning'],
            ]
        ];
        return view('profile.index', compact('profile'));
    }
}