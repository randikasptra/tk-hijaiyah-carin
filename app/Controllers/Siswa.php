<?php

namespace App\Controllers;

use App\Models\HurufModel;

class Siswa extends BaseController
{
    // Dashboard utama setelah login
    public function index()
    {
        return view('siswa/dashboard');
    }

    // Halaman awal belajar (home.php)
    public function home()
    {
        return view('siswa/home');
    }
    public function menghafal()
    {
        return view('siswa/menghafal');
    }

    // Halaman mengenal huruf hijaiyah
    public function mengenal()
    {
        $hurufModel = new HurufModel();
        $data['huruf'] = $hurufModel->findAll();

        return view('siswa/mengenal', $data);
    }
}
