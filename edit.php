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
			<h3 align="center">Form Edit</h3>
			<div class="card-body">
				<a href="index.php" class="btn btn-warning"><-Kembali</a><br><br>
				<?php
					include "koneksi.php";
					$id = $_GET['id'];
					$no = 1;
					$sql = mysqli_query($koneksi, "SELECT * FROM kustomer");
					while ($data = mysqli_fetch_array($sql)) {
				?>
					<form class="form-item" action="" method="post" role="form">
						<div class="form-group">
							<label>ID Kostumer</label>
							<input type="number" class="form-control col-md-4" name="idKustomer" value="<?= $data['idKustomer']; ?>" placeholder="isi ID disini">
						</div>
						<div class="form-group">
							<label>Nama Kostumer</label>
							<input type="text" class="form-control col-md-4" name="nmKustomer" value="<?= $data['nmKustomer']; ?>" placeholder="isi nama disini">
						</div>
						<div class="form-group">
							<label>Telepon Kostumer</label>
							<input type="number" class="form-control col-md-4" name="telp" value="<?= $data['telp']; ?>" placeholder="isi telepon disini">
						</div>
						<div class="form-group">
							<label>Alamat Kostumer</label>
							<textarea class="form-control col-md-9" name="alamat" value="<?= $data['alamat']; ?>" placeholder="Isi Alamat disini"><?= $data['alamat']; ?></textarea>
						</div>
						<div class="form-group">
							<label>Kota Kostumer</label>
							<input type="text" class="form-control col-md-4" name="kota" value="<?= $data['kota']; ?>" placeholder="isi Kota disini">
						</div>
						<div class="form-group">
							<label>Kode Pos Kostumer</label>
							<input type="number" class="form-control col-md-4" name="kodePos" value="<?= $data['kodePos']; ?>" placeholder="isi Kode Pos disini">
						</div>
						<div class="form-group">
							<button class="btn btn-info" name="submit" type="submit">Edit</button>
							<button class="btn btn-danger" name="reset" type="reset">Batal</button>
						</div>
					</form>
				<?php
					}
				?>
			</div>
		</div>
	</div>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
	$idKustomer 	 = $_POST['idKustomer'];
	$nmKustomer 	= $_POST['nmKustomer'];
	$telp 				   = $_POST['telp'];
	$alamat 			 = $_POST['alamat'];
	$kota 				  = $_POST['kota'];
	$kodePos 	 	    = $_POST['kodePos'];

	mysqli_query($koneksi,  "UPDATE kustomer SET nmKustomer = '$nmKustomer', telp = '$telp', alamat = '$alamat',  kota = '$kota', kodePos = '$kodePos' WHERE idKustomer = '$idKustomer'");
	header("location:index.php");
}
?>