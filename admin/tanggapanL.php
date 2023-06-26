<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tanggapan</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead class="bg-primary text-light text-center">
            <tr>
              <th>No</th>
              <th>Id Petugas</th>
              <th>Nama Petugas</th>
              <!-- <th>Id Tanggapan</th> -->
              <th>Id Keluhan</th>
              <th>Tanggal Tanggapan</th>
              <th>Gambar</th>
              <th>Status Tanggapan</th>
              <th>Isi Laporan</th>
              <th>Isi Tanggapan</th>
            </tr>
          </thead>
          <?php include '../inc/koneksi.php';
          $query_mysqli = mysqli_query($conn, "SELECT keluhan.*, tanggapan.*, petugas.nama_petugas 
                  FROM keluhan 
                  INNER JOIN tanggapan ON tanggapan.id_keluhan = keluhan.id_keluhan
                  INNER JOIN petugas ON tanggapan.id_petugas = petugas.id_petugas") or die(mysqli_error($conn));

          // $query_mysqli = mysqli_query($conn, "SELECT keluhan.*,tanggapan. * FROM keluhan INNER JOIN tanggapan ON tanggapan.id_keluhan = keluhan.id_keluhan")or die(mysqli_error());
          $no = 1;
          while ($data = mysqli_fetch_array($query_mysqli)) {
            ?>
            <tbody>
              <tr>
                <td class="text-center">
                  <?php echo $no; ?>
                </td>
                <td class="text-center">
                  <?php echo $data['id_petugas']; ?>
                </td>
                <td class="text-center">
                  <?php echo $data['nama_petugas']; ?>
                </td>
                <!-- <td class="text-center"><?php echo $data['id_tanggapan']; ?></td> -->
                <td class="text-center">
                  <?php echo $data['id_keluhan']; ?>
                </td>
                <td class="text-center">
                  <?php echo $data['tanggal_tanggapan']; ?>
                </td>
                <td class="text-center"><img src="../mahasiswa/foto/<?= $data["foto"]; ?>" width="80"></td>
                <td class="text-center">
                  <?php echo $data['status']; ?>
                </td>
                <td class="text-center">
                  <?php echo $data['isi_laporan']; ?>
                </td>
                <td class="text-center">
                  <?php echo $data['tanggapan']; ?>
                </td>
              </tr>
            <?php
          }
          $no++;
          ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->