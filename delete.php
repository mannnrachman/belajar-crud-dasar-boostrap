<?php
include "koneksi.php";

$id = $_GET['id'];
$delete = mysqli_query($koneksi, "DELETE FROM kustomer WHERE idKustomer = '$id'");
header("location:index.php");
?>
