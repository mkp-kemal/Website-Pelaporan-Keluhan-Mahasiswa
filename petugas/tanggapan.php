<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Verifikasi Pengaduan</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead class="bg-primary text-light text-center">
            <tr>
              <th>No</th>
              <th>ID Mahasiswa</th>
              <th>Nama Mahasiswa</th>
              <th>ID Keluhan</th>
              <th>Tanggal</th>
              <!-- <th>NIK</th> -->
              <th>Isi Laporan</th>
              <th>Status</th>
              <th>Foto</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <?php include '../inc/koneksi.php';
          // $query_mysqli = mysqli_query($conn, "SELECT * FROM keluhan WHERE status='proses' ")or die(mysqli_error());
          $query_mysqli = mysqli_query($conn, "SELECT keluhan.*, mahasiswa.* FROM keluhan JOIN mahasiswa ON keluhan.id_mahasiswa = mahasiswa.id_mahasiswa WHERE keluhan.status = '-'") or die(mysqli_error($conn));

          $no = 1;
          while ($data = mysqli_fetch_array($query_mysqli)) {
            ?>
            <tbody>
              <tr>
                <td class="text-center">
                  <?php echo $no; ?>
                </td>
                <td class="text-center">
                  <?php echo $data['id_mahasiswa']; ?>
                </td>
                <td class="text-center">
                  <?php echo $data['nama_mahasiswa']; ?>
                </td>
                <td class="text-center">
                  <?php echo $data['id_keluhan']; ?>
                </td>
                <td class="text-center">
                  <?php echo $data['tgl_pengaduan']; ?>
                </td>
                <!-- <td class="text-center"><?php echo $data['nik']; ?></td> -->
                <td class="text-center">
                  <?php echo $data['isi_laporan']; ?>
                </td>
                <td class="text-center">
                  <?php echo $data['status']; ?>
                </td>
                <td class="text-center"><img src="../mahasiswa/foto/<?= $data["foto"]; ?>" width="100"></td>
                <td class="text-center">
                  <a class="btn btn-outline-info" href="" data-toggle="modal" data-target="#logoutModal">
                    Verifikasi
                  </a>
                  <a class="btn btn-outline-danger" href="" data-toggle="modal" data-target="#tolak">
                    Tolak
                  </a>

                  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Yakin untuk memverifikasi?</h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">Silahkan klik Ya jika yakin atau klik Tidak jika tidak yakin.</div>
                        <div class="modal-footer">
                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                          <a class="btn btn-primary" href="proses.php?id=<?php echo $data['id_keluhan']; ?>">Ya</a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="tolak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Yakin untuk menolak keluhan?</h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">Silahkan klik Tolak jika yakin atau klik Tidak jika tidak yakin.</div>
                        <div class="modal-footer">
                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                          <a class="btn btn-danger" href="prosestolak.php?id=<?php echo $data['id_keluhan']; ?>">Tolak</a>
                        </div>
                      </div>
                    </div>
                  </div>
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