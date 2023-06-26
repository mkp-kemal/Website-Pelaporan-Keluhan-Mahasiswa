<?php
ob_start();
include '../inc/koneksi.php';

$satu=$_POST['nama_petugas'];
$dua=$_POST['username'];
$tiga=$_POST['password'];
$pwenkrips=md5($tiga);
$empat=$_POST['telp'];
$lima=$_POST['level'];


if ($satu==""  ||  $dua==""  ||  $tiga=="" ||  $empat=="" ||  $lima==""  ) {

?>

<script type="text/javascript">
	alert("Gagal menambahkan");
    window.location.href="admin.php?page=petugas";
</script>

   <?php  

    }

    else
    {
    $sql=mysqli_query($conn, "INSERT INTO petugas SET id_petugas='', nama_petugas='$satu', username='$dua', password=md5('$pwenkrips'), telp='$empat', level='$lima'") or die(mysqli_error($conn));
       
?>
    <script type="text/javascript">
    	alert("Berhasil menambahkan");
    	window.location.href="admin.php?page=petugas";
    </script>


<?php

}

?>