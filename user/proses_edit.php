<?php
require_once "../koneksi/koneksi.php";

if(isset($_POST["edit"])){
    $id = $_POST["id"];
    $namalengkap = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "UPDATE tbl_user SET nama_lengkap='$namalengkap', username='$username', password='$password' WHERE id_user='$id'";
    $result = mysqli_query($conn, $query);
    if(mysqli_affected_rows($conn) == 1){
        echo ("
        <script>
            alert('Data User Berhasil Diubah');
            window.location.href = '../user.php';
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
} else if(isset($_POST["kembali"])){
    echo ("
    <script>
    window.location.href='../user.php';
    </script>
    ");
}