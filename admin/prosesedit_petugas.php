<?php
ob_start();
include '../inc/koneksi.php';

$id       = mysqli_real_escape_string($conn, @$_POST['id_petugas']);
$nama           = mysqli_real_escape_string($conn, @$_POST['nama_petugas']);
$un         = mysqli_real_escape_string($conn, @$_POST['username']);
$pw           = mysqli_real_escape_string($conn, @$_POST['password']);
$telp           = mysqli_real_escape_string($conn, @$_POST['telp']);
$lv           = mysqli_real_escape_string($conn, @$_POST['level']);


   if (    

    $id      == "" || 
    $nama     == "" || 
    $un    == "" || 
    $pw    == "" || 
    $telp    == "" || 
    $lv      == "" 



 ) 
{
?>

<script type="text/javascript">
	alert("Gagal Edit Data!");
    window.location.href="admin.php?page=petugas";
</script>
<?php
}
else 
{
  $QUERY = mysqli_query($conn, "UPDATE petugas SET 
    nama_petugas         ='$nama',
    username       ='$un',
    password 			= md5('$pw'),
    telp       ='$telp',
    level       ='$lv'
    WHERE petugas.id_petugas='$id';")
     or die ("Gagal" .mysqli_error($conn));
?>

<script type="text/javascript">
	alert("Berhasil Edit Data!");
    window.location.href="admin.php?page=petugas";
</script>
 
<?php
}
?>