
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
                      <th>Id Petugas</th>
                      <th>Tanggal Tanggapan</th>
                      <th>Isi Tanggapan</th>
                      <th>Status Tanggapan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <?php include '../inc/koneksi.php'; 
            $query_mysqli = mysqli_query($conn, "SELECT pengaduan.*,tanggapan. * FROM pengaduan INNER JOIN tanggapan ON tanggapan.id_pengaduan = pengaduan.id_pengaduan WHERE pengaduan.nik='$_SESSION[nik]'")or die(mysqli_error());
            while($data = mysqli_fetch_array($query_mysqli)){
            ?>
                  <tbody>
                    <tr>
                      <td class="text-center"><?php echo $data['id_petugas']; ?></td>
                      <td class="text-center"><?php echo $data['tanggal_tanggapan']; ?></td>
                      <td class="text-center"><?php echo $data['tanggapan']; ?></td>
                      <td class="text-center"><?php echo $data['status']; ?></td>
                      <td class="text-center">
                        <button type="button" class="btn btn-outline-info btn-sm 
                        " data-toggle="modal" data-target="#detail">Detail Tanggapan
                        </button>
                        

                          <div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="detail" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="#detail">Detail Tanggapan</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form role="form" class="form-horizontal style-form" enctype="multipart/form-data" method="post" action="">
                                      <div class="form-group text-left">
                                        <label class="text">Id Tanggapan</label>
                                        <div>
                                          <input type="text" class="form-control" readonly="" value="<?php echo $data['id_tanggapan'];?>" required >
                                        </div>
                                      </div>
                                      <div class="form-group text-left">
                                        <label class="text">Id Pengaduan</label>
                                        <div>
                                          <input type="text" class="form-control" readonly="" value="<?php echo $data['id_pengaduan'];?>" required >
                                        </div>
                                      </div>
                                      <div class="form-group text-left">
                                        <label class="text">Id Petugas</label>
                                        <div>
                                          <input class="form-control" readonly="" value="<?php echo $data['id_petugas'];?>" required >
                                      </div>
                                      <div class="form-group text-left">
                                        <label class="text">Tanggal Tanggapan</label>
                                        <div>
                                          <input class="form-control" readonly="" value="<?php echo $data['tanggal_tanggapan'];?>" required >
                                        </div>
                                      </div>
                                      <div class="form-group text-left">
                                        <label class="text">Status Tanggapan</label>
                                        <div>
                                          <input type="text" class="form-control" readonly="" value="<?php echo $data['status'];?>" required >
                                        </div>
                                      </div>
                                      <div class="form-group text-left">
                                        <label class="text">Isi Tanggapan</label>
                                        <div>
                                          <textarea class="form-control" readonly="" required ><?php echo $data['tanggapan'];?></textarea>
                                      </div>
                                      
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-dark" data-dismiss="modal">Kembali</button>
                                      </div>
                                </form>
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
