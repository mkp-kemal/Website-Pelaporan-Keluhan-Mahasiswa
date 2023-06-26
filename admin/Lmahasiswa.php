<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <a href="Lmahasiswa_print.php" class="btn btn-outline-primary" data-toogle="tooltip" target="_blank">
          <i class="fas fa-fw fa-print"></i> Print
        </a><br>
        <br>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

          <thead class="bg-primary text-light text-center">
            <tr>
              <th>No</th>
              <th>NIM</th>
              <th>Nama</th>
              <th>Email</th>
              <!-- <th>Telepon</th> -->
            </tr>
          </thead>
          <?php include '../inc/koneksi.php';
          $query_mysqli = mysqli_query($conn, "SELECT * FROM mahasiswa ") or die(mysqli_error());
          $NO = 1;
          while ($data = mysqli_fetch_array($query_mysqli)) {
            ?>
            <tbody>
              <tr>
                <td class="text-center">
                  <?php echo $NO ?>
                </td>
                <td class="text-center">
                  <?php echo $data['nim']; ?>
                </td>
                <td class="text-center">
                  <?php echo $data['nama_mahasiswa']; ?>
                </td>
                <td class="text-center">
                  <?php echo $data['email']; ?>
                </td>
                <!-- <td class="text-center"><?php echo $data['telp']; ?></td> -->
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