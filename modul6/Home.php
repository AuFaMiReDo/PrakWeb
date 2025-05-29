<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Hardcoded data
        $data = [
            'title' => 'Beranda',
            'mahasiswa' => [
                ['id' => 1, 'nama' => 'John Doe', 'nim' => '123456'],
                ['id' => 2, 'nama' => 'Jane Smith', 'nim' => '654321'],
            ],
        ];

        return view('beranda', $data);
    }

    public function profil()
    {
        // Hardcoded profile data
        $data = [
            'title' => 'Profil',
            'nama' => 'Muhamamd Aufa Fitrianda',
            'nim' => '2310817210013',
            'jurusan' => 'Teknologi Informasi',
            'hobi' => 'Main Game',
            'skill' => 'Lupa',
            'informasi_lain' => 'Mahasiswa semester 4 yang aktif dalam organisasi kampus.',
    
        ];

        return view('profil', $data);
    }
}
