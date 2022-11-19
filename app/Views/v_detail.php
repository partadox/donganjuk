<?= $this->extend('main') ?>

<?= $this->section('isi') ?>

    <!-- loader section -->
    <!-- <div class="container-fluid loader-wrap">
        <div class="row h-100">
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto text-center align-self-center">
                <div class="loader-cube-wrap loader-cube-animate mx-auto">
                    <img src="<?= base_url() ?>/public/assets/img/logo.png" alt="Logo">
                </div>
                <p class="mt-4"><strong>Harap tunggu...</strong></p>
            </div>
        </div>
    </div> -->
    <!-- loader section ends -->

    <!-- style css copy-button -->
    <link href="<?= base_url() ?>/public/assets/css/copy-button.css" rel="stylesheet">

    <!-- Begin page -->
    <main class="h-100">

        <!-- Header -->
        <header class="header position-fixed">
            <div class="row">
                <div class="col-auto mt-3">
                    <button class="btn btn-light btn-44 back-btn" onclick="window.location.replace('index');">
                        <i class="bi bi-arrow-left"></i>
                    </button>
                </div>
                <div class="col align-self-center text-center mt-3">
                    <div class="logo-small">
                        <img src="<?= base_url() ?>/public/assets/img/logo.png" alt="">
                        <h5>Detail Penjual</h5>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header ends -->

        <!-- main page content -->
        <div class="main-container container pt-0">
            <!-- user information -->
            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <div class="row">
                        <div class="col-auto">
                            <figure class="avatar avatar-60 rounded-10">
                                <img src="<?= base_url() ?>/public/assets/img/shop.png" alt="">
                            </figure>
                        </div>
                        <div class="col px-0 align-self-center">
                            <h3 class="mb-0 text-color-theme">Penjual A</h3>
                            <p class="text-muted ">Cengkok, Ngronggot</p>
                        </div>
                    </div>
                    
                </div>
                <div class="card-body">
                    <p class="text-muted mb-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sollicitudin dignissim
                        nisi, eget malesuada ligula ultricies sit amet. Suspendisse efficitur ex eu est placerat mattis.
                    </p>
                    <div class="row">
                        <div class="col d-grid">
                                <a class="mail-info">
                                    <i class="bi bi-whatsapp"></i>
                                    <span style="margin-left: 10px;" class="mail-text" tooltip="Copy WA" tooltip-position="bottom"> 08xxxx</span>
                                </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- summary -->
            <div class="row mb-3">
                <div class="col-6 col-md-4">
                    <div class="card shadow-sm mb-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto px-0">
                                    <div class="avatar avatar-40 bg-warning text-white shadow-sm rounded-10-end">
                                        <i class="bi bi-egg-fried"></i>
                                    </div>
                                </div>
                                <div class="col">
                                    <p class="text-muted size-12 mb-0"><strong>Food</strong></p>
                                    <p>1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="card shadow-sm mb-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto px-0">
                                    <div class="avatar avatar-40 bg-info text-white shadow-sm rounded-10-end">
                                        <i class="bi bi-cup-straw"></i>
                                    </div>
                                </div>
                                <div class="col">
                                    <p class="text-muted size-12 mb-0"><strong>Drink</strong></p>
                                    <p>0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- map location -->
            <div class="row">
                <div class="col-12 col-md-6  mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="text-color-theme mb-2">Alamat Penjual A.</h5>
                            <p class="text-muted">Rumah A RT.05/RW.01, Ds. Cengkok, Ngronggot</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blogs -->
            <div class="row mb-3">
                <div class="col">
                    <h6 class="title">Menu</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <a class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="h-190 shadow-sm rounded-10 coverimg mb-3">
                                        <img src="<?= base_url() ?>/public/assets/img/food/food2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col align-self-center">
                                    <p class="text-color-theme mb-1">Ayam Goreng</p>
                                    <p class="text-muted small"><strong>Rp 10.000</strong></p>
                                </div>
                            </div>
                        </div>
                    </a>
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
                    <a class="nav-link" href="<?= base_url('home/index') ?>">
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

    <!-- copy button custom script -->
    <script src="<?= base_url() ?>/public/assets/js/copy-button.js"></script>

<?= $this->endSection('isi') ?>