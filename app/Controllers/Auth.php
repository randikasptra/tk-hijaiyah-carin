<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
 public function login()
{
    if (session()->get('logged_in')) {
        switch (session()->get('user_role')) {
            case 'admin':
                return redirect()->to('/admin');
            case 'guru':
                return redirect()->to('/guru');
            default:
                return redirect()->to('/');
        }
    }

    // Set header agar halaman tidak disimpan di cache
    $this->response->setHeader('Cache-Control', 'no-store, no-cache, must-revalidate');
    $this->response->setHeader('Pragma', 'no-cache');
    $this->response->setHeader('Expires', '0');

    return view('auth/login');
}




    public function doLogin()
    {
        $session = session();
        $userModel = new UserModel();

        $email = trim($this->request->getPost('email'));
        $password = $this->request->getPost('password');

        // Validasi sederhana
        if (empty($email) || empty($password)) {
            $session->setFlashdata('error', 'Email dan password wajib diisi.');
            return redirect()->to('/login')->withInput();
        }

        $user = $userModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Simpan data ke session
            $session->set([
                'user_id'    => $user['id'],
                'user_name'  => $user['name'],
                'user_email' => $user['email'],
                'user_role'  => $user['role'],
                'logged_in'  => true
            ]);

            // Redirect berdasarkan role yang valid (hanya admin & guru)
            switch ($user['role']) {
                case 'admin':
                    return redirect()->to('/admin');
                case 'guru':
                    return redirect()->to('/guru');
                default:
                    // Role tidak valid
                    $session->setFlashdata('error', 'Role tidak dikenali.');
                    session()->destroy();
                    return redirect()->to('/login');
            }
        } else {
            // Gagal login
            $session->setFlashdata('error', 'Email atau password salah');
            return redirect()->to('/login')->withInput();
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
