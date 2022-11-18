<?= $this->extend('main') ?>

<?= $this->section('isi') ?>

    <!-- loader section -->
    <div class="container-fluid loader-wrap">
        <div class="row h-100">
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto text-center align-self-center">
                <div class="loader-cube-wrap loader-cube-animate mx-auto">
                    <img src="<?= base_url() ?>/public/assets/img/logo.png" alt="Logo">
                </div>
                <p class="mt-4"><strong>Harap tunggu...</strong></p>
            </div>
        </div>
    </div>
    <!-- loader section ends -->

    <!-- Begin page content -->
    <main class="container-fluid h-100">
        <a href="<?= base_url('home/index') ?>" class="skipbtn">Lewati</a>

        <!-- Swiper -->
        <div class="swiper-container introswiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="row h-100">
                        <div class="col-11 col-md-8 col-lg-6 col-xl-4 mx-auto align-self-center text-center">
                            <div class="row">
                                <div class="col-ld-6">
                                    <img src="<?= base_url() ?>/public/assets/img/landing1.png" alt="" class="mw-100 mx-auto mb-5">
                                </div>
                                <div class="col-ld-6">
                                    <h1 class="text-color-theme mb-4">DO Nganjuk</h1>
                                    <p class="size-18 text-muted">Portal informasi penyedia layanan delivery order makanan/minuman di daerah Nganjuk. Langsung transaksi antara penjual dan pembeli tanpa perantara.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row h-100">
                        <div class="col-11 col-md-8 col-lg-6 col-xl-4 mx-auto align-self-center text-center">
                            <div class="row">
                                <div class="col-ld-6">
                                    <img src="<?= base_url() ?>/public/assets/img/landing2.png" alt="" class="mw-100 mx-auto mb-5">
                                </div>
                                <div class="col-ld-6">
                                    <h1 class="text-color-theme mb-4">Gimana cara pakainya? </h1>
                                    <p class="size-18 text-muted">Pilih penjualnya, lihat daftar menunya, langsung order via WA ke penjual.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row h-100">
                        <div class="col-11 col-md-8 col-lg-6 col-xl-4 mx-auto align-self-center text-center">
                            <div class="row">
                                <div class="col-ld-6">
                                    <img src="<?= base_url() ?>/public/assets/img/landing3.png" alt="" class="mw-100 mx-auto mb-5">
                                </div>
                                <div class="col-ld-6">
                                    <h1 class="text-color-theme mb-4">Selamat menikmati </h1>
                                    <p class="size-18 text-muted">Terimasih telah mendownload dan menggunakan DO Nganjuk. Semoga bermanfaat bagi kita semua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </main>
    <!-- Page content ends-->

    <!-- PWA app install toast message -->
    <div class="position-fixed top-0 start-50 translate-middle-x z-index-9">
        <div class="toast mt-3" role="alert" aria-live="assertive" aria-atomic="true" id="toastinstall"
            data-bs-animation="true">
            <div class="toast-header">
                <img src="<?= base_url() ?>/public/assets/img/favicon32.png" class="rounded me-2" alt="...">
                <strong class="me-auto">Share DO Nganjuk</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <div class="row">
                    <div class="col">
                        Klik "Share" untuk membagikan aplikasi DO Nganjuk ke teman anda.
                    </div>
                    <div class="col-auto align-self-center ps-0">
                        <button class="btn-default btn btn-sm" id="addtohome">Share</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection('isi') ?>