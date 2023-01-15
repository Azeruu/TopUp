<?php
require '../koneksi/koneksi.php';
session_start();

$user = mysqli_query($conn, "SELECT * FROM tbl_user");
$user = mysqli_num_rows($user);
$transaksi = mysqli_query($conn, "SELECT * FROM tbl_transaksi");
$transaksi = mysqli_num_rows($transaksi);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Reza's Store</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="halaman_admin.php">Reza's Store</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="../halaman_admin.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="../user.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-sign-in-alt"></i></div>
                            User
                        </a>
                        <a class="nav-link" href="../transaksi.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></i></div>
                            Transaksi
                        </a>
                        <a class="nav-link" href="logout.php">
                            Logout
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as : <?php echo $_SESSION['username']; ?>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <?php

                if (isset($_GET['id'])) {
                    $id = $_GET["id"];

                    $query = "SELECT * FROM tbl_user WHERE id_user='$id';";
                    $result = mysqli_query($conn, $query);
                    $data = mysqli_fetch_array($result);
                }
                ?>

                <html>

                <head>

                </head>

                <body>
                    <form action="./proses_edit.php" method="post">
                        <h5 class="card-header" align="center">Mengubah Data User</h5><br>
                        <div class="card-body" align="center">
                            <div class="form-group">
                                <table>
                                    <input type="text" value=<?= $data['id_user'] ?> name="id" hidden>
                                    <div>
                                        <tr>
                                            <td>
                                                Nama Lengkap <td>:</td><td>
                                                <input name="nama_lengkap" require="required" type="text" placeholder="Nama" value=<?php echo $data['nama_lengkap']; ?>><br>
                                            </td>
                                        </tr>
                                    </div>
                                    <div>
                                        <tr>
                                            <td>
                                                Username <td>:</td><td>
                                                <input name="username" require="required" type="text" placeholder="Username" value=<?php echo $data['username']; ?>><br>
                                            </td>
                                        </tr>
                                    </div>
                                    <div>
                                        <tr>
                                            <td>
                                                password <td>:</td><td>
                                                <input name="password" require="required" type="text" placeholder="Password" value=<?php echo $data['password']; ?> disabled>
                                            </td>
                                        </tr>
                                    </div>
                                </table>
                            </div><br>
                            <button name="kembali" type="submit">Kembali</button>
                            <button name="edit" type="submit">Ubah</button>
                        </div>
                    </form>
                </body>

                </html>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Reza's Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>