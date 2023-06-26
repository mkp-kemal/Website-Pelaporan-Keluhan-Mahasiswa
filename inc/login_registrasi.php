<?php
require 'function.php';
session_start();

if(isset($_SESSION["login"])){
    header("location:../mahasiswa/index.php");
    exit;
}

if(isset($_POST["login"])){

    $nim = $_POST["nim"];
    $password = $_POST["password"];

    $QUERY = mysqli_query($conn,"SELECT * FROM `mahasiswa` WHERE `nim` ='$nim' AND `password` = md5('$password')");
    $HASIL = mysqli_num_rows($QUERY);
    $DATA  = mysqli_fetch_array($QUERY); 

  if ($HASIL==1) {
    $_SESSION['nama_mahasiswa'] =$DATA['nama_mahasiswa'];
    $_SESSION['nim'] =$DATA['nim'];
    $_SESSION['id_mahasiswa'] =$DATA['id_mahasiswa'];
    
    $_SESSION["login"] = true;
    
        header("location:../mahasiswa/index.php");
}else {
    ?>
     <script type="text/javascript">
     alert("Nim atau Password belum terdaftar!");
     window.location.href="login_registrasi.php";
     </script>
     <?php
 }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../assets/login/style.css" />
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form class="sign-in-form" method="post">
            <a href="../index.php" class="social-icon">
              <i class="fa fa-home"></i>
            </a>
            <h2 class="title">Login Mahasiswa</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nim" name="nim" id="nim" required="" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" id="password" required="" />
            </div>
            <input type="submit" value="Login" class="btn solid" name="login" />
            <hr>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Login</h3>
            <p>
              Login sebagai Mahasiswa untuk melaporkan keluhan anda tentang 
              Kampus Universitas Islam Negeri Sunan Gunung Djati Bandung
            </p>
            <!-- <button class="btn transparent" id="sign-up-btn">
              Registrasi
            </button> -->
          </div>
          <img src="../assets/login/img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Sudah Punya Akun ?</h3>
            <p>
              Silahkan Login Untuk Melaporakan Pengaduan Anda!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Login
            </button>
          </div>
          <img src="../assets/login/img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="../assets/login/app.js"></script>
  </body>
</html>
