<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>.::Belajar CRUD Boostrap::.</title>
<link rel="stylesheet"  type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="container col-md-9">
    	<div class="card">
    		<h3 align="center">Belajar Crud</h3>
    		<div class="card-body">
				<a href="add.php" class="btn btn-success">Tambah</a><br><br>
    			<table class="table table-bordered">
    				<thead>
    				<tr>
    					<td>No</td>
    					<td>ID Kustomer</td>
    					<td>Nama Kustomer</td>
    					<td>Telepon Kustomer</td>
    					<td>Alamat Kustomer</td>
    					<td>Kota Kustomer</td>
    					<td>Kode Pos Kustomer</td>
    					<td>Aksi</td>
    				</tr>
	    			</thead>
	    			<tbody>
	    			<?php
						include "koneksi.php";
						$no=1;
						$sql = mysqli_query($koneksi, "SELECT * FROM kustomer order by idKustomer ASC");
						while($data = mysqli_fetch_array($sql)){
					?>
						<td><?= $no++; ?></td>
						<td><?= $data['idKustomer']; ?></td>
						<td><?= $data['nmKustomer']; ?></td>
						<td><?= $data['telp']; ?></td>
						<td><?= $data['alamat']; ?></td>
						<td><?= $data['kota']; ?></td>
						<td><?= $data['kodePos']; ?></td>
						<td>
							<a href="edit.php?id=<?=$data[0];?>">Edit</a>
							|
							<a href="delete.php?id=<?=$data[0];?>">Delete</a>
						</td>
	    			</tbody>
	    			<?php
		    		}
		    		?>
    			</table>
    		</div>
    	</div>
    </div>
</body>
</html>