<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Guru extends BaseController
{
    public function index()
    {
        return view('guru/dashboard'); // Buat view ini nanti
    }
}
