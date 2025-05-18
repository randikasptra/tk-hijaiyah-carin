<?php

namespace App\Models;

use CodeIgniter\Model;

class HurufModel extends Model
{
    protected $table = 'huruf_hijaiyah';
    protected $allowedFields = ['nama', 'gambar', 'suara'];
}
