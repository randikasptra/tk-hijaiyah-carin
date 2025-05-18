<?php

namespace App\Controllers;

use App\Models\HurufModel; // ✅ Tambahin ini bro

class Siswa extends BaseController
{
    public function index()
    {
        return view('siswa/home');
    }

    public function mengenal()
    {
        $hurufModel = new HurufModel();
        $data['huruf'] = $hurufModel->findAll();

        return view('siswa/mengenal', $data);
    }
}
