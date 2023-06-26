<?php 
session_start();

if(isset($_SESSION["login"])){
    header("location:../admin/admin.php");
    exit;
}
require '../inc/function.php';

if(isset($_POST["login"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $QUERY = mysqli_query($conn,"SELECT * FROM `petugas` WHERE `username` ='$username' AND `password` = md5('$password')");
    $HASIL = mysqli_num_rows($QUERY);
    $DATA  = mysqli_fetch_array($QUERY); 

  if ($HASIL==1) {
    if ($DATA['level']=="admin") 
    {
    $_SESSION['id_petugas'] =$DATA['id_petugas'];  
    $_SESSION['user'] =$username;
    $_SESSION['nama'] =$DATA['nama_petugas'];
    $_SESSION['level'] =$DATA['level'];
    
    $_SESSION["login"] = true;
    
        header("location:admin.php");
      }
      else if ($DATA['level']=="petugas") {
       $_SESSION['user'] =$username;
    $_SESSION['nama'] =$DATA['nama_petugas'];
    $_SESSION['level'] =$DATA['level'];
    $_SESSION["login"] = true;
    
    
        header("location:../petugas/petugas.php"); 
      }
}else {
    ?>
     <script type="text/javascript">
     alert("NIP atau Password belum terdaftar!");
     window.location.href="login.php";
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
    <title>Login Admin | Petugas</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form class="sign-in-form" method="post">
            <a href="../index.php" class="social-icon">
              <i class="fa fa-home"></i>
            </a>
            <h2 class="title">Login</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="NIP / Username" name="username" id="username" required="" />
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
              Login sebagai Admin atau Petugas untuk memberikan tanggapan dari keluhan Mahasiswa
            </p>
          </div>
          <img src="../assets/login/img/log.svg" class="image" alt="" />
      </div>
    </div>
    <script src="../assets/login/app.js"></script>
  </body>
</html>
