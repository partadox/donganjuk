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

    <!-- Sidebar main menu -->
    <div class="sidebar-wrap  sidebar-pushcontent">
        <!-- Add overlay or fullmenu instead overlay -->
        <div class="closemenu text-muted">Close Menu</div>
        <div class="sidebar dark-bg">

            <!-- user emnu navigation -->
            <div class="row mt-4">
                <div class="col-12">
                    <ul class="nav nav-pills">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url('home/disclaimer') ?>">
                                <div class="avatar avatar-40 rounded icon"><i class="bi bi-exclamation-octagon"></i></div>
                                <div class="col">Disclaimer</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url('home/privacy') ?>">
                                <div class="avatar avatar-40 rounded icon"><i class="bi bi-shield-shaded"></i></div>
                                <div class="col">Privacy Policy</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url('home/tos') ?>">
                                <div class="avatar avatar-40 rounded icon"><i class="bi bi-file-lock2"></i></div>
                                <div class="col">Terms of Service</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Sidebar main menu ends -->

    <!-- Begin page -->
    <main class="h-100">

        <!-- Header -->
        <header class="header position-fixed">
            <div class="row">
                <div class="col align-self-center text-center">
                    <div class="logo-small mt-3">
                        <h5>Delivery Order Nganjuk</h5>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header ends -->

        <!-- main page content -->
        <div class="main-container container">
            <!-- welcome user -->
            <div class="row mb-4">
                <div class="col-auto">
                    <a href="javascript:void(0)" target="_self" class="btn btn-light btn-44 menu-btn">
                        <i class="bi bi-list"></i>
                    </a>
                </div>
                <div class="col-auto">
                    <div class="avatar avatar-50 shadow rounded-10">
                        <img src="<?= base_url() ?>/public/assets/img/logo.png" alt="">
                    </div>
                </div>
                <div class="col align-self-center ps-0">
                    <h4 class="text-color-theme">Selamat Datang</h4>
                    <!-- <p class="text-muted">Good Morning</p> -->
                </div>
            </div>

            <!-- Banner Info -->
            <div class="row mb-4 hideonprogress">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col align-self-center ps-0" style="margin-left: 15px;">
                                    <p class="small mb-1"><strong>DO Nganjuk Versi 0.1</strong></p>
                                    <p class="small">Paritsipasi anda sangat berarti. Masuk menu <strong><i>About</i></strong> untuk mendaftarkan produk anda.</p>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-44 btn-default shadow-sm">
                                        <i class="bi bi-emoji-smile-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-0">
                            <div class="col-12">
                                <div class="progress bg-none h-2 hideonprogressbar" data-target="hideonprogress">
                                    <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Banner Petunjuk Pemakaian -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card theme-bg text-center">
                        <div class="card-body">
                            <div class="row">
                                <div class="col align-self-center">
                                    <h6>Cara Order?</h6>
                                    <p class="size-12 text-muted">
                                        Pilih daftar penjual, lihat menu yang tersedia, tekan tombol untuk copy nomor WA-nya.
                                    </p>
                                    <div class="tag border-dashed border-opac">
                                        <i class="bi bi-whatsapp"> Nomor WA</i>
                                    </div>
                                </div>
                                <div class="col-5 align-self-center ps-0">
                                    <img src="<?= base_url() ?>/public/assets/img/home.png" alt="" class="mw-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Jumlah Menu Makanan dan Minuman (Can't Delete if delete swiper kecamatan stag) -->
            <div class="row mb-4">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="circle-small">
                                        <div id="circleprogressone"></div>
                                        <div class="avatar avatar-30 alert-success text-success rounded-circle">
                                            <i class="bi bi-egg-fried"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto align-self-center ps-0">
                                    <p class="small mb-1 text-muted"><strong>Food</strong></p>
                                    <p class="small"><strong>0</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="circle-small">
                                        <div id="circleprogresstwo"></div>
                                        <div class="avatar avatar-30 alert-info text-info rounded-circle">
                                            <i class="bi bi-cup-straw"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto align-self-center ps-0">
                                    <p class="small mb-1 text-muted"><strong>Drink</strong></p>
                                    <p class="small"><strong>0</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="avatar avatar-40 alert-danger text-danger rounded-circle">
                                        <i class="bi bi-people-fill"></i>
                                    </div>
                                </div>
                                <div class="col align-self-center ps-0">
                                    <div class="row mb-2">
                                        <div class="col">
                                            <p class="small text-muted mb-0">Pengunjung</p>
                                            <p>-</p>
                                        </div>
                                        <div class="col-auto text-end">
                                            <p class="small text-muted mb-2">Tanggal</p>
                                            <p class="small"><?= $tgl ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Heading -->
            <div class="row mb-3">
                <div class="col">
                    <h6 class="title">Daftar Penjual</h6>
                </div>
            </div>

            <!-- Daftar Menu -->
            <div class="row">

                <div class="col-12 col-md-6">
                    <div class="card mb-4 overflow-hidden shadow-sm bg-primary text-white">
                        <div class="overlay"></div>
                        <div class="coverimg h-100 w-100 position-absolute opacity-5">
                            <img src="<?= base_url() ?>/public/assets/img/food/food1.jpg" alt="">
                        </div>
                        <div class="card-body">
                            <div class="row mb-5">
                                <div class="col align-self-center">
                                    <span class="tag">DO Tanjunganom</span>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-success text-white btn-44 rounded-circle shadow-sm">
                                        <i class="bi bi-egg-fried"></i>
                                    </button>
                                    <button class="btn btn-info text-white btn-44 rounded-circle shadow-sm">
                                        <i class="bi bi-cup-straw"></i>
                                    </button>
                                </div>
                            </div>
                            <br>
                            <a href="<?= base_url('home/detail') ?>" class="h4 text-normal d-block text-white mb-2">Masakan Indonesia</a>
                            <a href="<?= base_url('home/detail') ?>" class="text-muted">Menjual segala jenis masakan nusantara.</a>
                            <div class="small">
                                <figure class="avatar avatar-20 rounded mx-1">
                                    <i class="bi bi-shop-window"></i>
                                </figure>
                                <a href="<?= base_url('home/detail') ?>" class="text-white">Penjual A</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            

        </div>
        <!-- main page content ends -->


    </main>
    <!-- Page ends-->

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url('') ?>">
                        <span>
                            <i class="nav-icon bi bi-shop-window"></i>
                            <span class="nav-text">Penjual</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/cari') ?>">
                        <span>
                            <i class="nav-icon bi bi-search"></i>
                            <span class="nav-text">Cari</span>
                        </span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/about') ?>">
                        <span>
                            <i class="nav-icon bi bi-info-circle"></i>
                            <span class="nav-text">About</span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </footer>
    <!-- Footer ends-->

<?= $this->endSection('isi') ?>