<?php

namespace App\Controllers;

use App\Models\HurufModel;

class Game extends BaseController
{
    public function levelHuruf($index = 0)
    {
        $hurufModel = new HurufModel();
        $hurufList = $hurufModel->findAll();

        if (!isset($hurufList[$index])) {
            return redirect()->to('/siswa/game/selesai');
        }

        $huruf = $hurufList[$index];
        $pilihan = $this->generatePilihanHuruf($huruf['nama'], $hurufList);

        return view('siswa/game/tebak_huruf', [
            'huruf' => $huruf,
            'index' => $index,
            'pilihan' => $pilihan,
            'jawaban' => null,
            'status' => null
        ]);
    }

    public function checkLevelHuruf($index = 0)
    {
        $hurufModel = new HurufModel();
        $hurufList = $hurufModel->findAll();

        if (!isset($hurufList[$index])) {
            return redirect()->to('/siswa/game/selesai');
        }

        $huruf = $hurufList[$index];
        $jawaban = strtolower($this->request->getPost('jawaban'));
        $status = strtolower($huruf['nama']) === $jawaban ? 'benar' : 'salah';

        return view('siswa/game/tebak_huruf', [ // ✅ GANTI view ke tebak_huruf
            'huruf' => $huruf,
            'index' => $index,
            'pilihan' => $this->generatePilihanHuruf($huruf['nama'], $hurufList),
            'jawaban' => $jawaban,
            'status' => $status
        ]);
    }

    public function levelHarakat($huruf = 'ba')
    {
        $huruf = strtolower($huruf);
        $pilihan = [$huruf . 'a', $huruf . 'i', $huruf . 'u'];
        shuffle($pilihan);

        return view('siswa/game/tebak_harakat', [ // ✅ GANTI view ke tebak_harakat
            'huruf' => $huruf,
            'pilihan' => $pilihan,
            'jawaban' => null,
            'status' => null
        ]);
    }

    public function checkLevelHarakat()
    {
        $huruf = strtolower($this->request->getPost('huruf'));
        $jawaban = strtolower($this->request->getPost('jawaban'));
        $benar = $huruf . 'a';

        $status = $jawaban === $benar ? 'benar' : 'salah';

        $pilihan = [$huruf . 'a', $huruf . 'i', $huruf . 'u'];
        shuffle($pilihan);

        return view('siswa/game/tebak_harakat', [ // ✅ GANTI view ke tebak_harakat
            'huruf' => $huruf,
            'pilihan' => $pilihan,
            'jawaban' => $jawaban,
            'status' => $status
        ]);
    }

    private function generatePilihanHuruf($benar, $list)
    {
        $opsi = [$benar];
        while (count($opsi) < 3) {
            $acak = $list[array_rand($list)]['nama'];
            if (!in_array($acak, $opsi)) {
                $opsi[] = $acak;
            }
        }
        shuffle($opsi);
        return $opsi;
    }

    public function selesai()
    {
        return view('siswa/game/selesai');
    }
}
