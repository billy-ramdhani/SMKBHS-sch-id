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
        <h6 class="m-0 font-weight-bold text-primary">Form Edit Berita</h6>
    </div>
    <div class="card-body">
        <form action="<?= base_url('admin/berita/update/' . $berita['id']); ?>" method="post"
            enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="form-group">
                <label for="judul">Judul Berita</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?= $berita['judul']; ?>"
                    placeholder="Masukkan Judul Berita" required>
            </div>
            <div class="form-group">
                <label for="isi">Isi Berita</label>
                <textarea class="form-control" id="isi" name="isi" rows="5" placeholder="Masukkan Isi Berita"
                    required><?= $berita['isi']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="gambar">Upload Gambar</label>
                <input type="file" class="form-control-file" id="gambar" name="gambar">
                <small class="form-text text-muted">Kosongkan jika tidak ingin mengganti gambar.</small>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?= base_url('admin/berita'); ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>

</div>
<!-- End of Main Content -->

<!-- Footer -->
<?= $this->include('admin/partials/footer'); ?>