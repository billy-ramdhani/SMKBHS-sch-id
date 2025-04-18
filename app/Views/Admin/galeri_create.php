<?= $this->include('admin/partials/sidebar') ?>
<?= $this->include('admin/partials/header') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Berita</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

</div>
<!-- /.container-fluid -->

<!-- Main Content -->
<!-- Tambah Berita -->
<div class="card shadow mb-4 mx-3">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Form Tambah Galeri</h6>
    </div>
    <div class="card-body">
        <form action="<?= base_url('admin/galeri/store'); ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Galeri"
                    required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"
                    placeholder="Masukkan Deskripsi Galeri" required></textarea>
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select class="form-control" id="kategori" name="kategori" required>
                    <option value="" disabled selected>Pilih Kategori</option>
                    <option value="Pendidikan">Pendidikan</option>
                    <option value="Kegiatan">Kegiatan</option>
                    <option value="Prestasi">Prestasi</option>
                </select>
            </div>
            <div class="form-group">
                <label for="gambar">Upload Gambar</label>
                <input type="file" class="form-control-file" id="gambar" name="gambar" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('admin/galeri'); ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>

</div>
<!-- End of Main Content -->

<!-- Footer -->
<?= $this->include('admin/partials/footer'); ?>