<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>.::Belajar CRUD Boostrap::.</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
</head>

<body>
	<div class="container col-md-9">
		<div class="card">
			<h3 align="center">Form Add</h3>
			<div class="card-body">
				<a href="index.php" class="btn btn-warning"><-Kembali</a><br><br>
				<form class="form-item" action="" method="post" role="form">
					<div class="form-group">
						<label>ID Kostumer</label>
						<input type="number" class="form-control col-md-4" name="idKustomer" placeholder="isi ID disini">
					</div>
					<div class="form-group">
						<label>Nama Kostumer</label>
						<input type="text" class="form-control col-md-4" name="nmKustomer" placeholder="isi nama disini">
					</div>
					<div class="form-group">
						<label>Telepon Kostumer</label>
						<input type="number" class="form-control col-md-4" name="telp" placeholder="isi telepon disini">
					</div>
					<div class="form-group">
						<label>Alamat Kostumer</label>
						<textarea class="form-control col-md-9" name="alamat" placeholder="Isi Alamat disini"></textarea>
					</div>
					<div class="form-group">
						<label>Kota Kostumer</label>
						<input type="text" class="form-control col-md-4" name="kota" placeholder="isi Kota disini">
					</div>
					<div class="form-group">
						<label>Kode Pos Kostumer</label>
						<input type="text" class="form-control col-md-4" name="kodePos" placeholder="isi Kode Pos disini">
					</div>
					<div class="form-group">
						<button class="btn btn-info" name="submit" type="submit">Simpan</button>
						<button class="btn btn-danger" name="reset" type="reset">Batal</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>

<?php
include "koneksi.php";
if (isset($_POST['submit'])) {
	$idKustomer  = $_POST['idKustomer'];
	$nmKustomer = $_POST['nmKustomer'];
	$telp 			   = $_POST['telp'];
	$alamat 		 = $_POST['alamat'];
	$kota 			  = $_POST['kota'];
	$kodePos 	   = $_POST['kodePos'];

	mysqli_query($koneksi, "INSERT INTO kustomer(idKustomer, nmKustomer, telp, alamat, kota, kodePos) VALUES('$idKustomer', '$nmKustomer', '$telp', '$alamat', '$kota', '$kodePos')");
	header("location:index.php");
}
?>