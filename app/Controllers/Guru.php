<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Guru extends BaseController
{
    public function index()
    {
        $session = session();

        // Cek apakah sudah login dan role-nya guru
        if (!$session->get('logged_in') || $session->get('user_role') !== 'guru') {
            return redirect()->to('/login');
        }

        // Ambil user_id dari session
        $userId = $session->get('user_id');

        // Ambil data user dari database
        $userModel = new UserModel();
        $user = $userModel->find($userId);

        if (!$user) {
            return redirect()->to('/login')->with('error', 'Data user tidak ditemukan.');
        }

        // Kirim data user ke view
        $data = [
            'user_name' => $user['name'],
            'user_email' => $user['email'],
            'school_name' => 'TK ABC' // kamu bisa ambil dari tempat lain jika tersedia
        ];

        return view('guru/dashboard', $data);
    }

    public function updateProfile()
    {
        $session = session();
        if (!$session->get('logged_in') || $session->get('user_role') !== 'guru') {
            return redirect()->to('/login');
        }

        $userId = $session->get('user_id');
        $userModel = new \App\Models\UserModel();
        $user = $userModel->find($userId);

        if (!$user) {
            return redirect()->back()->with('error', 'User tidak ditemukan.');
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
        ];

        $newPassword = $this->request->getPost('password');
        if (!empty($newPassword)) {
            $data['password'] = password_hash($newPassword, PASSWORD_DEFAULT);
        }

        $userModel->update($userId, $data);

        return redirect()->to('guru/dashboard')->with('success', 'Profil berhasil diperbarui.');
    }

}
