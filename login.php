<?php

require 'function.php';

if(isset($_POST["login"])) {


  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($koneksi, "SELECT * FROM user where 
            username ='$username'");

            //cek username
            if(mysqli_num_rows($result) === 1) {

              //cek password

              $row = mysqli_fetch_assoc($result);
              if(password_verify ($password, $row["password"])) {
                header("location:home.php");
                exit;
              }
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
    <title>Login</title>
</head>
<body> 
<nav class="navbar navbar-expand-lg bg-#292832 text-light">
  <div class="container-fluid text-light ms-auto">
    <img src="img/logo.jpg.png" width="120px" height="80px">
  </div>
</nav>

<div class="container mt-4">
  <h4 style="color:#B0B0B0;">Welcome back</h4>
  <h2 class="text-light">Login To Your Account.</h2>
 
  <div class="login">
   
    <form action="" method="post">
      <input type="text" name="username" id="username" placeholder="Username"><br><br>
  
      <input type="password" name="password" id="password" placeholder="Password"><br><br>
      <p class="text-light">Tidak memiliki akun?<a style="color:#D76221" href="register.php">Register</a>sekarang</p>

      <button class="btn" name="login" type="submit">Login</button>
    
    </form>
  </div>
</div>
</body>
</html>