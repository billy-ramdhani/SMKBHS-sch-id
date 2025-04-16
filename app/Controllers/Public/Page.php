<?php
// app/Controllers/Public/Page.php
namespace App\Controllers\Public;

use App\Controllers\BaseController;

class Page extends BaseController
{
    public function profil($halaman = 'visi-misi')
    {
        return view('public/profil/' . $halaman, ['title' => ucwords(str_replace('-', ' ', $halaman))]);
    }

    public function sarana()
    {
        return view('public/sarana', ['title' => 'Sarana & Prasarana']);
    }

    public function berita()
    {
        return view('public/berita', ['title' => 'Berita']);
    }

    public function berita_detail($slug)
    {
        return view('public/berita_detail', ['title' => 'Detail Berita', 'slug' => $slug]);
    }

    public function galeri()
    {
        return view('public/galeri', ['title' => 'Galeri']);
    }

    public function prestasi()
    {
        return view('public/prestasi', ['title' => 'Prestasi Siswa']);
    }

    public function ppdb()
    {
        return view('public/ppdb', ['title' => 'PPDB']);
    }

    public function kontak()
    {
        return view('public/kontak', ['title' => 'Kontak']);
    }
}
