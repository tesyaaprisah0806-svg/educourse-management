<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
    
        $students = [
            ['npm' => '22753001', 'name' => 'Aditya Nugroho', 'class' => 'MI 4A'],
            ['npm' => '22753002', 'name' => 'Bella Safira', 'class' => 'MI 4A'],
            ['npm' => '22753003', 'name' => 'Candra Wijaya', 'class' => 'MI 4B'],
            ['npm' => '22753004', 'name' => 'Dina Lestari', 'class' => 'MI 4B'],
            ['npm' => '22753005', 'name' => 'Eko Prasetyo', 'class' => 'MI 4A'],
            ['npm' => '22753006', 'name' => 'Fani Rahma', 'class' => 'MI 4C'],
            ['npm' => '22753007', 'name' => 'Gilang Ramadhan', 'class' => 'MI 4A'],
            ['npm' => '22753008', 'name' => 'Hana Pertiwi', 'class' => 'MI 4B'],
            ['npm' => '22753009', 'name' => 'Indra Kesuma', 'class' => 'MI 4C'],
            ['npm' => '22753010', 'name' => 'Joko Susilo', 'class' => 'MI 4A'],
            ['npm' => '22753011', 'name' => 'Kiki Amalia', 'class' => 'MI 4B'],
            ['npm' => '22753012', 'name' => 'Lutfi Hakim', 'class' => 'MI 4C'],
            ['npm' => '22753013', 'name' => 'Maya Sofa', 'class' => 'MI 4A'],
            ['npm' => '22753014', 'name' => 'Nanda Pratama', 'class' => 'MI 4B'],
            ['npm' => '22753015', 'name' => 'Oki Setiawan', 'class' => 'MI 4C'],
        ];

        return view('students.index', compact('students'));
    }
}