<?php

namespace App\Controllers;

use App\Models\UserModel;

class Admin extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $jumlahAdmin = $userModel->where('role', 'admin')->countAllResults();
        $jumlahGuru = $userModel->where('role', 'guru')->countAllResults();

        return view('admin/dashboard', [
            'jumlahAdmin' => $jumlahAdmin,
            'jumlahGuru' => $jumlahGuru,
        ]);
    }

    public function dataUser()
    {
        $userModel = new UserModel();
        $users = $userModel->findAll();

        return view('admin/data_user', ['users' => $users]);
    }

    public function tambahUser()
    {
        return view('admin/tambah_user');
    }

    public function simpanUser()
    {
        $userModel = new UserModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role' => $this->request->getPost('role')
        ];

        try {
            $userModel->insert($data);
            return redirect()->to('/admin/user')->with('success', 'User berhasil ditambahkan');
        } catch (\CodeIgniter\Database\Exceptions\DatabaseException $e) {
            if (strpos($e->getMessage(), 'Duplicate entry') !== false) {
                return redirect()->back()->withInput()->with('error', 'Email sudah digunakan. Tidak bisa menambahkan user.');
            } else {
                throw $e;
            }
        }
    }

    public function editUser($id)
    {
        $userModel = new UserModel();
        $user = $userModel->find($id);

        if (!$user) {
            return redirect()->to('/admin/user')->with('error', 'User tidak ditemukan.');
        }

        return view('admin/edit_user', ['user' => $user]);
    }

    public function updateUser($id)
{
    $userModel = new UserModel();

    // Validation
    $validation = \Config\Services::validation();
    $validation->setRules([
        'name'  => 'required|min_length[3]',
        'email' => 'required|valid_email',
        'role'  => 'required|in_list[admin,guru,siswa]',
    ]);

    if (!$validation->withRequest($this->request)->run()) {
        return redirect()->back()
            ->withInput()
            ->with('error', implode('<br>', $validation->getErrors()));
    }

    // Ambil data dari form
    $data = [
        'name'  => $this->request->getPost('name'),
        'email' => $this->request->getPost('email'),
        'role'  => $this->request->getPost('role'),
    ];

    // Update password jika ada input baru
    $password = $this->request->getPost('password');
    if (!empty($password)) {
        $data['password'] = password_hash($password, PASSWORD_DEFAULT);
    }

    try {
        $userModel->update($id, $data);
        return redirect()->to('/admin/user')->with('success', 'User berhasil diperbarui.');
    } catch (\CodeIgniter\Database\Exceptions\DatabaseException $e) {
        return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan saat memperbarui user.');
    }
}


    public function hapusUser($id)
    {
        $userModel = new UserModel();
        $user = $userModel->find($id);

        if (!$user) {
            return redirect()->to('/admin/user')->with('error', 'User tidak ditemukan.');
        }

        $userModel->delete($id);

        return redirect()->to('/admin/user')->with('success', 'User berhasil dihapus');
    }

    public function detailUser($id)
    {
        $userModel = new UserModel();
        $user = $userModel->find($id);

        if (!$user) {
            return redirect()->to('/admin/user')->with('error', 'User tidak ditemukan.');
        }

        return view('admin/detail_user', ['user' => $user]);
    }
}
