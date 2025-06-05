<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Guru extends Controller
{
    public function index()
    {
        $session = session();

        // Cek apakah sudah login dan role-nya guru
        if (!$session->get('logged_in') || $session->get('user_role') !== 'guru') {
            return redirect()->to('/login');
        }

        // Kirim data user ke view
        $data = [
            'user_name' => $session->get('user_name')
        ];

        return view('guru/dashboard', $data);
    }
}
