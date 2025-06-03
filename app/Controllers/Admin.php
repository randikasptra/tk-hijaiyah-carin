<?php

namespace App\Controllers;

use App\Models\UserModel;

class Admin extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();

        $jumlahSiswa = $userModel->where('role', 'siswa')->countAllResults(); // hitung siswa

        return view('admin/dashboard', [
            'jumlahSiswa' => $jumlahSiswa,
        ]);
    }
}
