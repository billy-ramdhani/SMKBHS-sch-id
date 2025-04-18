<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Galeri extends Model
{
    protected $table = 'tb_galeri';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'deskripsi', 'kategori', 'gambar', 'uploaded_by', 'created_at'];
}