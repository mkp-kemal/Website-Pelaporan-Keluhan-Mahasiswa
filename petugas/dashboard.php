<?php
include '../inc/koneksi.php';

$sql = mysqli_query($conn, "SELECT * FROM keluhan");
$cek = mysqli_num_rows($sql);

?>
<div class="row pl-3">
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-md font-weight-bold text-primary text-uppercase mb-1">Laporan dari Mahasiswa:</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-comment fa-4x text-gray-300"></i>
            <span class="badge badge-danger badge-counter">
              <?php echo $cek; ?>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  $sql = mysqli_query($conn, "SELECT * FROM keluhan WHERE status = '-'");
  $cek = mysqli_num_rows($sql);

  ?>
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-md font-weight-bold text-primary text-uppercase mb-1">Perlu Verifikasi:</div>
          </div>
          <div class="col-auto">
            <!-- <i class="fas fa-comment fa-4x text-gray-300"></i> -->
            <i class="fas fa-vote-yea fa-4x text-warning"></i>
            <span class="badge badge-danger badge-counter">
              <?php echo $cek; ?>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  $sql = mysqli_query($conn, "SELECT * FROM keluhan WHERE status = 'proses'");
  $cek = mysqli_num_rows($sql);

  ?>
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-md font-weight-bold text-primary text-uppercase mb-1">Laporan Diproses:</div>
          </div>
          <div class="col-auto">
            <!-- <i class="fas fa-comment fa-4x text-gray-300"></i> -->
            <i class="fas fa-spinner fa-spin fa-4x"></i>
            <span class="badge badge-danger badge-counter">
              <?php echo $cek; ?>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>





  <?php
  $sql = mysqli_query($conn, "SELECT * FROM keluhan WHERE status = 'selesai'");
  $cek = mysqli_num_rows($sql);

  ?>
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-md font-weight-bold text-primary text-uppercase mb-1">Laporan Selesai:</div>
          </div>
          <div class="col-auto">
            <!-- <i class="fas fa-comment fa-4x text-gray-300"></i> -->
            <i class="fas fa-check-circle fa-4x text-success"></i>
            <span class="badge badge-danger badge-counter">
              <?php echo $cek; ?>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php
  $sql = mysqli_query($conn, "SELECT * FROM keluhan WHERE status = 'tolak'");
  $cek = mysqli_num_rows($sql);

  ?>
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-md font-weight-bold text-primary text-uppercase mb-1">Laporan Ditolak:</div>
          </div>
          <div class="col-auto">
            <!-- <i class="fas fa-comment fa-4x text-gray-300"></i> -->
            <i class="fas fa-times-circle fa-4x text-danger"></i>
            <span class="badge badge-danger badge-counter">
              <?php echo $cek; ?>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>