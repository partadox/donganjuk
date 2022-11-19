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
                <div class="col-auto mt-3">
                    <button class="btn btn-light btn-44 back-btn" onclick="window.location.replace('index');">
                        <i class="bi bi-arrow-left"></i>
                    </button>
                </div>
                <div class="col align-self-center text-center mt-3">
                    <div class="logo-small">
                        <img src="<?= base_url() ?>/public/assets/img/logo.png" alt="">
                        <h5>Disclaimer</h5>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header ends -->

        <!-- main page content -->
        <div class="main-container container">
            <p align="center">
                Jika Anda memerlukan informasi lebih lanjut atau memiliki pertanyaan tentang disclaimer situs kami, jangan ragu untuk menghubungi kami melalui email di artakusuma@hotmail.com. <br><br>

                Semua informasi di situs aplikasi DO Nganjuk diterbitkan dengan itikad baik dan hanya untuk tujuan informasi umum. DO Nganjuk tidak memberikan jaminan apa pun tentang kelengkapan, keandalan, dan keakuratan informasi. Segala tindakan yang Anda ambil atas informasi yang Anda temukan di aplikasi ini (DO Nganjuk), sepenuhnya merupakan risiko Anda sendiri. DO Nganjuk tidak akan bertanggung jawab atas segala kerugian dan/atau kerusakan sehubungan dengan penggunaan situs aplikasi kami.
                Dengan menggunakan aplikasi kami, Anda dengan ini telah menyetujui   persyaratan penggunaan dari kami.
                Jika kami memperbarui, mengubah, atau melakukan perubahan apa pun pada dokumen ini, perubahan tersebut akan diposting dengan jelas di sini. <br> <br>
                
                November 2022
            </p>
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

<?= $this->endSection('isi') ?>