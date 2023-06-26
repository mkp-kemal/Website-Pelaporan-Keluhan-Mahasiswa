<?php
ob_start();
include '../inc/koneksi.php';

$id_keluhan=$_POST['id_keluhan'];
$tgl=$_POST['tanggal_tanggapan'];
$tanggapan=$_POST['tanggapan'];
$id_petugas=$_POST['id_petugas'];


if ($id_keluhan==""  ||  $tgl==""  ||  $tanggapan=="" ||  $id_petugas==""  ) {

?>

<script type="text/javascript">
	alert("Gagal menanggapi");
    // window.location.href="admin.php?page=lihat";
</script>

   <?php  

    }
    else
    {
    // $sql = mysqli_query($conn, "INSERT INTO tanggapan (id_keluhan, tanggal_tanggapan, tanggapan, id_petugas) VALUES ('$id_keluhan', '$tgl', '$tanggapan', '$id_petugas')");
    $sql=mysqli_query($conn, "INSERT INTO tanggapan SET id_tanggapan='', id_keluhan='$id_keluhan', tanggal_tanggapan='$tgl', tanggapan='$tanggapan', id_petugas='$id_petugas'") or die(mysqli_error($conn));
    $update=mysqli_query($conn, "UPDATE keluhan SET status='selesai' WHERE id_keluhan='$id_keluhan' ");
       
?>
    <script type="text/javascript">
    	alert("Laporan berhasil ditanggapi");
    	window.location.href="admin.php?page=lihat";
    </script>


<?php

}

?>