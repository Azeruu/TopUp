<?php
require_once("../koneksi/koneksi.php");

$id = $_GET["id"];

$query = "DELETE FROM tbl_user WHERE id_user='$id'";
$result = mysqli_query($conn, $query);
if (mysqli_affected_rows($conn) == 1) {
    echo ("
        <script>
            alert('User berhasil dihapus');
            window.location.href = '../user.php';
        </script>
    ");
} else {
    echo ("
    <script>
        alert('User gagal dihapus');
    </script>
");
}
