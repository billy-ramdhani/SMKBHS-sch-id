<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('admin/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class=""></i>
                </div>
                <div class="sidebar-brand-text mx-3">SMK BHS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/berita') ?>"><i
                        class="fas fa-fw fa-tachometer-alt"></i><span>Berita</span></a></li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProfil"
                    aria-expanded="true" aria-controls="collapseProfil">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Profil</span>
                </a>
                <div id="collapseProfil" class="collapse" aria-labelledby="headingProfil"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Profil:</h6>
                        <a class="collapse-item" href="">Tentang Sekolah</a>
                        <a class="collapse-item" href="">Visi & Misi</a>
                        <a class="collapse-item" href="">Struktur Organisasi</a>
                        <a class="collapse-item" href="<?= base_url('admin/guru') ?>">Guru dan Tendik</a>
                    </div>
                </div>
            </li>

            <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/galeri') ?>"><i
                        class="fas fa-fw fa-tachometer-alt"></i><span>Galeri</span></a></li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/ppdb') ?>"><i
                        class="fas fa-fw fa-tachometer-alt"></i><span>PPDB</span></a></li>
        </ul>
        <!-- End of Sidebar -->