<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: ../inc/login_registrasi.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Halaman Mahasiswa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="icon" href="../lp/assets/images/logo.png" type="image/png">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../lpm/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../lpm/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../lpm/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../lpm/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../lpm/assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="../lpm/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../lpm/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Butterfly - v2.2.1
  * Template URL: https://bootstrapmade.com/butterfly-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <!-- <h3>P P M</h3> -->
      <img src="../lp/assets/images/logoUIN.png" alt="website logo" style="width: 60px; height: 80px;">
      <!-- Uncomment below if you prefer to use text as a logo -->
      <!-- <h1 class="logo mr-auto"><a href="index.html">Butterfly</a></h1> -->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#hero">Home</a></li>
          <li><a href="#pengaduan">Isi Keluhan</a></li>
          <li><a href="#lihat">Riwayat Keluhan</a></li>
          <li><a href="#tanggapan">Tanggapan</a></li>
          <li>
            <a href="../inc/logout.php">Logout</a>
          </li>


        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Selamat Datang
            <?php echo $_SESSION['nama_mahasiswa']; ?>
          </h1>
          <h2>Sekarang anda bisa lebih mudah untuk melaporkan keluhan anda. Tinggal klik laporan akan sampai kepada
            petugas tanpa harus datang ke kantor petugas.</h2>
          <div><a href="#pengaduan" class="btn-get-started scrollto">Tulis Keluhan</a></div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="../lpm/assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= Portfolio Section ======= -->
    <section id="pengaduan">
      <div class="container">

        <div class="section-title">
          <h2>Isi Laporan Keluhan</h2>

        </div>

        <?php
        require '../inc/function.php';

        // cek apakah tombol submit sudah ditekan apa belum
        
        if (isset($_POST["submit"])) {

          // cek apakah data berhasil ditambahkan
          if (tambah($_POST) > 0) {
            echo "
      <script>
        alert('Berhasil melaporkan, keluhan anda akan dikonfirmasi!');
        document.location.href = 'index.php';
      </script>
    ";
          } else {
            echo "
      <script>
        alert('Gagal Melaporkan!');
        document.location.href = 'index.php';
      </script>
    ";
          }

        }

        ?>
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Portal Keluhan</h6>
                </div>
                <div class="card-body">

                  <form role="form" class="form-horizontal style-form" enctype="multipart/form-data" method="post"
                    action="">
                    <div class="form-group">
                      <label>Tanggal</label>
                      <div>
                        <input type="date" id="date" class="form-control" name="tgl_pengaduan" readonly=""
                          value="<?php echo date('Y-m-d'); ?>" required>
                      </div>
                    </div>
                    <div class="form-group has-error">
                      <div class="form-group has-warning">
                        <label>Nim</label>
                        <div>
                          <input type="number" value="<?php echo $_SESSION['nim']; ?>" id="nik" class="form-control"
                            name="nik" readonly>
                        </div>
                      </div>
                    </div>
                    <div class="form-group has-error">
                      <div class="form-group has-warning">
                        <label>Isi Keluhan</label>
                        <div>
                          <textarea id="isi_laporan" class="form-control" name="isi_laporan" required> </textarea>
                        </div>
                      </div>
                    </div>
                    <div class="form-group mb-3 ">
                      <div class="form-group mb-3">
                        <label>Foto</label>
                        <div>
                          <input class="form-control pt-3 pb-5" type="file" id="foto" name="foto"
                            accept=".jpg, .png, .gif, .jpeg" required="">
                          <font color="red">Format file yang bias diupload adalah : .jpg, .jpeg, .png, .gif</font>
                        </div>
                      </div>
                    </div>
                    <div>
                      <button type="submit" class="btn btn-primary" name="submit">Laporkan</button>
                      <input type="reset" class="btn btn-light" value="Reset">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>

      </div>
    </section><!-- End Portfolio Section -->

    <main id="main">


      <!-- ======= Portfolio Section ======= -->
      <section id="lihat">
        <div class="container">

          <div class="section-title">
            <h2>Riwayat Keluhan</h2>

          </div>



          <div class="container-fluid">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Riwayat Keluhan</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary text-light text-center">
                      <tr>

                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nim</th>
                        <th>Keluhan</th>
                        <th>Status</th>
                        <th>Foto</th>
                      </tr>
                    </thead>
                    <?php include '../inc/koneksi.php';

                    $i = 1;

                    $query_mysqli = mysqli_query($conn, "SELECT * FROM keluhan WHERE keluhan.id_mahasiswa='$_SESSION[id_mahasiswa]'") or die(mysqli_error());
                    while ($data = mysqli_fetch_array($query_mysqli)) {
                      ?>
                      <tbody>
                        <tr>
                          <td class="text-center">
                            <?= $i++ ?>
                          </td>
                          <td class="text-center">
                            <?php echo $data['tgl_pengaduan']; ?>
                          </td>
                          <td class="text-center">
                            <?php echo $_SESSION['nim']; ?>
                          </td>
                          <td class="text-center">
                            <?php echo $data['isi_laporan']; ?>
                          </td>
                          <td class="text-center">
                            <?php echo $data['status']; ?>
                          </td>
                          <td class="text-center"><img src="foto/<?= $data["foto"]; ?>" width="80"></td>
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



        </div>

        </div>
      </section><!-- End Portfolio Section -->

      <section id="tanggapan">
        <div class="container">

          <div class="section-title">
            <h2>Tanggapan Keluhan</h2>

          </div>

          <div class="container-fluid">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tanggapan Keluhan</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary text-light text-center">
                      <tr>
                        <th>No</th>
                        <th>Nama Petugas</th>
                        <th>Tanggal ditanggapi</th>
                        <th>Isi Tanggapan</th>
                        <th>Status Tanggapan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <?php include '../inc/koneksi.php';

                    // $query_mysqli = mysqli_query($conn, "SELECT keluhan.*,tanggapan. * FROM keluhan INNER JOIN tanggapan ON tanggapan.id_keluhan = keluhan.id_keluhan WHERE keluhan.id_mahasiswa='$_SESSION[id_mahasiswa]'") or die(mysqli_error());
                    // $query_mysqli = mysqli_query($conn, "SELECT pengaduan.*,tanggapan. * FROM pengaduan INNER JOIN tanggapan ON tanggapan.id_pengaduan = pengaduan.id_pengaduan WHERE pengaduan.nik='$_SESSION[nim]'") or die(mysqli_error());
                    $query_mysqli = mysqli_query($conn, "SELECT keluhan.*, tanggapan.*, petugas.nama_petugas 
                  FROM keluhan 
                  INNER JOIN tanggapan ON tanggapan.id_keluhan = keluhan.id_keluhan
                  INNER JOIN petugas ON tanggapan.id_petugas = petugas.id_petugas") or die(mysqli_error($conn));
                    $no = 1;
                    while ($data = mysqli_fetch_array($query_mysqli)) {
                      ?>
                      <tbody>
                        <tr>
                          <td class="text-center">
                            <?= $no ?>
                          </td>
                          <td class="text-center">
                            <?php echo $data['nama_petugas']; ?>
                          </td>
                          <td class="text-center">
                            <?php echo $data['tanggal_tanggapan']; ?>
                          </td>
                          <td class="text-center">
                            <?php echo $data['tanggapan']; ?>
                          </td>
                          <td class="text-center">
                            <?php echo $data['status']; ?>
                          </td>
                          <td class="text-center">
                            <button type="button" class="btn btn-outline-info btn-sm 
                        " data-toggle="modal" data-target="#detail">Detail Tanggapan
                            </button>


                            <div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="detail"
                              aria-hidden="true">
                              <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="#detail">Detail Tanggapan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form role="form" class="form-horizontal style-form" enctype="multipart/form-data"
                                      method="post" action="">
                                      <div class="form-group text-left">
                                        <!-- <label class="text">No</label>
                                          <div>
                                            <input type="text" class="form-control" readonly=""
                                              value="<?php echo $no; ?>" required>
                                          </div> -->
                                      </div>
                                      <div class="form-group text-left">
                                        <label class="text">Ticket Keluhan</label>
                                        <div>
                                          <input type="text" class="form-control" readonly=""
                                            value="<?php echo $data['id_keluhan']; ?>" required>
                                        </div>
                                      </div>
                                      <div class="form-group text-left">
                                        <label class="text">Nama Petugas</label>
                                        <div>
                                          <input class="form-control" readonly=""
                                            value="<?php echo $data['nama_petugas']; ?>" required>
                                        </div>
                                        <div class="form-group text-left">
                                          <label class="text">Tanggal Tanggapan</label>
                                          <div>
                                            <input class="form-control" readonly=""
                                              value="<?php echo $data['tanggal_tanggapan']; ?>" required>
                                          </div>
                                        </div>
                                        <div class="form-group text-left">
                                          <label class="text">Gambar</label>
                                          <div>
                                            <img class="conten-center" src="foto/<?= $data["foto"]; ?>" width="450">
                                          </div>
                                        </div>
                                        <div class="form-group text-left">
                                          <label class="text">Status Tanggapan</label>
                                          <div>
                                            <input type="text" class="form-control" readonly=""
                                              value="<?php echo $data['status']; ?>" required>
                                          </div>
                                        </div>
                                        <div class="form-group text-left">
                                          <label class="text">Isi Laporan</label>
                                          <div>
                                            <textarea class="form-control" readonly=""
                                              required><?php echo $data['isi_laporan']; ?></textarea>
                                          </div>
                                          <div class="form-group text-left">
                                            <label class="text">Isi Tanggapan</label>
                                            <div>
                                              <textarea class="form-control" readonly=""
                                                required><?php echo $data['tanggapan']; ?></textarea>
                                            </div>

                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-dark"
                                                data-dismiss="modal">Kembali</button>
                                            </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                          </td>
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



        </div>

        </div>
      </section><!-- End Portfolio Section -->

      <!-- ======= Footer ======= -->
      <footer id="footer">

        <div class="container py-4">
          <div class="copyright">
            &copy; Copyright <strong><span>Kelompok 6 Rekayasa Perangkat Lunak</span></strong>. All Rights Reserved
          </div>
          <!-- <div class="credits">
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/butterfly-free-bootstrap-theme/
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div> -->
        </div>
      </footer><!-- End Footer -->

      <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

      <!-- Vendor JS Files -->
      <script src="../lpm/assets/vendor/jquery/jquery.min.js"></script>
      <script src="../lpm/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="../lpm/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
      <script src="../lpm/assets/vendor/php-email-form/validate.js"></script>
      <script src="../lpm/assets/vendor/venobox/venobox.min.js"></script>
      <script src="../lpm/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
      <script src="../lpm/assets/vendor/counterup/counterup.min.js"></script>
      <script src="../lpm/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="../lpm/assets/vendor/owl.carousel/owl.carousel.min.js"></script>

      <!-- Template Main JS File -->
      <script src="../lpm/assets/js/main.js"></script>

</body>

</html>