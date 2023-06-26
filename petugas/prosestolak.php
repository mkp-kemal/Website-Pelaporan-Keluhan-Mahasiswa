<?php 
require '../inc/koneksi.php';

$query_mysqli = mysqli_query($conn, "UPDATE keluhan SET status = 'tolak' WHERE id_keluhan='$_GET[id]' ");
if ($query_mysqli) {
 header('location:petugas.php?page=pengaduan');
}

 ?>