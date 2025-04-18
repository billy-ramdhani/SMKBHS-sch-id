<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\M_Galeri;

class Galeri extends BaseController
{
    protected $m_galeri;

    public function __construct()
    {
        $this->m_galeri = new M_Galeri();
    }

    public function index()
    {
        $data['galeri'] = $this->m_galeri->findAll();
        return view('admin/galeri', $data);
    }

    public function create()
    {
        return view('admin/galeri_create');
    }

    public function store()
    {
        $file = $this->request->getFile('gambar');
        if ($file->isValid() && !$file->hasMoved()) {
            // Validate file size and type
            if ($file->getSize() <= 3 * 1024 * 1024 && in_array($file->getExtension(), ['jpg', 'jpeg', 'png'])) {
                $newName = $file->getRandomName();
                $file->move(WRITEPATH . 'uploads', $newName);

                $this->m_galeri->save([
                    'judul' => $this->request->getPost('judul'),
                    'deskripsi' => $this->request->getPost('deskripsi'),
                    'kategori' => $this->request->getPost('kategori'),
                    'gambar' => $newName,
                    'uploaded_by' => session()->get('username'),
                    'created_at' => date('Y-m-d H:i:s'),
                ]);
            } else {
                return redirect()->back()->with('error', 'File harus berupa JPG, JPEG, atau PNG dan maksimal 3MB.');
            }
        } else {
            return redirect()->back()->with('error', 'Gagal mengupload gambar.');
        }
        return redirect()->to('/admin/galeri')->with('success', 'Galeri berhasil ditambahkan!');
    }

    public function galeri_edit($id)
    {
        $galeri = $this->m_galeri->find($id);
        if (!$galeri) {
            return redirect()->to('/admin/galeri')->with('error', 'Galeri tidak ditemukan.');
        }
        $data['galeri'] = $galeri;
        return view('admin/galeri_edit', $data);
    }

    public function update($id)
    {
        $galeri = $this->m_galeri->find($id);
        $file = $this->request->getFile('gambar');

        if ($file && $file->isValid() && !$file->hasMoved()) {
            // Validate file size and type
            if ($file->getSize() <= 3 * 1024 * 1024 && in_array($file->getExtension(), ['jpg', 'jpeg', 'png'])) {
                $newName = $file->getRandomName();
                $file->move(WRITEPATH . 'uploads', $newName);

                // Delete old file if exists
                if ($galeri['gambar'] && file_exists(WRITEPATH . 'uploads/' . $galeri['gambar'])) {
                    unlink(WRITEPATH . 'uploads/' . $galeri['gambar']);
                }

                $this->m_galeri->update($id, [
                    'judul' => $this->request->getPost('judul'),
                    'deskripsi' => $this->request->getPost('deskripsi'),
                    'gambar' => $newName,
                ]);
            } else {
                return redirect()->back()->with('error', 'File harus berupa JPG, JPEG, atau PNG dan maksimal 3MB.');
            }
        } else {
            $this->m_galeri->update($id, [
                'judul' => $this->request->getPost('judul'),
                'deskripsi' => $this->request->getPost('deskripsi'),
            ]);
        }

        return redirect()->to('/admin/galeri')->with('success', 'Galeri berhasil diupdate!');
    }

    public function delete($id)
    {
        $galeri = $this->m_galeri->find($id);

        // Delete image file if exists
        if ($galeri['gambar'] && file_exists(WRITEPATH . 'uploads/' . $galeri['gambar'])) {
            unlink(WRITEPATH . 'uploads/' . $galeri['gambar']);
        }

        $this->m_galeri->delete($id);
        return redirect()->to('/admin/galeri')->with('success', 'Galeri berhasil dihapus!');
    }
}