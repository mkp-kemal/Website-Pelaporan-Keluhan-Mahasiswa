
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Tanggapi Keluhan</h6>
        </div>
        <div class="card-body">

         <form role="form" class="form-horizontal style-form" enctype="multipart/form-data" method="post" action="proses.php">
            <div class="form-group">
              <label>Id Keluhan</label>
              <div>
                <input type="text" id="id_keluhan" class="form-control" name="id_keluhan" readonly="" value="<?php echo $_GET['id']; ?>" required>
              </div>
            </div>
            <div class="form-group">
              <label>Tanggal Tanggapan</label>
              <div>
                <input type="date" id="tanggal_tanggapan" class="form-control" name="tanggal_tanggapan" readonly="" value="<?php echo date ('Y-m-d'); ?>" required>
              </div>
            </div>
            <div class="form-group has-error">
              <div class="form-group has-warning">
              <label>Isi Tanggapan</label>
                <div>
                  <textarea id="tanggapan" class="form-control" name="tanggapan" required> </textarea>
                </div>
              </div> 
            </div>
            <div class="form-group has-error">
              <div class="form-group has-warning">
              <label>ID Petugas</label>
                <div>
                  <input type="number" value="<?php echo $_SESSION['id_petugas']; ?>" id="id_petugas" class="form-control" name="id_petugas" readonly >
                </div>
              </div> 
            </div>
              <button class="btn-md btn btn-primary bg-gradient-primary" type="submit">Simpan</button>
              <a href="admin.php?page=lihat" class="btn btn-secondary" name="submit">Batal</a>
              <input type="reset" class="btn btn-light" value="Reset">
            </div>
      </form>
        </div>
      </div>
    </div>
  </div>
</div>
