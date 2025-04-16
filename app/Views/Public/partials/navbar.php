<!-- app/Views/public/partials/navbar.php -->
<!-- Sub Header -->
<div class="sub-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-sm-8">
        <div class="left-content">
        </div>
      </div>
      <div class="col-lg-4 col-sm-4">
        <div class="right-icons">
          <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-behance"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Header Area -->
<header class="header-area header-sticky">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="main-nav">
          <a href="<?= base_url() ?>" class="logo">SMK BHS</a>
          <ul class="nav">
            <li class="scroll-to-section"><a href="#top" class="active">Beranda</a></li>
            <li class="has-sub">
              <a href="javascript:void(0)">Profil</a>
              <ul class="sub-menu">
                <li><a href="<?= base_url('profil/visi-misi') ?>">Visi & Misi</a></li>
                <li><a href="<?= base_url('profil/sejarah') ?>">Sejarah</a></li>
                <li><a href="<?= base_url('profil/struktur-organisasi') ?>">Struktur Organisasi</a></li>
                <li><a href="<?= base_url('profil/guru-tendik') ?>">Guru & Tenaga Pendidik</a></li>
              </ul>
            </li>
            <li><a href="<?= base_url('berita') ?>">Berita</a></li>
            <li><a href="<?= base_url('galeri') ?>">Galeri</a></li>
            <li><a href="<?= base_url('sarana') ?>">Sarana dan Prasarana</a></li>
            <li><a href="<?= base_url('prestasi') ?>">Prestasi Siswa</a></li>
            <li><a href="<?= base_url('ppdb') ?>">PPDB</a></li>
            <li><a href="<?= base_url('kontak') ?>">Kontak</a></li>
          </ul>
          <a class='menu-trigger'><span>Menu</span></a>
        </nav>
      </div>
    </div>
  </div>
</header>
