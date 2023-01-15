<?php
require 'koneksi/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reza's Store</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script  src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    
</head>
    
<body>
<div id="back">
  <div class="backRight"></div>
  <div class="backLeft"></div>
</div>

<div id="slideBox">
  <div class="topLayer">
<!--Bagian Kiri-->    
    <div class="left">
      <h1 align="center"> Top Up Murah dan Terpercaya Hanya Di <br>Reza's Store </h1>
      <div class="content">
        
        <h2 align="center">Sign Up</h2>
        <form action="./proses_register.php" method="post" >
          <div class="form-group">
            <input name="nama_lengkap" require="required" type="text" placeholder="Nama" />
            <input name="username" require="required" type="text" placeholder="Username" />
            <input name="password" require="required" type="password" placeholder="Password" />
            <input name="password2" require="required" type="password" placeholder="Konfirmasi Password" />
          </div>
          <div class="form-group"></div>
          <div class="form-group"></div>
          <div class="form-group"></div>
          <button id="goLeft" class="off" type="button">Login</button>
          <button name="register" id="register" type="submit">Register</button>
        </form>
      </div>
    </div>
<!--Bagian Kanan    -->
    <div class="right">
      <h1 align="center"> Top Up Murah dan Terpercaya Hanya Di <br>Reza's Store </h1>
      <div class="content">
        <h2 align="center">Login</h2>
        <form action="proses_login.php" method="post" >
          <div class="form-group">
            <input class="form-control" name="username" type="text" placeholder="Username" />                                    
            <input class="form-control" name="password" type="password" placeholder="Password" />
          </div>
          <button id="goRight" type="button" class="off">Register</button>
          <button name="login" id="login" type="submit">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>
  
</body>

</html>