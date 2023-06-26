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
      case 'tanggapanL':
        include "tanggapanL.php";
        break;  
      case 'lihat':
        include "lihat_laporan.php";
        break;  
      case 'petugas':
        include "petugas.php";
        break;
      case 'mahasiswa':
        include "mahasiswa.php";
        break;
      case 'laporan':
        include "laporan.php";
        break;
      case 'tanggapan':
        include "tanggapan.php";
        break;  
      case 'tambah_petugas':
        include "tambah_petugas.php";
        break;
      case 'edit_petugas':
        include "edit_petugas.php";
        break;
       case 'riwayat':
        include "riwayat.php";
        break; 
       case 'Lpetugas':
        include "Lpetugas.php";
        break;  
       case 'Lmahasiswa':
        include "Lmahasiswa.php";
        break;  
       case 'Lpengaduan':
        include "Lpengaduan.php";
        break;     
      case 'Ltanggapan':
        include "Ltanggapan.php";
        break;   
      default:
        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
        break;
    }
  }else{
    include "dashboard.php";
  }
 
   ?>