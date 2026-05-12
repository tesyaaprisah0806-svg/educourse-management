public function index()
{
    $profile = [
        'nama' => 'Tesya Aprisah',
        'nim' => '25781024',
        'jurusan' => 'Manajemen Informatika', // Pastikan baris ini ada
    ];

    return view('profile.index', compact('profile'));
}