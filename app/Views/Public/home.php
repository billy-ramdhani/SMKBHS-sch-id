<!-- app/Views/public/home.php -->
<?= $this->extend('public/layout') ?>
<?= $this->section('content') ?>

<!-- Main Banner -->
<section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
        <source src="<?= base_url('assets/images/vwsmkbhs.mp4') ?>" type="video/mp4" />
    </video>
    <div class="video-overlay header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="caption">
                        <h6>Hello Students</h6>
                        <h2>Welcome to Education</h2>
                        <p>Template dari <a href="https://templatemo.com" target="_blank">TemplateMo</a></p>
                        <div class="main-button-red">
                            <div class="scroll-to-section"><a href="#contact">Daftar Sekarang </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Lanjutkan dengan copy bagian services, upcoming meetings, apply now, courses, dsb -->
<section class="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-service-item owl-carousel">

                    <div class="item">
                        <div class="icon">
                            <img src="<?= base_url('assets/images/service-icon-01.png') ?>" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Best Education</h4>
                            <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non
                                vestibulum.</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon">
                            <img src="<?= base_url('assets/images/service-icon-02.png') ?>" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Best Teachers</h4>
                            <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non
                                vestibulum.</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon">
                            <img src="<?= base_url('assets/images/service-icon-03.png') ?>" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Best Students</h4>
                            <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non
                                vestibulum.</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon">
                            <img src="<?= base_url('assets/images/service-icon-02.png') ?>" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Online Meeting</h4>
                            <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non
                                vestibulum.</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon">
                            <img src="<?= base_url('assets/images/service-icon-03.png') ?>" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Best Networking</h4>
                            <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non
                                vestibulum.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="upcoming-meetings" id="meetings">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Upcoming Meetings</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories">
                    <h4>Meeting Categories</h4>
                    <ul>
                        <li><a href="#">Sed tempus enim leo</a></li>
                        <li><a href="#">Aenean molestie quis</a></li>
                        <li><a href="#">Cras et metus vestibulum</a></li>
                        <li><a href="#">Nam et condimentum</a></li>
                        <li><a href="#">Phasellus nec sapien</a></li>
                    </ul>
                    <div class="main-button-red">
                        <a href="#">All Upcoming Meetings</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="meeting-item">
                            <div class="thumb">
                                <div class="price"><span>$22.00</span></div>
                                <a href="#"><img src="<?= base_url('assets/images/meeting-01.jpg') ?>" alt=""></a>
                            </div>
                            <div class="down-content">
                                <div class="date">
                                    <h6>Nov <span>10</span></h6>
                                </div>
                                <a href="#">
                                    <h4>New Lecturers Meeting</h4>
                                </a>
                                <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Tambahkan meeting-item lainnya sesuai HTML -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="apply-now" id="apply">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="item">
                            <h3>APPLY FOR BACHELOR DEGREE</h3>
                            <p>Kamu bisa menggunakan template ini untuk sekolah atau yayasan kamu.</p>
                            <div class="main-button-red">
                                <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="item">
                            <h3>APPLY FOR BACHELOR DEGREE</h3>
                            <p>Tidak diizinkan mendistribusikan ulang template ini ke situs lain.</p>
                            <div class="main-button-yellow">
                                <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="accordions is-first-expanded">
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>Tentang Template Ini</span>
                            <span class="icon"><i class="icon fa fa-chevron-right"></i></span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>Ini adalah template gratis dari <a href="https://templatemo.com">TemplateMo</a></p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-courses" id="courses">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Our Popular Courses</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="owl-courses-item owl-carousel">

                    <div class="item">
                        <img src="<?= base_url('assets/images/course-01.jpg') ?>" alt="Course One">
                        <div class="down-content">
                            <h4>Morbi tincidunt elit vitae justo rhoncus</h4>
                            <div class="info">
                                <div class="row">
                                    <div class="col-8">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <span>$160</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tambahkan item lainnya dari index.html kalau diperlukan -->

                </div>
            </div>
        </div>
    </div>
</section>


<!-- Contoh (copas langsung dari index.html dan ubah path ke base_url('assets/...')) -->

<?= $this->endSection() ?>