
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Petugas</h6>
        </div>
        <div class="card-body">

         <form role="form" class="form-horizontal style-form" enctype="multipart/form-data" method="post" action="prossestambah_petugas.php">
            <div class="form-group">
              <label>Nama Petugas</label>
              <div>
                <input type="text" id="id_pengaduan" class="form-control" name="nama_petugas">
              </div>
            </div>
            <div class="form-group">
              <label>NIP/Username</label>
              <div>
                <input type="text" id="username" class="form-control" name="username">
              </div>
            </div>
            <div class="form-group has-error">
              <div class="form-group has-warning">
              <label>Password</label>
                <div>
                  <input type="text" class="form-control" name="password" >
                </div>
              </div> 
            </div>
            <div class="form-group has-error">
              <div class="form-group has-warning">
              <label>Telepon</label>
                <div>
                  <input type="number" class="form-control" name="telp" >
                </div>
              </div> 
            </div>
            <div class="form-group has-warning">
                  <label>Level</label>
                  <div>
                    <select class="form-control show-tick" name="level">
                  <option>----- Pilih Level -----</option>
                  <option value="Admin">Admin</option>
                  <option value="Petugas">Petugas</option>
                 </select>
                    <p class="help-block"></p>
                  </div>
                </div>
              <button class="btn-md btn btn-primary bg-gradient-primary" type="submit">Simpan</button>
              <a href="admin.php?page=petugas" class="btn btn-secondary" name="submit">Batal</a>
              <input type="reset" class="btn btn-light" value="Reset">
            </div>
      </form>
        </div>
      </div>
    </div>
  </div>
</div>
