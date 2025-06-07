<?php

namespace App\Controllers;

use App\Models\HurufModel;

class Game extends BaseController
{
    // Game.php
    public function levelHuruf($step = 0)
    {
        $session = session();
        $hurufModel = new HurufModel();

        if ($step == 0) {
            // Ambil 5 soal acak dan simpan di session
            $soal = $hurufModel->orderBy('RAND()')->findAll(5);
            $session->set('game_huruf_soal', $soal);
            $session->set('game_huruf_score', 0);
        } else {
            $soal = $session->get('game_huruf_soal');
        }

        if (!isset($soal[$step])) {
            return redirect()->to('/materi/game/selesai');
        }

        return view('materi/game/tebak_huruf', [
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
        $hurufModel = new HurufModel();
        $soal = $session->get('game_huruf_soal');

        // ⛔️ Cegah akses jika index melebihi jumlah soal
        if (!isset($soal[$step])) {
            return redirect()->to('/materi/game/selesai');
        }

        $jawaban = strtolower($this->request->getPost('jawaban'));
        $benar = strtolower($soal[$step]['nama']);
        $status = $jawaban === $benar ? 'benar' : 'salah';

        // ✅ Tambah skor jika benar
        if ($status === 'benar') {
            $score = $session->get('game_huruf_score') ?? 0;
            $session->set('game_huruf_score', $score + 20);
        }

        // ⛔️ Kalau sudah terakhir, langsung ke selesai
        if ($step >= count($soal) - 1) {
            return redirect()->to('/materi/game/selesai');
        }

        return view('materi/game/tebak_huruf', [
            'huruf' => $soal[$step + 1],
            'pilihan' => $this->generatePilihanHuruf($soal[$step + 1]['nama'], $soal),
            'index' => $step + 1,
            'jawaban' => $jawaban,
            'status' => $status
        ]);
    }


    public function selesai()
    {
        $score = session()->get('game_huruf_score') ?? 0;
        session()->remove(['game_huruf_soal', 'game_huruf_score']);
        session()->remove(['game_harakat_soal', 'game_harakat_score']);

        return view('materi/game/selesai', ['score' => $score]);
    }


    public function levelHarakat($step = 0)
{
    $session = session();

    // Jika awal permainan → generate 5 soal random
    if ($step == 0 || !$session->has('game_harakat_soal')) {
        $daftarHuruf = ['Alif', 'Ba', 'Ta', 'Tsa', 'Jim', 'Ha', 'Kha', 'Dal', 'Dzal', 'Ra', 'Zai', 'Sin', 'Syin', 'Shod', 'Dhod', 'Tho', 'Dzho', 'Ain', 'Ghoin', 'Fa', 'Qof', 'Kaf', 'Lam', 'Mim', 'Nun', 'Wau', 'Ha2', 'Hamzah', 'Ya'];
        shuffle($daftarHuruf);
        $soal = array_slice($daftarHuruf, 0, 5);
        $session->set('game_harakat_soal', $soal);
        $session->set('game_harakat_score', 0);
    } else {
        $soal = $session->get('game_harakat_soal');
    }

    // Kalau soal sudah habis, redirect ke halaman selesai
    if (!isset($soal[$step])) {
        return redirect()->to('/siswa/game/selesai');
    }

    $benar = $soal[$step];

    // Buat pilihan acak
    $pilihan = [$benar];
    while (count($pilihan) < 3) {
        $hurufLain = $daftarHuruf[array_rand($daftarHuruf)];
        if (!in_array($hurufLain, $pilihan)) {
            $pilihan[] = $hurufLain;
        }
    }
    shuffle($pilihan);

    return view('materi/game/tebak_harakat', [
        'benar' => $benar,
        'pilihan' => $pilihan,
        'step' => $step
    ]);
}


    public function checkLevelHarakat()
    {
        $step = (int) $this->request->getPost('step');
        $huruf = strtolower($this->request->getPost('huruf'));
        $jawaban = strtolower($this->request->getPost('jawaban'));
        $benar = $huruf . 'a';
        $status = $jawaban === $benar ? 'benar' : 'salah';

        if ($status === 'benar') {
            $score = session()->get('game_harakat_score') ?? 0;
            session()->set('game_harakat_score', $score + 20);
        }

        $pilihan = [$huruf . 'a', $huruf . 'i', $huruf . 'u'];
        shuffle($pilihan);

        // ⛔️ Kalau sudah selesai
        if ($step >= 4) {
            return redirect()->to('/materi/game/selesai');
        }

        return view('materi/game/tebak_harakat', [
            'huruf' => session()->get('game_harakat_soal')[$step + 1],
            'pilihan' => $pilihan,
            'step' => $step + 1,
            'jawaban' => $jawaban,
            'status' => $status
        ]);
    }

    public function startHarakat()
    {
        $hurufDasar = ['ba', 'ta', 'tsa', 'fa', 'kaf', 'lam', 'nun', 'ya', 'ha'];
        shuffle($hurufDasar);
        $soal = array_slice($hurufDasar, 0, 5); // ambil 5 soal acak
        session()->set('game_harakat_soal', $soal);
        session()->set('game_harakat_score', 0);
        return redirect()->to('/materi/game/level-harakat/0');
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
