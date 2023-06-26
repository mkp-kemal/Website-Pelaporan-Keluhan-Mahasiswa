<div class="starter-template">
<center>
    <h1 class="lap">Laporan Keluhan Mahasiswa</h1>
    <h5>Universitas Islam Negeri Sunan Gunung Djati Bandung</h5>
    <i>
      <p>Jalan A.H Nasution No. 105, Desa Cipadung</p>
      <p style="margin-top: -15px;">Kec. Cibiru,
        Kota. Kota Bandung,
        Prov. Jawa Barat,
        Kode Pos. 40614
      </p>
    </i>
  </center>
	<hr class="garis"> 
</div>

<?php 
include '../inc/koneksi.php';


?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Laporan Keluhan Mahasiswa</title>

  <link href="../template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="../template/css/sb-admin-2.min.css" rel="stylesheet">
</head>

  <style type="text/css">
    
  #icon-ikiw{

      font-size:70px;

  }

  </style>
  <?php 
include '../inc/koneksi.php';



?>
  <body onload="window.print();">
    <ul class="nav user-menu float-right">
      <li><a href="#" class=""></a></li>
    </ul>





        <div class="container-fluid">
          <div class="">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Keluhan Mahasiswa</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                  <thead class="bg-primary text-light text-center">
                    <tr>
                      <th>No</th>
                      <th>ID Pengaduan</th>
                      <th>Nama Mahasiswa</th>
                      <th>Id Mahasiswa</th>
                      <th>Tanggal Pengaduan</th>
                      <th>Isi Laporan</th>
                      <th>Status</th>
                      <th>Foto</th>
                    </tr>
                  </thead>
                  <?php include '../inc/koneksi.php'; 
            // $query_mysqli = mysqli_query($conn, "SELECT * FROM keluhan ")or die(mysqli_error());
            $query_mysqli = mysqli_query($conn, "SELECT m.nama_mahasiswa, k.*
                                     FROM keluhan k 
                                     JOIN mahasiswa m ON k.id_mahasiswa = m.id_mahasiswa WHERE k.status !='-'") or die(mysqli_error($conn));

            $NO=1;
            while($data = mysqli_fetch_array($query_mysqli)){
            ?>
                  <tbody>
                    <tr>
                    	<td class="text-center"><?php echo $NO; ?></td>
                      <td class="text-center"><?php echo $data['id_keluhan']; ?></td>
                      <td class="text-center">
                  <?php echo $data['nama_mahasiswa']; ?>
                </td>
                      <td class="text-center"><?php echo $data['id_mahasiswa']; ?></td>
                      <td class="text-center"><?php echo $data['tgl_pengaduan']; ?></td>
                      <td class="text-center"><?php echo $data['isi_laporan']; ?></td>
                      <td class="text-center"><?php echo $data['status']; ?></td>
                      <td class="text-center"><img src="../mahasiswa/foto/<?= $data["foto"];?>" width="100"></td>
	                  	
                      	
                         
                      
                    </tr>
                     <?php   
                     $NO++;
                      }
                 ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
          

             



          </div>



   
    <!-- Batas Akhir Content -->
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script> 


    <!-- Datatables.js -->
    <script src="../js/datatables.min.js" type="text/javascript"></script>


  </body>
</html>
