<?php 
$SERVER="localhost";
$USER="root";
$PASSWORD="";
$DATABASE="db_ukk2021p2khaidar";
	$conn = mysqli_connect($SERVER, $USER, $PASSWORD, $DATABASE);

 if($conn){
  echo "";
 } else{
  echo "Koneksi gagal!" . mysqli_connect_error();
  die();
 }
 ?>