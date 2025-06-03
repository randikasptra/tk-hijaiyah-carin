<?php

namespace App\Controllers;

use App\Models\HurufModel;

class Game extends BaseController
{
    // Game.php
    public function levelHuruf($step = 0)
    {
        $session = session();
        $hurufModel = new \App\Models\HurufModel();

        if ($step == 0) {
            // Ambil 5 soal acak dan simpan di session
            $soal = $hurufModel->orderBy('RAND()')->findAll(5);
            $session->set('game_huruf_soal', $soal);
            $session->set('game_huruf_score', 0);
        } else {
            $soal = $session->get('game_huruf_soal');
        }

        if (!isset($soal[$step])) {
            return redirect()->to('/siswa/game/selesai');
        }

        return view('siswa/game/tebak_huruf', [
            'huruf' => $soal[$step],
            'pilihan' => $this->generatePilihanHuruf($soal[$step]['nama'], $soal),
            'index' => $step,
            'jawaban' => null,
            'status' => null
        ]);
    }

    public function checkLevelHuruf($step = 0)
    {
        $session = session();
        $hurufModel = new \App\Models\HurufModel();
        $soal = $session->get('game_huruf_soal');
        $jawaban = strtolower($this->request->getPost('jawaban'));
        $benar = strtolower($soal[$step]['nama']);
        $status = $jawaban === $benar ? 'benar' : 'salah';

        // Tambah skor jika benar
        if ($status === 'benar') {
            $score = $session->get('game_huruf_score') ?? 0;
            $session->set('game_huruf_score', $score + 20);
        }

        return view('siswa/game/tebak_huruf', [
            'huruf' => $soal[$step],
            'pilihan' => $this->generatePilihanHuruf($soal[$step]['nama'], $soal),
            'index' => $step + 1,
            'jawaban' => $jawaban,
            'status' => $status
        ]);
    }

    public function selesai()
    {
        $score = session()->get('game_huruf_score') ?? 0;
        session()->remove(['game_huruf_soal', 'game_huruf_score']);

        return view('siswa/game/selesai', ['score' => $score]);
    }


    public function levelHarakat($huruf = 'ba')
    {
        $huruf = strtolower($huruf);
        $pilihan = [$huruf . 'a', $huruf . 'i', $huruf . 'u'];
        shuffle($pilihan);

        return view('siswa/game/tebak_harakat', [
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

        return view('siswa/game/tebak_harakat', [
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

    
}
