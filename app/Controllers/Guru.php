<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Guru extends BaseController
{
   public function index()
{
    $session = session();

    if (!$session->get('logged_in') || $session->get('user_role') !== 'guru') {
        return redirect()->to('/login');
    }

    $userId = $session->get('user_id');
    $userModel = new \App\Models\UserModel();
    $user = $userModel->find($userId);

    if (!$user) {
        return redirect()->to('/login')->with('error', 'Data user tidak ditemukan.');
    }

    $data = [
        'user_name'   => $user['name'],
        'user_email'  => $user['email'],
        'school_name' => 'TK ABC',
        // Tambahkan baris ini agar flashdata sukses/error kebaca di layout
        'success'     => session()->getFlashdata('success'),
        'error'       => session()->getFlashdata('error'),
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

        if ($this->request->isAJAX()) {
    return $this->response->setJSON(['success' => true, 'message' => 'Profil berhasil diperbarui']);
}

return redirect()->to('guru/dashboard')->with('success', 'Profil berhasil diperbarui.');


    }

}
