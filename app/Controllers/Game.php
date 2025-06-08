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
            $soal = $hurufModel->orderBy('RAND()')->finDzal(5);
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

    // Soal tetap sesuai urutan suara
    $soalTetap = ['Na', 'Ba', 'Dza', 'Ro', 'Kha']; // 5 soal fix urutan

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

    // Ganti background & suara berdasarkan step
   $bgList = ['game-1.png', 'game-2.png', 'game-3.jpg', 'game-4.png', 'game-5.png'];
$bgImage = $bgList[$step] ?? 'game-1.png';

return view('materi/game/tebak_harakat', [
    'step' => $step,
    'benar' => $benar,
    'pilihan' => $pilihan,
    'bgImage' => $bgImage, // ⬅ ini penting!
    'soundFile' => 'game-' . ($step + 1) . '.mp3'
]);
}


   public function checkLevelHarakat($step = 0)
{
    $jawaban = $this->request->getPost('jawaban');
    $soalTetap = ['Na', 'Ba', 'Dza', 'Ro', 'Kha'];
    $benar = $soalTetap[$step] ?? null;

    $status = ($jawaban === $benar) ? 'benar' : 'salah';

    // Tambah skor di session jika benar
    if ($status === 'benar') {
        $score = session()->get('game_cari_score') ?? 0;
        session()->set('game_cari_score', $score + 20);
    }

    // Soal selanjutnya
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
