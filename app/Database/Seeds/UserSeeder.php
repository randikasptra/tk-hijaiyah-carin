<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'     => 'Admin One',
                'email'    => 'admin@example.com',
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
                'role'     => 'admin',
            ],
            [
                'name'     => 'Guru One',
                'email'    => 'guru@example.com',
                'password' => password_hash('guru123', PASSWORD_DEFAULT),
                'role'     => 'guru',
            ],
            [
                'name'     => 'Siswa One',
                'email'    => 'siswa@example.com',
                'password' => password_hash('siswa123', PASSWORD_DEFAULT),
                'role'     => 'siswa',
            ],
        ];

        $this->db->table('users')->insertBatch($data);
    }
}
