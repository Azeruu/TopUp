<?php
session_start();
require 'koneksi/koneksi.php';


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // ambil username dan password dari database
    $data = mysqli_query($conn, "SELECT * FROM tbl_user WHERE username = '$username' && password = '$password'");
    $ambil = mysqli_fetch_array($data);

    //var_dump($ambil["username"]);
    if ($ambil) {
        $_SESSION['username'] = $ambil['username'];
        if (strtolower($ambil["username"]) == "admin") {
            header("location:halaman_admin.php");
        }
        else {
            header("location:halaman_user.php");
        }
    } else {
        echo ("
        <script>
            alert('Username atau Password salah, silahkan coba kembali');
            window.location.href = 'login.php';
        </script>");
    }
}
