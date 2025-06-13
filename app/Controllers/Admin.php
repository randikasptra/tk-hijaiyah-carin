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

        $userModel->insert($data);

        return redirect()->to('/admin/user')->with('success', 'User berhasil ditambahkan');
    }

    public function updateUser($id)
    {
        $userModel = new \App\Models\UserModel();

        // Validasi form (opsional tapi disarankan)
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'role' => 'required|in_list[admin,guru,siswa]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $validation->getErrors());
        }

        // Data yang akan di-update
        $data = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'role' => $this->request->getPost('role'),
        ];

        $userModel->update($id, $data);

        return redirect()->to(base_url('admin/user'))
            ->with('success', 'Data user berhasil diperbarui.');
    }

    public function hapusUser($id)
    {
        $userModel = new UserModel();
        $userModel->delete($id);

        return redirect()->to('/admin/user')->with('success', 'User berhasil dihapus');
    }
}
