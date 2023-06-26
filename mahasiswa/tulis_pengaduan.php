
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Tulis Laporan Pengaduan</h6>
        </div>
        <div class="card-body">

         <form role="form" class="form-horizontal style-form" enctype="multipart/form-data" method="post" action="proses.php">
            <div class="form-group">
              <label>Tanggal</label>
              <div>
                <input type="date" id="date" class="form-control" name="tgl_pengaduan" readonly="" value="<?php echo date ('Y-m-d'); ?>" required>
              </div>
            </div>
            <div class="form-group has-error">
              <div class="form-group has-warning">
              <label>NIK</label>
                <div>
                  <input type="number" value="<?php echo $_SESSION['nik']; ?>" id="nik" class="form-control" name="nik" readonly >
                </div>
              </div> 
            </div>
            <div class="form-group has-error">
              <div class="form-group has-warning">
              <label>Isi Laporan</label>
                <div>
                  <textarea id="isi_laporan" class="form-control" name="isi_laporan" required> </textarea>
                </div>
              </div> 
            </div>
            <div class="form-group mb-3 ">
              <div class="form-group mb-3">
              <label>Foto</label>
                <div>
                   <input class="form-control pt-3 pb-5" type="file" id="foto" name="foto" accept=".jpg, .png, .gif, .jpeg" required=""> <font color="red">Format file yang bias diupload adalah : .jpg, .jpeg, .png, .gif</font>
                </div>
              </div> 
            </div>
            <div>
              <button class="btn-md btn btn-primary bg-gradient-primary" type="submit">Simpan</button>
              <input type="reset" class="btn btn-light" value="Reset">
            </div>
      </form>
        </div>
      </div>
    </div>
  </div>
</div>
