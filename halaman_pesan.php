<?php
session_start();
require 'koneksi/koneksi.php';
require 'cek.php';

$query=mysqli_query($conn, "SELECT*FROM tbl_diamond");
// var_dump($query);

?>

<!DOCTYPE html>
<html lang="en">

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
        </style>
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
                        <li><a class="nav-link scrollto active" href="halaman_user.php">Home</a></li>
                        <li><a class="nav-link scrollto" href="halaman_user.php#portfolio">Popular Games</a></li>
                        <li><a class="nav-link scrollto " href="halaman_user.php#carabayar">Cara Pembayaran</a></li>
                        <li><a class="getstarted scrollto" href="halaman_user.php#about">Tentang Saya</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->

            </div>
        </header><!-- End Header -->

        <main>
            <form class="container" method="post" action="prosesbeli.php">
                <div class="card">
                    <h5 class="card-header">Masukan User ID</h5>
                    <div class="card-body">
                        <div class="mb-3 d-flex justify-content-between gap-2">
                            <div class="col-6">
                                <input type="text"  name="userid" class="form-control text-center" placeholder="Masukan UserID" required>
                            </div>
                            <div class="col-6">
                                <input type="text" name="zoneid" class="form-control text-center" placeholder="Zone ID" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h5 class="card-header">Pilih Nominal Top Up</h5>
                    <div class="card-body d-flex flex-wrap gap-3 justify-content-around">
                        <?php 
                        while($row=mysqli_fetch_assoc($query)): ?>
                        <input type="radio" class="btn-check" name="diamond" id=<?= $row["id_diamond"] ?>  autocomplete="off" value=<?= $row["jumlah"] ?> onclick="getHarga(<?= $row['id_diamond'] ?>)" data-harga=<?= $row["harga"]; ?> >
                        <label class="btn btn-outline-primary" for=<?= $row["id_diamond"] ?>>
                            <div class="card-body d-flex flex-wrap gap-2 justify-content-around flex-column align-items-center">
                                <img src="
                                <?php 
                                if($row['jumlah']>4829){
                                    echo './gambar/dm6.png';
                                }else if($row['jumlah']>2009){
                                    echo './gambar/dm5.png';
                                }else if($row['jumlah']>567){
                                    echo './gambar/dm4.png';
                                }else if($row['jumlah']>169){
                                    echo './gambar/dm3.png';
                                }else if($row['jumlah']>58){
                                    echo './gambar/dm2.png';
                                }else{
                                    echo './gambar/diamond.png';
                                }

                                ?>" width="50" />
                                <p><?= $row["jumlah"];  ?> <br>Diamond</p>
                            </div>
                        </label>
                        <?php endwhile ?>
                    </div>
                </div>
                <div class="card">
                    <h5 class="card-header">Pilih Pembayaran</h5>
                    <div class="card-body d-flex flex-wrap gap-3 ">
                        <input type="radio" class="btn-check" name="pembayaran" id="success-outlined34" autocomplete="off" value="dana">
                        <label class="btn btn-outline-primary" for="success-outlined34">
                            <div class="d-flex align-items-center h-100">
                                <img src="./gambar/logodana.png" width="100" />
                            </div>
                        </label>
                        <input type="radio" class="btn-check" name="pembayaran" id="success-outlined35" autocomplete="off" value="axis">
                        <label class="btn btn-outline-primary" for="success-outlined35">
                            <div class="d-flex align-items-center h-100">
                                <img src="./gambar/logoaxis.png" width="100" />
                            </div>
                        </label>
                    </div>
                </div>
                <div class="card">
                    <h5 class="card-header">Beli!</h5>
                    <div class="card-body">
                        <div class="mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Alamat E-mail" required>
                        </div>
                        <div class="d-flex flex-end justify-content-end">
                            <div class="flex flex-row">
                                <span id="tampilHarga"></span>
                                <button class="btn btn-primary" name="bayar" type="submit">Bayar</button>
                            </div>
                            
                        </div>
                    </div>

                </div>

            </form>
        </main>

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
    <script>
        function formatCurrency(harga){
            return "Rp. " + (harga).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
        }
        function getHarga(id){
            let tombolDiamond = document.getElementById(id);
            if(tombolDiamond.checked == true){
                let value = tombolDiamond.dataset.harga;
                const tampilHarga = document.getElementById('tampilHarga');
                tampilHarga.innerText = formatCurrency(parseInt(value));
            }
        }
    </script>

                    </html>