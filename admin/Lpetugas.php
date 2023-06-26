

        <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Petugas</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                	<a href="Lpetugas_print.php" class="btn btn-outline-primary" data-toogle="tooltip" target="_blank">
  <i class="fas fa-fw fa-print"></i> Print
</a><br>
<br>
                  <thead class="bg-primary text-light text-center">
                    <tr>
                      <th>No</th>
                      <th>ID Petugas</th>
                      <th>Nama Petugas</th>
                      <th>Username</th>
                      <th>Telepon</th>
                      <th>Level</th>
                    </tr>
                  </thead>
                  <?php include '../inc/koneksi.php'; 
            $query_mysqli = mysqli_query($conn, "SELECT * FROM petugas ")or die(mysqli_error());
            $no=1;
            while($data = mysqli_fetch_array($query_mysqli)){
            ?>
                  <tbody>
                    <tr>
                      <td class="text-center"><?php echo $no; ?></td>
                      <td class="text-center"><?php echo $data['id_petugas']; ?></td>
                      <td class="text-center"><?php echo $data['nama_petugas']; ?></td>
                      <td class="text-center"><?php echo $data['username']; ?></td>
                      <td class="text-center"><?php echo $data['telp']; ?></td>
                      <td class="text-center"><?php echo $data['level']; ?></td>
                      
                    </tr>
                     <?php   
                     $no++;
                      }
                 ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
