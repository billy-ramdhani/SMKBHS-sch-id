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
        return view('admin/berita', $data);
    }

    public function create()
    {
        return view('admin/berita_create');
    }

    public function store()
    {
        $file = $this->request->getFile('gambar');
        if ($file->isValid() && !$file->hasMoved()) {
            // Validate file size and type
            if ($file->getSize() <= 3 * 1024 * 1024 && in_array($file->getExtension(), ['jpg', 'jpeg', 'png'])) {
                $newName = $file->getRandomName();
                $file->move(WRITEPATH . 'uploads', $newName);

                $this->m_berita->save([
                    'judul' => $this->request->getPost('judul'),
                    'isi' => $this->request->getPost('isi'),
                    'gambar' => $newName,
                    'penulis' => session()->get('username'),
                    'tanggal' => date('Y-m-d'),
                ]);
            } else {
                return redirect()->back()->with('error', 'File harus berupa JPG, JPEG, atau PNG dan maksimal 3MB.');
            }
        } else {
            return redirect()->back()->with('error', 'Gagal mengupload gambar.');
        }
        return redirect()->to('/admin/berita')->with('success', 'Berita berhasil ditambahkan!');
    }

    public function berita_edit($id)
    {
        $berita = $this->m_berita->find($id);
        if (!$berita) {
            return redirect()->to('/admin/berita')->with('error', 'Berita tidak ditemukan.');
        }
        $data['berita'] = $berita;
        return view('admin/berita_edit', $data);
    }
    public function update($id)
    {
        $berita = $this->m_berita->find($id);
        $file = $this->request->getFile('gambar');

        if ($file && $file->isValid() && !$file->hasMoved()) {
            // Validate file size and type
            if ($file->getSize() <= 3 * 1024 * 1024 && in_array($file->getExtension(), ['jpg', 'jpeg', 'png'])) {
                $newName = $file->getRandomName();
                $file->move(WRITEPATH . 'uploads', $newName);

                // Delete old file if exists
                if ($berita['gambar'] && file_exists(WRITEPATH . 'uploads/' . $berita['gambar'])) {
                    unlink(WRITEPATH . 'uploads/' . $berita['gambar']);
                }

                $this->m_berita->update($id, [
                    'judul' => $this->request->getPost('judul'),
                    'isi' => $this->request->getPost('isi'),
                    'gambar' => $newName,
                ]);
            } else {
                return redirect()->back()->with('error', 'File harus berupa JPG, JPEG, atau PNG dan maksimal 3MB.');
            }
        } else {
            $this->m_berita->update($id, [
                'judul' => $this->request->getPost('judul'),
                'isi' => $this->request->getPost('isi'),
            ]);
        }

        return redirect()->to('/admin/berita')->with('success', 'Berita berhasil diupdate!');
    }
    public function delete($id)
    {
        $this->m_berita->delete($id);
        return redirect()->to('/admin/berita')->with('success', 'Berita berhasil dihapus!');
    }
}