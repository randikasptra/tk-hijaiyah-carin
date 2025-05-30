<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class HurufSeeder extends Seeder
{

    public function run()
    {

        $this->db->table('huruf_hijaiyah')->truncate();
        $data = [
            ['nama' => 'Alif', 'gambar' => 'assets/img/1.Alif.png'],
            ['nama' => 'Ba', 'gambar' => 'assets/img/2.Ba.png'],
            ['nama' => 'Ta', 'gambar' => 'assets/img/3.Ta.png'],
            ['nama' => 'Tsa', 'gambar' => 'assets/img/4.Tsa.png'],
            ['nama' => 'Jim', 'gambar' => 'assets/img/5.Jim.png'],
            ['nama' => 'Ha', 'gambar' => 'assets/img/6.Ha.png'],
            ['nama' => 'Kho', 'gambar' => 'assets/img/7.Kha.png'],
            ['nama' => 'Dal', 'gambar' => 'assets/img/8.Dal.png'],
            ['nama' => 'Dzal', 'gambar' => 'assets/img/9.Dzal.png'],
            ['nama' => 'Ra', 'gambar' => 'assets/img/10.Ro.png'],
            ['nama' => 'Zai', 'gambar' => 'assets/img/11.Zai.png'],
            ['nama' => 'Sin', 'gambar' => 'assets/img/12.Sin.png'],
            ['nama' => 'Syin', 'gambar' => 'assets/img/13.Syin.png'],
            ['nama' => 'Shod', 'gambar' => 'assets/img/14.Shod.png'],
            ['nama' => 'Dhod', 'gambar' => 'assets/img/15.Dhod.png'],
            ['nama' => 'Tho', 'gambar' => 'assets/img/16.Tho.png'],
            ['nama' => 'Zho', 'gambar' => 'assets/img/17.Dzho.png'],
            ['nama' => 'Ain', 'gambar' => 'assets/img/18.Ain.png'],
            ['nama' => 'Ghain', 'gambar' => 'assets/img/19.Ghoin.png'],
            ['nama' => 'Fa', 'gambar' => 'assets/img/20.Fa.png'],
            ['nama' => 'Qof', 'gambar' => 'assets/img/21.Qof.png'],
            ['nama' => 'Kaf', 'gambar' => 'assets/img/22.Kaf.png'],
            ['nama' => 'Lam', 'gambar' => 'assets/img/23.Lam.png'],
            ['nama' => 'Mim', 'gambar' => 'assets/img/24.Mim.png'],
            ['nama' => 'Nun', 'gambar' => 'assets/img/25.Nun.png'],
            ['nama' => 'Wawu', 'gambar' => 'assets/img/26.Wau.png'],
            ['nama' => 'Hamzah', 'gambar' => 'assets/img/27.Hamzah.png'],
            ['nama' => 'Ya', 'gambar' => 'assets/img/28.Ya.png'],
        ];

        foreach ($data as $index => $item) {
            $this->db->table('huruf_hijaiyah')->insert($item);
        }
        echo count($data) . " data berhasil dimasukkan.\n";
    }
}
