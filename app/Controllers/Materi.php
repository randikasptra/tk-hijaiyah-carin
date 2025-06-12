<?php

// app/Controllers/Materi.php

namespace App\Controllers;

use App\Models\HurufModel;

class Materi extends BaseController
{
    public function index()
    {
        return view('materi/dashboard', [
            'pageTitle' => 'Dashboard Materi',
            'backsound' => 'Backsoundd.mp3'
        ]);
    }

    public function mengenal()
    {
        $hurufModel = new HurufModel();
        return view('materi/mengenal', [
            'huruf' => $hurufModel->findAll(),
            'pageTitle' => 'Mengenal Huruf Hijaiyah',
            'backsound' => 'Backsoundd.mp3'
        ]);
    }

    public function menghafal()
    {
        return view('materi/menghafal', [
            'pageTitle' => 'Menghafal Harakat',
            'backsound' => 'Backsoundd.mp3'
        ]);
    }
    public function home()
    {
        return view('materi/dashboard', [
            'pageTitle' => 'Beranda Belajar',
            'backsound' => 'Backsoundd.mp3'
        ]);
    }

    public function mengenal_partials()
    {
        $hurufModel = new HurufModel();
        $data = [
            'huruf' => $hurufModel->findAll(),
            'pageTitle' => 'Mengenal Huruf Hijaiyah',
            'backsound' => 'Backsoundd.mp3'
        ];

        // Jika AJAX (SPA), kirim konten parsial saja
        if ($this->request->isAJAX()) {
            return view('materi/partials/mengenal_partials', $data);
        }

        // Jika bukan AJAX, kirim halaman lengkap (misalnya saat user buka langsung)
        return view('materi/mengenal', $data);
    }
    public function home2()
    {
        return view('materi/home', [
            'pageTitle' => 'Beranda Belajar',
            'backsound' => 'Backsoundd.mp3'
        ]);
    }

    public function game()
    {
        return view('materi/game', [
            'pageTitle' => 'Game Interaktif',
            'backsound' => 'Backsoundd.mp3'
        ]);
    }
    public function harakat()
    {
        return view('materi/harakat_hijaiyah', [
            'pageTitle' => 'Game Interaktif',
            'backsound' => 'Backsoundd.mp3'

        ]);
    }
}
