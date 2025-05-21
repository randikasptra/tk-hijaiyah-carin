<?php

namespace App\Controllers;

use App\Models\HurufModel;

class Game extends BaseController
{
    public function level1($index = 0)
    {
        $hurufModel = new HurufModel();
        $hurufList = $hurufModel->findAll();

        if (!isset($hurufList[$index])) {
            return redirect()->to('/siswa/game/selesai'); // atau halaman selesai
        }

        $data = [
            'huruf' => $hurufList[$index],
            'index' => $index,
            'jawaban' => null,
            'status' => null
        ];

        return view('siswa/game/level1', $data);
    }

    public function checkLevel1($index = 0)
    {
        $hurufModel = new HurufModel();
        $hurufList = $hurufModel->findAll();

        if (!isset($hurufList[$index])) {
            return redirect()->to('/siswa/game/selesai');
        }

        $huruf = $hurufList[$index];
        $userInput = strtolower($this->request->getPost('jawaban'));

        $status = ($userInput == strtolower($huruf['nama'])) ? 'benar' : 'salah';

        $data = [
            'huruf' => $huruf,
            'index' => $index,
            'jawaban' => $userInput,
            'status' => $status
        ];

        return view('siswa/game/level1', $data);
    }
}
