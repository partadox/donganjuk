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

    <!-- style css copy-button -->
    <link href="<?= base_url() ?>/public/assets/css/copy-button.css" rel="stylesheet">

    <!-- Begin page -->
    <main class="h-100 has-header">

        <!-- Header -->
        <header class="header position-fixed">
            <div class="row">
                <div class="col align-self-center text-center mt-3">
                    <h5>About Us</h5>
                </div>
            </div>
        </header>
        <!-- Header ends -->

        <!-- main page content -->
        <div class="main-container container">

            <!-- About us -->
            <div class="row position-relative bg-dark text-white py-5">
                <div class="position-absolute start-0 top-0 coverimg h-100 w-100 opacity-5 z-index-0" style="background-image: url(&quot;assets/img/banner.jpg&quot;);">
                    <img src="<?= base_url() ?>/public/assets/img/banner.jpg" alt="" style="display: none;">
                </div>
                <div class="col-12 col-md-6 col-lg-4 mx-auto align-self-center z-index-1 text-center">
                    <div class="avatar avatar-100 rounded-15 mx-auto mb-1">
                        <img src="<?= base_url() ?>/public/assets/img/logo.png" alt="" class="w-100" />
                    </div>
                    <h1 class="mb-0">DO Nganjuk 0.1</h1>
                    <p>Delivery Order Nganjuk</p>
                    <br>
                    <p>&copy; 2022
                </div>
            </div>

            <!-- Deskripsi -->
            <div class="row justify-content-center">
                <h3 class="mt-3 text-center text-color-theme">Deskripsi</h3>
                <div class="col-12 col-md-6 mt-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                                <p align="center">DO Nganjuk merupakan portal berisi informasi terkait penjual makanan/minuman yang memiliki layanan delivery online di wilayah kabupaten Nganjuk. DO Nganjuk hanya menampilkan data yang telah didaftarkan oleh penjual dan telah dikonfirmasi oleh DO Nganjuk. </p>

                                <p align="center">DO Nganjuk tidak mengambil keuntungan dari aktivitas transaksi yang dilakukan oleh penggunanya. Tujuan dibuatnya DO Nganjuk adalah untuk membantu masyarakat wilayah Nganjuk mendapatkan informasi UMKM F&B yang ada di sekitar mereka secara gratis, cepat, dan lengkap. DO Nganjuk juga merupakan sebuah bentuk dukungan untuk membantu UMKM F&B di daerah Nganjuk khususnya untuk terus berkembang.</p>
                                
                                <p align="center">DO Nganjuk masih dalam pengembangan tahap awal, sehingga saran dan masukan dari anda akan sangat berarti bagi DO Nganjuk kedepannya.</p>
                                
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQs -->
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mx-auto">
                    <h5 class="mt-4 mb-2 text-center text-color-theme">Link Pendaftaran Produk</h5>
                    <a class="mail-info">
                        <i class="bi bi-pencil-square"></i>
                        <span style="margin-left: 10px;" class="mail-text" tooltip="Copy Link" tooltip-position="bottom"> intip.in/DaftarDONganjuk</span>
                    </a>
                    <br>
                    <br>
                    <h6 class="text-center">&copy; www.artakusuma.com</h6>
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
                    <a class="nav-link active" href="<?= base_url('home/about') ?>">
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