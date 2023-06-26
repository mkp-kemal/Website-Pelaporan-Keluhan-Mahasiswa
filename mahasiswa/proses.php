<?php 

    include '../inc/koneksi.php';

ob_start();


    $tgl  = @$_POST['tgl_pengaduan'];
    $nik  = @$_POST['nik'];
    $isi  = @$_POST['isi_laporan'];
    $st   = 0;
    $ft   = @$_FILES['foto']['name'];
    $file = @$_FILES['foto']['tmp_name'];


if ($tgl==""  ||  $nik==""  ||  $isi=="" ||  $st=="" ||  $ft=="" ) {

?>

<script type="text/javascript">
    alert("Gagal menambahkan");
    window.location.href="?page=riwayat_pengaduan";
</script>

   <?php  

    }

    else
    {

    move_uploaded_file($file, "../masyarakat/foto/".$ft);

    $sql=mysqli_query($conn, "INSERT INTO pengaduan VALUES('','$tgl','$nik','$isi','0', '$ft')");
       
?>
    <script type="text/javascript">
        alert("Berhasil menambahkan");
        window.location.href="?page=riwayat_pengaduan";
    </script>


<?php

}

?>