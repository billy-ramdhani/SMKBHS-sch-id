<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\M_Berita;

class Berita extends BaseController
{
    protected $m_berita;

    public function __construct()
    {
        $this->m_berita = new M_Berita();
    }

    public function index()
    {
        $data['berita'] = $this->m_berita->findAll();
        return view('admin/berita/index', $data);
    }

    public function create()
    {
        return view('admin/berita/create');
    }

    public function store()
    {
        $this->m_berita->save([
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
            'penulis' => $this->input->post('username'),
            'tanggal' => date('Y-m-d'),
        ]);
        return redirect()->to('/admin/berita')->with('success', 'Berita berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $this->m_berita->update($id, [
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
        ]);
        return redirect()->to('/admin/berita')->with('success', 'Berita berhasil diupdate!');
    }
    public function delete($id)
    {
        $this->m_berita->delete($id);
        return redirect()->to('/admin/berita')->with('success', 'Berita berhasil dihapus!');
    }
}
