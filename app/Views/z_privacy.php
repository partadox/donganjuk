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
                <div class="col-auto">
                    <button class="btn btn-light btn-44 back-btn" onclick="window.location.replace('index');">
                        <i class="bi bi-arrow-left"></i>
                    </button>
                </div>
                <div class="col align-self-center text-center">
                    <div class="logo-small">
                        <img src="<?= base_url() ?>/public/assets/img/logo.png" alt="">
                        <h5>Privacy Policy</h5>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header ends -->

        <!-- main page content -->
        <div class="main-container container">
            <h4>Privacy Policy for DO Nganjuk</h4>

            <p>At DO Nganjuk, accessible from  , one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by DO Nganjuk and how we use it.</p>

            <p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>

            <h4>Log Files</h4>

            <p>DO Nganjuk follows a standard procedure of using log files. These files log visitors when they visit applications. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the application, and gathering demographic information. Our Privacy Policy was created with the help of the <a href="https://www.privacypolicyonline.com/privacy-policy-generator/">Privacy Policy Generator</a>.</p>




            <h4>Privacy Policies</h4>

            <P>You may consult this list to find the Privacy Policy for each of the advertising partners of DO Nganjuk.</p>

            <p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or apps Beacons that are used in their respective advertisements and links that appear on DO Nganjuk, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on applications that you visit.</p>

            <p>Note that DO Nganjuk has no access to or control over these cookies that are used by third-party advertisers.</p>

            <h4>Third Party Privacy Policies</h4>

            <p>DO Nganjuk's Privacy Policy does not apply to other advertisers or applications. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. </p>

            <p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific apps browsers, it can be found at the browsers' respective applications. What Are Cookies?</p>

            <h4>Children's Information</h4>

            <p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>

            <p>DO Nganjuk does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our application, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>

            <h4>Online Privacy Policy Only</h4>

            <p>This Privacy Policy applies only to our online activities and is valid for visitors to our application with regards to the information that they shared and/or collect in DO Nganjuk. This policy is not applicable to any information collected offline or via channels other than this application.</p>

            <h4>Consent</h4>

            <p>By using our application, you hereby consent to our Privacy Policy and agree to its Terms and Conditions.</p>
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