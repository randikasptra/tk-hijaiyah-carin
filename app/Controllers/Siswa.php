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
        return view('siswa/home', [
            'pageTitle' => 'Beranda Belajar',
            'backsound' => 'Backsoundd.mp3'
        ]);
    }

    // Halaman menghafal harakat
    public function menghafal()
    {
        return view('siswa/menghafal', [
            'pageTitle' => 'Menghafal Harakat',
            'backsound' => 'Backsoundd.mp3'
        ]);
    }

    // Halaman game interaktif
    public function game()
    {
        return view('siswa/game', [
            'pageTitle' => 'Game Hijaiyah',
            'backsound' => 'Backsoundd.mp3'
        ]);
    }

    // Halaman mengenal huruf hijaiyah
    public function mengenal()
    {
        $hurufModel = new HurufModel();
        $data = [
            'huruf' => $hurufModel->findAll(),
            'pageTitle' => 'Mengenal Huruf Hijaiyah',
            'backsound' => 'Backsoundd.mp3'
        ];

        return view('siswa/mengenal', $data);
    }
}
