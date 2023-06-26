<?php 
include '../inc/koneksi.php';

$sql = mysqli_query($conn, "SELECT * FROM pengaduan WHERE nik='$_SESSION[nik]'");
$cek=mysqli_num_rows($sql);

 ?>
          <div class="row pl-3">
           <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-md font-weight-bold text-primary text-uppercase mb-1">Laporan Pengaduan:</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comment fa-4x text-gray-300"></i>
                      <span class="badge badge-danger badge-counter"><?php echo $cek;?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
