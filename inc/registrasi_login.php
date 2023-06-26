<?php 
session_start();

if(isset($_SESSION["login"])){
    header("location:../masyarakat/index.php");
    exit;
}
require 'function.php';

if(isset($_POST["login"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $QUERY = mysqli_query($conn,"SELECT * FROM `masyarakat` WHERE `username` ='$username' AND `password` = md5('$password')");
    $HASIL = mysqli_num_rows($QUERY);
    $DATA  = mysqli_fetch_array($QUERY); 

  if ($HASIL==1) {
    $_SESSION['nama'] =$DATA['nama'];
    $_SESSION['nik'] =$DATA['nik'];
    
    $_SESSION["login"] = true;
    
        header("location:../masyarakat/index.php");
}else {
    ?>
     <script type="text/javascript">
     alert("Username atau Password belum terdaftar!");
     window.location.href="login_registrasi.php";
     </script>
     <?php
 }
}
?>

<?php 

if ( isset($_POST["register"])) {
    $nik = trim($_POST['nik']);
    $telp = trim($_POST['telp']);
    $password = trim($_POST['password']);
    if(!preg_match("/^[0-9]*$/", $nik)){
              echo "<script>
                alert('Masukkan NIK dengan benar!');
            </script>";
        }
    if(!preg_match("/^[0-9]*$/", $telp)){
          echo "<script>
              alert('Masukkan NO Hp dengan benar!');
            </script>";
        }

    if ( registrasi ($_POST) > 0 ) {
        ?>
        <script type="text/javascript">
        alert("Berhasil registrasi. Silahkan Login!");
        window.location.href="login_registrasi.php";
        </script>
        <?php
    }else{
        echo mysqli_error($conn);
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
    <title>Registrasi & Login</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form class="sign-up-form" method="post">
            <a href="../index.php" class="social-icon">
              <i class="fa fa-home"></i>
            </a>
            <h2 class="title">Login Masyarakat</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" id="username" required="" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" id="password" required="" />
            </div>
            <input type="submit" value="Login" class="btn solid" name="login" />
            <hr>
          </form>

          <form class="sign-in-form" method="post" >
            <a href="../index.php" class="social-icon">
              <i class="fa fa-home"></i>
            </a>
            <h2 class="title">Registrasi</h2>
            <div class="input-field">
              <i class="fas fa-address-card"></i>
              <input type="text" class="form-control" placeholder="Masukkan NIK sesuai KTP" id="nik" name="nik" required="">
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" class="form-control" placeholder="Nama" id="nama" name="nama" required="">
            </div>
            <div class="input-field">
              <i class="fas fa-user-circle"></i>
              <input type="text" class="form-control" placeholder="Username" id="username" name="username" required="">
            </div>
            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input type="text" class="form-control" placeholder="No Hp" id="telp" name="telp" required="">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" class="form-control" placeholder="Password" id="password" name="password" required="">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" class="form-control" placeholder="Konfirmasi Password" id="password2" name="password2" required="">
            </div>
            <input type="submit" class="btn" value="Registrasi" name="register" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Sudah Punya Akun ?</h3>
            <p>
              Silahkan Login Untuk Melaporakan Pengaduan Anda!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Login
            </button>
          </div>
          <img src="../assets/login/img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Belum Punya Akun ?</h3>
            <p>
              Silahkan Registrasi Terlebih Dahulu Untuk Membuat Akun Baru!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Registrasi
            </button>
          </div>
          <img src="../assets/login/img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="../assets/login/app.js"></script>
  </body>
</html>
