

        <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Petugas</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                	<a href="?page=tambah_petugas" class="btn btn-outline-primary">
  <i class="fas fa-plus"></i> Petugas
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
                      <th>Aksi</th>
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
                      <td class="text-center">
                      <a href="admin.php?page=edit_petugas&id=<?php echo $data['id_petugas']; ?>" class="btn btn-outline-info btn-sm "><i class="fas fa-edit"></a></i>
	                  	<a href="hapus.php?id=<?php echo $data['id_petugas'];?>" class="btn btn-danger btn-sm">
	                    <i class="fas fa-trash"></i>
	                  	</a>
                      	
                         
                      
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
