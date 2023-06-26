<?php
session_start();
unset($_SESSION['nama']);
session_destroy();
session_unset();
header('location:../index.php');
?>