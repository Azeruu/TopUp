<?php

require 'koneksi/koneksi.php';

if (isset($_POST['register'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if ($password != $password2) {
        echo ("
			<script type='text/javascript'>
				alert('Password tidak sama');
				history.back();
			</script>
		");
    }

    $query = "INSERT INTO tbl_user VALUES(NULL, '$nama_lengkap', '$username', '$password');";
    $result = mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) == 1) {
        echo ("
			<script>
				alert('Registrasi Berhasil');
				window.location.href = './login.php';
			</script>
		");
    } else {
        echo ("
		<script>
			alert('Registrasi Gagal');
			history.back();
		</script>
	");
    }

}
