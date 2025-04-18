<?= $this->include('admin/partials/sidebar') ?>
<?= $this->include('admin/partials/header') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Berita</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

</div>
<!-- /.container-fluid -->

<!-- Main Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Galeri</h6>
                    <a href="<?= base_url('admin/galeri/create') ?>" class="btn btn-primary btn-sm">Tambah Galeri</a>
                </div>
                <div class="card-body">
                    <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('success') ?>
                    </div>
                    <?php endif; ?>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Gambar</th>
                                <th>Deskripsi</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($galeri as $g) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $g['judul'] ?></td>
                                <td><img src="<?= base_url('uploads/galeri/' . $g['gambar']) ?>"
                                        alt="<?= $g['judul'] ?>" width="100"></td>
                                <td><?= $g['deskripsi'] ?></td>
                                <td><?= $g['tanggal'] ?></td>
                                <td>
                                    <a href="<?= base_url('admin/galeri/galeri_edit/' . $g['id']) ?>"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?= base_url('admin/galeri/delete/' . $g['id']) ?>"
                                        class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>

    </div>

</div>
</div>
<!-- End of Main Content -->

<!-- Footer -->
<?= $this->include('admin/partials/footer'); ?>