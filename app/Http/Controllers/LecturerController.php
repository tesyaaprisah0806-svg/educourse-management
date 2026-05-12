<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LecturerController extends Controller
{
    public function index()
    {
        $lecturers = [
            ['nidn' => '0011018501', 'name' => 'Dr. Eng. Ir. Zulkifli, S.T., M.T.', 'expertise' => 'Web Development'],
            ['nidn' => '0011018502', 'name' => 'Siti Aminah, S.Kom., M.T.I.', 'expertise' => 'Database System'],
            ['nidn' => '0011018503', 'name' => 'Budi Santoso, M.Kom.', 'expertise' => 'UI/UX Design'],
            ['nidn' => '0011018504', 'name' => 'Rina Wijaya, S.T., M.Cs.', 'expertise' => 'Cyber Security'],
            ['nidn' => '0011018505', 'name' => 'Agus Setiawan, M.T.', 'expertise' => 'Mobile Programming'],
            ['nidn' => '0011018506', 'name' => 'Hendra Putra, S.Kom., M.T.I.', 'expertise' => 'Data Science'],
            ['nidn' => '0011018507', 'name' => 'Dewi Lestari, M.Kom.', 'expertise' => 'Artificial Intelligence'],
            ['nidn' => '0011018508', 'name' => 'Fajar Ramadhan, S.T., M.T.', 'expertise' => 'Cloud Computing'],
            ['nidn' => '0011018509', 'name' => 'Ani Maryani, M.Cs.', 'expertise' => 'Software Engineering'],
            ['nidn' => '0011018510', 'name' => 'Taufik Hidayat, S.T., M.Kom.', 'expertise' => 'Computer Network'],
        ];

        return view('lecturers.index', compact('lecturers'));
    }
}