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
                        <li><a class="nav-link scrollto " href="invoice.php"><i class="bi bi-cart"></i> invoice</a></li>
                        <li><a class="getstarted scrollto" href="halaman_user.php#about">Tentang Saya</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->

            </div>
        </header><!-- End Header -->

        <main>
            <html>

            <head>
                <title>Invoice</title>
            </head>

            <body>
                <div class="container">
                    <h2>Transaksi yang Pernah dilakukan</h2>
                    <div class="data-tables datatable-dark">

                        <!-- Masukkan table nya disini, dimulai dari tag TABLE -->
                        <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID Transaksi</th>
                                    <th>Nama Game</th>
                                    <th>UserID</th>
                                    <th>ZoneID</th>
                                    <th>Jumlah Diamond</th>
                                    <th>Alamat Email</th>
                                    <th>Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $username = $_SESSION["username"];
                                $ambilsemuadata = mysqli_query($conn, "SELECT*FROM tbl_transaksi WHERE username='$username';");
                                $i = 1;
                                while ($data = mysqli_fetch_array($ambilsemuadata)) {
                                    $idtransaksi = $data['id_transaksi'];
                                    $UserID = $data['userid'];
                                    $ZoneID = $data['zoneid'];
                                    $diamond = $data['diamond'];
                                    $email = $data['email'];
                                ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?php echo $idtransaksi; ?></td>
                                        <td><?php echo 'Mobile Legend' ?></td>
                                        <td><?php echo $UserID; ?></td>
                                        <td><?php echo $ZoneID; ?></td>
                                        <td><?php echo $diamond; ?></td>
                                        <td><?php echo $email; ?></td>
                                        <td>
                                            <?php
                                            if($diamond==3){
                                                echo 'Rp.1500.00';
                                            }else if($diamond==5){
                                                echo 'Rp.3000.00';
                                            }else if($diamond==12){
                                                echo ' Rp.3688.00';
                                            }else if($diamond==19){
                                                echo ' Rp.5797.00';
                                            }
                                            else if($diamond==28){
                                                echo ' Rp.8436.00';
                                            }
                                            else if($diamond==44){
                                                echo ' Rp.3688.00';
                                            }
                                            else if($diamond==59){
                                                echo ' Rp.3688.00';
                                            }
                                            else if($diamond==85){
                                                echo ' Rp.3688.00';
                                            }
                                            else if($diamond==170){
                                                echo ' Rp.3688.00';
                                            }
                                            else if($diamond==230){
                                                echo ' Rp.3688.00';
                                            }else if($diamond==296){
                                                echo ' Rp.84.360.00';
                                            }
                                            else if($diamond==408){
                                                echo ' Rp.3688.00';
                                            }
                                            else if($diamond==568){
                                                echo ' Rp.3688.00';
                                            }
                                            else if($diamond==875){
                                                echo ' Rp.3688.00';
                                            }
                                            ?>
                                        </td>

                                    </tr>
                                <?php
                                }
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>
                <script>
                    $(document).ready(function() {
                        $('#datatablesSimple').DataTable({
                            dom: 'Bfrtip',
                            buttons: [
                                'excel', 'pdf', 'print'
                            ]
                        });
                    });
                </script>

                <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
                <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
                <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
                <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
                <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>



            </body>

            </html>
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
</php>