<?php
require_once("../koneksi/koneksi.php");

$id = $_GET["id"];

$query = "DELETE FROM tbl_transaksi WHERE id_transaksi='$id'";
$result = mysqli_query($conn, $query);
if (mysqli_affected_rows($conn) == 1) {
    echo ("
        <script>
            alert('Data Transaksi berhasil dihapus');
            window.location.href = '../transaksi.php';
        </script>
    ");
} else {
    echo ("
    <script>
        alert('Data Transaksi gagal dihapus');
    </script>
");
}