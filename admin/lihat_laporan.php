

        <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tanggapi Laporan Mahasiswa</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead class="bg-primary text-light text-center">
                    <tr>
                      <th>No</th>
                      <th>Id Mahasiswa</th>
                      <th>Tanggal</th>
                      <!-- <th>NIM</th> -->
                      <th>Isi Laporan</th>
                      <th>Status</th>
                      <th>Foto</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <?php include '../inc/koneksi.php'; 
            $query_mysqli = mysqli_query($conn, "SELECT * FROM keluhan WHERE status='proses' ")or die(mysqli_error());
            while($data = mysqli_fetch_array($query_mysqli)){
            ?>
                  <tbody>
                    <?php $nomordiadmin = 1; ?>
                    <tr>
                      <td class="text-center"><?= $nomordiadmin++; ?></td>
                      <td class="text-center"><?php echo $data['id_mahasiswa']; ?></td>
                      <td class="text-center"><?php echo $data['tgl_pengaduan']; ?></td>
                      <!-- <td class="text-center"><?php echo $data['nik']; ?></td> -->
                      <td class="text-center"><?php echo $data['isi_laporan']; ?></td>
                      <td class="text-center"><?php echo $data['status']; ?></td>
                      <td class="text-center"><img src="../mahasiswa/foto/<?= $data["foto"];?>" width="100"></td>
                      <td class="text-center">
                      	<a class="btn btn-outline-primary btn-sm" href="admin.php?page=tanggapan&id=<?php echo $data['id_keluhan']; ?>">Tanggapi Laporan</a>
                      </td>
                    </tr>
                     <?php   
                      }
                 ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
