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

    <!-- Begin page -->
    <main class="h-100 has-header">

        <!-- Header -->
        <header class="header position-fixed">
            <div class="row">
                <div class="col align-self-center text-center">
                    <div class="logo-small mt-3">
                        <img src="assets/img/logo1.png" alt="">
                        <h5>Pencarian</h5>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header ends -->

        <!-- main page content -->
        <div class="main-container container">

            <!-- Search -->
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto align-self-center text-center py-4">
                <form class="was-validated">
                    <div class="form-floating is-valid mb-3">
                        <select class="form-control" id="country">
                            <option selected>Semua</option>
                            <option>Tanjunganom</option>
                            <option>Prambon</option>
                        </select>
                        <label for="country">Pilih Kecamatan</label>
                    </div>
                    <div class="form-floating is-valid mb-3">
                        <input type="text" class="form-control" placeholder="Kata kunci" id="confirmpassword">
                        <label for="confirmpassword">Masukan kata kunci</label>
                        <button type="button" class="btn btn-link text-primary tooltip-btn" data-bs-toggle="tooltip"
                            data-bs-placement="left" title="Enter valid Password" id="passworderror">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                    <p class="mb-3"><span class="small text-muted">Pilih kecamatan dan masukan kata kunci</span></p>
                    <button type="button" class="btn btn-lg btn-default w-100 mb-4 shadow"
                        onclick="window.location.replace('verify.html');">
                        <i class="bi bi-search"></i> Cari
                    </button>
                </form>
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
                    <a class="nav-link active" href="<?= base_url('home/cari') ?>">
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