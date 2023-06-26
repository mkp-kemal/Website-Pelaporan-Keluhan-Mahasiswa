  <?php 
  if(isset($_GET['page'])){
    $page = $_GET['page'];
 
    switch ($page) {
      case 'tanggapan':
        include "tanggapan.php";
        break;
      case 'detail':
        include "detail.php";
        break;  
      case 'pengaduan':
        include "pengaduan.php";
        break;  
      case 'riwayat':
        include "riwayat.php";
        break;  
      default:
        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
        break;
    }
  }else{
    include "dashboard.php";
  }
 
   ?>