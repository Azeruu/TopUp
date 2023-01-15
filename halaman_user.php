<?php
session_start();
require 'koneksi/koneksi.php';
require 'cek.php';
?>
<!DOCTYPE php>
<php lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Reza's Store</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="chang'e.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/halaman_user.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Green - v4.9.0
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  </head>

  <body>
    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">
            <?php
            echo $_SESSION['username'];
            ?>
          </a>
          <i class="bi bi-phone-fill phone-icon"></i> +62 838 764 330 08
        </div>
        <div class="social-links d-none d-md-block">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
          <a href="logout.php" class="bi bi-box-arrow-right"> Logout </a>
        </div>
      </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
      <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="index.php">Reza's Store</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#portfolio">Popular Games</a></li>
            <li><a class="nav-link scrollto " href="#carabayar">Cara Pembayaran</a></li>
            <li><a class="nav-link scrollto " href="invoice.php"><i class="bi bi-cart"></i> invoice</a></li>
            <li><a class="getstarted scrollto" href="#about">Tentang Saya</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div>
    </header><!-- End Header -->

    <!-- ======= Dashboard Section ======= -->
    <section id="hero">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(gambar/mlbb.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Selamat Datang di <span>Aplikasi Top Up Game</span></h2>
                <p class="animate__animated animate__fadeInUp">Website untuk melakukan Top Up game termurah dan terpercaya 
                  <br>Setiap bulannya, jutaan gamers menggunakan Rezashop untuk melakukan pembelian kredit game dengan lancar
                </p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Baca Lebih</a>
              </div>
            </div>
          </div>

          <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
          </a>

          <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
          </a>

        </div>
    </section><!-- End dashboard -->

    <main id="main">
      <!-- ======= Daftar game Section ======= -->
      <section id="portfolio" class="portfolio">
        <div class="container">

          <div class="section-title">
            <h2><b>Games</h2>
          </div>
          <div class="row portfolio-container">
            <!--Daftar 1-->
            <div class="portfolio-item filter-app">
              <a class="portfolio-wrap" href="halaman_pesan.php">
                <img src="gambar/mlbb.jpg" class="img-fluid" alt="">
                
              </a>
            </div>
          </div>
        </div>
      </section><!-- End Daftar Kost Section -->

      <!-- ======= Cara Pembayaran Section ======= -->
      <section id="carabayar" class="carabayar">
        <div class="container">

          <div class="section-title">
            <h2>Cara Pembayaran</h2>
            <p>Kami menawarkan begitu banyak pilihan pembayaran mulai dari potong pulsa, e-wallet, bank transfer, dan pembayaran di mini market terdekat. </p>
          </div>

        </div>
      </section><!-- End Cara Pembayaran Section -->


      <!-- ======= About Us Section ======= -->
      <section id="about" class="about">
        <div class="container">

          <div class="section-title">
            <h2>Tentang Kami</h2>
            <p>Website top-up tercepat dan terpercaya di Indonesia
Setiap bulannya, jutaan gamers menggunakan Rezashop untuk melakukan pembelian kredit game dengan lancar<br><br>
Bayar dalam hitungan detik, Hanya dibutuhkan beberapa detik saja untuk menyelesaikan pembayaran di Codashop karena situs kami berfungsi dengan baik dan mudah untuk digunakan.<br>
Ketika kamu melakukan top-up di Rezashop, item atau barang yang kamu beli akan selalu dikirim ke akun kamu secara instan dan cepat, tanpa tertunda.<br>
Kami menawarkan begitu banyak pilihan pembayaran mulai dari potong pulsa, e-wallet, bank transfer, dan pembayaran di mini market terdekat.<br>
Penggemar game dapat bergantung pada Rezashop karena kami memberikan penawaran menarik, diskon dan kode item dari promosi game yang disukai kamu.
            </p>
          </div>

        </div>
      </section><!-- End About Us Section -->



    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container">
        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
        <div class="copyright">
          &copy; Copyright <strong><span>Reza</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/green-free-one-page-bootstrap-template/ -->
        </div>
      </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

  </body>

</php>