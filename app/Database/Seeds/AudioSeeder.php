<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AudioSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama' => 'backsound',
            'file' => 'sound/Backsoundd.mp3'
        ];

        $this->db->table('audio')->insert($data);
    }
}
