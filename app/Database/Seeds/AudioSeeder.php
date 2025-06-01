<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AudioSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'backsound',
                'file' => 'sound/Backsoundd.mp3'
            ],
            [
                'nama' => 'backsound',
                'file' => 'sound/Mengenal.mp3'
            ],
            [
                'nama' => 'harakat',
                'file' => 'sound/MK_HIJAIYAH.mp3'
            ]
        ];

        // GANTI INI
        $this->db->table('audio')->insertBatch($data);
    }
}
