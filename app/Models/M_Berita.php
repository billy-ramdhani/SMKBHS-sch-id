<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Berita extends Model
{
    protected $table = 'berita';
    protected $primaryKey = 'id';

    protected $allowedFields = ['judul', 'isi', 'gambar', 'penulis', 'tanggal'];
}
