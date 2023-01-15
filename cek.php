<?php
//jika belum login 

if (isset($_SESSION['username'])) {
} else {
    header('location:login.php');   
}

?>