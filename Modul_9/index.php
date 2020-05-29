<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD Page</title>
</head>
<link rel="stylesheet" type="text/css" href="custom.css">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<body>
	<h1>Form Inputan</h1>
	<form action="insert.php" method="POST">
	<div class="tabel">
		<table>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input class="masukan" type="text" name="nim" placeholder="NIM"></input></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input class="masukan" type="text" name="nama" placeholder="Nama Lengkap"></input></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" value="Laki-laki" name="jk">Laki-laki</input></td>
				<td><input type="radio" value="Perempuan" name="jk">Perempuan</input></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="date" name="ttl" value="<?php echo date('Y-m-d'); ?>"></input></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea class="masukan" name="alamat" placeholder="Masukan Alamat"></textarea></td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td>:</td>
				<td><input class="masukan" type="text" name="telp" placeholder="No. Telp."></input></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><button class="btn-tambah" name="kirim">Input</button></td>
			</tr>
			<tr>
				<td><a href="view.php">Lihat daftar data disini !</a></td>
			</tr>
		</table>
	</div>
	</form>
</body>
</html>