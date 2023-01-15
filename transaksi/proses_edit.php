<?php
require_once "../koneksi/koneksi.php";

if(isset($_POST["edit"])){
    $id = $_POST["id"];
    $username = $_POST['username'];
    $userid = $_POST['userid'];
    $zoneid=$_POST['zoneid'];
    $diamond=$_POST['diamond'];
    $pembayaran=$_POST['pembayaran'];
    $email=$_POST['email'];

    $query = "UPDATE tbl_transaksi SET username='$username', userid='$userid', zoneid='$zoneid', diamond='$diamond' pembayaran='$pembayaran'email='$email'WHERE id_transaksi='$id'";
    $result = mysqli_query($conn, $query);
    if(mysqli_affected_rows($conn) == 1){
        echo ("
        <script>
            alert('Data User Berhasil Diubah');
            window.location.href = '../transaksi.php';
        </script>
    ");
    }else{
        echo ("
        <script>
            alert('Data User Gagal Diubah');
            window.location.href = './edit.php';
        </script>
    ");
    }
}else if(isset($_POST["kembali"])){
    echo ("
    <script>
    window.location.href='../transaksi.php';
    </script>
    ");
}