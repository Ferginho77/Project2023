<?php

require 'function.php';
if(isset($_POST["submit"])) {

  if(update($_POST) > 0) {
    echo "<script>alert('Berhasil')</script>";
    header("location:login.php");
  } else {
    echo "<script>alert('Gagal')</script>";
  }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Inter:wght@100&family=Poppins:wght@200&family=Sacramento&family=Work+Sans:ital,wght@0,300;1,200&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Register</title>
</head>
<body> 
<nav class="navbar navbar-expand-lg bg-#292832 text-light">
  <div class="container-fluid text-light ms-auto">
  <img src="img/logo.jpg.png" width="120px" height="80px">
  </div>
</nav>
<div class="container mt-4">
  <h4 style="color:#B0B0B0;">Welcome To DZeert</h4>
  <h2 class="text-light">Lets Create Your Account.</h2>
 
  <div class="register">
   
    <form action="" method="POST">
      <input type="text" name="username" id="username"  placeholder="Username"><br><br>
      <input type="password" name="password" id="password" placeholder="Password"><br><br>
      <input type="name" name="alamat" id="alamat" placeholder="alamat"><br><br>
      <input type="name" name="kode_pos" id="kode_pos" placeholder="kode pos"><br><br>
      <input type="email" name="email" id="email" placeholder="Email"><br><br>
      <input type="name" name="telepon" id="telepon"  placeholder="telepon"><br><br>
      <p class="text-light">Sudah memiliki akun?<a style="color:#D76221" href="login.php">Login</a>sekarang</p>
      <button class="btn" name="submit" type="submit">Register</button>
    
    </form>
  </div>
</div>

</body>
</html>