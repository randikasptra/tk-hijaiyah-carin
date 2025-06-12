<?php

namespace App\Controllers;

use App\Models\HurufModel;

class Game extends BaseController
{
    public function levelHuruf($step = 0)
    {
        $session = session();
        $hurufModel = new HurufModel();

        if ($step == 0) {
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

        if (!isset($soal[$step])) {
            return redirect()->to('/materi/game/selesai');
        }

        $jawaban = strtolower($this->request->getPost('jawaban'));
        $benar = strtolower($soal[$step]['nama']);
        $status = $jawaban === $benar ? 'benar' : 'salah';

        if ($status === 'benar') {
            $score = $session->get('game_huruf_score') ?? 0;
            $session->set('game_huruf_score', $score + 20);
        }

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

        // Skip step 3 (index 3)
        if ($step === 3) {
            return redirect()->to('/materi/game/level-harakat/4');
        }

        $soalTetap = ['Na', 'Ba', 'Dza', 'Ro', 'Kha'];

        if (!isset($soalTetap[$step])) {
            return redirect()->to('/materi/game/selesai');
        }

        $benar = $soalTetap[$step];

        $opsiDistraktor = [
            'Na' => ['Ma', 'Ta'],
            'Ba' => ['Ta', 'Tsa'],
            'Dza' => ['Ba', 'Ro'],
            'Ro' => ['Gha', 'Dza'],
            'Kha' => ['Kho', 'Ha'],
        ];

        $pilihan = $opsiDistraktor[$benar] ?? [];
        $pilihan[] = $benar;
        shuffle($pilihan);

        $bgList = ['game-1.png', 'game-2.png', 'game-3.png', 'game-4.png', 'game-5.png'];
        $bgImage = $bgList[$step] ?? 'game-1.png';

        $soundFile = 'game-' . ($step + 1) . '.mp3';
        $soundPath = FCPATH . 'sound/' . $soundFile;
        if (!file_exists($soundPath)) {
            $soundFile = 'default.mp3';
        }

        $posisi = [
            ['top' => '18%', 'left' => '30%'],
            ['top' => '48%', 'left' => '65%'],
            ['top' => '72%', 'left' => '45%'],
            ['top' => '25%', 'left' => '70%'],
            ['top' => '65%', 'left' => '25%']
        ];
        shuffle($posisi);
        $posisi = array_slice($posisi, 0, 3);

        return view('materi/game/tebak_harakat', [
            'step' => $step,
            'benar' => $benar,
            'pilihan' => $pilihan,
            'bgImage' => $bgImage,
            'soundFile' => $soundFile,
            'posisi' => $posisi
        ]);
    }

    public function spaHarakat()
    {
        $soal = [
            ['huruf' => 'Na', 'opsi' => ['Na', 'Ma', 'Ta'], 'sound' => 'game-1.mp3', 'bg' => 'game-1.png'],
            ['huruf' => 'Ba', 'opsi' => ['Ba', 'Tsa', 'Kha'], 'sound' => 'game-2.mp3', 'bg' => 'game-2.png'],
            ['huruf' => 'Dza', 'opsi' => ['Dza', 'Ro', 'Dal'], 'sound' => 'game-3.mp3', 'bg' => 'game-3.png'],
            ['huruf' => 'Ro', 'opsi' => ['Ro', 'Gha', 'Dza'], 'sound' => 'game-4.mp3', 'bg' => 'game-4.png'],
            ['huruf' => 'Kha', 'opsi' => ['Kha', 'Kho', 'Ha'], 'sound' => 'game-5.mp3', 'bg' => 'game-5.png'],
        ];

        return view('materi/game/spa_harakat', ['soal' => $soal]);
    }


    public function checkLevelHarakat($step = 0)
    {
        $jawaban = $this->request->getPost('jawaban');
        $soalTetap = ['Na', 'Ba', 'Dza', 'Ro', 'Kha'];
        $benar = $soalTetap[$step] ?? null;

        $status = ($jawaban === $benar) ? 'benar' : 'salah';

        if ($status === 'benar') {
            $score = session()->get('game_cari_score') ?? 0;
            session()->set('game_cari_score', $score + 20);
        }

        $nextStep = $step + 1;
        if ($nextStep >= count($soalTetap)) {
            return redirect()->to('/materi/game/selesai');
        }

        return redirect()->to('/materi/game/level-harakat/' . $nextStep);
    }

    public function startHarakat()
    {
        $hurufDasar = ['ba', 'ta', 'tsa', 'fa', 'kaf', 'lam', 'Na', 'ya', 'ha'];
        shuffle($hurufDasar);
        $soal = array_slice($hurufDasar, 0, 5);
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