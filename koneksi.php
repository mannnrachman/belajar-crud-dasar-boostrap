<?php
$koneksi = mysqli_connect("localhost", "root", "", "penjualan_barang");
if (mysqli_connect_errno()) {
	echo "Koneksi Gagal :" . mysqli_connect_errno();
}
?>