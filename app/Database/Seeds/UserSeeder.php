<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'     => 'Carina Nur Firdaus',
                'email'    => 'carina@gmail.com',
                'password' => password_hash('carin123', PASSWORD_DEFAULT),
                'role'     => 'admin',
            ],
            // [
            //     'name'     => 'Guru One',
            //     'email'    => 'guru@example.com',
            //     'password' => password_hash('guru123', PASSWORD_DEFAULT),
            //     'role'     => 'guru',
            // ],
            
        ];

        $this->db->table('users')->insertBatch($data);
    }
}
