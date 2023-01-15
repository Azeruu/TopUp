<?php
session_start();
require_once "./koneksi/koneksi.php";

if(isset($_POST['bayar'])){
    $userid=$_POST['userid'];
    $zoneid=$_POST['zoneid'];
    $diamond=$_POST['diamond'];
    $email=$_POST['email'];
    $pembayaran=$_POST['pembayaran'];

    $username = $_SESSION['username'];

    $query = "INSERT INTO tbl_transaksi VALUES( NULL, '$username', '$userid', '$zoneid', '$diamond', '$pembayaran', '$email');";
    $result = mysqli_query($conn, $query);
    // echo(mysqli_error($conn));

    if(mysqli_affected_rows($conn) == 1){
        echo("
        <script>
            alert('Pembelian Berhasil');
            window.location.href='invoice.php';
        </script>
        ");
    }else{
        echo("
        <script>
            alert('Pembelian Gagal');
            window.location.href='halaman_user.php';
        </script>
        ");
    }
}