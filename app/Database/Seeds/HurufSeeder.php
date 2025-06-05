<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class HurufSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['nama' => 'Alif', 'gambar' => 'assets/img/1.Alif.png', 'suara' => 'assets/suara/1.Alif.mp3'],
            ['nama' => 'Ba', 'gambar' => 'assets/img/2.Ba.png', 'suara' => 'assets/suara/2.Ba.mp3'],
            ['nama' => 'Ta', 'gambar' => 'assets/img/3.Ta.png', 'suara' => 'assets/suara/3.Ta.mp3'],
            ['nama' => 'Tsa', 'gambar' => 'assets/img/4.Tsa.png', 'suara' => 'assets/suara/4.Tsa.mp3'],
            ['nama' => 'Jim', 'gambar' => 'assets/img/5.Jim.png', 'suara' => 'assets/suara/5.Jim.mp3'],
            ['nama' => 'Kha', 'gambar' => 'assets/img/6.Ha.png', 'suara' => 'assets/suara/6.Kha.mp3'],
            ['nama' => 'Kho', 'gambar' => 'assets/img/7.Kha.png', 'suara' => 'assets/suara/7.Kho.mp3'],
            ['nama' => 'Dal', 'gambar' => 'assets/img/8.Dal.png', 'suara' => 'assets/suara/8.Dal.mp3'],
            ['nama' => 'Dzal', 'gambar' => 'assets/img/9.Dzal.png', 'suara' => 'assets/suara/9.Dzal.mp3'],
            ['nama' => 'Ro', 'gambar' => 'assets/img/10.Ro.png', 'suara' => 'assets/suara/10.Ro.mp3'],
            ['nama' => 'Zai', 'gambar' => 'assets/img/11.Zai.png', 'suara' => 'assets/suara/11.Dza.mp3'],
            ['nama' => 'Sin', 'gambar' => 'assets/img/12.Sin.png', 'suara' => 'assets/suara/12.Sin.mp3'],
            ['nama' => 'Syin', 'gambar' => 'assets/img/13.Syin.png', 'suara' => 'assets/suara/13.Syin.mp3'],
            ['nama' => 'Shod', 'gambar' => 'assets/img/14.Shod.png', 'suara' => 'assets/suara/14.Shod.mp3'],
            ['nama' => 'Dhod', 'gambar' => 'assets/img/15.Dhod.png', 'suara' => 'assets/suara/17.Dzho.mp3'],
            ['nama' => 'Tho', 'gambar' => 'assets/img/16.Tho.png', 'suara' => 'assets/suara/16.Tho.mp3'],
            ['nama' => 'Dzho', 'gambar' => 'assets/img/17.Dzho.png', 'suara' => 'assets/suara/17.Dzho.mp3'],
            ['nama' => 'Ain', 'gambar' => 'assets/img/18.Ain.png', 'suara' => 'assets/suara/18.Ain.mp3'],
            ['nama' => 'Ghoin', 'gambar' => 'assets/img/19.Ghoin.png', 'suara' => 'assets/suara/19.Ghain.mp3'],
            ['nama' => 'Fa', 'gambar' => 'assets/img/20.Fa.png', 'suara' => 'assets/suara/20.Fa.mp3'],
            ['nama' => 'Qof', 'gambar' => 'assets/img/21.Qof.png', 'suara' => 'assets/suara/21.Qof.mp3'],
            ['nama' => 'Kaf', 'gambar' => 'assets/img/22.Kaf.png', 'suara' => 'assets/suara/22.Kaf.mp3'],
            ['nama' => 'Lam', 'gambar' => 'assets/img/23.Lam.png', 'suara' => 'assets/suara/23.Lam.mp3'],
            ['nama' => 'Mim', 'gambar' => 'assets/img/24.Mim.png', 'suara' => 'assets/suara/24.Mim.mp3'],
            ['nama' => 'Nun', 'gambar' => 'assets/img/25.Nun.png', 'suara' => 'assets/suara/25.Nun.mp3'],
            ['nama' => 'Wau', 'gambar' => 'assets/img/26.Wau.png', 'suara' => 'assets/suara/26.Wawu.mp3'],
            ['nama' => 'Hamzah', 'gambar' => 'assets/img/27.Hamzah.png', 'suara' => 'assets/suara/27.Hamzah.mp3'],
            ['nama' => 'Ya', 'gambar' => 'assets/img/28.Ya.png', 'suara' => 'assets/suara/29.Ya.mp3'],
        ];

        // Clear data lama dulu (opsional, buat development)
        $this->db->table('huruf_hijaiyah')->truncate();

        foreach ($data as $item) {
            $this->db->table('huruf_hijaiyah')->insert($item);
            echo "Inserted: {$item['nama']}\n";
        }
    }
}
