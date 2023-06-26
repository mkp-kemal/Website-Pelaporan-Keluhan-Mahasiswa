<?php 

ob_start();
include '../inc/koneksi.php';

$del = mysqli_query($conn,"DELETE FROM petugas WHERE id_petugas = '$_GET[id]'")

or die(mysqli_error($conn));

if($del){
			echo '<script>alert("Berhasil menghapus data."); document.location="admin.php?page=petugas";</script>';
		}else{
			echo '<script>alert("Gagal menghapus data."); document.location="admin.php?page=petugas";</script>';
		}

 ?>