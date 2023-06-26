  <?php 
  if(isset($_GET['page'])){
    $page = $_GET['page'];
 
    switch ($page) {
      case 'tulis_pengaduan':
        include "tulis_pengaduan.php";
        break;
      case 'riwayat_pengaduan':
        include "riwayat_pengaduan.php";
        break;
      case 'tanggapan':
        include "tanggapan.php";
        break;  
      default:
        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
        break;
    }
  }else{
    include "dashboard.php";
  }
 
   ?>